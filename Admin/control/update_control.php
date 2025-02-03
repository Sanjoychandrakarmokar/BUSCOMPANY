<?php
include '../model/mydb.php';

$employeeData ="";

if (isset($_POST["searchEmployee"])) {
    $nid = $_POST["nid"];

    if (empty($nid)) {
        echo "NID Number is required!";
    } else {
        $mydb = new mydb();
        $conobj = $mydb->connObject();

        $result = $mydb->searchEmployeeByNid($conobj, 'admin', $nid);

        if ($result->num_rows > 0) {
            $employeeData = $result->fetch_assoc();
        } else {
            echo "User not found.";
        }

        $mydb->closeCon($conobj);
    }
}

if (isset($_POST["updateEmployee"])) {
    $nid = $_POST["nid"];
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $dob = $_POST["dob"];
    $higherdegree = $_POST["higherdegree"];
    $companyname = $_POST["companyname"];
    $jobtitle = $_POST["jobtitle"];
    $duration = $_POST["duration"];
    $password = $_POST["password"];

   
        $mydb = new mydb();
        $conobj = $mydb->connObject();

        $result = $mydb->updateEmployee($conobj, 'admin', $nid, $name, $phone, $email, $address, $dob, $higherdegree, $companyname, $jobtitle, $duration, $password);

        if ($result) {
            echo "Employee updated successfully!";
        } else {
            echo "Update failed!";
        }

        $mydb->closeCon($conobj);
    
}
?>
