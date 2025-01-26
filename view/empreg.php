<?php
include '../control/reg_control.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            ABC BUS COMPANY
        </title>
        <script src="../js/validation.js"></script>
    </head>

    <body>
        <h1>Employees Registration</h1>
        <form action="../control/reg_control.php" method="post" enctype="multipart/form-data" onsubmit="return validation()">
            <fieldset>
                <legend>
                    <h3>New Employees</h3>
                </legend>
                <table>
                    <tr>
                    <td>Type of Work:</td>
                    <td><input type="radio" id="Supervisor" name="work" value="Supervisor">Supervisor
                    <input type="radio" id="Driver" name="work" value="Driver">Driver
                    <input type="radio" id="Helper" name="work" value="Helper">Helper</td>
                    <td><?php echo $typeofworkError; ?></td></tr> 

                    <tr><td>Name:</td><td><input type="text" id="name" name="name" ></td>
                    <td><?php echo $nameError; ?></td></tr> 
                    <tr><td>NID Number:</td><td> <input type="text" id="nid" name="nid" ></td>
                    <td><?php echo $nidnumberError; ?></td></tr> 
                    <tr><td>Phone:</td><td> <input type="tel" id="phone" name="phone"></td>
                    <td><p id="phoneerror"><?php echo $phoneError; ?></p></td></tr> 
                    <tr><td>Email:</td><td> <input type="email" id="email" name="email" ></td>
                    <td><?php echo $emailError; ?></td></tr> 

                    <tr>
                        <td>Address:</td><td> 
                        <textarea id="address" name="address"></textarea>
                        </td>
                    <td><?php echo $addressError; ?></td></tr> 

                    <tr><td>Date of Birth:</td><td> <input type="date" id="dob" name="dob"></td>
                    <td><?php echo $dobError; ?></td></tr> 
                    <tr><td>Driving Licence Number:</td><td><input type="text" id="dlnumber" name="dlnumber" ></td>
                    <td><?php echo $dlnumberError; ?></td></tr> 

                    <!--<tr><td>Highest Education:</td></tr>-->
                    <tr>
                        <td><label for="higher degree">Highest Degree:</label></td>
                        <td>
                        <select id="higherdegree" name="higherdegree">
                        <option value="Select Degree">Select Degree</option>
                        <option value="ssc">SSC</option>
                        <option value="hsc">HSC</option>
                        <option value="bsc">BSC</option>
                        <option value="master">MASTER</option>
                        </select> 
                        </td>
                    <td><p id="higherdegreeeror"><?php echo $highestdegreeError; ?></p></td></tr> 

                    <!--<tr><td>Institution:</td><td><input type="text" name="institution" ></td></tr>
                    <tr><td>Year Of Graduation:</td><td><input type="text" name="yearofgraduation" ></td></tr>-->

                    <tr><td>Work Experience</td></tr>
                    <tr><td>Company Name:</td><td><input type="text" id="companyname" name="companyname" ></td>
                    <td><?php echo $companynameError; ?></td></tr> 
                    <tr><td>Job Title:</td><td><input type="text" id="jobtitle" name="jobtitle" ></td>
                    <td><?php echo $jobtitleError; ?></td></tr> 
                    <tr><td>Duration:</td><td><input type="text" id="duration" name="duration" ></td>
                    <td><?php echo $durationError; ?></td></tr> 
                    
                    <tr><td>Password:</td><td><input type="password" id="password" name="password"></td>
                    <td><p id="passworderror"><?php echo $passwordError; ?></p></td></tr> 
                    <!-- <tr><td>Upload your picture:</td><td><input type="file" name="images"></td></tr>-->

                    <tr>
                        <td>
                        <button>Submit</button>
                        <!--<input type="Submit" name="submit" value="Submit ">-->
                        <input type="reset" name="reset" value="Clear Form">
                        </td>
                    </tr>

                </table>
            </fieldset>

            <h6> 
                1. Name Should be at least 4 characters<br>
                2. Email Address field is required, and the input must contain aiub.edu domain<br>
                3. Validate drop down/select fields which user must select one option.<br>
                4. Phone Number field must contain only numbers
            </h6>
        </form>
            
    </body>
</html>