<?php
session_start();
@include("../model/db.php");

if (!isset($_SESSION['email'])) {
    header("location: ../view/customer_login.php");
    exit();
}

$email = $_SESSION['email']; // Get user email from session

$db = new db();
$conobj = $db->openConn();
$result = $db->getUserTickets($email, $conobj);
?>
