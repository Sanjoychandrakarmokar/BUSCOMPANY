<?php
include '../model/mydb.php';

$mydb= new mydb();
$conobj= $mydb->createConObject();
$insert=$mydb->getAllRecords($conobj, 'busroutedetails');


echo "<table class='request-table'>";
echo "<thead>
<tr>
    <th>From</th>
    <th>To</th>
    <th>Bus Number</th>
    <th>Passanger Number</th>
    <th>Date</th>
    <th>Time</th>
</tr>
</thead>
<tbody>";
if ($insert->num_rows > 0) {
    while ($row = $insert->fetch_assoc()) {
        $source = $row['source'];
        $destination = $row['destination'];
        $busnumber = $row['busnumber'];
        $passengernumber = $row['passengernumber'];
        $date = $row['date'];
        $time = $row['time'];

        echo "<tr>";
        echo "<td>$source</td>";
        echo "<td>$destination</td>";
        echo "<td>$busnumber</td>";
        echo "<td>$passengernumber</td>";
        echo "<td>$date</td>";
        echo "<td>$time</td>";
    }
} else {
    echo "<tr><td>No records found</td></tr>";
}
echo "</tbody>";
echo "</table>";

?>