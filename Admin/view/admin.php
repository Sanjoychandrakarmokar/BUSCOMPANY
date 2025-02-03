<?php 
include '../control/admin_reg_control.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>ABC BUS COMPANY</title>
    
    <script src="../js/validationrequest.js"> </script>
</head>
               
    <body>
        <legend>Admin Registration</legend>
        <form action="" method="POST" onsubmit="return validateForm()">
            <table>
                <tr>
                    <td>Name:</td>
                    <td><input type= "text" id="name" name="name"></td>
                    <td id="nameError"> </td>
                </tr>
                <tr>
                    <td>NID Number:</td>
                    <td><input type="text" id="nid" name="nid"></td>
                    <td id="nidError" ></td>
                </tr>
                <tr>
                    <td>Phone:</td>
                    <td><input type="tel" id="phone" name="phone"></td>
                    <td id="phoneError"></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="email" id="email" name="email"></td>
                    <td id="emailError" ></td>
                </tr>
                <tr>
                    <td>Address:</td>
                    <td><textarea id="address" name="address"></textarea></td>
                    <td id="addressError"></td>
                </tr>
                <tr>
                    <td>Date of Birth:</td>
                    <td><input type="date" id="dob" name="dob"></td>
                    <td id="dobError"></td>
                </tr>
                <tr>
                    <td>Highest Degree:</td>
                    <td>
                        <select id="higherdegree" name="higherdegree">
                            <option value="Select Degree">Select Degree</option>
                            <option value="ssc">SSC</option>
                            <option value="hsc">HSC</option>
                            <option value="bsc">BSC</option>
                            <option value="master">MASTER</option>
                        </select>
                    </td>
                    <td id="degreeError" ></td>
                </tr>
                <tr>
                    <td>Company Name:</td>
                    <td><input type="text" id="companyname" name="companyname"></td>
                    <td id="companyError"></td>
                </tr>
                <tr>
                    <td>Job Title:</td>
                    <td><input type="text" id="jobtitle" name="jobtitle"></td>
                    <td id="jobError"></td>
                </tr>
                <tr>
                    <td>Duration:</td>
                    <td><input type="text" id="duration" name="duration"></td>
                    <td id="durationError" ></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" id="password" name="password"></td>
                    <td id="passwordError"></td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="submit" value="Submit">
                        <input type="reset" name="reset" value="Clear Form">
                    </td>
                </tr>
            </table>

            <div id="responseMessage"></div>
            
            <h6>
                1. Name should be at least 4 characters.<br>
                2. Email address must contain the gmail.com domain.<br>
                3. Please validate drop-down/select fields which the user must select one option.<br>
                4. Phone number must contain only numbers.<br>
            </h6>
        </form>

    </body>
</html>
