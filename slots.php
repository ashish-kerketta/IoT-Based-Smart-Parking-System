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
                <li class="menu-item"><a href="payment.php">Payment</a></li>
                <li class="menu-item"><a href="profile.php">Profile</a></li>
                <li class="menu-item"><a href="logout.php">Logout</a></li>
            </ul>
            <div class="shop icon icon-bag"></div>
        </div>
        
        <div class="content"> 
            <h3 style="font-weight: bold;">Choose Parking Slot</h3>
            
            <form action="/action_page.php">
                <label for="date">Select Date:</label>
                    <input type="date" id="date" name="date">
                    <br><br>
                <label for="appt">Start Time:</label>
                    <input type="time" id="appt" name="appt">
                <br><br>
                <label for="hr">Select Hours:</label>
                <select name="hr" id="hr">
                    <option value="1hr">1hr</option>
                    <option value="2hr">2hr</option>
                    <option value="3hr">3hr</option>
                    <option value="4hr">4hr</option>
                    <option value="5hr">5hr</option>
                    <option value="6hr">6hr</option>
                    <option value="7hr">7hr</option>
                    <option value="8hr">8hr</option>
                    <option value="9hr">9hr</option>
                    <option value="10hr">10hr</option>
                </select><br><br>
                <div>Total Amount = </div>
                <br>
                <input type="submit" value="Submit" class="submit-btn">
            </form>

            <div class="grid-container">
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
            </div>
            
        </div>
    </div>

    <script  src="./script.js"></script>

</body>
</html>
