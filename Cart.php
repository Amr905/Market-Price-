<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Courses</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Unicat project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="styles/courses.css">
    <link rel="stylesheet" type="text/css" href="styles/courses_responsive.css">
</head>

<body>
    <?php
    require_once('mysqli_connect.php');
    $query = "SELECT product.Name,product.P_img,product_supplier.Price,supplier.Logo
                FROM product_supplier,product,orders,user,supplier
                WHERE product.ID = product_supplier.P_ID AND product_supplier.P_ID = orders.Product_id AND user.ID = orders.user_ID AND supplier.ID =product_supplier.Sup_ID AND product_supplier.Sup_ID = orders.Supplier_id AND user.ID =".$_SESSION['userID'];

   $res=@mysqli_query($dbc,$query);
    ?>

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
                                    <a href="index.php">
                                        <div class="logo_text">Market<span>Prices</span></div>
                                    </a>
                                </div>
                                <nav class="main_nav_contaner ml-auto">
                                    <ul class="main_nav">
                                           <li class="active"><a href="index.php">Home</a></li>

                                        <li><a href="Products.php">Products</a></li>
                                        <li><a href="#">Categories</a></li>
                                        <li><a href="#">About</a></li>
                                        <li><a href="#">Contact</a></li>
                                    </ul>
                                    <div class="search_button"><i class="fa fa-search" aria-hidden="true"></i></div>

                                    <!-- Hamburger -->

                                    <div class="shopping_cart"><a href="Cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></div>
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
            <div class="breadcrumbs_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="breadcrumbs">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li>Courses</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Courses -->

        <div class="courses">
            <div class="container">
                <div class="row">

                    <!-- Courses Main Content -->
                    <div class="col-lg-8">
                        <div class="courses_search_container">
                            <form action="#" id="courses_search_form" class="courses_search_form d-flex flex-row align-items-center justify-content-start">
                                <input type="search" class="courses_search_input" placeholder="Search Courses" required="required">
                                <select id="courses_search_select" class="courses_search_select courses_search_input">
								<option>All Categories</option>
								<option>Category</option>
								<option>Category</option>
								<option>Category</option>
							</select>
                                <button action="submit" class="courses_search_button ml-auto">search now</button>
                            </form>
                        </div>

                        <div class="courses_container">

                            <?php


                            if(isset($_SESSION['userID'])){
                            while($row = mysqli_fetch_array($res)){

                            echo '<div class="row courses_row">

                                <!-- Course -->
                                <div class="col-md-12 course_col_cart">
                                    <div class="row course">

                                        <div class="col-md-2 Cart_image"><img src="'.$row['P_img'].'" alt=""></div>


                                        <div class="col-md-6 Cart_Content" style="margin-top: ">
                                            <h3 class=""><a href="ProductPage.php">'.$row['Name'].' </a></h3>
                                        </div>
                                        <div class="col-md-2 course_price Cart_Content">'.$row['Price'].' EGP</div>
                                        <div class="col-md  -2 Cart_Content">
                                            <div class=""><img src="'.$row['Logo'].'" alt="" class="cart_imgs"></div>
                                        </div>

                                    </div>
                                </div>
                            </div>';
                            }
                            }
                            ?>
                            <!-- Course -->


                        </div>

                        <div class="row pagination_row">
                            <div class="col">
                                <div class="pagination_container d-flex flex-row align-items-center justify-content-start">
                                    <ul class="pagination_list">
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                    </ul>
                                    <div class="courses_show_container ml-auto clearfix">
                                        <div class="courses_show_text">Showing <span class="courses_showing">1-6</span> of <span class="courses_total">26</span> results:</div>
                                        <div class="courses_show_content">
                                            <span>Show: </span>
                                            <select id="courses_show_select" class="courses_show_select">
												<option>06</option>
												<option>12</option>
												<option>24</option>
												<option>36</option>
											</select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Courses Sidebar -->
                    <div class="col-lg-4">
                        <div class="sidebar">

                            <!-- Categories -->
                         <div class="sidebar_section">
                                <div class="sidebar_section_title">Categories</div>
                                <div class="sidebar_categories">
                                    <ul>
                                        <li><a href="#">Frozen Foods</a></li>
                                        <li><a href="#">vegetables</a></li>
                                        <li><a href="#">lunch meat</a></li>
                                        <li><a href="#">liquid/detergent.</a></li>
                                        <li><a href="#">Paper Goods</a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Latest Course -->


                            <!-- Gallery -->


                            <!-- Tags -->
                            <div class="sidebar_section">
                                <div class="sidebar_section_title">Tags</div>
                                <div class="sidebar_tags">
                                    <ul class="tags_list">
                                        <li><a href="#">snacks</a></li>
                                        <li><a href="#">chocolates</a></li>
                                        <li><a href="#">cameras</a></li>
                                        <li><a href="#">smartphones</a></li>
                                        <li><a href="#">detergents</a></li>
                                        
                                    </ul>
                                </div>
                            </div>

                            <!-- Banner -->
                            <div class="sidebar_section">
                                <div class="sidebar_banner d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="sidebar_banner_background" style="background-image:url(images/banner_1.jpg)"></div>
                                    <div class="sidebar_banner_overlay"></div>
                                    <div class="sidebar_banner_content">
                                        <div class="banner_title">Ads will be here</div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    <!-- Newsletter -->

    <div class="newsletter">
        <div class="newsletter_background parallax-window" data-parallax="scroll" data-image-src="images/newsletter.jpg" data-speed="0.8"></div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="newsletter_container d-flex flex-lg-row flex-column align-items-center justify-content-start">

                        <!-- Newsletter Content -->
                        <div class="newsletter_content text-lg-left text-center">
                            <div class="newsletter_title">sign up for news and offers</div>
                            <div class="newsletter_subtitle">Subcribe to lastest smartphones news & great deals we offer</div>
                        </div>

                        <!-- Newsletter Form -->
                        <div class="newsletter_form_container ml-lg-auto">
                            <form action="#" id="newsletter_form" class="newsletter_form d-flex flex-row align-items-center justify-content-center">
                                <input type="email" class="newsletter_input" placeholder="Your Email" required="required">
                                <button type="submit" class="newsletter_button">subscribe</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
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
    <script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="plugins/easing/easing.js"></script>
    <script src="plugins/parallax-js-master/parallax.min.js"></script>
    <script src="plugins/colorbox/jquery.colorbox-min.js"></script>
    <script src="js/courses.js"></script>
</body>

</html>
