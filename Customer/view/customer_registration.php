<?php
include('../control/customer_registration.php');
?>

<html>
<head>
    
    <title>Registration Form</title>
    <link rel="stylesheet" href="../css/customer_registration.css">
</head>

<body>


    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data" onsubmit="return form_check_registration()">
        <h1>Welcome to ABC Bus Company</h1>
        <h2>Registration Form</h2>
   
        <div class="error-messages">
            <?php
            echo $nameerr;
            echo $Emailerr;
            echo $NIDErr;
            echo $NIDErr1;
            echo $Phoneerr;
            echo $Passworderr;
            echo $Passworderr1;
            echo $Passworderr2;
            echo $Passworderr3;
            echo $signuperr;
            ?>
        </div>

        <table>
            <tr>
                <td>
                    <input type="text" name="name" id="name" placeholder="Full Name" onkeyup="namecheck_registration()">
                    <p id="nameerr"></p>
                </td>
            </tr>

            <tr>
                <td>
                    <input type="text" name="email" id="email" placeholder="Email" onkeyup="email_registration()">
                    <p id="emailerr"></p>
                </td>
            </tr>

            <tr>
                <td>
                    <input type="text" name="nid" id="nid"  placeholder="Valid NID" onkeyup="nid_registration()">
                    <p id="niderr"></p>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="phone" id="phone" placeholder="+880-1XXXXXXXXX" onkeyup="phone_registration()">
                    <p id="phoneerr"></p>
                </td>
            </tr>

            <tr>
                <td>Gender:
                    <input type="radio" name="gender" value="male">Male
                    <input type="radio" name="gender" value="female">Female
                    <input type="radio" name="gender" value="other">Other
                </td>
            </tr>

            <tr>
                <td>
                    <input type="text" name="address" id="address" placeholder="Address" onkeyup="addressheck_registration()"> 
                    <p id="addresserr"></p>
                </td>
            </tr>

            <tr>
                <td>
                    <input type="password" name="password"  id="password"  placeholder="Password" onkeyup="password_registration()">
                    <p id="passerr"></p>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="password" name="cpassword" id="cpassword" placeholder="Confirm Password" onkeyup="confirm_password_registration()">
                    <p id="cpasserr"></p>
                </td>
            </tr>
        </table>

        <table>
            <tr>
                <td>
                    <input type="submit" name="submit" id="submit" value="Register">
                </td>
                <td>
                    <p>Already registered? <a href="customer_login.php">Login here</a></p>
                </td>
            </tr>
        </table>
    </form>
    <script src="../js/customer_registration.js"></script>
</body>

</html>