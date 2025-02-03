<?php
include '../model/db.php';

session_start();

if (isset($_SESSION['email']) && !empty($_SESSION['email'])) {
    $email = $_SESSION['email']; // Get email from session

    $db = new db();
    $conobj = $db->openConn();
    $result = $db->getUserdata($conobj, $email); // Added table name

    if ($result && $result->num_rows > 0) {
        foreach ($result as $row) {
            $name = $row['name'];
            $nid = $row['nid'];
            $phone = $row['nid'];
            $address = $row['address'];
            $gender = $row['gender'];
           
        }
    }
    // include '../view/customer_updateprofile.php';
} else {
    echo "Email not found in session!";
}
?>
