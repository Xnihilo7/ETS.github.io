<?php

	ini_set('display_errors', 'On');
  error_reporting(E_ALL);

	include './includes/db.php';
  
?>

<!DOCTYPE html>
<html>
<head>
  
  <meta charset="UTF-8">  
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="./resources/timer.js"></script>
  <link rel="stylesheet" type="text/css" href="./resources/styles.css">

  <title>Time Tracking System</title>

</head>
<body>

  <?php include("./includes/header.php"); ?>
  <?php include("./includes/content.php"); ?>
  <?php include("./includes/footer.php"); ?>

</body>
</html>
