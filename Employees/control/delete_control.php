<?php
include '../model/mydb.php';
if (isset($_POST["deletebusnumber"])) {
    $busnumber = $_POST["busnumber"];
 
 
    if ( empty($busnumber)) {
        echo " bus number are required!";
    } else {
    $mydb = new mydb();
    $conobj = $mydb->createConObject();
    $result = $mydb->deletebusnumber($conobj, 'busroutedetails', $busnumber);
    if ($result > 0) {
        header("Location:../view/showbusroute.php");
        exit();
    } else {
        echo "User not found or deletion failed.";
    }
    $mydb->closeCon($conobj);
}
}
?>