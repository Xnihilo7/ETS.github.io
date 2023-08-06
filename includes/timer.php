<!DOCTYPE html>
<html>
<head>
  <title>Timer System</title>
  <style>
    #timerDisplay {
      font-size: 24px;
      font-weight: bold;
    }
  </style>
</head>
<body>
<div class="container">
  <h1>HourHero Tracker</h1>
  <p>Keep track of your time spent on jobs here. <br>
  Start by entering your employee ID and Project ID, then hit start.<br>
  After you've stopped the timer, press save to display the entry details!<br><br></p>
  <br>

  <?php
  session_start();

  if (isset($_SESSION['firstname']) && isset($_SESSION['lastname']) && isset($_SESSION['EmployeeID'])) {
      $firstname = $_SESSION['firstname'];
      $lastname = $_SESSION['lastname'];
      $employeeID = $_SESSION['EmployeeID'];
  } else {
      header('Location: ./includes/login.php');
      exit();
  }

  include './includes/db.php';

  function formatTime($time) {
    $timeParts = explode("T", $time)[1];
    $timeWithoutMilliseconds = substr($timeParts, 0, 8);
    return $timeWithoutMilliseconds;
  }

  function formatDuration($duration) {
    $seconds = floor($duration / 1000);
    $hours = floor($seconds / 3600);
    $minutes = floor(($seconds % 3600) / 60);
    $seconds = $seconds % 60;

    $formattedDuration = sprintf("%02d:%02d:%02d", $hours, $minutes, $seconds);
    return $formattedDuration;
  }

  function formatDate($dateTime) {
    $dateParts = explode("T", $dateTime)[0];
    return $dateParts;
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the data
    $employeeID = $_POST["EmployeeID"];
    $projectID = $_POST["projectID"];
    $startDateTime = $_POST["startDateTime"];
    $stopDateTime = $_POST["stopDateTime"];
    $duration = $_POST["duration"];

    //Format 
    $startTimeFormatted = formatTime($startDateTime);
    $endTimeFormatted = formatTime($stopDateTime);
    $durationFormatted = formatDuration($duration);
    $dateFormatted = formatDate($startDateTime);

    // Generate the SQL prompt
    $sqlPrompt = "INSERT INTO hours (date, duration, start_time, end_time, employee_id, job_id) VALUES ('" .
      $dateFormatted . "', '" .
      $durationFormatted . "', '" .
      $startTimeFormatted . "', '" .
      $endTimeFormatted . "', " .
      $employeeID . ", " .
      $projectID .
      ")";

    // Execute the query
    $result = mysqli_query($conn, $sqlPrompt);
    
    // Print the report
    echo "<div id='timerReport'>";
    echo "<h2>Entry Details:</h2>";
    echo "<p><strong>Employee ID:</strong> " . $employeeID . "</p>";
    echo "<p><strong>Job ID:</strong> " . $projectID . "</p>";
    echo "<p><strong>Start Time:</strong> " . $startTimeFormatted . "</p>";
    echo "<p><strong>End Time:</strong> " . $endTimeFormatted . "</p>";
    echo "<p><strong>Duration:</strong> " . $durationFormatted . "</p>";
    echo "<p><strong>Date:</strong> " . $dateFormatted . "</p>";
    //echo "<p><strong>SQL Prompt:</strong> " . $sqlPrompt . "</p>";
    echo "</div>";
  }
  ?>

  <form id="timerForm" method="post" action="">
    <label for="EmployeeID">Employee ID:</label>
    <input type="text" id="EmployeeID" name="EmployeeID" required value="<?php echo $employeeID; ?>">

    <br><br>
    <label for="projectID">Project ID:</label>
    <input type="text" id="projectID" name="projectID" required>
    <br><br>
    <button id="startBtn" type="button" onclick="startTimer()">Start</button>
    <button id="stopBtn" type="button" onclick="stopTimer()" disabled>Stop</button>
    <input type="hidden" id="startDateTime" name="startDateTime" value="">
    <input type="hidden" id="stopDateTime" name="stopDateTime" value="">
    <input type="hidden" id="duration" name="duration" value="">
    <input type="submit" value="Save" id="saveBtn" disabled>
  </form>

  <div id="timerDisplay"></div>
</div>


<div class="graphic">
<p><strong>Hey <?php echo $firstname . ','?> </strong> <br>check out your dashboard here to see your work records! </p>
  <div class="advert">
    <button style="border-style: solid; border-width: 2px; border-color: black;" onclick="window.location.href='<?php echo nav_url('dashboard');?>';">Dashboard</button>
    <img src="./resources/images/boo.png" alt="Ghost" class="ghost-image">
  </div>
  </div>


<script src="./resources/timer.js"></script>
<script>
  var startBtn = document.getElementById("startBtn");
  var stopBtn = document.getElementById("stopBtn");
  var saveBtn = document.getElementById("saveBtn");

  var startDateTimeInput = document.getElementById("startDateTime");
  var stopDateTimeInput = document.getElementById("stopDateTime");
  var durationInput = document.getElementById("duration");

  var startTime, stopTime, duration;

  function startTimer() {
    startTime = new Date();
    startDateTimeInput.value = startTime.toISOString();
    startBtn.disabled = true;
    stopBtn.disabled = false;
  }

  function stopTimer() {
  clearInterval(timerInterval); 
  stopDateTime = new Date().toISOString(); 
  document.getElementById("stopDateTime").value = stopDateTime; 
  document.getElementById("saveBtn").disabled = false; 
}

  document.getElementById("timerForm").addEventListener("submit", function(event) {
    event.preventDefault();
    startBtn.disabled = false;
    stopBtn.disabled = true;
    saveBtn.disabled = true;
    var form = event.target;
    form.submit();
  });
</script>
</body>
</html>
