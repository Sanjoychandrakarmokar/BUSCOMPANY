<?php
include '../control/login_control.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            ABC BUS COMPANY    
        </title>
    </head>
    <body>
        <h1>LOG IN</h1>
        <form action="../control/login_control.php" method="post">
            <fieldset>
                <table>
                    <tr><td>NID NUMBER:</td><td><input type="text" name="nid" ></td></tr>
                    <tr><td>Password:</td><td> <input type="password" name="password" ></td></tr>
                    <tr>
                        <td>
                        <input type="Submit" name="login" value="Login">
                        <input type="reset" name="reset" value="Clear">
                        </td>
                    </tr>
                </table>
            </fieldset>

        </form>
    </body>
</html>