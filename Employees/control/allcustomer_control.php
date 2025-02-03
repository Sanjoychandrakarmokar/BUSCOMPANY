<?php
include '../model/mydb.php';

$mydb= new mydb();
$conobj= $mydb->createConObject();
$insert=$mydb->getAllcustomer($conobj, 'customer_reg');


echo "<table class='request-table'>";
echo "<thead>
<tr>
    <th>Name</th>
    <th>Phone</th>
    <th>Address</th>
    <th>Nid</th>
    <th>Email</th>
    <th>Gender</th>
</tr>
</thead>
<tbody>";
if ($insert->num_rows > 0) {
    while ($row = $insert->fetch_assoc()) {
        $name = $row['name'];
        $phone = $row['phone'];
        $address = $row['address'];
        $nid = $row['nid'];
        $email = $row['email'];
        $gender = $row['gender'];

        echo "<tr>";
        echo "<td>$name</td>";
        echo "<td>$phone</td>";
        echo "<td>$address</td>";
        echo "<td>$nid</td>";
        echo "<td>$email</td>";
        echo "<td>$gender</td>";
    }
} else {
    echo "<tr><td>No records found</td></tr>";
}
echo "</tbody>";
echo "</table>";

?>