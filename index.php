<!DOCTYPE html>

<?php
session_start();
?>

<html lang="en">

<head>
    <title>Market Prices</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Unicat project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>

<body>

    <div class="super_container">

        <!-- Header -->

        <header class="header">

            <!-- Top Bar -->
            <div class="top_bar">
                <div class="top_bar_container">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
                                    <ul class="top_bar_contact_list">
                                        <li>
                                            <div class="question">Have any questions?</div>
                                        </li>
                                        <li>
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                            <div>0111-820-8540</div>
                                        </li>
                                        <li>
                                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                            <div>amr905@gmail.com</div>
                                        </li>
                                    </ul>
                                    <div class="top_bar_login ml-auto">
                                        <?php 
                        if(empty($_SESSION['email'])){
                            echo '<div class = "login_button"><a href = "Login.html">Sign Up/Login</a></div>';       
                            }else{    

                            echo '<div class = "login_button" ><a href = "logout.php" >Sign out</a></div>';
                            }
                            ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Header Content -->
            <div class="header_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="header_content d-flex flex-row align-items-center justify-content-start">
                                <div class="logo_container">
                                    <a href="#">
                                        <div class="logo_text">Market<span>Prices</span></div>
                                    </a>
                                </div>
                                <nav class="main_nav_contaner ml-auto">
                                    <ul class="main_nav">
                                        <li class="active"><a href="index.php">Home</a></li>
                                        <li><a href="Products.php">Products</a></li>
                                        <li><a href="Categories.php">Categories</a></li>
                                        <li><a href="about.php">About</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                    <div class="search_button"><i class="fa fa-search" aria-hidden="true"></i></div>

                                    <!-- Hamburger -->
                                    <div class="shopping_cart"> <a href="Cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></div>
                                    <div class="hamburger menu_mm">
                                        <i class="fa fa-bars menu_mm" aria-hidden="true"></i>
                                    </div>

                                </nav>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Header Search Panel -->
            <div class="header_search_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="header_search_content d-flex flex-row align-items-center justify-content-end">
                                <form action="#" class="header_search_form">
                                    <input type="search" class="search_input" placeholder="Search" required="required">
                                    <button class="header_search_button d-flex flex-column align-items-center justify-content-center">
									<i class="fa fa-search" aria-hidden="true"></i>
								</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Menu -->

        <div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
            <div class="menu_close_container">
                <div class="menu_close">
                    <div></div>
                    <div></div>
                </div>
            </div>
            <div class="search">
                <form action="#" class="header_search_form menu_mm">
                    <input type="search" class="search_input menu_mm" placeholder="Search" required="required">
                    <button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
					<i class="fa fa-search menu_mm" aria-hidden="true"></i>
				</button>
                </form>
            </div>
            <nav class="menu_nav">
                <ul class="menu_mm">
                    <li class="menu_mm"><a href="index.html">Home</a></li>
                    <li class="menu_mm"><a href="#">About</a></li>
                    <li class="menu_mm"><a href="#">Courses</a></li>
                    <li class="menu_mm"><a href="#">Blog</a></li>
                    <li class="menu_mm"><a href="#">Page</a></li>
                    <li class="menu_mm"><a href="contact.html">Contact</a></li>
                </ul>
            </nav>
        </div>

        <!-- Home -->

        <div class="home">
            <div class="home_slider_container">

                <!-- Home Slider -->
                <div class="owl-carousel owl-theme home_slider">

                    <!-- Home Slider Item -->


                    <!-- Home Slider Item -->

                    <!-- Home Slider Item -->
                    <div class="owl-item">
                        <div class="home_slider_background" style="background-image:url(images/supermarko.jpg)"></div>
                        <div class="home_slider_content">
                            <div class="container">
                                <div class="row">
                                    <div class="col text-center">
                                        <div class="home_slider_title">All the products in your hands</div>
                                        <div class="home_slider_subtitle">Save your money now </div>
                                        <div class="home_slider_form_container">
                                            <form action="#" id="home_search_form_3" class="home_search_form d-flex flex-lg-row flex-column align-items-center justify-content-between">
                                                <div class="d-flex flex-row align-items-center justify-content-start">
                                                    <input type="search" class="home_search_input" placeholder="Keyword Search" required="required">
                                                    <select class="dropdown_item_select home_search_input">
													<option>Category Courses</option>
													<option>Category</option>
													<option>Category</option>
												</select>
                                                    <select class="dropdown_item_select home_search_input">
													<option>Select Price Type</option>
													<option>Price Type</option>
													<option>Price Type</option>
												</select>
                                                </div>
                                                <button type="submit" class="home_search_button">search</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Home Slider Nav -->



        </div>

        <!-- Features -->

        <div class="features">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section_title_container text-center">
                            <h2 class="section_title">Best Sellers</h2>
                            <div class="section_subtitle">
                                <p>The most popular sellers based on sales</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row features_row">

                    <!-- Features Item -->
                    <div class="col-lg-3 feature_col">
                        <div class="feature text-center trans_400">
                            <div class="feature_icon"><img src="images/carrefour.png" alt=""></div>


                        </div>
                    </div>

                    <!-- Features Item -->
                    <div class="col-lg-3 feature_col">
                        <div class="feature text-center trans_400">
                            <div class="feature_icon"><img src="images/Panda.png" alt="" style="height: 140%;"></div>


                        </div>
                    </div>

                    <!-- Features Item -->
                    <div class="col-lg-3 feature_col">
                        <div class="feature text-center trans_400">
                            <div class="feature_icon"><img src="images/souq.com.png" alt="" style="width: 90%"></div>


                        </div>
                    </div>

                    <!-- Features Item -->
                    <div class="col-lg-3 feature_col">
                        <div class="feature text-center trans_400">
                            <div class="feature_icon"><img src="images/JUMIA.png" alt="" style="hei"></div>


                        </div>
                    </div>

                </div>
            </div>
        </div>


        <!-- Counter -->

        <div class="counter">
            <div class="counter_background" style="opacity:0.7; background-image:url(images/leftsupermarko.jpg); "></div>
            <div class="blur_bg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="counter_content">
                            <h2 class="counter_title">Register Now</h2>
                            <div class="counter_text">
                                <p>Register now and start saving money </p>
                            </div>

                            <!-- Milestones -->

                            <div class="milestones d-flex flex-md-row flex-column align-items-center justify-content-between">

                                <!-- Milestone -->
                                <div class="milestone">
                                    <div class="milestone_counter" data-end-value="6000">0</div>
                                    <div class="milestone_text">products</div>
                                </div>

                                <!-- Milestone -->
                                <div class="milestone">
                                    <div class="milestone_counter" data-end-value="4" data-sign-after="">0</div>
                                    <div class="milestone_text">Hyper Market</div>
                                </div>

                                <!-- Milestone -->
                                <div class="milestone">
                                    <div class="milestone_counter" data-end-value="120" data-sign-after="">0</div>
                                    <div class="milestone_text">Super Market</div>
                                </div>

                                <!-- Milestone -->
                                <div class="milestone">
                                    <div class="milestone_counter" data-end-value="2">0</div>
                                    <div class="milestone_text">Market </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

                <div class="counter_form">
                    <div class="row fill_height">
                        <div class="col fill_height">
                            <form class="counter_form_content d-flex flex-column align-items-center justify-content-center" action="#">
                                <div class="counter_form_title">Register Now</div>
                                <input type="text" class="counter_input" placeholder="Your Name:" required="required">
                                <input type="tel" class="counter_input" placeholder="Phone:" required="required">
                                <select name="counter_select" id="counter_select" class="counter_input counter_options">
								<option>location</option>
								<option>rehab</option>
								<option>maadi</option>
								<option>shoubra</option>
							</select>
                                <input type="text" class="counter_input" placeholder="Email:" required="required">
                                <input type="password" class="counter_input" placeholder="Password:" required="required">
                                <button type="submit" class="counter_form_button">submit now</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <!-- Team -->


        <!-- Newsletter -->

        <div class="team">

        </div>

        <!-- Footer -->

        <footer class="footer">
            <div class="footer_background" style="background-image:url(images/footer_background.png)"></div>
            <div class="container">
                <div class="row footer_row">
                    <div class="col">
                        <div class="footer_content">
                            <div class="row">

                                <div class="col-lg-3 footer_col">

                                    <!-- Footer About -->
                                    <div class="footer_section footer_about">
                                        <div class="footer_logo_container">
                                            <a href="#">
                                                <div class="footer_logo_text">Market<span>Prices</span></div>
                                            </a>
                                        </div>
                                        <div class="footer_about_text">
                                            <p>The best website to save money by minimizing the shopping cost </p>
                                        </div>
                                        <div class="footer_social">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-lg-3 footer_col">

                                    <!-- Footer Contact -->
                                    <div class="footer_section footer_contact">
                                        <div class="footer_title">Contact Us</div>
                                        <div class="footer_contact_info">
                                            <ul>
                                                <li>Email: amr905@gmail.com</li>
                                                <li>Phone: +(20) 111 820 8540</li>

                                            </ul>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-lg-3 footer_col">

                                    <!-- Footer links -->
                                    <div class="footer_section footer_links">
                                        <div class="footer_title">Contact Us</div>
                                        <div class="footer_links_container">
                                            <ul>
                                                <li><a href="#">Home</a></li>
                                                <li><a href="#">About</a></li>
                                                <li><a href="#">Contact</a></li>

                                                <li><a href="#">Products</a></li>
                                                <li><a href="#">Markets</a></li>

                                            </ul>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-lg-3 footer_col clearfix">

                                    <!-- Footer links -->
                                    <div class="footer_section footer_mobile">
                                        <div class="footer_title">Mobile</div>
                                        <div class="footer_mobile_content">
                                            <div class="footer_image"><a href="#"><img src="images/mobile_1.png" alt=""></a></div>
                                            <div class="footer_image"><a href="#"><img src="images/mobile_2.png" alt=""></a></div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row copyright_row">
                    <div class="col">
                        <div class="copyright d-flex flex-lg-row flex-column align-items-center justify-content-start">
                            <div class="cr_text">
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());

                                </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </div>
                            <div class="ml-lg-auto cr_links">
                                <ul class="cr_list">
                                    <li><a href="#">Copyright notification</a></li>
                                    <li><a href="#">Terms of Use</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="styles/bootstrap4/popper.js"></script>
    <script src="styles/bootstrap4/bootstrap.min.js"></script>
    <script src="plugins/greensock/TweenMax.min.js"></script>
    <script src="plugins/greensock/TimelineMax.min.js"></script>
    <script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
    <script src="plugins/greensock/animation.gsap.min.js"></script>
    <script src="plugins/greensock/ScrollToPlugin.min.js"></script>
    <script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="plugins/easing/easing.js"></script>
    <script src="plugins/parallax-js-master/parallax.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
