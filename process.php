<!DOCTYPE html>
<html>
<head>
  <title>Timer System - Process</title>
</head>
<body>
  <?php
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $employeeID = $_POST["EmployeeID"];
    $projectID = $_POST["projectID"];
    $startDateTime = $_POST["startDateTime"];
    $stopDateTime = $_POST["stopDateTime"];
    $duration = $_POST["duration"];

    // Format the variables 
    $startTimeFormatted = formatTime($startDateTime);
    $endTimeFormatted = formatTime($stopDateTime);
    $durationFormatted = formatDuration($duration);
    $dateFormatted = formatDate($startDateTime);

    // Function to format time 
    function formatTime($time) {
      $timeParts = explode("T", $time)[1];
      $timeWithoutMilliseconds = substr($timeParts, 0, 8);
      return $timeWithoutMilliseconds;
    }

    // Function to format duration 
    function formatDuration($duration) {
      $milliseconds = (int)$duration;
      $seconds = floor($milliseconds / 1000);
      $hours = floor($seconds / 3600);
      $minutes = floor(($seconds % 3600) / 60);
      $seconds = $seconds % 60;

      $formattedDuration = sprintf("%02d:%02d:%02d", $hours, $minutes, $seconds);
      return $formattedDuration;
    }

    // Function to format date 
    function formatDate($dateTime) {
      $dateParts = explode("T", $dateTime)[0];
      return $dateParts;
    }
    ?>

    <h2>Entry Details:</h2>
    <p><strong>Employee ID:</strong> <?php echo $employeeID; ?></p>
    <p><strong>Job ID:</strong> <?php echo $projectID; ?></p>
    <p><strong>Start Time:</strong> <?php echo $startTimeFormatted; ?></p>
    <p><strong>End Time:</strong> <?php echo $endTimeFormatted; ?></p>
    <p><strong>Duration:</strong> <?php echo $durationFormatted; ?></p>
    <p><strong>Date:</strong> <?php echo $dateFormatted; ?></p>

  <?php
  }
  ?>
</body>
</html>
