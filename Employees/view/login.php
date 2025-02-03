<?php
include '../control/login_control.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            ABC BUS COMPANY    
        </title>
        <link rel="stylesheet" href="../css/login.css">
    </head>
    <tr>
        
        <form action="../control/login_control.php" method="post">
        
            <fieldset>
                    <h1>Log in</h1>
                <table>
                    <tr><td>NID NUMBER:</td><td><input type="text" id="nid" name="nid" ></td></tr>
                    <tr><td>Password:</td><td> <input type="password" id="password" name="password" ></td></tr>
                    <tr>
                        <td>
                        <input type="Submit" id="login" name="login" value="Login">
                        <input type="reset" id="reset" name="reset" value="Clear">
                        </td>
                    </tr>
                    
                <p class="register-text">Not registered? <a href="empreg.php">Create an account</a></p>
                </table>
            </fieldset>

        </form>
    </body>
</html>