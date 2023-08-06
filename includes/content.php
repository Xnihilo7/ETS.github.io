<section>

  <?php

    if (isset($_GET['login'])) {
        include 'login.php';
    } else if (isset($_GET['signup'])) {
        include 'signup.php';
    } else if (isset($_GET['dashboard'])) {
        include 'dashboard.php';
    } else if (isset($_GET['reports'])) {
        include 'reports.php';
    } else if (isset($_GET['home'])) {
        include 'home.php';
    } else if (isset($_GET['timer'])) {
        include 'timer.php';
    } else if (isset($_GET['calendar'])) {
        include 'calendar.php';
    } else if (isset($_GET['projects'])) {
        include 'projects.php';
    } else if (isset($_GET['test'])) {
        include 'test.php';
    } 
  ?>

</section>