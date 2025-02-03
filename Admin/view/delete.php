<?php
include '../control/delete_control.php';
?>

<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="../css/mystyle2.css"> 
    
        <title>
            ABC BUS COMPANY    
        </title>
    </head>
    <body>
        <h1>Employee Details Delete</h1>
        <form action="" method="post">
            <fieldset>
                <table>

                <tr><td>NID NUMBER:</td><td><input type="text" name="nid" ></td></tr>

                <tr>
                        <td>
                        <input type="submit" name="deleteEmployee" value="delete">
                        </td>
                    </tr>
                </table>
            </fieldset>

        </form>
    </body>
</html>