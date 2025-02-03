<?php
session_start();
include '../model/mydb.php';

// Create a new instance of your database class
$mydb = new mydb();

// Get the connection object
$conobj = $mydb->connObject();

// Call the ViewAll method, passing the correct connection object ($conobj)
$result = $mydb->ViewAll($conobj, 'ticket_bookings'); // Assuming 'customers' is the table name

if ($result->num_rows > 0) {

    echo '<div class="Ticket-list">';
    // Loop through the result set and display customer details
    while ($row = $result->fetch_assoc()) {
        echo '<div class="Ticket-item">';
        echo "<h3>" . $row["name"] . "</h3>"; // Employee name as a header
        echo "<p><strong>ID:</strong> " . $row["id"] . "</p>";
        echo "<p><strong>Email:</strong> " . $row["email"] . "</p>";
        echo "<p><strong>Bus:</strong> " . $row["bus"] . "</p>";
        echo "<p><strong>Travel Date:</strong> " . $row["travel_date"] . "</p>";
        echo "<p><strong>Travel Time:</strong> " . $row["travel_time"] . "</p>";
        echo "<p><strong>Bus Type:</strong> " . $row["bus_type"] . "</p>";
        echo "<p><strong>Ticket count :</strong> " . $row["ticket_count"] . "</p>";
        echo "<p><strong>Available Seats:</strong> " . $row["available_seats"] . "</p>";
        echo '</form>';
        echo '</div>'; 
       //echo "<a href='../view/home.php?nid=" . $row["nid"] . "'>View Details</a><br><br>";
    }
    echo '</div>';
} else {
    echo "Not found.";
}

// Close the connection
$mydb->closeCon($conobj);
?>
