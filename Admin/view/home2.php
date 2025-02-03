

<!DOCTYPE html>
<html>
<head>
    <title>ABC BUS COMPANY</title>
    <link rel="stylesheet" href="../css/home2.css">
</head>
<body>
    <header>
        <div class="header-container">
            <button class="header-btn" onclick="window.location.href='viewallemployees.php';">View All Employees</button>
            <button class="header-btn" onclick="window.location.href='viewalladmin.php';">View All Admin</button>
            <button class="header-btn" onclick="window.location.href='ticketlist.php';">Booked Ticket List</button>
            
        </div>
    </header>
            <form action="../control/logout_control.php" method="POST">
            <button type="submit" class="btn-logout">Logout</button>
 
        </form>

    <footer>
        <div class="footer-container">
            <p>&copy; 2025 ABC Bus Company. All Rights Reserved.</p>
        </div>
    </footer>
</body>
</html>
