<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    header("Location: ../view/login.php");
    exit();
}

?>