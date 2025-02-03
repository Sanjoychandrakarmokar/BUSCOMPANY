<?php
@include("../model/db.php");
session_start();

$error_message = ""; 

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!empty($email) && !empty($password)) {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $mydb = new db();
            $myconn = $mydb->openConn();

            // Fetch user details from database
            $result = $mydb->customer_login($myconn, "customerlogin", $email, $password);

            if ($result->num_rows > 0) {
                $customer = $result->fetch_assoc();

                if ($customer["email"] == $email && $customer["password"] == $password) {
                    $_SESSION['email'] = $customer["email"];
                    $_SESSION['password'] = $customer["password"];
                    setcookie("email", $_SESSION['email'], time() + 86400, "/");
                    setcookie("password", $_SESSION['password'], time() + 86400, "/");

                    header("Location: ../view/customer_profile.php");
                    exit();
                }
            } else {
                $error_message = "Incorrect email or password."; 
            }
        }
    } else {
        $error_message = "Email and password cannot be empty."; 
    }
}

// Redirect to registration page
if (isset($_POST['registration'])) {
    header("Location: ../view/customer_registration.php");
    exit();
}
?>
