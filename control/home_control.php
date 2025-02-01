<?php
include '../model/mydb.php';

$sourceError="";
$destinationError="";
$busnumberError="";
$passengernumberError="";
$dateError="";
$timeError="";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $haserrors = 0;

    $source=$_POST["source"];
    $destination=$_POST["destination"];
    $busnumber=$_POST["busnumber"];
    $passengernumber=$_POST["passengernumber"];
    $date=$_POST["date"];
    $time=$_POST["time"];
    
    // Validate From
    if (empty($source)) {
        $sourceError= "From location is required.";
        $haserrors++;
    }
    
    // Validate To
    if (empty($destination)) {
        $destinationError= "Destination is required.";
        $haserrors++;
    }
    
    // Validate Bus Number
    if (empty($busnumber)) {
        $busnumberError= "Bus number is required.";
        $haserrors++;
    } elseif (!is_numeric($busnumber)) {
        $busnumberError= "Bus number must be a valid number.";
        $haserrors++;
    }

    if (empty($passengernumber)) {
        $passengernumberError= "Passanger number is required.";
        $haserrors++;
    } elseif (!is_numeric($passengernumber)) {
        $passengernumberError= "Passanger number must be a valid number.";
        $haserrors++;
    }
    
    // Validate Date
    if (empty($date)) {
        $dateError= "Date is required.";
        $haserrors++;
    }
    
    // Validate Time
    if ($time== "select-time") {
        $timeError= "Please select a time.";
        $haserrors++;
    }
    else{}



    // Final check
    if ($haserrors>0) {
        echo "Please insert correct data.";
    } 
    else 
    {
        //Database
        $mydb= new mydb();
        $conobj= $mydb->createConObject();
        //if($conn->connect_error) {die("Connection failed: ".$conn->connect_error);}
        $insert=$mydb->insertbusroutedetails($conobj, 'busroutedetails',$source, $destination, $busnumber,$passengernumber, $date,$time);
        if( $insert)
        {
            header("Location: ../view/home.php");
        }
        else{
            echo "Error".$insert;
        }
        $mydb->closeCon($conobj);

    }






}
?>
