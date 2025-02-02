<?php
session_start();
include '../model/mydb.php';
if (!isset($_SESSION['nid'])) {
    echo "Error: You must be logged in to submit bus information.";
    header("Location:../view/home.php");
}
$nidse=$_SESSION["nid"];
$mydb= new mydb();
$conobj= $mydb->createConObject();
$insert = $mydb->getUserdata($conobj, 'regemp',$nidse);

echo "<table class='request-table'>";
echo "<thead>
<tr>
    <th>Typeofwork</th>
    <th>Name</th>
    <th>Nid</th>
    <th>Phone</th>
    <th>Email</th>
    <th>Address</th>
    <th>DOB</th>
    <th>DLNumber</th>
    <th>HighestDegree</th>
    <th>CompanyName</th>
    <th>JobTitle</th>
    <th>Duration</th>
    <th>Password</th>
</tr>
</thead>

<tbody>";
if ($insert->num_rows > 0) {
    while ($row = $insert->fetch_assoc()) {

    $typeofwork=$_POST["work"];
    $name=$_POST["name"];
    
    $phone=$_POST["phone"];
    $email=$_POST["email"];
    $address=$_POST["address"];
    $dob=$_POST["dob"];
    $dlnumber=$_POST["dlnumber"];
    $higherdegree=$_POST["higherdegree"];
    $companyname=$_POST["companyname"];
    $jobtitle=$_POST["jobtitle"];
    $duration=$_POST["duration"];
    $password=$_POST["password"];


        echo "<tr>";
        echo "<td>$typeofwork</td>";
        echo "<td>$name</td>";
        echo "<td>$nid</td>";
        echo "<td>$phone</td>";
        echo "<td>$email</td>";
        echo "<td>$address</td>";
        echo "<td>$dob</td>";
        echo "<td>$dlnumber</td>";
        echo "<td>$higherdegree</td>";
        echo "<td>$companyname</td>";
        echo "<td>$jobtitle</td>";
        echo "<td>$duration</td>";
        echo "<td>$password</td>";
    }
} else {
    echo "<tr><td>No records found</td></tr>";
}
echo "</tbody>";
echo "</table>";

?>