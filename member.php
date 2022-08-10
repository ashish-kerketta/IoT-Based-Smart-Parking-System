<?php

    session_start();

    if(isset($_SESSION['user_id']) =="") {
        header("Location: login.php");
    }

?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://i.icomoon.io/public/temp/d3a8c9b913/UntitledProject/style.css">

<meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="style.css">

</head>
<body>
<div class="window">
  <div class="header">
    <div class="burger-container">
      <div id="burger">
        <div class="bar topBar"></div>
        <div class="bar btmBar"></div>
      </div>
    </div>
    <div style="width:fit-content;" class="icon icon-apple">Smart Parking System</div>
    <ul class="menu"><br>
      <li class="menu-item"><a href="dashboard.php">Dashboard</a></li>
      <li class="menu-item"><a href="booking.php">Booking</a></li>
      <li class="menu-item"><a href="token.php">Token</a></li>
      <li class="menu-item"><a href="member.php">Member</a></li>
      <li class="menu-item"><a href="profile.php">Profile</a></li>
      <li class="menu-item"><a href="logout.php">Logout</a></li>
    </ul>
    <div class="shop icon icon-bag"></div>
  </div>
  <div class="content"> 
    <div>
        <h2>Member</h2>
        <div style="padding:5%; margin:1%; border:1px solid black; border-style: groove;">
          <a href='https://rzp.io/i/AOCk9blTj'><button>Subscribe</button></a>
        </div>
    </div>
  </div>
</div>
  <script  src="./script.js"></script> 

</body>
</html>
