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
    <title>Menu | Order Online </title>
    <!-- Fonts Here-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet" >
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet" >
    <!-- Fonts here-->

    <!-- Style Here -->
    <link rel="stylesheet" href="css/slick.css" >
    <link rel="stylesheet" href="css/styleother.css" >
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >

    <!-- JS -->
    <script src="js/popper.min.js" defer></script>
    <script src="js/jquery.min.js" defer></script>
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
                                
                                </div>
                                
                                    
                                    <div class="Cart">
                                        <a href="cart.php" title="Cart">
                                            <span class="Cart_count">Cart : (0) $00.00</span>
                                            <!-- <i class="fa fa-shopping-cart" aria-hidden="true"></i> -->
                                            <img class="cart_img" src="http://glorywebsdemo.com/themeforest/html/carveordering/images/cart_1.webp" alt="cart_1">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button id="burger" class="open-main-nav">
                    <span class="burger"></span>
                </button>
                <div class="H_banner">
                    <div class="main_pitch">
                        <h1 class="page_title">Pizza</h1>
                    </div>
                </div>
            </div>
            <div class="device">
                <nav class="main-nav" id="main-nav">
                    <div class="logo">
                        
                    </div>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="menu.html">Order</a></li>
                        <li><a href="login.html">Login</a></li>
                        <li><a href="login.html">Register</a></li>
                    </ul>
                </nav>
            </div>
    </div>
        </header>
        <!-- Header end Here -->

        <!-- breadcum section -->

        <div class="breadcum">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main_breadcum">
                            <ul>
                                <li><a href="index.html" class="trans" title="Home">Home</a></li>
                                <li>Our Menu</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- breadcum section -->
        <!-- Our Menu section -->
        <!-- Our Menu section -->
        <section>
            <div class="Our_menu">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="main_Ourmenu">
                                <h2 class="title">Pizza</h2>
                                <div class="content_menu bottom_pitch">
                                    <div class="main_bpitch">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item pizza">
                                                <a class="nav-link active trans" data-toggle="tab" href="#pizza" title="Pizza">
                                                    <span class="icon">Pizza</span>
                                                </a>
                                            </li>
                                            <li class="nav-item burger1">
                                                <a class="nav-link trans" data-toggle="tab" href="#burger1" title="Burgers">
                                                    <span class="icon">Burgers</span>
                                                </a>
                                            </li>
                                            <li class="nav-item salads">
                                                <a class="nav-link trans" data-toggle="tab" href="#salad" title="Salads">
                                                    <span class="icon">Salads</span>
                                                </a>
                                            </li>
                                            <li class="nav-item fries">
                                                <a class="nav-link trans" data-toggle="tab" href="#fries" title="Fries">
                                                    <span class="icon">Fries</span>
                                                </a>
                                            </li>
                                            <li class="nav-item drinks">
                                                <a class="nav-link trans" data-toggle="tab" href="#drinks" title="Drinks">
                                                    <span class="icon">Drinks</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="tab-content">

                                    <div id="pizza" class=" tab-pane active">
                                        <div class="content_row">
                                            <div class="left_cntbar">
                                                <div class="pizza_items">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="P_itmesbox">
                                                                <div class="PT_image"><img src="http://glorywebsdemo.com/themeforest/html/carveordering/images/pizza_img2.webp" class="absoImg" alt=""></div>
                                                                <div class="PT_dscr">
                                                                    <h3 class="PT_title">Deluxe</h3>
                                                                    <p class="PT_dtls"> original & favorite specialty pizza topped
                                                                    </p>
                                                                    <div class="PT_optn">
                                                                        <ul class="PT-radio">
                                                                            <li>
                                                                                <input type="radio" name="radio-group-1" id="radio-1" checked="checked" />
                                                                                <label for="radio-1">Medium</label>
                                                                            </li>
                                                                            <li>
                                                                                <input type="radio" name="radio-group-1" id="radio-2" />
                                                                                <label for="radio-2">Large</label>
                                                                            </li>
                                                                            <li>
                                                                                <input type="radio" name="radio-group-1" id="radio-3" />
                                                                                <label for="radio-3">Extra Large</label>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="price_block">
                                                                        <div class="price">$ 10.00</div>
                                                                        <a href="#" class="card_btn">Add to cart</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="P_itmesbox">
                                                                <div class="PT_image"><img src="http://glorywebsdemo.com/themeforest/html/carveordering/images/pizza_img2.webp" class="absoImg" alt=""></div>
                                                                <div class="PT_dscr">
                                                                    <h3 class="PT_title">Veggie</h3>
                                                                    <p class="PT_dtls">Veggie lovers rejoice! Pizza topped with mushrooms
                                                                    </p>
                                                                    <div class="PT_optn">
                                                                        <ul class="PT-radio">
                                                                            <li>
                                                                                <input type="radio" name="radio-group-2" id="radio-4" checked="checked" />
                                                                                <label for="radio-4">Medium</label>
                                                                            </li>
                                                                            <li>
                                                                                <input type="radio" name="radio-group-2" id="radio-5" />
                                                                                <label for="radio-5">Large</label>
                                                                            </li>
                                                                            <li>
                                                                                <input type="radio" name="radio-group-2" id="radio-6" />
                                                                                <label for="radio-6">Extra Large</label>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="price_block">
                                                                        <div class="price">$ 10.00</div>
                                                                        <a href="#" class="card_btn">Add to cart</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="P_itmesbox">
                                                                <div class="PT_image"><img src="http://glorywebsdemo.com/themeforest/html/carveordering/images/pizza_img3.webp" class="absoImg" alt=""></div>
                                                                <div class="PT_dscr">
                                                                    <h3 class="PT_title">All Meat</h3>
                                                                    <p class="PT_dtls">Our famous meat pizza is topped
                                                                    </p>
                                                                    <div class="PT_optn">
                                                                        <ul class="PT-radio">
                                                                            <li>
                                                                                <input type="radio" name="radio-group-3" id="radio-7" checked="checked" />
                                                                                <label for="radio-7">Medium</label>
                                                                            </li>
                                                                            <li>
                                                                                <input type="radio" name="radio-group-3" id="radio-8" />
                                                                                <label for="radio-8">Large</label>
                                                                            </li>
                                                                            <li>
                                                                                <input type="radio" name="radio-group-3" id="radio-9" />
                                                                                <label for="radio-9">Extra Large</label>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="price_block">
                                                                        <div class="price">$ 10.00</div>
                                                                        <a href="#" class="card_btn">Add to cart</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="P_itmesbox">
                                                                <div class="PT_image"><img src="http://glorywebsdemo.com/themeforest/html/carveordering/images/pizza_img4.webp" class="absoImg" alt=""></div>
                                                                <div class="PT_dscr">
                                                                    <h3 class="PT_title">Barbecue Chicken</h3>
                                                                    <p class="PT_dtls">Tangy, rich, our homemade BBQ Chicken pizza
                                                                    </p>
                                                                    <div class="PT_optn">
                                                                        <ul class="PT-radio">
                                                                            <li>
                                                                                <input type="radio" name="radio-group-4" id="radio-10" checked="checked" />
                                                                                <label for="radio-10">Medium</label>
                                                                            </li>
                                                                            <li>
                                                                                <input type="radio" name="radio-group-4" id="radio-11" />
                                                                                <label for="radio-11">Large</label>
                                                                            </li>
                                                                            <li>
                                                                                <input type="radio" name="radio-group-4" id="radio-12" />
                                                                                <label for="radio-12">Extra Large</label>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="price_block">
                                                                        <div class="price">$ 10.00</div>
                                                                        <a href="#" class="card_btn">Add to cart</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="P_itmesbox">
                                                                <div class="PT_image"><img src="http://glorywebsdemo.com/themeforest/html/carveordering/images/pizza_img4.webp" class="absoImg" alt=""></div>
                                                                <div class="PT_dscr">
                                                                    <h3 class="PT_title">Egg-ceptional</h3>
                                                                    <p class="PT_dtls">Enjoy breakfast anytime of the day! Our breakfast pizza
                                                                    </p>
                                                                    <div class="PT_optn">
                                                                        <ul class="PT-radio">
                                                                            <li>
                                                                                <input type="radio" name="radio-group-5" id="radio-13" checked="checked" />
                                                                                <label for="radio-13">Medium</label>
                                                                            </li>
                                                                            <li>
                                                                                <input type="radio" name="radio-group-5" id="radio-14" />
                                                                                <label for="radio-14">Large</label>
                                                                            </li>
                                                                            <li>
                                                                                <input type="radio" name="radio-group-5" id="radio-15" />
                                                                                <label for="radio-15">Extra Large</label>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="price_block">
                                                                        <div class="price">$ 10.00</div>
                                                                        <a href="#" class="card_btn">Add to cart</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="P_itmesbox">
                                                                <div class="PT_image"><img src="images/pizza_img5.png" class="absoImg" alt=""></div>
                                                                <div class="PT_dscr">
                                                                    <h3 class="PT_title">lunch Special Pizza</h3>
                                                                    <p class="PT_dtls">one-topping pizza and a16 ounce drink Specialties.
                                                                    </p>
                                                                    <div class="PT_optn">
                                                                        <ul class="PT-radio">
                                                                            <li>
                                                                                <input type="radio" name="radio-group-6" id="radio-16" checked="checked" />
                                                                                <label for="radio-16">Medium</label>
                                                                            </li>
                                                                            <li>
                                                                                <input type="radio" name="radio-group-6" id="radio-17" />
                                                                                <label for="radio-17">Large</label>
                                                                            </li>
                                                                            <li>
                                                                                <input type="radio" name="radio-group-6" id="radio-18" />
                                                                                <label for="radio-18">Extra Large</label>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="price_block">
                                                                        <div class="price">$ 10.00</div>
                                                                        <a href="#" class="card_btn">Add to cart</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="P_itmesbox">
                                                                <div class="PT_image"><img src="http://glorywebsdemo.com/themeforest/html/carveordering/images/pizza_img6.webp" class="absoImg" alt=""></div>
                                                                <div class="PT_dscr">
                                                                    <h3 class="PT_title">Buffalo Chicken</h3>
                                                                    <p class="PT_dtls">Pizza with Chicken, Hot Sauce, Ranch Dressing
                                                                    </p>
                                                                    <div class="PT_optn">
                                                                        <ul class="PT-radio">
                                                                            <li>
                                                                                <input type="radio" name="radio-group-7" id="radio-19" checked="checked" />
                                                                                <label for="radio-19">Medium</label>
                                                                            </li>
                                                                            <li>
                                                                                <input type="radio" name="radio-group-7" id="radio-20" />
                                                                                <label for="radio-20">Large</label>
                                                                            </li>
                                                                            <li>
                                                                                <input type="radio" name="radio-group-7" id="radio-21" />
                                                                                <label for="radio-21">Extra Large</label>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="price_block">
                                                                        <div class="price">$ 10.00</div>
                                                                        <a href="#" class="card_btn">Add to cart</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="P_itmesbox">
                                                                <div class="PT_image"><img src="http://glorywebsdemo.com/themeforest/html/carveordering/images/pizza_img1.webp" class="absoImg" alt=""></div>
                                                                <div class="PT_dscr">
                                                                    <h3 class="PT_title">Tuscan Roma</h3>
                                                                    <p class="PT_dtls">Pizza with Roma Tomatoes, Spinach, Alfredo Sauce
                                                                    </p>
                                                                    <div class="PT_optn">
                                                                        <ul class="PT-radio">
                                                                            <li>
                                                                                <input type="radio" name="radio-group-8" id="radio-22" checked="checked" />
                                                                                <label for="radio-22">Medium</label>
                                                                            </li>
                                                                            <li>
                                                                                <input type="radio" name="radio-group-8" id="radio-23" />
                                                                                <label for="radio-23">Large</label>
                                                                            </li>
                                                                            <li>
                                                                                <input type="radio" name="radio-group-8" id="radio-24" />
                                                                                <label for="radio-24">Extra Large</label>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="price_block">
                                                                        <div class="price">$ 10.00</div>
                                                                        <a href="#" class="card_btn">Add to cart</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="P_itmesbox">
                                                                <div class="PT_image"><img src="http://glorywebsdemo.com/themeforest/html/carveordering/images/pizza_img2.webp" class="absoImg" alt=""></div>
                                                                <div class="PT_dscr">
                                                                    <h3 class="PT_title">Mac & Cheese</h3>
                                                                    <p class="PT_dtls">Pizza with Macaroni and Cheese
                                                                    </p>
                                                                    <div class="PT_optn">
                                                                        <ul class="PT-radio">
                                                                            <li>
                                                                                <input type="radio" name="radio-group-9" id="radio-25" checked="checked" />
                                                                                <label for="radio-25">Medium</label>
                                                                            </li>
                                                                            <li>
                                                                                <input type="radio" name="radio-group-9" id="radio-26" />
                                                                                <label for="radio-26">Large</label>
                                                                            </li>
                                                                            <li>
                                                                                <input type="radio" name="radio-group-9" id="radio-27" />
                                                                                <label for="radio-27">Extra Large</label>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="price_block">
                                                                        <div class="price">$ 10.00</div>
                                                                        <a href="#" class="card_btn">Add to cart</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div id="burger1" class=" tab-pane fade">
                                        <div class="content_row">
                                            <div class="left_cntbar">
                                                <div class="pizza_items">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="P_itmesbox">
                                                                <div class="PT_image"><img src="http://glorywebsdemo.com/themeforest/html/carveordering/images/pro_img2.webp" class="absoImg" alt=""></div>
                                                                <div class="PT_dscr">
                                                                    <h3 class="PT_title">Luger Burger</h3>
                                                                    <p class="PT_dtls">Luger Burger features extra thick bacon and more half pound of beef.
                                                                    </p>

                                                                    <div class="price_block">
                                                                        <div class="price">$ 10.00</div>
                                                                        <a href="#" class="card_btn">Add to cart</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="P_itmesbox">
                                                                <div class="PT_image"><img src="http://glorywebsdemo.com/themeforest/html/carveordering/images/pro_img2.webp" class="absoImg" alt=""></div>
                                                                <div class="PT_dscr">
                                                                    <h3 class="PT_title">Le Pigeon Burger</h3>
                                                                    <p class="PT_dtls">Le Pigeon Burger has smoky flavor enhanced with each topping
                                                                    </p>

                                                                    <div class="price_block">
                                                                        <div class="price">$ 10.00</div>
                                                                        <a href="#" class="card_btn">Add to cart</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="P_itmesbox">
                                                                <div class="PT_image"><img src="http://glorywebsdemo.com/themeforest/html/carveordering/images/pro_img2.webp" class="absoImg" alt=""></div>
                                                                <div class="PT_dscr">
                                                                    <h3 class="PT_title">Taco Burger</h3>
                                                                    <p class="PT_dtls">Tacos are amazing, no doubt about it; need this amazing combo
                                                                    </p>

                                                                    <div class="price_block">
                                                                        <div class="price">$ 12.00</div>
                                                                        <a href="#" class="card_btn">Add to cart</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="P_itmesbox">
                                                                <div class="PT_image"><img src="http://glorywebsdemo.com/themeforest/html/carveordering/images/Burgers.webp" class="absoImg" alt=""></div>
                                                                <div class="PT_dscr">
                                                                    <h3 class="PT_title">Chicken Burger</h3>
                                                                    <p class="PT_dtls">The Chicken Caesar Burger is special because it retains the freshness of chicken
                                                                    </p>

                                                                    <div class="price_block">
                                                                        <div class="price">$ 15.00</div>
                                                                        <a href="#" class="card_btn">Add to cart</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="P_itmesbox">
                                                                <div class="PT_image"><img src="http://glorywebsdemo.com/themeforest/html/carveordering/images/Burgers.webp" class="absoImg" alt=""></div>
                                                                <div class="PT_dscr">
                                                                    <h3 class="PT_title">Cheese Burger</h3>
                                                                    <p class="PT_dtls">Easily the best burger in all of Germany, this enormous preparation
                                                                    </p>

                                                                    <div class="price_block">
                                                                        <div class="price">$ 10.00</div>
                                                                        <a href="#" class="card_btn">Add to cart</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="P_itmesbox">
                                                                <div class="PT_image"><img src="http://glorywebsdemo.com/themeforest/html/carveordering/images/Burgers.webp" class="absoImg" alt=""></div>
                                                                <div class="PT_dscr">
                                                                    <h3 class="PT_title">Chicken Burger</h3>
                                                                    <p class="PT_dtls">The Chicken Caesar Burger is special because it retains the freshness of chicken
                                                                    </p>

                                                                    <div class="price_block">
                                                                        <div class="price">$ 15.00</div>
                                                                        <a href="#" class="card_btn">Add to cart</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="P_itmesbox">
                                                                <div class="PT_image"><img src="http://glorywebsdemo.com/themeforest/html/carveordering/images/pro_img2.webp" class="absoImg" alt=""></div>
                                                                <div class="PT_dscr">
                                                                    <h3 class="PT_title">Luger Burger</h3>
                                                                    <p class="PT_dtls">Luger Burger features extra thick bacon and more half pound of beef.
                                                                    </p>

                                                                    <div class="price_block">
                                                                        <div class="price">$ 10.00</div>
                                                                        <a href="#" class="card_btn">Add to cart</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="P_itmesbox">
                                                                <div class="PT_image"><img src="http://glorywebsdemo.com/themeforest/html/carveordering/images/pro_img2.webp" class="absoImg" alt=""></div>
                                                                <div class="PT_dscr">
                                                                    <h3 class="PT_title">Le Pigeon Burger</h3>
                                                                    <p class="PT_dtls">Le Pigeon Burger has smoky flavor enhanced with each topping
                                                                    </p>

                                                                    <div class="price_block">
                                                                        <div class="price">$ 10.00</div>
                                                                        <a href="#" class="card_btn">Add to cart</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="P_itmesbox">
                                                                <div class="PT_image"><img src="http://glorywebsdemo.com/themeforest/html/carveordering/images/pro_img2.webp" class="absoImg" alt=""></div>
                                                                <div class="PT_dscr">
                                                                    <h3 class="PT_title">Taco Burger</h3>
                                                                    <p class="PT_dtls">Tacos are amazing, no doubt about it; need this amazing combo
                                                                    </p>

                                                                    <div class="price_block">
                                                                        <div class="price">$ 12.00</div>
                                                                        <a href="#" class="card_btn">Add to cart</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div id="salad" class=" tab-pane fade">
                                        <div class="content_row">
                                            <div class="left_cntbar">
                                                <div class="pizza_items">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="P_itmesbox">
                                                                <div class="PT_image"><img src="http://glorywebsdemo.com/themeforest/html/carveordering/images/pro_img3.webp" class="absoImg" alt=""></div>
                                                                <div class="PT_dscr">
                                                                    <h3 class="PT_title">Cobb salad</h3>
                                                                    <p class="PT_dtls">The only way to make this dish heavier is to add bricks.
                                                                    </p>

                                                                    <div class="price_block">
                                                                        <div class="price">$ 10.00</div>
                                                                        <a href="#" class="card_btn">Add to cart</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="P_itmesbox">
                                                                <div class="PT_image"><img src="http://glorywebsdemo.com/themeforest/html/carveordering/images/pro_img3.webp" class="absoImg" alt=""></div>
                                                                <div class="PT_dscr">
                                                                    <h3 class="PT_title">Larb</h3>
                                                                    <p class="PT_dtls">It's usually served with raw vegetables and sticky rice. vegetables
                                                                    </p>

                                                                    <div class="price_block">
                                                                        <div class="price">$ 10.00</div>
                                                                        <a href="#" class="card_btn">Add to cart</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="P_itmesbox">
                                                                <div class="PT_image"><img src="http://glorywebsdemo.com/themeforest/html/carveordering/images/pro_img3.webp" class="absoImg" alt=""></div>
                                                                <div class="PT_dscr">
                                                                    <h3 class="PT_title">Cobb salad</h3>
                                                                    <p class="PT_dtls">The only way to make this dish heavier is to add bricks.
                                                                    </p>

                                                                    <div class="price_block">
                                                                        <div class="price">$ 10.00</div>
                                                                        <a href="#" class="card_btn">Add to cart</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="P_itmesbox">
                                                                <div class="PT_image"><img src="http://glorywebsdemo.com/themeforest/html/carveordering/images/pro_img3.webp" class="absoImg" alt=""></div>
                                                                <div class="PT_dscr">
                                                                    <h3 class="PT_title">Waldorf salad</h3>
                                                                    <p class="PT_dtls">Unlike the many folk salads featured here, Waldorf salad
                                                                    </p>

                                                                    <div class="price_block">
                                                                        <div class="price">$ 10.00</div>
                                                                        <a href="#" class="card_btn">Add to cart</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="P_itmesbox">
                                                                <div class="PT_image"><img src="http://glorywebsdemo.com/themeforest/html/carveordering/images/Salad.webp" class="absoImg" alt=""></div>
                                                                <div class="PT_dscr">
                                                                    <h3 class="PT_title">Gado-gado</h3>
                                                                    <p class="PT_dtls">Gado-gado literally means "mix-mix." It's an Indonesian
                                                                    </p>

                                                                    <div class="price_block">
                                                                        <div class="price">$ 10.00</div>
                                                                        <a href="#" class="card_btn">Add to cart</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="P_itmesbox">
                                                                <div class="PT_image"><img src="http://glorywebsdemo.com/themeforest/html/carveordering/images/pro_img3.webp" class="absoImg" alt=""></div>
                                                                <div class="PT_dscr">
                                                                    <h3 class="PT_title">Larb</h3>
                                                                    <p class="PT_dtls">It's usually served with raw vegetables and sticky rice. vegetables
                                                                    </p>

                                                                    <div class="price_block">
                                                                        <div class="price">$ 10.00</div>
                                                                        <a href="#" class="card_btn">Add to cart</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="P_itmesbox">
                                                                <div class="PT_image"><img src="http://glorywebsdemo.com/themeforest/html/carveordering/images/pro_img3.webp" class="absoImg" alt=""></div>
                                                                <div class="PT_dscr">
                                                                    <h3 class="PT_title">Cobb salad</h3>
                                                                    <p class="PT_dtls">The only way to make this dish heavier is to add bricks.
                                                                    </p>

                                                                    <div class="price_block">
                                                                        <div class="price">$ 10.00</div>
                                                                        <a href="#" class="card_btn">Add to cart</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="P_itmesbox">
                                                                <div class="PT_image"><img src="http://glorywebsdemo.com/themeforest/html/carveordering/images/Salad.webp" class="absoImg" alt=""></div>
                                                                <div class="PT_dscr">
                                                                    <h3 class="PT_title">Gado-gado</h3>
                                                                    <p class="PT_dtls">Gado-gado literally means "mix-mix." It's an Indonesian
                                                                    </p>

                                                                    <div class="price_block">
                                                                        <div class="price">$ 10.00</div>
                                                                        <a href="#" class="card_btn">Add to cart</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="P_itmesbox">
                                                                <div class="PT_image"><img src="http://glorywebsdemo.com/themeforest/html/carveordering/images/pro_img3.webp" class="absoImg" alt=""></div>
                                                                <div class="PT_dscr">
                                                                    <h3 class="PT_title">Larb</h3>
                                                                    <p class="PT_dtls">It's usually served with raw vegetables and sticky rice. vegetables
                                                                    </p>

                                                                    <div class="price_block">
                                                                        <div class="price">$ 10.00</div>
                                                                        <a href="#" class="card_btn">Add to cart</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div id="fries" class=" tab-pane fade">
                                        <div class="content_row">
                                            <div class="left_cntbar">
                                                <div class="pizza_items">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="P_itmesbox">
                                                                <div class="PT_image"><img src="http://glorywebsdemo.com/themeforest/html/carveordering/images/pro_img4.webp" class="absoImg" alt=""></div>
                                                                <div class="PT_dscr">
                                                                    <h3 class="PT_title">Potato Wedges</h3>
                                                                    <p class="PT_dtls">Potato wedges sit at the very bottom of the french fry totem pole
                                                                    </p>
                                                                    <div class="PT_optn">
                                                                        <ul class="PT-radio">
                                                                            <li>
                                                                                <input type="radio" name="radio-group-10" id="Medium" checked="checked" />
                                                                                <label for="Medium">Medium</label>
                                                                            </li>
                                                                            <li>
                                                                                <input type="radio" name="radio-group-10" id="Large" />
                                                                                <label for="Large">Large</label>
                                                                            </li>
                                                                            <li>
                                                                                <input type="radio" name="radio-group-10" id="Extra-Large" />
                                                                                <label for="Extra-Large">Extra Large</label>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="price_block">
                                                                        <div class="price">$ 10.00</div>
                                                                        <a href="#" class="card_btn">Add to cart</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="P_itmesbox">
                                                                <div class="PT_image"><img src="http://glorywebsdemo.com/themeforest/html/carveordering/images/Fries.webp" class="absoImg" alt=""></div>
                                                                <div class="PT_dscr">
                                                                    <h3 class="PT_title">Waffle Fries</h3>
                                                                    <p class="PT_dtls">Waffle fries have the exact opposite problem of the potato wedges
                                                                    </p>
                                                                    <div class="PT_optn">
                                                                        <ul class="PT-radio">
                                                                            <li>
                                                                                <input type="radio" name="radio-group-11" id="radio-28" checked="checked" />
                                                                                <label for="radio-28">Medium</label>
                                                                            </li>
                                                                            <li>
                                                                                <input type="radio" name="radio-group-11" id="radio-29" />
                                                                                <label for="radio-29">Large</label>
                                                                            </li>
                                                                            <li>
                                                                                <input type="radio" name="radio-group-11" id="radio-30" />
                                                                                <label for="radio-30">Extra Large</label>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="price_block">
                                                                        <div class="price">$ 10.00</div>
                                                                        <a href="#" class="card_btn">Add to cart</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="P_itmesbox">
                                                                <div class="PT_image"><img src="http://glorywebsdemo.com/themeforest/html/carveordering/images/pro_img4.webp" class="absoImg" alt=""></div>
                                                                <div class="PT_dscr">
                                                                    <h3 class="PT_title">Sweet Potato Fries</h3>
                                                                    <p class="PT_dtls">We don't hate sweet potato fries, but we certainly don't love them.
                                                                    </p>
                                                                    <div class="PT_optn">
                                                                        <ul class="PT-radio">
                                                                            <li>
                                                                                <input type="radio" name="radio-group-12" id="radio-31" checked="checked" />
                                                                                <label for="radio-31">Medium</label>
                                                                            </li>
                                                                            <li>
                                                                                <input type="radio" name="radio-group-12" id="radio-32" />
                                                                                <label for="radio-32">Large</label>
                                                                            </li>
                                                                            <li>
                                                                                <input type="radio" name="radio-group-12" id="radio-33" />
                                                                                <label for="radio-33">Extra Large</label>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="price_block">
                                                                        <div class="price">$ 10.00</div>
                                                                        <a href="#" class="card_btn">Add to cart</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="P_itmesbox">
                                                                <div class="PT_image"><img src="http://glorywebsdemo.com/themeforest/html/carveordering/images/pro_img4.webp" class="absoImg" alt=""></div>
                                                                <div class="PT_dscr">
                                                                    <h3 class="PT_title">Crinkle Cut Fries</h3>
                                                                    <p class="PT_dtls">Crinkle cut fries just look like a good time. They're thick and heavy
                                                                    </p>
                                                                    <div class="PT_optn">
                                                                        <ul class="PT-radio">
                                                                            <li>
                                                                                <input type="radio" name="radio-group-13" id="radio-34" checked="checked" />
                                                                                <label for="radio-34">Medium</label>
                                                                            </li>
                                                                            <li>
                                                                                <input type="radio" name="radio-group-13" id="radio-35" />
                                                                                <label for="radio-35">Large</label>
                                                                            </li>
                                                                            <li>
                                                                                <input type="radio" name="radio-group-13" id="radio-36" />
                                                                                <label for="radio-36">Extra Large</label>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="price_block">
                                                                        <div class="price">$ 10.00</div>
                                                                        <a href="#" class="card_btn">Add to cart</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="P_itmesbox">
                                                                <div class="PT_image"><img src="http://glorywebsdemo.com/themeforest/html/carveordering/images/pro_img4.webp" class="absoImg" alt=""></div>
                                                                <div class="PT_dscr">
                                                                    <h3 class="PT_title">Steak Fries</h3>
                                                                    <p class="PT_dtls">Steak fries might seem like the less fun-looking version of crinkle cut fries,
                                                                    </p>
                                                                    <div class="PT_optn">
                                                                        <ul class="PT-radio">
                                                                            <li>
                                                                                <input type="radio" name="radio-group-14" id="radio-37" checked="checked" />
                                                                                <label for="radio-37">Medium</label>
                                                                            </li>
                                                                            <li>
                                                                                <input type="radio" name="radio-group-14" id="radio-38" />
                                                                                <label for="radio-38">Large</label>
                                                                            </li>
                                                                            <li>
                                                                                <input type="radio" name="radio-group-14" id="radio-39" />
                                                                                <label for="radio-39">Extra Large</label>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="price_block">
                                                                        <div class="price">$ 10.00</div>
                                                                        <a href="#" class="card_btn">Add to cart</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="P_itmesbox">
                                                                <div class="PT_image"><img src="http://glorywebsdemo.com/themeforest/html/carveordering/images/pro_img4.webp" class="absoImg" alt=""></div>
                                                                <div class="PT_dscr">
                                                                    <h3 class="PT_title">Standard Fries</h3>
                                                                    <p class="PT_dtls">Ah, the standard fry—the one that started it all. Despite the fact
                                                                    </p>
                                                                    <div class="PT_optn">
                                                                        <ul class="PT-radio">
                                                                            <li>
                                                                                <input type="radio" name="radio-group-15" id="radio-40" checked="checked" />
                                                                                <label for="radio-40">Medium</label>
                                                                            </li>
                                                                            <li>
                                                                                <input type="radio" name="radio-group-15" id="radio-41" />
                                                                                <label for="radio-41">Large</label>
                                                                            </li>
                                                                            <li>
                                                                                <input type="radio" name="radio-group-15" id="radio-42" />
                                                                                <label for="radio-42">Extra Large</label>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="price_block">
                                                                        <div class="price">$ 10.00</div>
                                                                        <a href="#" class="card_btn">Add to cart</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="P_itmesbox">
                                                                <div class="PT_image"><img src="http://glorywebsdemo.com/themeforest/html/carveordering/images/pro_img4.webp" class="absoImg" alt=""></div>
                                                                <div class="PT_dscr">
                                                                    <h3 class="PT_title">Belgian Fries</h3>
                                                                    <p class="PT_dtls">Belgian fries might look like the typical fry experience, but they most
                                                                    </p>
                                                                    <div class="PT_optn">
                                                                        <ul class="PT-radio">
                                                                            <li>
                                                                                <input type="radio" name="radio-group-16" id="radio-43" checked="checked" />
                                                                                <label for="radio-43">Medium</label>
                                                                            </li>
                                                                            <li>
                                                                                <input type="radio" name="radio-group-16" id="radio-44" />
                                                                                <label for="radio-44">Large</label>
                                                                            </li>
                                                                            <li>
                                                                                <input type="radio" name="radio-group-16" id="radio-45" />
                                                                                <label for="radio-45">Extra Large</label>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="price_block">
                                                                        <div class="price">$ 10.00</div>
                                                                        <a href="#" class="card_btn">Add to cart</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="P_itmesbox">
                                                                <div class="PT_image"><img src="http://glorywebsdemo.com/themeforest/html/carveordering/images/pro_img4.webp" class="absoImg" alt=""></div>
                                                                <div class="PT_dscr">
                                                                    <h3 class="PT_title">Shoestring Fries</h3>
                                                                    <p class="PT_dtls">Despite the fact that shoestring fries aren't quite as crunchy
                                                                    </p>
                                                                    <div class="PT_optn">
                                                                        <ul class="PT-radio">
                                                                            <li>
                                                                                <input type="radio" name="radio-group-17" id="radio-46" checked="checked" />
                                                                                <label for="radio-46">Medium</label>
                                                                            </li>
                                                                            <li>
                                                                                <input type="radio" name="radio-group-17" id="radio-47" />
                                                                                <label for="radio-47">Large</label>
                                                                            </li>
                                                                            <li>
                                                                                <input type="radio" name="radio-group-17" id="radio-48" />
                                                                                <label for="radio-48">Extra Large</label>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="price_block">
                                                                        <div class="price">$ 10.00</div>
                                                                        <a href="#" class="card_btn">Add to cart</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="P_itmesbox">
                                                                <div class="PT_image"><img src="http://glorywebsdemo.com/themeforest/html/carveordering/images/pro_img4.webp" class="absoImg" alt=""></div>
                                                                <div class="PT_dscr">
                                                                    <h3 class="PT_title">Curly Fries</h3>
                                                                    <p class="PT_dtls">There's something so satisfying about curly fries. First of all.
                                                                    </p>
                                                                    <div class="PT_optn">
                                                                        <ul class="PT-radio">
                                                                            <li>
                                                                                <input type="radio" name="radio-group-24" id="radio-49" checked="checked" />
                                                                                <label for="radio-49">Medium</label>
                                                                            </li>
                                                                            <li>
                                                                                <input type="radio" name="radio-group-24" id="radio-50" />
                                                                                <label for="radio-50">Large</label>
                                                                            </li>
                                                                            <li>
                                                                                <input type="radio" name="radio-group-24" id="radio-51" />
                                                                                <label for="radio-51">Extra Large</label>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="price_block">
                                                                        <div class="price">$ 10.00</div>
                                                                        <a href="#" class="card_btn">Add to cart</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div id="drinks" class=" tab-pane fade">
                                        <div class="content_row">
                                            <div class="left_cntbar">
                                                <div class="pizza_items">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="P_itmesbox">
                                                                <div class="PT_image"><img src="http://glorywebsdemo.com/themeforest/html/carveordering/images/pro_img5.webp" class="absoImg" alt=""></div>
                                                                <div class="PT_dscr">
                                                                    <h3 class="PT_title">Coca-Cola</h3>
                                                                    <p class="PT_dtls">Coca-Cola is the most popular drink in the world
                                                                    </p>
                                                                    <div class="PT_optn">
                                                                        <ul class="PT-radio">
                                                                            <li>
                                                                                <input type="radio" name="radio-group-18" id="radio-52" checked="checked" />
                                                                                <label for="radio-52">Medium</label>
                                                                            </li>
                                                                            <li>
                                                                                <input type="radio" name="radio-group-18" id="radio-53" />
                                                                                <label for="radio-53">Large</label>
                                                                            </li>
                                                                            <li>
                                                                                <input type="radio" name="radio-group-18" id="radio-54" />
                                                                                <label for="radio-54">Extra Large</label>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="price_block">
                                                                        <div class="price">$ 10.00</div>
                                                                        <a href="#" class="card_btn">Add to cart</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="P_itmesbox">
                                                                <div class="PT_image"><img src="http://glorywebsdemo.com/themeforest/html/carveordering/images/pro_img5.webp" class="absoImg" alt=""></div>
                                                                <div class="PT_dscr">
                                                                    <h3 class="PT_title">Pepsi</h3>
                                                                    <p class="PT_dtls">Pepsi is a cola drink type manufactured by PepsiCo.
                                                                    </p>
                                                                    <div class="PT_optn">
                                                                        <ul class="PT-radio">
                                                                            <li>
                                                                                <input type="radio" name="radio-group-19" id="radio-55" checked="checked" />
                                                                                <label for="radio-55">Medium</label>
                                                                            </li>
                                                                            <li>
                                                                                <input type="radio" name="radio-group-19" id="radio-56" />
                                                                                <label for="radio-56">Large</label>
                                                                            </li>
                                                                            <li>
                                                                                <input type="radio" name="radio-group-19" id="radio-57" />
                                                                                <label for="radio-57">Extra Large</label>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="price_block">
                                                                        <div class="price">$ 10.00</div>
                                                                        <a href="#" class="card_btn">Add to cart</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="P_itmesbox">
                                                                <div class="PT_image"><img src="http://glorywebsdemo.com/themeforest/html/carveordering/images/pro_img5.webp" class="absoImg" alt=""></div>
                                                                <div class="PT_dscr">
                                                                    <h3 class="PT_title">Red Bull</h3>
                                                                    <p class="PT_dtls">Red Bull energy drink has become the most popular
                                                                    </p>
                                                                    <div class="PT_optn">
                                                                        <ul class="PT-radio">
                                                                            <li>
                                                                                <input type="radio" name="radio-group-20" id="radio-58" checked="checked" />
                                                                                <label for="radio-58">Medium</label>
                                                                            </li>
                                                                            <li>
                                                                                <input type="radio" name="radio-group-20" id="radio-59" />
                                                                                <label for="radio-59">Large</label>
                                                                            </li>
                                                                            <li>
                                                                                <input type="radio" name="radio-group-20" id="radio-60" />
                                                                                <label for="radio-60">Extra Large</label>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="price_block">
                                                                        <div class="price">$ 10.00</div>
                                                                        <a href="#" class="card_btn">Add to cart</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="P_itmesbox">
                                                                <div class="PT_image"><img src="http://glorywebsdemo.com/themeforest/html/carveordering/images/pro_img5.webp" class="absoImg" alt=""></div>
                                                                <div class="PT_dscr">
                                                                    <h3 class="PT_title">Nestlé S.A</h3>
                                                                    <p class="PT_dtls">Nestle is synonymous with instant coffee, bottled water, crunches
                                                                    </p>
                                                                    <div class="PT_optn">
                                                                        <ul class="PT-radio">
                                                                            <li>
                                                                                <input type="radio" name="radio-group-21" id="radio-61" checked="checked" />
                                                                                <label for="radio-61">Medium</label>
                                                                            </li>
                                                                            <li>
                                                                                <input type="radio" name="radio-group-21" id="radio-62" />
                                                                                <label for="radio-62">Large</label>
                                                                            </li>
                                                                            <li>
                                                                                <input type="radio" name="radio-group-21" id="radio-63" />
                                                                                <label for="radio-63">Extra Large</label>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="price_block">
                                                                        <div class="price">$ 10.00</div>
                                                                        <a href="#" class="card_btn">Add to cart</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="P_itmesbox">
                                                                <div class="PT_image"><img src="http://glorywebsdemo.com/themeforest/html/carveordering/images/pro_img5.webp" class="absoImg" alt=""></div>
                                                                <div class="PT_dscr">
                                                                    <h3 class="PT_title">Sprite</h3>
                                                                    <p class="PT_dtls">Sprite is a colorless, lime-lemon flavored, non-caffeinated soft.
                                                                    </p>
                                                                    <div class="PT_optn">
                                                                        <ul class="PT-radio">
                                                                            <li>
                                                                                <input type="radio" name="radio-group-22" id="radio-64" checked="checked" />
                                                                                <label for="radio-64">Medium</label>
                                                                            </li>
                                                                            <li>
                                                                                <input type="radio" name="radio-group-22" id="radio-65" />
                                                                                <label for="radio-65">Large</label>
                                                                            </li>
                                                                            <li>
                                                                                <input type="radio" name="radio-group-22" id="radio-66" />
                                                                                <label for="radio-66">Extra Large</label>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="price_block">
                                                                        <div class="price">$ 10.00</div>
                                                                        <a href="#" class="card_btn">Add to cart</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="P_itmesbox">
                                                                <div class="PT_image"><img src="http://glorywebsdemo.com/themeforest/html/carveordering/images/pro_img5.webp" class="absoImg" alt=""></div>
                                                                <div class="PT_dscr">
                                                                    <h3 class="PT_title">Mountain Dew</h3>
                                                                    <p class="PT_dtls">This is yet another PepsiCo carbonated soft drink.It comes
                                                                    </p>
                                                                    <div class="PT_optn">
                                                                        <ul class="PT-radio">
                                                                            <li>
                                                                                <input type="radio" name="radio-group-23" id="radio-67" checked="checked" />
                                                                                <label for="radio-67">Medium</label>
                                                                            </li>
                                                                            <li>
                                                                                <input type="radio" name="radio-group-23" id="radio-68" />
                                                                                <label for="radio-68">Large</label>
                                                                            </li>
                                                                            <li>
                                                                                <input type="radio" name="radio-group-23" id="radio-69" />
                                                                                <label for="radio-69">Extra Large</label>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="price_block">
                                                                        <div class="price">$ 10.00</div>
                                                                        <a href="#" class="card_btn">Add to cart</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="right_cntbar col-lg-3">
                                    <div class="your_order">
                                        <div class="Order_title">
                                            <span class="O_lefttitle">Your order </span>
                                            <span class="O_cart"><a href="#" class="trans" title="Add To Cart"></a></span>
                                        </div>
                                        <div class="Order_number">
                                            <ul>
                                                <li>
                                                    <div class="Order_number">
                                                        <div class="Order_names">
                                                            <span class="O_name">1x Mexican Pizza</span>
                                                            <span class="O_type">Extra Large</span>
                                                        </div>
                                                        <div class="Order_price">
                                                            <span class="O_price">$12</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="Order_number">
                                                        <div class="Order_names">
                                                            <span class="O_name">1x Mexican Pizza</span>
                                                            <span class="O_type">Extra Large</span>
                                                        </div>
                                                        <div class="Order_price">
                                                            <span class="O_price">$12</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="Order_number">
                                                        <div class="Order_names">
                                                            <span class="O_name">1x Mexican Pizza</span>
                                                            <span class="O_type">Extra Large</span>
                                                        </div>
                                                        <div class="Order_price">
                                                            <span class="O_price">$12</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="Order_number">
                                                        <div class="Order_names">
                                                            <span class="O_name">1x Mexican Pizza</span>
                                                            <span class="O_type">Extra Large</span>
                                                        </div>
                                                        <div class="Order_price">
                                                            <span class="O_price">$12</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="Order_number">
                                                        <div class="Order_names">
                                                            <span class="O_name">1x Mexican Pizza</span>
                                                            <span class="O_type">Extra Large</span>
                                                        </div>
                                                        <div class="Order_price">
                                                            <span class="O_price">$12</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="Order_number">
                                                        <div class="Order_names">
                                                            <span class="O_name">1x Mexican Pizza</span>
                                                            <span class="O_type">Extra Large</span>
                                                        </div>
                                                        <div class="Order_price">
                                                            <span class="O_price">$12</span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="totle_Oamount">
                                            <div class="O_totlecost">
                                                <span class="O_title">Total</span>
                                                <span class="O_price">$156</span>
                                            </div>
                                            <a href="cart.html" class="trans red_btn squre-btn hvr-ripple-out" title="">Order Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Our Menu section -->
        <!-- Quick Order Section -->
        <section>
            <div class="quick_order">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="main_quickorder">
                                <h3 class="title">Call Us for Quick Order</h3>
                                <div class="cntct typewriter-effect"><span class="call_desk"><a href="" id="typewriter_num"></a></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Quick Order Section -->
        <!-- Footer Section here -->
        <footer>
            <div class="main_footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="M_footer">
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 quick_links">
                                   <div class="title">Quick Links</div>
                                    <div class="main_cnt">
                                        <ul>
                                            <li><a href="about.html" class="trans" title="About us">About us</a></li>
                                            <li><a href="faq.html" class="trans" title="Faq">Faq</a></li>
                                            <li><a href="contactus.html" class="trans" title="Contacts">Contacts</a></li>
                                            <li><a href="login.html" class="trans" title="Login">Login</a></li>
                                            <li><a href="login.html" class="trans" title="Register">Register</a></li>
                                            <li><a href="terms_conditions.html" class="trans" title="Terms and conditions">Terms and conditions</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12 location">
                                    <div class="title">Our Location</div>
                                    <div class="main_cnt"> <span class="address"><a href="#">234 Main Street, Uni 01, New Mexico City</a></span> <span class="time1">Mon - Fri: 08:00 am - 10:00 pm</span> <span class="time2">Sat - Sun: 10:00 am - 11:00 pm<strong></strong></span> <span class="conact"><a href="">+01 (234) 56 56 789</a></span> </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 subscribe">
                                    <div class="title">Subscribe Us</div>
                                    <div class="main_cnt">
                                        <p class="sbcr_label">Subscribe to the La Vie newsletter to
                                            <br> get regular update about offers
                                        </p>
                                        <form method="post" id="subscribeform" action="thank-you.html">
                                            <div class="sbcrb_input">
                                                <input type="text" name="subscribeemail" class="form-control" placeholder="Enter your email">
                                                <button class="subscribebutton send" name="getbutton" type="submit">
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="F_footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="payment"> <span>Payment Options</span> <span class="pay_cards"><img src="images/card_img.png" alt=""></span> </div>
                            <div class="social">
                                <ul>
                                    <li><a href="#" class="trans" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#" class="trans" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#" class="trans" title="Google Plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    <li><a href="#" class="trans" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a href="#" class="trans" title="Pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <p>© <a href="index.html" class="trans" title="Crave Ordering">Crave Ordering</a> 2019, All rights <a href="http://www.bootstrapmb.com/">reserved</a> </p>
                </div>
            </div>
        </footer>
        <!-- Footer Section here -->
    </div>
    <!-- JS Here -->
    <script src="js/custome.js" defer></script>
    <script src="js/slick.js" defer></script>
    <script src="js/jquery.validate.min.js" defer></script>
    <!-- JS Here -->

</body>

</html>
