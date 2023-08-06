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
?>
<div class="container">
    <div class="calendar">
        <h1>Calendar</h1>
        <p>Welcome to your calendar, <?php echo $firstname . ' ' . $lastname; ?><br>This calendar is hosted by Google.com and can be synced to your existing account!</p>
        <iframe src="https://calendar.google.com/calendar/embed?height=800&wkst=1&bgcolor=%23ffffff&ctz=America%2FChicago&title=Google%20Calendar" 
            style="border-width:0; border-radius: 10px;" 
            width="1200" 
            height="800" 
            frameborder="0" 
            scrolling="no">
        </iframe>
    </div>
</div>
<div class="graphic">
<p><strong>Hey <?php echo $firstname . ','?> </strong> <br>Got any questions about the site?<br>Shoot us an email and let us know! </p>
  <div class="advert">
    <button style="border-style: solid; border-width: 2px; border-color: black;" onclick="window.location.href='mailto:jcifonie@liberty.edu';">Contact</button>
    <img src="./resources/images/boo.png" alt="Ghost" class="ghost-image">
  </div>
  </div>
