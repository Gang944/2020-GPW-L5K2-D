<?php

require ('db.php');


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <link rel="icon" href="http://glorywebsdemo.com/themeforest/html/carveordering/images/favicon.ico" type="image/x-icon">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description" />
    <meta content="" name="keywords" />
    <title>My Cart | Order Online Fast Food & Pizza</title>
    <!-- Fonts Here-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet" >
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
    <!-- Fonts here-->
    
    <!-- Style Here -->
    <link rel="stylesheet" href="css/slick.css" >
    <link rel="stylesheet" href="css/styleother.css" >
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >

    <!-- JS -->
    <script src="js/popper.min.js" defer></script>
    <script src="js/jqueryother.min.js" defer></script>
    <script src="js/bootstrap.min.js" defer></script>
</head>

<body>
    <div class="wrapper">
        <!-- Header Start Here -->
        <header id="Header">
            <div class="main_header inner_page">
                <div class="top_nav" id="navbar">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                
        <!-- breadcum section -->
        <!-- Our cart section -->
        <section>
            <div class="main_cart">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="main_Ourmenu">
                                <h2 class="title">Cart</h2>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="cart_list">
                                <ul class="inner_cartlist">
                                    <li class="header">
                                        <div class="main_head">
                                            <div class="edit">&nbsp;</div>
                                            <div class="pro_name">
                                                <h4>Product</h4></div>
                                            <div class="pro_qty">
                                                <h4>Qty</h4></div>
                                            <div class="pro_price">
                                                <h4>Price</h4></div>
                                            <div class="pro_total">
                                                <h4>Total</h4></div>
                                        </div>
                                    </li>

                                    <li class="rows">
                                        <div class="edit">
                                            <div class="edit_div"><a href="#" class="trans del" title="Delete"><i class="fa fa-times" aria-hidden="true"></i></a><a href="#" class="trans edit_new" title="Edit"><i class="fa fa-pencil" aria-hidden="true"></i></a></div>
                                        </div>
                                        <div class="pro_name">
                                            <div class="products">
                                                <div class="pro_img"><img src="images/cart1.png" class="absoImg" alt=""></div>
                                                <div class="pro_descr">
                                                    <h3 class="pro_title"><a href="#" title="Mexican Pizza" class="trans">Deluxe</a></h3>
                                                    <p class="pro_dtls">original & favorite specialty pizza topped</p>
                                                    <p class="size"><span class="size">Size :</span>Medium</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pro_qty">
                                            <div class="number-input">

                                                <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"></button>

                                            </div>
                                        </div>
                                        <div class="pro_price">
                                            <h4>$12.00</h4></div>
                                        <div class="pro_total">
                                            <h4>$12.00</h4></div>
                                    </li>
                                    <li class="rows">
                                        <div class="edit">
                                            <div class="edit_div"><a href="#" class="trans del" title="Delete"><i class="fa fa-times" aria-hidden="true"></i></a><a href="#" class="trans edit_new" title="Edit"><i class="fa fa-pencil" aria-hidden="true"></i></a></div>
                                        </div>
                                        <div class="pro_name">
                                            <div class="products">
                                                <div class="pro_img"><img src="images/cart1.png" class="absoImg" alt=""></div>
                                                <div class="pro_descr">
                                                    <h3 class="pro_title"><a href="#" title="Mexican Pizza" class="trans">Veggie</a></h3>
                                                    <p class="pro_dtls">Veggie lovers rejoice! Pizza topped with mushrooms</p>
                                                    <p class="size"><span class="size">Size :</span>Medium</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pro_qty">
                                            <div class="number-input">

                                                <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"></button>

                                            </div>
                                        </div>
                                        <div class="pro_price">
                                            <h4>$12.00</h4></div>
                                        <div class="pro_total">
                                            <h4>$12.00</h4></div>
                                    </li>
                                    <li class="rows">
                                        <div class="edit">
                                            <div class="edit_div"><a href="#" class="trans del" title="Delete"><i class="fa fa-times" aria-hidden="true"></i></a><a href="#" class="trans edit_new" title="Edit"><i class="fa fa-pencil" aria-hidden="true"></i></a></div>
                                        </div>
                                        <div class="pro_name">
                                            <div class="products">
                                                <div class="pro_img"><img src="images/cart1.png" class="absoImg" alt=""></div>
                                                <div class="pro_descr">
                                                    <h3 class="pro_title"><a href="#" title="Mexican Pizza" class="trans">Barbecue Chicken</a></h3>
                                                    <p class="pro_dtls">Tangy, rich, our homemade BBQ Chicken pizza</p>
                                                    <p class="size"><span class="size">Size :</span>Medium</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pro_qty">
                                            <div class="number-input">

                                                <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"></button>

                                            </div>
                                        </div>
                                        <div class="pro_price">
                                            <h4>$12.00</h4></div>
                                        <div class="pro_total">
                                            <h4>$12.00</h4></div>
                                    </li>
                                    <li class="rows">
                                        <div class="edit">
                                            <div class="edit_div"><a href="#" class="trans del" title="Delete"><i class="fa fa-times" aria-hidden="true"></i></a><a href="#" class="trans edit_new" title="Edit"><i class="fa fa-pencil" aria-hidden="true"></i></a></div>
                                        </div>
                                        <div class="pro_name">
                                            <div class="products">
                                                <div class="pro_img"><img src="images/cart1.png" class="absoImg" alt=""></div>
                                                <div class="pro_descr">
                                                    <h3 class="pro_title"><a href="#" title="Mexican Pizza" class="trans">Egg-ceptional</a></h3>
                                                    <p class="pro_dtls">Enjoy breakfast anytime of the day! Our breakfast pizza</p>
                                                    <p class="size"><span class="size">Size :</span>Medium</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pro_qty">
                                            <div class="number-input">

                                                <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"></button>

                                            </div>
                                        </div>
                                        <div class="pro_price">
                                            <h4>$12.00</h4></div>
                                        <div class="pro_total">
                                            <h4>$12.00</h4></div>
                                    </li>
                                    <li class="rows">
                                        <div class="edit">
                                            <div class="edit_div"><a href="#" class="trans del" title="Delete"><i class="fa fa-times" aria-hidden="true"></i></a><a href="#" class="trans edit_new" title="Edit"><i class="fa fa-pencil" aria-hidden="true"></i></a></div>
                                        </div>
                                        <div class="pro_name">
                                            <div class="products">
                                                <div class="pro_img"><img src="images/cart1.png" class="absoImg" alt=""></div>
                                                <div class="pro_descr">
                                                    <h3 class="pro_title"><a href="#" title="Mexican Pizza" class="trans">lunch Special Pizza</a></h3>
                                                    <p class="pro_dtls">one-topping pizza and a16 ounce drink Specialties.</p>
                                                    <p class="size"><span class="size">Size :</span>Medium</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pro_qty">
                                            <div class="number-input">

                                                <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"></button>

                                            </div>
                                        </div>
                                        <div class="pro_price">
                                            <h4>$12.00</h4></div>
                                        <div class="pro_total">
                                            <h4>$12.00</h4></div>
                                    </li>
                                    <li class="rows">
                                        <div class="edit">
                                            <div class="edit_div"><a href="#" class="trans del" title="Delete"><i class="fa fa-times" aria-hidden="true"></i></a><a href="#" class="trans edit_new" title="Edit"><i class="fa fa-pencil" aria-hidden="true"></i></a></div>
                                        </div>
                                        <div class="pro_name">
                                            <div class="products">
                                                <div class="pro_img"><img src="images/cart1.png" class="absoImg" alt=""></div>
                                                <div class="pro_descr">
                                                    <h3 class="pro_title"><a href="#" title="Mexican Pizza" class="trans">Tuscan Roma</a></h3>
                                                    <p class="pro_dtls">Pizza with Roma Tomatoes, Spinach, Alfredo Sauce</p>
                                                    <p class="size"><span class="size">Size :</span>Medium</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pro_qty">
                                            <div class="number-input">

                                                <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"></button>

                                            </div>
                                        </div>
                                        <div class="pro_price">
                                            <h4>$12.00</h4></div>
                                        <div class="pro_total">
                                            <h4>$12.00</h4></div>
                                    </li>
                                    <li class="rows">
                                        <div class="edit">
                                            <div class="edit_div"><a href="#" class="trans del" title="Delete"><i class="fa fa-times" aria-hidden="true"></i></a><a href="#" class="trans edit_new" title="Edit"><i class="fa fa-pencil" aria-hidden="true"></i></a></div>
                                        </div>
                                        <div class="pro_name">
                                            <div class="products">
                                                <div class="pro_img"><img src="images/cart1.png" class="absoImg" alt=""></div>
                                                <div class="pro_descr">
                                                    <h3 class="pro_title"><a href="#" title="Mexican Pizza" class="trans">Mac & Cheese</a></h3>
                                                    <p class="pro_dtls">Pizza with Macaroni and Cheese</p>
                                                    <p class="size"><span class="size">Size :</span>Medium</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pro_qty">
                                            <div class="number-input">

                                                <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"></button>

                                            </div>
                                        </div>
                                        <div class="pro_price">
                                            <h4>$12.00</h4></div>
                                        <div class="pro_total">
                                            <h4>$12.00</h4></div>
                                    </li>

                                </ul>
                                <div class="coupan_block">
                                    <form method="post" id="couponform">
                                        <div class="coupan_code">
                                            <input type="text" name="Coupancode" class="form-control" placeholder="Coupon Code">
                                            <button type="submit" class="coupon-btn send trans hvr-ripple-out" name="coupon">Apply Coupon</button>
                                            <!-- <input type="submit" value="Apply Coupon" class="send trans"> -->
                                        </div>
                                    </form>
                                    <div class="Redio_diltype">
                                        <ul>
                                            <li>

                                                <input type="radio" id="Delivery" name="deliver_type" value="male" checked>
                                                <label for="Delivery">Delivery</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="takeaway" name="deliver_type" value="female">
                                                <label for="takeaway">Take Away</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="checkout">
                                    <p class="order_dscr">Order with Delivery</p>
                                    <p class="order_total"><span>Total :</span> $156.00</p>
                                    <div class="btn_checkout">
                                        <a href="#" class="trans gray_btn hvr-ripple" title="Update Cart">Update Cart </a>
                                        <a href="http://glorywebsdemo.com/themeforest/html/carveordering/checkout.html" class="trans red_btn squre-btn hvr-ripple-out" title="Proceed to Checkout">Proceed to Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Our cart section -->
        <!-- Quick Order Section -->
        
    <!-- JS Here -->
    <script src="js/custome.js" defer></script>
    <script src="js/slick.js" defer></script>
    <script src="js/jquery.validate.min.js" defer></script>
    <script src="js/jquery.min.js" defer></script>
                            </div>
