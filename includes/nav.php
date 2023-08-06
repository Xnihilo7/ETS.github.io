<?php

  function nav_url($query_name) {
    $link = (isset($_GET['first_name']) && isset($_GET['last_name'])) ?
      '?first_name=' . $_GET['first_name'] . '&last_name=' . $_GET['last_name'] . '&' . $query_name:
      '?' . $query_name;

    return $link;
  }

?>
<div class="logo">
        <a href="<?php echo nav_url('home');?>">
            <img src="./resources/images/logo2.png" alt="Logo">
        </a>
</div>
<div class="account">
<a href="<?php echo nav_url('login');?>"><img src="./resources/images/account.png" alt="Account">Account</a>
</div>
<nav>
    <ul>
        <li><a href="<?php echo nav_url('timer');?>">Time Tracker</a></li>
        <li><a href="<?php echo nav_url('calendar');?>">Calendar</a></li>
        <li><a href="<?php echo nav_url('dashboard');?>">Dashboard</a></li>
    </ul>
</nav>
