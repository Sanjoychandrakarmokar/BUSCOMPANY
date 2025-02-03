
<!DOCTYPE html>
<html>
<head>
    <title>Bus Route Details</title>
    <link rel="stylesheet" href="../css/showbusroute.css">
</head>

<body>
    <header>
        <div>
        <button class="deletebusrouteinfo" onclick="window.location.href='../view/delete.php';">Delete Bus Route Info</button>
        <button class="back" onclick="window.location.href='../view/home.php';">Back</button>
        </div>
    </header>
    <table>
        <h1>Bus Route Details</h1>
    <?php
    include '../control/showbusroute_control.php';
    ?>
    </table>
</body>
</html>
