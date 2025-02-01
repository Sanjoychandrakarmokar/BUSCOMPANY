<?php

class mydb{
public $DBHostName="localhost";
public $DBUserName="root";
public $DBPassword="";
public $DBName="employees";

function construct(){
 $this->DBHostName="localhost";
 $this->DBUserName="root";
 $this->DBPassword="";
 $this->DBName="employees";
}



function createConObject(){
    return new mysqli($this->DBHostName, $this->DBUserName, $this->DBPassword, $this->DBName);
}

function insertemployees($conn,$table,$typeofwork, $name, $nid,$phone, $email,$address,$dob, $dlnumber, $higherdegree,$companyname, $jobtitle,$duration, $password)
{
$sqlstring="INSERT INTO $table (Typeofwork,Name,Nid,Phone,Email,Address,DOB,DLNumber,HighestDegree,CompanyName,JobTitle,Duration,Password) 
VALUES ('$typeofwork', '$name', '$nid', '$phone', '$email','$address', '$dob', '$dlnumber', '$higherdegree', '$companyname', '$jobtitle', '$duration', '$password')";                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           
$result = $conn->query($sqlstring);
if($result === false)
{
    return $conn->error;
    
}
else{
    return $result;
}
}



function login($conn,$table,$nid,$password)
{
    $sqlstring="SELECT * FROM $table WHERE Nid = '$nid'&& Password='$password' ";
    $result=$conn->query($sqlstring);
    return $result;
}

function insertbusroutedetails($conn,$table,$source, $destination,$busnumber,$passengernumber,$date,$time)
{
$sqlstring="INSERT INTO $table (source,destination,busnumber,passengernumber,date,time) VALUES('$source','$destination','$busnumber','$passengernumber','$date','$time')";
$result = $conn->query($sqlstring);
if($result === false)
{
    return $conn->error;
    
}
else{
    return $result;
}
}


function getAllRecords($conn, $table) {
    $sqlstring = "SELECT * FROM $table";
    $result = $conn->query($sqlstring);
    return $result;
}



function closeCon($conn)
{
 $conn->close();
}


}

?>