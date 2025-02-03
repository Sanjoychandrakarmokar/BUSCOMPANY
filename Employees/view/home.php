<?php
include '../control/home_control.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>ABC BUS COMPANY</title>
    <link rel="stylesheet" href="../css/home.css">
</head>
<body>
    <header>
        <div class="header-container">
            <button class="header-btn"onclick="window.location.href='../view/allcustomer.php';">View All Customer</button>
            <button class="header-btn" onclick="window.location.href='../view/showbusroute.php';">Show Bus Route Info</button>
            <button class="header-btn" onclick="window.location.href='../view/details.php';">Company Details</button>

        </div>
    </header>

    <form action="../control/home_control.php" method="post">
    <!-- Body section with Bus Scheduling Form -->
            <div class="bodypart">
                
                <table>
                    <tr><td><h3>Bus Route Details</h3></td></tr>
                    <tr><td>From:</td><td><input type="text" id="source" name="source"></td></tr>
                    <tr><td>To:</td><td><input type="text" id="destination" name="destination"></td></tr>
                    <tr><td>Bus Number:</td><td><input type="text" id="busnumber" name="busnumber"></td></tr>
                    <tr><td>Passanger Number:</td><td><input type="text" id="passengernumber" name="passengernumber"></td></tr>
                    <tr><td>Date:</td><td><input type="date" id="date" name="date"></td></tr>
                    <tr><td>Time:</td><td>
                    <select name="time" id="time">
                        <option value="select-time">Select Time</option>
                        <option value="8pm-to-6am">8pm to 6am</option>
                        <option value="10pm-to-7am">10pm to 7am</option>
                        <option value="11pm-to-8am">11pm to 8am</option>
                    </select>
                    </td></tr>
                    <tr>
                        <td>
                        <button id="button">Submit</button>
                        <!--<input type="Submit" name="submit" value="Submit ">-->
                        <input type="reset" id="reset" name="reset" value="Clear Form">
                        </td>
                    </tr>
                    <button type="submit" class="btn-logout">Logout</button>
                </table>

            </div>
    <!-- Footer section with Company Details -->
    <footer>
        <div class="footer-container">
            <p>Company Details: XYZ Bus Company, Address, Contact Information</p>
        </div>
    </footer>
    </form>
</body>
</html>
