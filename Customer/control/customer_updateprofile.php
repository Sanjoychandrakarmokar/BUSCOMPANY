<?php
include '../model/db.php';

session_start();

if (isset($_SESSION['email']) && !empty($_SESSION['email'])) {
    $email = $_SESSION['email']; 

   
    if (isset($_POST['update'])) {
       
        $name = $_POST['name'];
        $nid = $_POST['nid'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $password = $_POST['password'];

        $db = new db();
        $conobj = $db->openConn();

        $result = $db->updateUser($conobj, $email, $name, $nid, $phone, $address, $password);

        if ($result) {
            $updateMessage = "User data updated successfully!";
        } else {
            $updateMessage = "Failed to update user data.";
        }
    }
} else {
    $updateMessage = "Email not found in session!";
}
?>
