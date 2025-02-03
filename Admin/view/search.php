<?php
include '../control/search_control.php';
?>

<!DOCTYPE html>
<html>
    <head>
    
    <link rel="stylesheet" href="../css/search.css">
        <title>
            ABC BUS COMPANY    
        </title>
    </head>
    <body>
        <h1>Search Employee </h1>
        <form action="" method="post">
            <fieldset>
                <table>

                <tr><td>NID NUMBER:</td><td><input type="text" name="nid" ></td></tr>

                <tr>
                        <td>
                        <input type="submit" name="searchEmployee" value="search">
                        </td>
                    </tr>
                </table>
            </fieldset>

        </form>
    </body>
</html>