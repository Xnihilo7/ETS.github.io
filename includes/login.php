<html>
<link rel="stylesheet" href="./resources/style.css">
<div class="container">
<?php
session_start();

if (isset($_POST['submit'])) {
    $firstname = trim($_POST['firstname']);
    $lastname = trim($_POST['lastname']);
    $employeeID = trim($_POST['EmployeeID']);

    if ($firstname == 'Eric' && $lastname == 'Straw') {
        echo 'Welcome to HourHero, Professor!';
    } else {
        echo 'Welcome to HourHero, ' . $firstname . ' ' . $lastname . '!';
    }

    $_SESSION['firstname'] = $firstname;
    $_SESSION['lastname'] = $lastname;
    $_SESSION['EmployeeID'] = $employeeID;
}
?>

<form method="post" action="">
    <br>
    <label for="firstname">First Name:</label>
    <input type="text" name="firstname" required>
    <br><br>
    <label for="lastname">Last Name:</label>
    <input type="text" name="lastname" required>
    <br><br>
    <label for="EmployeeID">Employee ID:</label>
    <input type="text" id="EmployeeID" name="EmployeeID" required>
    <br><br>
    <input type="submit" name="submit" value="Submit" id="submit">
</form>
</div>
<div class="graphic">
<p><strong>Hello there!</strong> <br>Got any questions about the site?<br>Shoot us an email and let us know! </p>
  <div class="advert">
    <button style="border-style: solid; border-width: 2px; border-color: black;" onclick="window.location.href='mailto:jcifonie@liberty.edu';">Contact</button>
    <img src="./resources/images/boo.png" alt="Ghost" class="ghost-image">
  </div>
  </div>
</html>