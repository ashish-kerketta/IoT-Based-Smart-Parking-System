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
  <title>CodePen - Apple style mobile menu</title>
  <link rel="stylesheet" href="https://i.icomoon.io/public/temp/d3a8c9b913/UntitledProject/style.css">

<meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="./style.css">

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
      <li class="menu-item"><a href="payment.php">Payment</a></li>
      <li class="menu-item"><a href="profile.php">Profile</a></li>
      <li class="menu-item"><a href="logout.php">Logout</a></li>
    </ul>
    <div class="shop icon icon-bag"></div>
  </div>
  <div class="content"> 
    <h2 style="font-weight: bold;"> User Profile</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                  <div style="padding:5%; margin:1%; border:1px solid black; border-style: groove;" class="card-body">
                    <p class="card-text">ID :- <?php echo $_SESSION['user_id']?></p>
                    <p class="card-title">Name :- <?php echo $_SESSION['user_name']?></p>
                    <p class="card-text">Email :- <?php echo $_SESSION['user_email']?></p>
                    <p class="card-text">Mobile :- <?php echo $_SESSION['user_mobile']?></p>
                    <p class="card-text">Vehicle No. :- <?php echo $_SESSION['user_mobile']?></p>
                    <p class="card-text">License No. :- <?php echo $_SESSION['user_mobile']?></p>
                    <a href="editprofile.php" class="btn btn-primary">Edit</a>
                  </div>
                </div>
            </div>
        </div>       
    </div>
  </div>
</div>
  <script  src="./script.js"></script>

</body>
</html>
