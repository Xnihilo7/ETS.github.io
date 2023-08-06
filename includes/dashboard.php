
<?php
include './includes/display_results_table.php';
include './includes/db.php';
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
    <h1>Welcome to your dashboard, <?php echo $firstname . ' ' . $lastname; ?></h1>
    <h1>EmployeeID: <?php echo $employeeID; ?></h1>


<div class="other">
    <h3><br>Current Shifts (Last 7 Days):</h3>
    <?php
    $sql = "
    SELECT start_time AS 'Start Time', end_time AS 'End Time', duration AS 'Hours Worked'
    FROM hours
    WHERE employee_id = $employeeID AND date >= DATE_SUB(CURDATE(), INTERVAL 7 DAY);
    ";

    $get_names = mysqli_query($conn, $sql);
    echo display_results_table($get_names);
    ?>
</div>

<div class="other">
    <h3><br>Current Projects:</h3>
    <?php
    $sql = "SELECT j.job_id AS 'Job ID', j.start_date AS 'Start Date', j.end_date AS 'End Date', j.budget AS 'Budget (USD)', job_name AS 'Job Name'
            FROM hours h
            JOIN jobs j ON h.job_id = j.job_id 
            WHERE h.employee_id = $employeeID";
    $get_names = mysqli_query($conn, $sql);
    echo display_results_table($get_names);
    ?>
</div>

</div>
</div>
</div>
<div class="graphic">
<p><strong>Hey <?php echo $firstname . ','?> </strong> <br>Got any questions about the site?<br>Shoot us an email and let us know! </p>
  <div class="advert">
    <button style="border-style: solid; border-width: 2px; border-color: black;" onclick="window.location.href='mailto:jcifonie@liberty.edu';">Contact</button>
    <img src="./resources/images/boo.png" alt="Ghost" class="ghost-image">
  </div>
  </div>