<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: ../view/customer_login.php");
    exit();
}

@include("../model/db.php");

if (isset($_POST['ticket_id'])) {
    $ticket_id = $_POST['ticket_id'];

    $db = new db();
    $conobj = $db->openConn();
    
    $result = $db->deleteTicket($ticket_id, $conobj); 

    header("Location: ../view/customer_ticket.php"); 
    exit();
}
?>
