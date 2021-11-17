<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include('../include/stylesheet.php'); ?>
    <link rel="stylesheet" href="../../../assets/css/authenticate/register.css">
    <title>Register</title>
</head>

<body>
    <div class="container row">
        <div class="col-10 col-md-6 col-lg-7">
            <div class="logo">
                <img class="logo-img" src="../../../assets/img/header/logo.png" alt="logo">
                <p class="title">Create Account</p>
            </div>
            <div class="form-login">
                <form action="register.php" method="post">
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input id="email" class="form-control" type="text" name="email"
                            value="<?php print !empty($error) ? $_POST['email'] :  '' ?>">
                        <p class="notice-mesg">You'll use your email address to log in.</p>
                    </div>
                    <div class="form-group">
                        <label for="customer_name">Your Name</label>
                        <input id="customer_name" class="form-control" type="text" name="customer_name"
                            value="<?php print !empty($error) ? $_POST['customer_name'] :  '' ?>">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input id="password" class="form-control" type="password" name="password" value="">
                    </div>
                    <div class="form-group">
                        <label for="re-password">Re-type Password</label>
                        <input id="re-password" class="form-control" type="password" name="re_password" value="">
                    </div>
                    <div class="form-group">
                        <label for="birthdate">Birthdate</label>
                        <input id="birthdate" class="form-control" type="date" name="birthdate"
                            value="<?php print !empty($error) ? $_POST['birthdate'] :  '' ?>">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input id="phone" class="form-control" type="text" name="phone"
                            value="<?php print !empty($error) ? $_POST['phone'] :  '' ?>">
                    </div>
                    <?php
                    if (!empty($error)) {
                        print "<p class='error_msg'>$error</p>";
                    } elseif (!empty($successful_mesg)) {
                        print "<p class='successful-msg'>$successful_mesg</p>";
                    }
                    ?>
                    <hr>
                    <div class="action-btn">
                        <button type="submit" class="btn btn-primary btn-submit btn-block">Submit</button>
                        <a href="../home_page/" class="btn btn-outline-secondary btn-block mr-t">Cancel</a>
                    </div>
                </form>
            </div>
        </div>

    </div>

</body>

</html>