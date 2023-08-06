var timerId;
var startTime;
var duration = 0;
var isTimerRunning = false;

function startTimer() {
  startTime = new Date().getTime();
  timerId = setInterval(updateTimer, 1000);
  isTimerRunning = true;

  document.getElementById("startBtn").disabled = true;
  document.getElementById("stopBtn").disabled = false;

  document.getElementById("startDateTime").value = new Date().toISOString();
  document.getElementById("stopDateTime").value = "";
  document.getElementById("duration").value = "";
  document.getElementById("saveBtn").disabled = false;

  return false;
}

function stopTimer() {
  if (isTimerRunning) {
    clearInterval(timerId);
    isTimerRunning = false;

    document.getElementById("startBtn").disabled = false;
    document.getElementById("stopBtn").disabled = true;

    // Calculate the total duration 
    var stopTime = new Date().getTime();
    var elapsedTime = stopTime - startTime;
    duration += elapsedTime;

    // Log the times
    var startDateTime = new Date(startTime);
    var stopDateTime = new Date(stopTime);
    console.log("Start Time: " + startDateTime);
    console.log("Stop Time: " + stopDateTime);
    console.log("Duration: " + duration + " milliseconds");

    // Set the hidden form field values
    document.getElementById("stopDateTime").value = stopDateTime.toISOString();
    document.getElementById("duration").value = duration;
    document.getElementById("saveBtn").disabled = false;

    //Reset the timer 
    document.getElementById("timerDisplay").innerText = formatDuration(duration);
  }

  return false;
}

function updateTimer() {
  if (isTimerRunning) {
    var currentTime = new Date().getTime();
    var elapsedTime = currentTime - startTime;

    var hours = Math.floor((elapsedTime / (1000 * 60 * 60)) % 24);
    var minutes = Math.floor((elapsedTime / (1000 * 60)) % 60);
    var seconds = Math.floor((elapsedTime / 1000) % 60);

    var timerDisplay =
      hours.toString().padStart(2, "0") +
      ":" +
      minutes.toString().padStart(2, "0") +
      ":" +
      seconds.toString().padStart(2, "0");

    document.getElementById("timerDisplay").innerText = timerDisplay;
  }
}

function formatDuration(duration) {
  var seconds = Math.floor((duration / 1000) % 60);
  var minutes = Math.floor((duration / (1000 * 60)) % 60);
  var hours = Math.floor((duration / (1000 * 60 * 60)) % 24);

  return (
    hours.toString().padStart(2, "0") +
    ":" +
    minutes.toString().padStart(2, "0") +
    ":" +
    seconds.toString().padStart(2, "0")
  );
}

// Event listeners for buttons
document.getElementById("startBtn").addEventListener("click", startTimer);
document.getElementById("stopBtn").addEventListener("click", stopTimer);
