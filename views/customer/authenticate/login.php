<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
    include('../include/stylesheet.php'); ?>
    <link rel="stylesheet" href="../../../assets/css/authenticate/login.css">
    <title>Login</title>
</head>
<body>
    <div class="container row">
        <div class="col-10 col-md-6 col-lg-7">
            <div class="logo">
                <img class="logo-img" src="../../../assets/img/header/logo.png" alt="logo">
                <p class="title">Login to purchase your order!</p> 
            </div>
            <div class="form-login">
                <form action="login.php" method="post">
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input id="email" class="form-control" type="text" name="email" value="<?php print !empty($error) ? $_POST['email'] :  '' ?>">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input id="password" class="form-control" type="password" name="password" value="">
                    </div>
                    <?php                        
                        if (!empty($error)) {
                            print "<p class='error_msg'>$error<p>";
                        }
                    ?>
                    <hr>
                    <div class="action-btn">
                        <button type="submit" class="btn btn-primary btn-submit btn-block">Log In</button>
                        <a href="./register.php" class="btn btn-outline-secondary btn-block mr-t">Create Account</a>
                    </div>
                </form>
            </div>
        </div>
        
    </div>

</body>
</html>