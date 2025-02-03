<?php
session_start();

$nameerr = $Emailerr = $NIDErr = $NIDErr1 = $Phoneerr = "";
$Passworderr = $Passworderr1 = $Passworderr2 = $Passworderr3 = "";
$signuperr = "";

@include("../model/db.php");

if (isset($_POST["submit"])) {
    $name = $_POST["name"];  
    $email = $_POST["email"];
    $nid = $_POST["nid"];
    $phone = $_POST["phone"];
    $gender = $_POST["gender"] ?? ""; 
    $address = $_POST["address"];
    $Password = $_POST["password"];
    $cpassword = $_POST["cpassword"];

    $uppercase = preg_match('@[A-Z]@', $Password);
    $lowercase = preg_match('@[a-z]@', $Password);
    $number = preg_match('@[0-9]@', $Password);
    $specialchars = preg_match('@[\W]@', $Password);

    if (empty($name) || empty($email) || empty($nid) || empty($phone) ||empty($gender)|| empty($address) || empty($Password) || empty($cpassword)) {
        $signuperr = "You did not fill all the fields!";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $Emailerr = "Please enter a valid email address.";
    } elseif (strlen($nid) !== 8 || !ctype_digit($nid)) {
        $NIDErr1 = "NID should be 8 digits.";
    } elseif (!$uppercase || !$lowercase || !$number || !$specialchars || strlen($Password) < 6) {
        $Passworderr2 = "Password must have at least 6 characters, an uppercase, lowercase, number, and special character.";
    } elseif ($Password !== $cpassword) {
        $Passworderr3 = "Passwords do not match.";
    } else {
        $mydb = new db();
        $myconn = $mydb->openConn();
        
        // Store password as plain text
        $mydb->insertapplicant($name, $email, $nid, $phone,$gender,$address, $Password, $myconn);
        header("Location: ../view/customer_login.php");
    }
}

if (isset($_POST["return"])) {
    header("location: ../view/home.php");
    exit();
}
?>
