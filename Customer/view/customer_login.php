<?php
include('../control/customer_login.php'); 
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Login | ABC Bus</title>
    <link rel="stylesheet" href="../css/customer_login.css">
</head>

<body>

    <div class="login-container">
        <h1>ABC Bus Company</h1>
        <p class="subtitle">Login as a Customer</p>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="input-group">
                <label>Email/NID</label>
                <input type="text" name="email" placeholder="Enter your email">
            </div>

            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password" placeholder="Enter your password">
            </div>

            <?php if (!empty($error_message)) { ?>
                <div class="error-box"><?php echo $error_message; ?></div>
            <?php } ?>

            <button type="submit" name="submit" class="login-btn">Login</button>

            <p class="register-text">Not registered? <a href="customer_registration.php">Create an account</a></p>
        </form>
    </div>

</body>

</html>