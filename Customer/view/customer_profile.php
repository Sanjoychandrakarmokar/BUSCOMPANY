<?php

include '../control/customer_profile.php';
include '../control/logout.php';

$email = isset($_SESSION['email']) ? $_SESSION['email'] : '';
$password = isset($password) ? $password : 'Not Available';
$nid = isset($nid) ? $nid : 'Not Available';
$address = isset($address) ? $address : 'Not Available';
$phone = isset($phone) ? $phone : 'Not Available';
?>

<html>

<head>
    
    <title>User Profile</title>
    <link rel="stylesheet" href="../css/customer_profile.css">
</head>

<body>
    <div class="profile-container">
        <h2>User Profile</h2>
        <div class="profile-item"><label>Email:</label> <?php echo htmlspecialchars($email); ?></div>
        <div class="profile-item"><label>Name:</label> <?php echo htmlspecialchars($name); ?></div>
        <div class="profile-item"><label>NID:</label> <?php echo htmlspecialchars($nid); ?></div>
        <div class="profile-item"><label>Phone Number:</label> <?php echo htmlspecialchars($phone); ?></div>
        <div class="profile-item"><label>Gender:</label> <?php echo htmlspecialchars($gender); ?></div>
        <div class="profile-item"><label>Address:</label> <?php echo htmlspecialchars($address); ?></div>
        <a href="../view/customer_updateprofile.php" class="btn">Edit Profile</a>
        <a href="../view/customer_booking.php" class="btn">Buy Tickets</a>
        <a href="../view/customer_ticket.php" class="btn">My Tickets</a>
        <form action="../control/logout.php" method="POST">
            <button type="submit" class="btn-logout">Logout</button>

        </form>

    </div>
</body>

</html>