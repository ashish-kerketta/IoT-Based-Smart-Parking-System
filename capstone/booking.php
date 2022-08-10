<?php

    session_start();

    if(!isset($_SESSION['user_id'])) {
        header("Location: login.php");
    }

    if(isset($_GET['result'])){
      if($_GET['result'] == "success"){
        echo '<script>alert("Successfully Booked Slot...");</script>';
      }
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
                <li class="menu-item"><a href="payment.php">Payment</a></li>
                <li class="menu-item"><a href="profile.php">Profile</a></li>
                <li class="menu-item"><a href="logout.php">Logout</a></li>
            </ul>
            <div class="shop icon icon-bag"></div>
        </div>
        
        <div class="content"> 
            <h3 style="font-weight: bold;">Choose Parking Slot</h3>
            
            <form action="insertBooking.php" method="POST">
                <label for="date">Select Date:</label>
                    <input type="date" id="date" name="date">
                    <br><br>
                <label for="appt">Start Time:</label>
                    <input type="time" id="appt" name="appt">
                <br><br>
                <label for="hr">Select Hours:</label>
                <select name="hr" id="hr">
                    <option value="1">1hr</option>
                    <option value="2">2hr</option>
                    <option value="3">3hr</option>
                    <option value="4">4hr</option>
                    <option value="5">5hr</option>
                    <option value="6">6hr</option>
                    <option value="7">7hr</option>
                    <option value="8">8hr</option>
                    <option value="9">9hr</option>
                    <option value="10">10hr</option>
                </select><br><br>
                <br>


                <div class="zone-title">Zone 1</div>
                <div class="grid-container">
                  <div class="grid-item grid-item-available">
                    <input type="radio" name="slot" value="Z1 S1">
                    <label for="S1" >S1</label>
                  </div>
                  <div class="grid-item">
                    <input type="radio" name="slot" value="Z1 S2">
                    <label for="S2" >S2</label>
                  </div>
                  <div class="grid-item">
                    <input type="radio" name="slot" value="Z1 S3">
                    <label for="S3" >S3</label>
                  </div>
                  <div class="grid-item">
                    <input type="radio" name="slot" value="Z1 S4">
                    <label for="S4" >S4</label>
                  </div>
                  <div class="grid-item">
                    <input type="radio" name="slot" value="Z1 S5">
                    <label for="S5" >S5</label>
                  </div>  
                </div>

                <div class="zone-title">Zone 2</div>
                <div class="grid-container">
                  <div class="grid-item grid-item-available">
                    <input type="radio" name="slot" value="Z2 S1">
                    <label for="S1" >S1</label>
                  </div>
                  <div class="grid-item">
                    <input type="radio" name="slot" value="Z2 S2">
                    <label for="S2" >S2</label>
                  </div>
                  <div class="grid-item">
                    <input type="radio" name="slot" value="Z2 S3">
                    <label for="S3" >S3</label>
                  </div>
                  <div class="grid-item">
                    <input type="radio" name="slot" value="Z2 S4">
                    <label for="S4" >S4</label>
                  </div>
                  <div class="grid-item">
                    <input type="radio" name="slot" value="Z2 S5">
                    <label for="S5" >S5</label>
                  </div>  
                </div>

                <br>
                
                <input type="submit" value="Submit" class="submit-btn" name="submitBooking">
            </form>

            <!-- <div class="grid-container">
                <div class="grid-item grid-item-available">S1</div>
                <div class="grid-item">S2</div>
                <div class="grid-item">S3</div>  
                <div class="grid-item grid-item-available">S4</div>
                <div class="grid-item">S5</div>
                <div class="grid-item grid-item-available">S6</div>
                <div class="grid-item">S7</div>
                <div class="grid-item grid-item-available">S1</div>
                <div class="grid-item">S2</div>
                <div class="grid-item">S3</div>  
                <div class="grid-item grid-item-available">S4</div>
                <div class="grid-item">S5</div>
                <div class="grid-item grid-item-available">S6</div>
                <div class="grid-item">S7</div>
            </div> -->
            
        </div>
    </div>

    <script  src="./script.js"></script>

</body>
</html>
