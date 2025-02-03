<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    session_destroy();
    session_commit();
    setcookie("email", "", time() - 3600, "/");
    setcookie("password", "", time() - 3600, "/");

    header("Location: ../view/customer_login.php");
    exit();
}
