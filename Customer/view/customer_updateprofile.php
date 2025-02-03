<?php
include "../control/customer_updateprofile.php"

?>
<html>

<head>
    <title>Update User Information</title>
    <link rel="stylesheet" href="../css/customer_updateprofile.css">
</head>

<body>

    <div class="form-class">
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" onsubmit="return form_check_update()">
            <h2>Update User Information</h2>
            <label for="name">Email:</label>
            <input type="text" id="email" name="email" value="<?php echo isset($email) ? htmlspecialchars($email) : ''; ?>" readonly />
            <br />
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="<?php echo isset($name) ? htmlspecialchars($name) : ''; ?>"  onkeyup="namecheck_update()" />
            <p id="nameerr"></p>
            <br />
            <label for="nid">NID:</label>
            <input type="text" id="nid" name="nid" value="<?php echo isset($nid) ? htmlspecialchars($nid) : ''; ?>"  onkeyup="nid_update()"/>
            <p id="niderr"></p>
            <br />

            <label for="address">Address:</label>
            <input type="text" id="address" name="address" value="<?php echo isset($address) ? htmlspecialchars($address) : ''; ?>" onkeyup="addressheck_update()" />
            <p id="addresserr"></p>
            <br />
            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" value="<?php echo isset($phone) ? htmlspecialchars($phone) : ''; ?>" onkeyup="phone_update()" />
            <p id="phoneerr"></p>
            <br />
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" value="<?php echo isset($password) ? htmlspecialchars($password) : ''; ?>" onkeyup="password_update()" />
            <p id="passworderr"></p>
            <br />
            <?php if (!empty($updateMessage)): ?>
                <p class="update-message"><?php echo htmlspecialchars($updateMessage); ?></p>
            <?php endif; ?>
            <input type="submit" name="update" value="Update" />


        </form>
    </div>
    <div class="back-profile">
        <a href="../view/customer_profile.php">
            <button class="btn-back">Back to Profile</button>
        </a>
    </div>
<script src="../js/customer_updateprofile.js"></script>
</body>

</html>