
<!DOCTYPE html>
<html>
<head>
    <title>All customer</title>
    <link rel="stylesheet" href="../css/showbusroute.css">
</head>

<body>
    <header>
        <div>
        <button class="back" onclick="window.location.href='../view/home.php';">Back</button>
        </div>
    </header>
    <table>
        <h1>All customer</h1>
        <?php
        include '../control/allcustomer_control.php';
        ?>
    </table>
</body>
</html>
