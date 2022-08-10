<?php
    session_start();
    require_once "db.php";

    if(!isset($_SESSION['user_id'])) {
        header("Location: dashboard.php");
    }

    if (isset($_POST['submitBooking'])) {
        
        $user_id = $_SESSION['user_id'];
        $date = $_POST['date'];
        $time = $_POST['appt'];
        $hour = $_POST['hr'];
        
        
        $zoneSlot = explode(' ',$_POST['slot']);
        $zone = $zoneSlot[0];
        $slot = $zoneSlot[1];
        
        $amount = $hour * 10;

        $sql = "INSERT INTO bookings (user_id, date, time, hours, slot, zone, amount) VALUES ('" . $user_id . "', '" . $date . "', '" . $time . "', '" . $hour . "', '" . $slot . "', '" . $zone . "', '" . $amount . "');";

        mysqli_query($conn,$sql);

        header("Location: booking.php?result=success");
    }

    // INSERT INTO `bookings` (`id`, `user_id`, `date`, `time`, `slot`) VALUES (NULL, '1', '2021-04-15', '02:09:00', 'S1');
