
<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
    <link rel="stylesheet" href="../css/showbusroute.css">
</head>

<body>
    <header>
        <div>
        <button class="back" onclick="window.location.href='../view/home.php';">Back</button>
        </div>
    </header>
    <table>
        <h1>Profile</h1>
    <?php
    include '../control/profile_control.php';
    ?>
    </table>
</body>
</html>