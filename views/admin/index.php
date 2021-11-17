<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin page</title>
    <!-- Page plugins -->
    <?php include('./include/stylesheet.php'); ?>
    <?php include('./include/script.php'); ?>
    <link rel="stylesheet" href="../../assets/css/admin/navbar.css">
    <link rel="stylesheet" href="../../assets/css/admin/dashboard.css">
</head>

<body style="overflow: unset;">
    <!-- Side bar -->

    <nav class="navbar navbar-expand-md navbar-dark bg-dark border-bottom sticky-top">
        <a class="navbar-brand" href="index.php">
            <img src="data:image/jpeg;base64,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" width="30" height="30" class="d-inline-block align-top" alt="">
            Bookstore4T
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <div class="navbar-nav mx-auto">
                <form class="nav-item form-inline">
                    <input class="form-control mr-2" style="width:40vw;" type="search" placeholder="Looking for a product?" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
            <div class="navbar-nav ml-auto">
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="rounded-circle" alt="Image placeholder" src="../../assets/img/admin/avatar.jpg" width="30" height="30">
                        <span class="mb-0" style="color: aliceblue;" id="topLeftName">
                            <?php
                            echo $_SESSION["first_name"];
                            ?>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-cog"></i>
                            <span class="nav-link-text">Change avatar</span>
                        </a>
                        <a class="dropdown-item" href="./logout.php">
                            <i class="fas fa-sign-out-alt"></i>
                            <span class="nav-link-text">Logout</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </nav>


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 col-12 bg-dark mt-0 min-vh-100 d-flex flex-column">
                <nav class="left_nav_bar navbar navbar-dark sticky-top" style="top: 60px;">
                    <ul class="navbar-nav" id="leftNavbar">
                        <li class="nav-item">
                            <a class="left_bar_link nav-link active" href="index.php">
                                <i class="fas fa-tachometer-alt"></i>
                                <span class="nav-link-text ml-4">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="left_bar_link nav-link" href="product.php">

                                <i class="fas fa-book"></i>
                                <span class="nav-link-text ml-4">Product</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="left_bar_link nav-link" href="transaction.php">
                                <i class="fas fa-money-check-alt"></i>
                                <span class="nav-link-text ml-4">Transaction</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="left_bar_link nav-link" href="customer.php">

                                <i class="fas fa-user-alt"></i>

                                <span class="nav-link-text ml-4">Customer</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="left_bar_link nav-link" href="employee.php">
                                <i class="fas fa-user-friends" aria-hidden="true"></i>
                                <span class="nav-link-text ml-4">Employee</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="left_bar_link nav-link" href="contact.php">
                                <i class="fas fa-comment"></i>
                                <span class="nav-link-text ml-4">Contact</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-md-10 col-12">
                <div class="row">
                    <div class="col-lg-3 col-6 my-3 d-flex align-items-stretch">
                        <div class="card card-stats bg-success">
                            <!-- Card body -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Total products</h5>
                                        <div class="h2 font-weight-bold mb-0 text-center">
                                            <?php
                                            $query = "select count(*) as total from book";

                                            $result = $mysql_db->query($query);
                                            $row = $result->fetch_assoc();
                                            echo $row['total'];
                                            ?> </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape text-dark rounded-circle ">
                                            <i class="fas fa-book"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-3 mb-0 text-sm">
                                    <span class="text-dark mr-2"><i class="fa fa-arrow-up"></i>
                                        0.00%</span>
                                    <span class="text-nowrap">Since last month</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6 my-3 d-flex align-items-stretch">
                        <div class="card card-stats bg-info">
                            <!-- Card body -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Total customers</h5>
                                        <div class="h2 font-weight-bold mb-0 text-center">
                                            <?php
                                            $query = "select count(*) as total from customer";

                                            $result = $mysql_db->query($query);
                                            $row = $result->fetch_assoc();
                                            echo $row['total'];
                                            ?>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape text-dark rounded-circle ">
                                            <i class="fas fa-user-alt"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-3 mb-0 text-sm">
                                    <span class="text-dark mr-2"><i class="fa fa-arrow-up"></i>
                                        0.00%</span>
                                    <span class="text-nowrap">Since last month</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6 my-3 d-flex align-items-stretch">
                        <div class="card card-stats bg-light">
                            <!-- Card body -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Total employees</h5>
                                        <div class="h2 font-weight-bold mb-0 text-center">
                                            <?php
                                            $query = "select count(*) as total from employee";

                                            $result = $mysql_db->query($query);
                                            $row = $result->fetch_assoc();
                                            echo $row['total'];
                                            ?>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape text-dark rounded-circle ">
                                            <i class="fas fa-user-friends" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-3 mb-0 text-sm">
                                    <span class="text-dark mr-2"><i class="fa fa-arrow-up"></i>
                                        0.00%</span>
                                    <span class="text-nowrap">Since last month</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6 my-3 d-flex align-items-stretch">
                        <div class="card card-stats bg-warning">
                            <!-- Card body -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Total contacts</h5>
                                        <div class="h2 font-weight-bold mb-0 text-center">
                                            <?php
                                            $query = "select count(*) as total from send_email_log";

                                            $result = $mysql_db->query($query);
                                            $row = $result->fetch_assoc();
                                            echo $row['total'];
                                            ?>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape text-dark rounded-circle ">
                                            <i class="fas fa-comment"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-3 mb-0 text-sm">
                                    <span class="text-dark mr-2"><i class="fa fa-arrow-up"></i>
                                        0.00%</span>
                                    <span class="text-nowrap">Since last month</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 id="titleTable">
                                    My Profile
                                </h3>
                            </div>
                            <div class="card-content">

                                <table class="table table-hover table-responsive-lg" id='tableProfile'>
                                    <?php
                                    $sql = "select email, first_name, last_name, 
                                    user_name , phone, birthdate from admin WHERE id= '" . $_SESSION['id_admin'] . "'";
                                    $result = $mysql_db->query($sql);
                                    $row = $result->fetch_assoc();
                                    ?>

                                    <tr>
                                        <th>Username</th>
                                        <td><?php echo $row['user_name']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>First Name</th>
                                        <td><?php echo $row['first_name']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Last Name</th>
                                        <td><?php echo $row['last_name']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td><?php echo $row['email']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Telephone</th>
                                        <td><?php echo $row['phone']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Birthday</th>
                                        <td><?php echo $row['birthdate']; ?></td>
                                    </tr>
                                </table>

                            </div>

                        </div>
                        <div class="col d-flex justify-content-center my-3">
                            <button class="btn btn-outline-primary mx-3" data-toggle="modal" data-target="#profileModal">Edit Profile</button>
                            <button class="btn btn-outline-success mr-2" data-toggle="modal" data-target="#passwordModal" ?>Change
                                Password</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal section -->
    <!-- Edit profile -->
    <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="profileModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Your Profile</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group row">
                            <label for="inputUserName" class="col-sm-2 col-form-label font-weight-bold">Username</label>
                            <div class="col-sm-10" id="formUserName">
                                <input type="text" class="form-control" id="inputUserName" value="<?php echo $row['user_name']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputFirstName" class="col-sm-2 col-form-label font-weight-bold">First
                                Name</label>
                            <div class="col-sm-10" id="formFirstName">
                                <input type="text" class="form-control" id="inputFirstName" value="<?php echo $row['first_name']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputLastName" class="col-sm-2 col-form-label font-weight-bold">Last
                                Name</label>
                            <div class="col-sm-10" id="formLastName">
                                <input type="text" class="form-control" id="inputLastName" value="<?php echo $row['last_name']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail" class="col-sm-2 col-form-label font-weight-bold">Email</label>
                            <div class="col-sm-10" id="formEmail">
                                <input type="email" class="form-control" id="inputEmail" value="<?php echo $row['email'];  ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPhone" class="col-sm-2 col-form-label font-weight-bold">Telephone</label>
                            <div class="col-sm-10" id="formPhone">
                                <input type="text" class="form-control" id="inputPhone" value="<?php echo $row['phone']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputBirthday" class="col-sm-2 col-form-label font-weight-bold">Birthday</label>
                            <div class="col-sm-10" id="formBirthday">
                                <input type="date" class="form-control" id="inputBirthday" value="<?php echo $row['birthdate']; ?>">
                            </div>
                        </div>
                    </form>
                </div>
                <div class=" modal-footer d-flex justify-content-center">
                    <button type="button" class="btn btn-primary" id="confirmProfileBtn">Save
                        changes</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Change password -->
    <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="passwordModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Change your password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group row">
                            <label for="inputOldPassword" class="col-sm-3 col-form-label font-weight-bold">Old
                                Password</label>
                            <div class="col-sm-9" id="formOldPassword">
                                <input type="password" class="form-control" id="inputOldPassword">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputNewPassWord1" class="col-sm-3 col-form-label font-weight-bold">New
                                Password</label>
                            <div class="col-sm-9" id="formNewPassword">
                                <input type="password" class="form-control" id="inputNewPassword">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputNewPassWord2" class="col-sm-3 col-form-label font-weight-bold">Retype New
                                Password</label>
                            <div class="col-sm-9" id="formConfirmNewPassword">
                                <input type="password" class="form-control" id="inputConfirmNewPassword">
                            </div>

                    </form>
                </div>
                <div class="modal-footer d-flex justify-content-center" id="passwordModalFooter">
                    <button type="button" class="btn btn-primary" id="confirmChangePassword">Confirm</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End modal section -->
    <!-- Toast section -->



    <div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 200px;">
        <div class="" style="position: absolute; top: 0; right:0;">

            <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" id="toastPassword" data-delay="5000" data-autohide='false'>
                <div class="toast-header">
                    <strong class="mr-auto">System</strong>
                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="toast-body">
                    Your password has been changed.
                </div>
            </div>

        </div>
    </div>



    <!-- End toast section -->
    <script src="../../assets/js/admin/edit_profile.js"></script>
    <script src="../../assets/js/admin/change_password.js"></script>
</body>

</html>