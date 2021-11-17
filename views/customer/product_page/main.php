<?php
   include('../session.php');
?>
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
    <link rel="stylesheet" href="/MobileStore/css/shopStyles.css">
     <!-- Font Awesome CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
    <div class="shop">
      <div class="container mt-5 mb-5">
        <div class="row g-2">
            <div class="col-md-3">
                <div class="t-products p-2">
                    <h6 class="text-uppercase">Smart Phone</h6>
                    <div class="p-lists">
                        <div class="d-flex justify-content-between mt-2"> <span>Samsung</span> <span>23</span> </div>
                        <div class="d-flex justify-content-between mt-2"> <span>Iphone</span> <span>46</span> </div>
                        <div class="d-flex justify-content-between mt-2"> <span>Huawei</span> <span>13</span> </div>
                        <div class="d-flex justify-content-between mt-2"> <span>Xiaomi</span> <span>33</span> </div>
                        <div class="d-flex justify-content-between mt-2"> <span>Nokia</span> <span>12</span> </div>
                        <div class="d-flex justify-content-between mt-2"> <span>Pixel</span> <span>53</span> </div>
                        <div class="d-flex justify-content-between mt-2"> <span>B Phone</span> <span>203</span> </div>
                    </div>
                </div>
                <div class="price p-2">
                    <div class="heading d-flex justify-content-between align-items-center">
                        <h6 class="text-uppercase">Location</h6> <span>--</span>
                    </div>
                    <div class="d-flex justify-content-between mt-2">
                        <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"> <label class="form-check-label" for="flexCheckDefault"> Ho Chi Minh </label> </div> <span>3</span>
                    </div>
                    <div class="d-flex justify-content-between mt-2">
                        <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked> <label class="form-check-label" for="flexCheckChecked"> Ha Noi </label> </div> <span>4</span>
                    </div>
                    <div class="d-flex justify-content-between mt-2">
                        <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked> <label class="form-check-label" for="flexCheckChecked"> Da Nang </label> </div> <span>14</span>
                    </div>
                    <div class="d-flex justify-content-between mt-2">
                        <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked> <label class="form-check-label" for="flexCheckChecked"> Can Tho </label> </div> <span>8</span>
                    </div>
                    <div class="d-flex justify-content-between mt-2">
                        <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked> <label class="form-check-label" for="flexCheckChecked"> Bac Ninh </label> </div> <span>14</span>
                    </div>
                </div>
                <div class="brand p-2">
                    <div class="heading d-flex justify-content-between align-items-center">
                        <h6 class="text-uppercase">Brand</h6> <span>--</span>
                    </div>
                    <div class="d-flex justify-content-between mt-2">
                        <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"> <label class="form-check-label" for="flexCheckDefault"> Apple </label> </div> <span>13</span>
                    </div>
                    <div class="d-flex justify-content-between mt-2">
                        <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked> <label class="form-check-label" for="flexCheckChecked"> Samsung </label> </div> <span>4</span>
                    </div>
                    <div class="d-flex justify-content-between mt-2">
                        <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked> <label class="form-check-label" for="flexCheckChecked"> Huawei </label> </div> <span>24</span>
                    </div>
                    <div class="d-flex justify-content-between mt-2">
                        <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked> <label class="form-check-label" for="flexCheckChecked"> Xiaomi </label> </div> <span>18</span>
                    </div>
                    <div class="d-flex justify-content-between mt-2">
                        <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked> <label class="form-check-label" for="flexCheckChecked"> Nokia </label> </div> <span>44</span>
                    </div>
                    <div class="d-flex justify-content-between mt-2">
                        <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked> <label class="form-check-label" for="flexCheckChecked"> Pixel </label> </div> <span>44</span>
                    </div>
                    <div class="d-flex justify-content-between mt-2">
                        <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked> <label class="form-check-label" for="flexCheckChecked"> B phone </label> </div> <span>44</span>
                    </div>
                </div>
                <div class="type p-2 mb-2">
                    <div class="heading d-flex justify-content-between align-items-center">
                        <h6 class="text-uppercase">Price</h6> <span>--</span>
                    </div>
                    <div class="d-flex justify-content-between mt-2">
                        <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"> <label class="form-check-label" for="flexCheckDefault"> >= 1000$ </label> </div> <span>23</span>
                    </div>
                    <div class="d-flex justify-content-between mt-2">
                        <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked> <label class="form-check-label" for="flexCheckChecked"> 500$ - 1000$ </label> </div> <span>24</span>
                    </div>
                    <div class="d-flex justify-content-between mt-2">
                        <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked> <label class="form-check-label" for="flexCheckChecked"> 100$-500$ </label> </div> <span>14</span>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row g-2">
                    <div class="col-md-4">
                        <div class="product py-4"> <span class="off bg-success">-25% OFF</span>
                            <div class="text-center"> <img src="https://cdn.tgdd.vn/Products/Images/42/223602/iphone-13-blue-1-600x600.jpg" width="200"> </div>
                            <div class="about text-center">
                                <h5>Iphone 13</h5> <span>$1,999.99</span>
                            </div>
                            <div class="cart-button mt-3 px-2 d-flex justify-content-between align-items-center"> <button class="btn btn-primary text-uppercase">Add to cart</button>
                                <div class="add"> <span class="product_fav"><i class="fa fa-heart-o"></i></span> <span class="product_fav"><i class="fa fa-opencart"></i></span> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="product py-4"> <span class="off bg-warning">SALE</span>
                            <div class="text-center"> <img src="https://cdn.tgdd.vn/Products/Images/42/250261/iphone-13-pro-max-gold-1-600x600.jpg" width="200"> </div>
                            <div class="about text-center">
                                <h5>Iphone 13 Pro Max</h5> <span>$123.43</span>
                            </div>
                            <div class="cart-button mt-3 px-2 d-flex justify-content-between align-items-center"> <button class="btn btn-primary text-uppercase">Add to cart</button>
                                <div class="add"> <span class="product_fav"><i class="fa fa-heart-o"></i></span> <span class="product_fav"><i class="fa fa-opencart"></i></span> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="product py-4">
                            <div class="text-center"> <img src="https://cdn.tgdd.vn/Products/Images/42/229949/samsung-galaxy-z-flip-3-cream-1-600x600.jpg" width="200"> </div>
                            <div class="about text-center">
                                <h5>Samsung Flip3</h5> <span>$1,999.99</span>
                            </div>
                            <div class="cart-button mt-3 px-2 d-flex justify-content-between align-items-center"> <button class="btn btn-primary text-uppercase">Add to cart</button>
                                <div class="add"> <span class="product_fav"><i class="fa fa-heart-o"></i></span> <span class="product_fav"><i class="fa fa-opencart"></i></span> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="product py-4"> <span class="off bg-success">-10% OFF</span>
                            <div class="text-center"> <img src="https://cdn.tgdd.vn/Products/Images/42/198419/google-pixel-4-1-600x600.jpg" width="200"> </div>
                            <div class="about text-center">
                                <h5>Pixel 4</h5> <span>$1,245.89</span>
                            </div>
                            <div class="cart-button mt-3 px-2 d-flex justify-content-between align-items-center"> <button class="btn btn-primary text-uppercase">Add to cart</button>
                                <div class="add"> <span class="product_fav"><i class="fa fa-heart-o"></i></span> <span class="product_fav"><i class="fa fa-opencart"></i></span> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="product py-4">
                            <!-- <span class="off bg-success">-25% OFF</span> -->
                            <div class="text-center"> <img src="https://clickbuy.com.vn/uploads/2019/04/bphone-3-pro-den.png" width="200"> </div>
                            <div class="about text-center">
                                <h5>Bphone 3</h5> <span>$2,999.99</span>
                            </div>
                            <div class="cart-button mt-3 px-2 d-flex justify-content-between align-items-center"> <button class="btn btn-primary text-uppercase">Add to cart</button>
                                <div class="add"> <span class="product_fav"><i class="fa fa-heart-o"></i></span> <span class="product_fav"><i class="fa fa-opencart"></i></span> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="product py-4"> <span class="off bg-success">-5% OFF</span>
                            <div class="text-center"> <img src="https://i2.wp.com/nokiamob.net/wp-content/uploads/2020/06/Nokia-7.2.jpg?fit=1080%2C876&ssl=1" width="200"> </div>
                            <div class="about text-center">
                                <h5>Nokia 11</h5> <span>$999.99</span>
                            </div>
                            <div class="cart-button mt-3 px-2 d-flex justify-content-between align-items-center"> <button class="btn btn-primary text-uppercase">Add to cart</button>
                                <div class="add"> <span class="product_fav"><i class="fa fa-heart-o"></i></span> <span class="product_fav"><i class="fa fa-opencart"></i></span> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
</html>