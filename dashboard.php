<?php

    session_start();
    require_once "db.php";
    if(isset($_SESSION['user_id']) =="") {
        header("Location: login.php");
    }

    $sql = "SELECT * FROM bookings WHERE user_id = '" . $_SESSION['user_id']. "' ORDER BY date DESC;";

    $results = mysqli_query($conn, $sql);
    // foreach ($results as $row) {
    //   echo $row['id'];
    //   echo "<br>";
    // }
    // print_r($results);

?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://i.icomoon.io/public/temp/d3a8c9b913/UntitledProject/style.css">

<meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="style.css">
<style>
.alert {
  padding: 5px;
  background-color: #007bff;
  /* color: white; */
}

.closebtn {
  margin: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>
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
  <div>
    <h2>Check</h2>
    <div style="padding:5%; margin:1%; border:1px solid black; border-style: groove;">
    <a href="booking.php"><button class="btn btn-primary">Booking</button></a>
    <button class="btn btn-primary">Token</button>
  </div>
  </div>  
  <div>
        <h2 style="padding-top:50%;">Previous Booking</h2>
        <div style="padding:5%; margin:1%; border:1px solid black; border-style: groove;">
          <?php foreach ($results as $row) {  ?>

          <div class="booking-detail-card">
            <div class="top-container">
              <div class="slot-container"><?php echo $row['slot'] ?></div>
              <div class="time-details-container">
                <div class="time"><span class="label">Zone:</span> <?php echo $row['zone'] ?></div>
                <div class="time"><span class="label">Time:</span> <?php echo $row['time'] ?></div>
                <div class="hour"><span class="label">Hour:</span> <?php echo $row['hours'] ?> Hr</div>
                <div class="date"><span class="label">Date:</span> <?php echo $row['date'] ?></div>
              </div>  
            </div>
            <hr>
            <div class="bottom-container"><span class="label">Amount: &nbsp;</span> <?php echo $row['amount'] ?> RS</div>
          </div>

          <br>
          <?php  } ?>


        </div>
    </div>
    <div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <p>Become member to get benifits.</p>
  <strong><a href='member.php'>Subscribe Now</a></strong>
</div>
  </div>
</div>
  <script  src="./script.js"></script>

</body>
</html>
