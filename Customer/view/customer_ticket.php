<?php
session_start();
@include("../model/db.php");

if (!isset($_SESSION['email'])) {
    header("location: ../view/customer_login.php");
    exit();
}

$email = $_SESSION['email']; 
$db = new db();
$conobj = $db->openConn();
$tickets = $db->getUserTickets($email, $conobj);
?>


<html>
<head>
 
    <title>My Tickets</title>
    <link rel="stylesheet" href="../css/customer_ticket.css">
</head>
<body>
    <h1>My Booked Tickets</h1>
    
    <?php if ($tickets->num_rows > 0): ?>
        <table border="1">
            <tr>
                <th>Ticket Number</th>
                <th>Bus</th>
                <th>Date</th>
                <th>Time</th>
                <th>Bus Type</th>
                <th>Tickets</th>
                <th>Seat Number</th>

                <th>Action</th>
            </tr>
            <?php while ($row = $tickets->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row["id"]; ?></td>
                    <td><?php echo $row["bus"]; ?></td>
                    <td><?php echo $row["travel_date"]; ?></td>
                    <td><?php echo $row["travel_time"]; ?></td>
                    <td><?php echo $row["bus_type"]; ?></td>
                    <td><?php echo $row["ticket_count"]; ?></td>
                    <td><?php echo $row["available_seats"]; ?></td>
                    <td>
                        <form action="../control/customer_deleteticket.php" method="POST">
                            <input type="hidden" name="ticket_id" value="<?php echo $row['id']; ?>">
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>
    <?php else: ?>
        <p>No tickets found </p>
    <?php endif; ?>
    
    <a href="../view/customer_profile.php">Back to Profile</a>
</body>
</html>
