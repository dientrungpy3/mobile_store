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
    <link rel="stylesheet" href="../../assets/css/admin/transaction.css">
</head>

<body style="overflow: unset;">
    <!-- Side bar -->

    <nav class="navbar navbar-expand-md navbar-dark bg-dark border-bottom sticky-top">
        <a class="navbar-brand" href="index.php">
            <img src="../../assets/images/admin/book_brand.png" width="30" height="30" class="d-inline-block align-top" alt="">
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
                        <img class="rounded-circle" alt="Image placeholder" src="../../assets/images/admin/avatar.jpg" width="30" height="30">
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
                            <a class="left_bar_link nav-link" href="index.php">
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
                            <a class="left_bar_link nav-link active" href="transaction.php">
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
                                    Transaction
                                </h3>
                            </div>
                            <div class="card-content">

                                <table class="table table-striped table-hover table-responsive-lg">
                                    <thead>
                                        <tr>
                                            <th class="font-weight-bold">ID</th>
                                            <th class="font-weight-bold">Customer ID</th>
                                            <th class="font-weight-bold">Total Price</th>
                                            <th class="font-weight-bold">Time</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sql = "select * from shopping_log";
                                        $result = $mysql_db->query($sql);
                                        if ($result) {
                                            while ($row = $result->fetch_assoc()) {
                                        ?>
                                                <tr id=<?php echo $row['id']; ?>>
                                                    <td><?php echo $row['id']; ?></td>
                                                    <td><?php echo $row['customer_id']; ?></td>
                                                    <td><?php echo $row['total_price']; ?></td>
                                                    <td><?php echo $row['created_at']; ?></td>

                                                    <th><button class="btn btn-info" data-toggle="collapse" data-target=<?php echo "#detail" . $row['id']; ?> aria-expanded="false" aria-controls=<?php echo "detail" . $row['id']; ?>>View
                                                            detail</button>
                                                    </th>
                                                    <td><button class="btn_delete btn btn-danger" data-toggle="modal" data-rowid=<?php echo $row['id']; ?> data-target="#deleteConfirm">Delete</button></td>
                                                </tr>

                                                <tr id=<?php echo $row['id'] . "collapse"; ?>>
                                                    <th colspan="9">
                                                        <div class="card collapse" id=<?php echo "detail" . $row['id']; ?>>
                                                            <div class="card-header">
                                                                <h6 id="titleTable">
                                                                    <?php
                                                                    $sql = "select name from customer where id = '" . $row['customer_id'] . "'";
                                                                    $result1 = $mysql_db->query($sql);
                                                                    $row1 = $result1->fetch_assoc();
                                                                    echo $row1['name'] . "'s shopping list";
                                                                    ?>
                                                                </h6>
                                                            </div>
                                                            <div class="card-content p-3">
                                                                <table class="table table-striped table-hover table-responsive-lg">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="font-weight-bold">Book ID</th>
                                                                            <th class="font-weight-bold">Name</th>
                                                                            <th class="font-weight-bold">Category</th>
                                                                            <th class="font-weight-bold">Image</th>

                                                                            <th class="font-weight-bold">Unit Price</th>
                                                                            <th class="font-weight-bold">Quantity</th>
                                                                            <th class="font-weight-bold">Total Price</th>


                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php
                                                                        $sql = "select * from shopping_log_entry where log_id = '" . $row['id'] . "'";
                                                                        $result2 = $mysql_db->query($sql);
                                                                        if ($result2) {
                                                                            while ($row2 = $result2->fetch_assoc()) {
                                                                        ?>
                                                                                <tr>
                                                                                    <td><?php echo $row2['book_id'] ?></td>
                                                                                    <td>

                                                                                        <?php
                                                                                        $sql = "select name, link_image, price, category from book where id = '" . $row2['book_id'] . "'";
                                                                                        $result3 = $mysql_db->query($sql);
                                                                                        if ($result3) {
                                                                                            $row3 = $result3->fetch_assoc();
                                                                                        }
                                                                                        echo $row3['name'];
                                                                                        ?>
                                                                                    </td>
                                                                                    <td><?php echo $row3['category'] ?></td>
                                                                                    <td>
                                                                                        <img src="<?php echo str_replace('../../../', '../../', $row3['link_image']); ?>" alt="" width="50" height="50">
                                                                                    </td>
                                                                                    <td><?php echo $row3['price']; ?></td>
                                                                                    <td><?php echo $row2['quantity'] ?></td>
                                                                                    <td><?php echo $row3['price'] * $row2['quantity']; ?>
                                                                                    </td>
                                                                                </tr>
                                                                        <?php
                                                                            }
                                                                        }
                                                                        ?>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </th>
                                                </tr>
                                        <?php
                                            }
                                        }
                                        ?>
                                        <tr>
                                            <th colspan="10" class="text-center">
                                                ---End---
                                            </th>
                                        </tr>
                                    </tbody>

                                </table>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal delete confirm-->
    <div class="modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="deleteConfirm">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Delete Transaction Log</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    This operation will remove this log permanently.
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button type="button" id="confirmDeleteBtn" class="btn btn-primary">Confirm</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <script src="../../assets/js/admin/transaction.js"></script>
</body>

</html>