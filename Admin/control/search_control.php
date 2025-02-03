<?php
session_start();
include '../model/mydb.php';

if (isset($_POST["searchEmployee"])) {
    $nid = $_POST["nid"];

    if (empty($nid)) {
        echo "NID Number is required!";
    } else {
        $mydb = new mydb();
        $conobj = $mydb->connObject();

        $result = $mydb->searchEmployeeByNid($conobj, 'admin', $nid);

        if ($result->num_rows > 0) {

            echo '<div class="employee-list">';
            // Loop through the result set and display employee details
            while ($row = $result->fetch_assoc()) {
                echo '<div class="employee-item">';
                echo "<h3>" . $row["name"] . "</h3>"; // Employee name as a header
                echo "<p><strong>NID:</strong> " . $row["nid"] . "</p>";
                echo "<p><strong>Phone:</strong> " . $row["phone"] . "</p>";
                echo "<p><strong>Email:</strong> " . $row["email"] . "</p>";
                echo "<p><strong>Address:</strong> " . $row["address"] . "</p>";
                echo "<p><strong>DOB:</strong> " . $row["dob"] . "</p>";
                echo "<p><strong>Highest Degree:</strong> " . $row["higherdegree"] . "</p>";
                echo "<p><strong>Company Name:</strong> " . $row["companyname"] . "</p>";
                echo "<p><strong>Job Title:</strong> " . $row["jobtitle"] . "</p>";
                echo "<p><strong>Duration:</strong> " . $row["duration"] . "</p>";
                echo "<p><strong>Password:</strong> " . $row["password"] . "</p>";
                echo '</form>';
                echo '</div>'; 

                
               //echo "<a href='../view/home.php?nid=" . $row["nid"] . "'>View Details</a><br><br>";
            }
            echo '</div>';
        }

        $mydb->closeCon($conobj);
    }
}
?>
