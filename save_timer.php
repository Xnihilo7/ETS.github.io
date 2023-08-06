<?php
// Retrieve the timer data from the AJAX request
$projectName = $_POST['projectName'];
$startTime = $_POST['startTime'];
$endTime = $_POST['endTime'];

// Connect to the database (replace with your database credentials)
$host = "localhost";
$username = "root";
$password = "";
$dbname = "Capstone";

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and execute the SQL statement to insert timer data
$stmt = $conn->prepare("INSERT INTO timers (project_name, start_time, end_time) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $projectName, $startTime, $endTime);
$stmt->execute();

$stmt->close();
$conn->close();
?>
