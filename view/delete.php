<?php
include '../control/delete_control.php';
?>
 
<!DOCTYPE html>
<html>
    <head>
        <title>
            ABC BUS COMPANY    
        </title>
    </head>
    <body>
        <h1>bus number Delete</h1>
        <form action="" method="post">
            <fieldset>
                <table>
                    <tr><td>Delete Bus :</td><td><input type="text" id="busnumber" name="busnumber" ></td></tr>
 
                    <tr>
                        <td>
                        <input type="submit" id="submit" name="deletebusnumber" value="delete">
                        </td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </body>
</html>