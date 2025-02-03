<?php
session_start();
include '../model/mydb.php';

if (isset($_POST["deleteEmployee"])) {


    $nid = $_POST["nid"];


    if ( empty($nid)) {
        // Display error message if fields are empty
        echo " NID Number are required!";
    } else {

    // Create a new database connection object
    $mydb = new mydb();
    $conobj = $mydb->connObject();

    // Call the delete method (assuming it returns the number of affected rows)
    $result = $mydb->deleteEmployee($conobj, 'admin', $nid);
    
    if ($result > 0) {
        // Employee deleted successfully, redirect to the home page
        header("Location:../view/viewallemployees.php");
        exit();
    } else {
        echo "User not found or deletion failed.";
    }

    // Close the connection
    $mydb->closeCon($conobj);
}
}
?>
