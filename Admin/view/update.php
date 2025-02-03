<?php
include '../control/update_control.php';
?>

<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="../css/update.css">
    <title>Update Employee</title>
</head>
<body>
    <h1>Update Employee</h1>
    
    <form action="" method="post">
        <fieldset>
            <legend>Search Employee</legend>
            <table>
                <tr>
                    <td>NID NUMBER:</td>
                    <td><input type="text" name="nid"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="searchEmployee" value="Search"></td>
                </tr>
            </table>
        </fieldset>
    </form>

    <?php
    
    if (!empty($employeeData)) { 
        echo '<form action="" method="post">
            <fieldset>
                <legend>Update Employee Details</legend>
                <table>
                    <tr><td>Name:</td><td><input type="text" name="name" value="' . ($employeeData['Name'] ?? '') . '"></td></tr>
                    <tr><td>Phone:</td><td><input type="tel" name="phone" value="' . ($employeeData['Phone'] ?? '') . '"></td></tr>
                    <tr><td>Email:</td><td><input type="email" name="email" value="' . ($employeeData['Email'] ?? '') . '"></td></tr>
                    <tr><td>Address:</td><td><textarea name="address">' . ($employeeData['Address'] ?? '') . '</textarea></td></tr>
                    <tr><td>Date of Birth:</td><td><input type="date" name="dob" value="' . ($employeeData['DOB'] ?? '') . '"></td></tr>
                    <tr>
                        <td>Highest Degree:</td>
                        <td>
                            <select name="higherdegree">
                                <option value="ssc" ' . (($employeeData['higherdegree'] ?? '') == 'ssc' ? 'selected' : '') . '>SSC</option>
                                <option value="hsc" ' . (($employeeData['higherdegree'] ?? '') == 'hsc' ? 'selected' : '') . '>HSC</option>
                                <option value="bsc" ' . (($employeeData['higherdegree'] ?? '') == 'bsc' ? 'selected' : '') . '>BSC</option>
                                <option value="master" ' . (($employeeData['higherdegree'] ?? '') == 'master' ? 'selected' : '') . '>MASTER</option>
                            </select>
                        </td>
                    </tr>
                    <tr><td>Company Name:</td><td><input type="text" name="companyname" value="' . ($employeeData['CompanyName'] ?? '') . '"></td></tr>
                    <tr><td>Job Title:</td><td><input type="text" name="jobtitle" value="' . ($employeeData['JobTitle'] ?? '') . '"></td></tr>
                    <tr><td>Duration:</td><td><input type="text" name="duration" value="' . ($employeeData['Duration'] ?? '') . '"></td></tr>
                    <tr><td>Password:</td><td><input type="password" name="password" value="' . ($employeeData['Password'] ?? '') . '"></td></tr>
                    <tr>
                        <td>
                            <input type="hidden" name="nid" value="' . ($employeeData['Nid'] ?? '') . '">
                            <input type="submit" name="updateEmployee" value="Update">
                        </td>
                    </tr>
                </table>
            </fieldset>
        </form>';
    } else {
        echo "<p>Please search for an employee first.</p>";
    }
    ?>
</body>
</html>
