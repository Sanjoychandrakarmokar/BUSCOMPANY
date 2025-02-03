<?php
session_start();

$busErr = $dateErr = $timeErr = $busTypeErr = $ticketErr = $bookingErr = "";

@include("../model/db.php");


if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
} else {
    header("location: ../view/customer_login.php"); // Redirect if not logged in
    exit();
}

if (isset($_POST["submit"])) {
    $bus = $_POST["available_bus"];  
    $date = $_POST["date"];
    $time = $_POST["time"];
    $busType = $_POST["bus_type"];
    $tickets = $_POST["ticket_number"];
    $available_seats = $_POST["available_seats"];

    $today = date("Y-m-d"); // Get today's date

    if (empty($bus) || empty($date) || empty($time) || empty($busType) || empty($tickets)) {
        $bookingErr = "You did not fill all the fields!";
    } elseif ($date < $today) {
        $dateErr = "Select a future date.";
    } elseif ($tickets < 1 || $tickets > 4) {
        $ticketErr = "Ticket count must be between 1 and 4.";
    } else {
        $mydb = new db();
        $myconn = $mydb->openConn();
        
        $mydb->insertBooking($email, $bus, $date, $time, $busType, $tickets,  $available_seats, $myconn);
        
        header("Location: ../view/customer_profile.php");
        exit();
    }
}

if (isset($_POST["return"])) {
    header("location: ../view/home.php");
    exit();
}
?>
