<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/MobileStore/css/bootstrap.css">
    <link rel="stylesheet" href="/MobileStore/css/styles.css">
    <link rel="stylesheet" href="/MobileStore/css/all.css">
    <script src="/MobileStore/js/bootstrap.bundle.js"></script>
    <script src="/MobileStore/js/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="/MobileStore/css/cartStyles.css">
     <!-- Font Awesome CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="/MobileStore/index.php">Mobile Store</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/MobileStore/index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./view/shop.html">Shop</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Repair & Services
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                      <li><a class="dropdown-item" href="#">Iphone</a></li>
                      <li><a class="dropdown-item" href="#">Samsung</a></li>
                      <li><a class="dropdown-item" href="#">Huawei</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/MobileStore/view/location.php" tabindex="-1" aria-disabled="true">Location</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/MobileStore/view/contact.php" tabindex="-1" aria-disabled="true">Contact</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </header>
    <div class="container main-section shoping-cart">  
        <div class="row">  
            <div class="col-lg-12 pb-2">  
                <h2> Shoping Cart</h2>  
            </div>  
            <div class="col-lg-12 pl-3 pt-3">  
                <table class="table table-hover border bg-white">  
                    <thead>  
                        <tr>  
                            <th> <h4> <b>  Product Details </b> </h4> </th>  
                            <th> <h4> <b> Price </h4> <b> </th>  
                            <th style="width:10%;"> <h4> <b> Quantity <b> </h4> </th>  
                            <th> <h4> <b> Subtotal <b> </h4> </th>  
                            <th> <h4> <b> Action <b> </h4> </th>  
                        </tr>  
                    </thead>  
                    <tbody>  
                        <tr>  
                            <td>  
                                <div class="row">  
                                    <div class="col-lg-2 Product-img">  
                                        <img src="demo1.png" alt="..." class="img-responsive"/>  
                                    </div>  
                                    <div class="col-lg-10">  
                                        <h5 class="nomargin"> <b>  Lenovo K6 Power </b> </h5>  
                                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod  
                                        tempor incididunt ut labore et dolore magna aliqua. </p>  
                                    </div>  
                                </div>  
                            </td>  
                            <td> <strong> 50,000 </strong> </td>  
                            <td data-th="Quantity">  
                                <b> <input type="number" class="form-control text-center" value="1"> </b>  
                            </td>  
                            <td> <strong> 50,000 </strong> </td>  
                            <td class="actions" data-th="" style="width:10%;">  
                                <button class="btn btn-info btn-sm"> <span class="glyphicon glyphicon-shopping-cart"> </span> </button>  
                                <button class="btn btn-danger btn-sm"> <i class="fa fa-trash-o"> </i> </button>                               
                            </td>  
                        </tr>  
                          
                        <tr>  
                            <td>  
                                <div class="row">  
                                    <div class="col-lg-2 Product-img">  
                                        <img src="demo.png" alt="..." class="img-responsive"/>  
                                    </div>  
                                    <div class="col-lg-10">  
                                        <h5 class="nomargin"> <b>  Iphone 6s </b> </h5>  
                                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod  
                                        tempor incididunt ut labore et dolore magna aliqua. </p>  
                                    </div>  
                                </div>  
                            </td>  
                            <td> <strong> 30,000 </strong> </td>  
                            <td data-th="Quantity">  
                                <b> <input type="number" class="form-control text-center" value="1"> </b>  
                            </td>  
                            </td>  
                            <td> <strong> 30,000 </strong> </td>  
                            <td class="actions" data-th="" style="width:10%;">  
                                <button class="btn btn-info btn-sm"> <span class="glyphicon glyphicon-shopping-cart"> </span> </button>  
                                <button class="btn btn-danger btn-sm"> <i class="fa fa-trash-o"> </i> </button>                               
                            </td>  
                        </tr>  
                        <tr>  
                            <td>  
                                <div class="row">  
                                    <div class="col-lg-2 Product-img">  
                                        <img src="demo1.png" alt="..." class="img-responsive">  
                                    </div>  
                                    <div class="col-lg-10">  
                                        <h5 class="nomargin"> <b>  Lenovo K6 Power </b> </h5>  
                                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod  
                                        tempor incididunt ut labore et dolore magna aliqua. </p>  
                                    </div>  
                                </div>  
                            </td>  
                            <td> <strong> 50,000 </strong> </td>  
                            <td data-th="Quantity">  
                                <b> <input type="number" class="form-control text-center" value="1"> </b>  
                            </td>  
                            </td>  
                            <td> <strong> 50,000 </strong> </td>  
                            <td class="actions" data-th="" style="width:10%;">  
                                <button class="btn btn-info btn-sm"> <span class="glyphicon glyphicon-shopping-cart"> </span> </button>  
                                <button class="btn btn-danger btn-sm"> <i class="fa fa-trash-o"> </i> </button>                               
                            </td>  
                        </tr>  
                    </tbody>  
                    <tfoot>  
                        <tr>  
                            <td> <a href="#" class="btn btn-success "> <i class="fa fa-angle-left"> </i> Continue Shopping </a> </td>  
                            <td colspan="2" class="hidden-xs"> </td>  
                            <td class="hidden-xs text-center" style="width:10%;"> <strong> Total Price : 1,30,000 </strong> </td>  
                            <td> <a href="#" class="btn btn-success btn-block"> Checkout <i class="fa fa-angle-right"> </i> </a> </td>  
                        </tr>  
                    </tfoot>  
                </table>  
            </div>  
        </div>  
    </div> 
  <?php 
		include("../footer.php");
	?>
</body>
</html>