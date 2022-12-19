<!doctype html>
<html lang="en">

<!-- 05_01_blog_list.html  [XR&CO'2014], Tue, 22 Oct 2019 11:55:26 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AIFU | Live Stream</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    <link rel="stylesheet" href="plugin/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="plugin/bootstrap/css/bootstrap-theme.css">
    <link rel="stylesheet" href="fonts/poppins/poppins.css">
    <link rel="stylesheet" href="plugin/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="plugin/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="plugin/process-bar/tox-progress.css">
    <link rel="stylesheet" href="plugin/owl-carouse/owl.carousel.min.css">
    <link rel="stylesheet" href="plugin/owl-carouse/owl.theme.default.min.css">
    <link rel="stylesheet" href="plugin/animsition/css/animate.css">
    <link rel="stylesheet" href="plugin/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="plugin/mediaelement/mediaelementplayer.css">
    <link rel="stylesheet" href="plugin/datetimepicker/bootstrap-datepicker3.css">
    <link rel="stylesheet" href="plugin/datetimepicker/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="plugin/lightgallery/lightgallery.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!--load page-->
<div class="load-page">
    <div class="sk-wave">
        <div class="sk-rect sk-rect1"></div>
        <div class="sk-rect sk-rect2"></div>
        <div class="sk-rect sk-rect3"></div>
        <div class="sk-rect sk-rect4"></div>
        <div class="sk-rect sk-rect5"></div>
    </div>
</div>

<!-- Mobile nav -->
<nav class="visible-sm visible-xs mobile-menu-container mobile-nav">
    <div class="menu-mobile-nav navbar-toggle">
        <span class="icon-bar"><i class="fa fa-bars" aria-hidden="true"></i></span>
    </div>
    <div id="cssmenu" class="animated">
        <div class="uni-icons-close"><i class="fa fa-times" aria-hidden="true"></i></div>
        <ul class="nav navbar-nav animated">
									<li class="has-sub"><a href="index.php">Home</a>
									<ul>
											<li><a href="donate.php">Donate</a></li>
											<li><a href="Subscribers.php">Subscribe</a></li>
									</ul>
									</li>
									<li class="has-sub"><a href="about.php">About</a>
									<ul>
											<li><a href="about.php">About Us</a></li>
											<li><a href="voluteers.php">Volunteers</a></li>
									</ul>
									</li>
									<li class="has-sub"><a href="services.php">Sermons</a>
									<ul>
											<li><a href="services.php">Sermons</a></li>
											<li><a href="livestream.php">Live Stream</a></li>
									</ul>
									</li>
									<li><a href="blog_list.php">Blog</a></li>
									<li><a href="gallery.php">Gallery</a></li>
									<li><a href="contact.php">Contact</a></li>
									<li class="has-sub"><a href='#'>shop</a>
										<ul>
											<li><a href="shop.php">Shop</a></li>
											<li><a href="cart.php">Cart</a></li>
											<li><a href="checkout.php">Checkout</a></li>
										</ul>
									</li>
								</ul>
        <div class="clearfix"></div>
    </div>
</nav>
<!-- End mobile menu -->

<div class="uni-blog-list">
    <div id="wrapper-container" class="site-wrapper-container">
        <header>
            <div class="uni-medicare-header sticky-menu">
                <div class="container">
                    <div class="uni-medicare-header-main">
                        <div class="row">
                            <div class="col-md-2">
                                <!--LOGO-->
                                <div class="wrapper-logo">
                                    <a class="logo-default" href="#"><img src="images/logo.png" alt="" class="img-responsive"></a>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <!--MENU TEXT-->
                                <div class="uni-main-menu">
                                    <nav class="main-navigation uni-menu-text">
                                        <div class="cssmenu">
                                             <ul class="nav navbar-nav animated">
									<li><a href="index.php">Home</a></li>
									<li class="has-sub"><a href="about.php">About</a>
									<ul>
											<li><a href="about.php">About Us</a></li>
											<li><a href="voluteers.php">Volunteers</a></li>
									</ul>
									</li>
									<li class="has-sub"><a style="background:#3f97da;" href="services.php">Sermons</a>
									<ul>
											<li><a href="services.php">Sermons</a></li>
											<li><a href="livestream.php">Live Stream</a></li>
									</ul>
									</li>
									<li><a href="blog_list.php">Blog</a></li>
									<li><a href="gallery.php">Gallery</a></li>
									<li><a href="contact.php">Contact</a></li>
									<li class="has-sub"><a href='#'>shop</a>
										<ul>
											<li><a href="shop.php">Shop</a></li>
											<li><a href="cart.php">Cart</a></li>
											<li><a href="checkout.php">Checkout</a></li>
										</ul>
									</li>
								</ul>
                                        </div>
                                    </nav>
                                </div>

                                <!--SEARCH AND APPOINTMENT-->
                                <div class="uni-search-appointment">
                                    <ul>
                                        <li class="uni-btn-appointment" style="background:#3f97da;">
										<a href="donate.php">Donate</a>
										</li>
                                        <li class="uni-btn-appointment">
                                            <a href="Subscribers.php">Subscribe</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        
                        <!--FORM SEARCH-->
                        <div class="uni-form-search-header">
                            <div class="box-search-header collapse in" id="box-search-header">
                                <div class="uni-input-group">
                                    <input type="text" name="key" placeholder="Search" class="form-control">
                                    <button class="uni-btn btn-search">
                                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div id="main-content" class="site-main-content">
            <section class="site-content-area">

                <div class="uni-banner-default uni-background-1">
                    <div class="container">
                        <!-- Page title -->
                        <div class="page-title">
                            <div class="page-title-inner">
                                <h1>Live Stream</h1>
                            </div>
                        </div>
                        <!-- End page title -->

                        <!-- Breadcrumbs -->
                        <ul class="breadcrumbs">
                            <li><a href="index.php">home</a></li>
                            <li><a href="services.php">Sermons</a></li>
                            <li><a href="livestream.php">Live Stream</a></li>
                        </ul>
                        <!-- End breadcrumbs -->
                    </div>
                </div>

                <div class="uni-blog-list-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="uni-blog-list-left">

                                    <!--===========================================-->
                                    <div class="blog-list-item">
                                        <article class="post type-post">
                                            <div class="content-inner">
                                                <div class="uni-entry-top">
                                                    <div class="uni-blog-item-video">
                                                        <iframe  height="400" src="https://www.youtube.com/embed/live_stream?channel=UCKK27AyJ-sa0UPHopbbQOIg" allowfullscreen></iframe>
                                                    
													</div>
                                                </div>


                                                <div class="uni-entry-body">
                                                    <div class="uni-entry-time">
													<?php
                                                        echo"<ul>";
														$years=date("Y");
														$monthss=date("M");
														$dates=date("d");
                                                            echo"<li class='year'>".$years."</li>";
                                                            echo"<li class='day'>".$dates."</li>";
                                                            echo"<li class='month'>".$monthss."</li>";
                                                        echo"</ul>";
														?>
                                                    </div>
                                                    <div class="uni-entry-content">

                                                        <header class="uni-entry-header">
                                                            <h2 class="uni-entry-title">
                                                                <a href="#" rel="">Live Stream From Africa Interfaith Uganda</a>
                                                            </h2>
                                                        </header>

                                                        <div class="uni-entry-meta">
                                                        <span class="uni-author">
                                                            <a href="#" rel="author"><i class="fa fa-calendar" aria-hidden="true"></i> <?php $years=date("D-d-M-Y"); echo $years; ?></a>
                                                        </span>
                                                           <!-- <span class="uni-comment-total">
                                                            <a href="#" class="comments-link"><i class="fa fa-user" aria-hidden="true"></i> admin</a> 
                                                        <</span>
                                                            <span class="uni-entry-folder"><a href="#"><i class="fa fa-comment" aria-hidden="true"></i> 2 comments</a></span>-->
                                                        </div>
                                                        <div class="uni-entry-summary">
                                                            <p>You can visit our youtube channel on youtube for more videos...</p>
                                                        </div>
                                                        <div class="readmore">
                                                            <a href="https://www.youtube.com/channel/UCKK27AyJ-sa0UPHopbbQOIg" target="blank"><i class="icomoon icon-up"></i>Youtube</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="uni-blog-list-right">
                                    <aside id="secondary" class="widget-area">
                                        <aside class="widget">
                                            <div class="widget-content">
                                                <div class="uni-search-sidebar">
                                                    <form action="services.php" method="get">
                                                        <div class="vk-newlist-banner-test-search">
                                                            <input type="text" name="search" placeholder="Search Sermons...">
                                                            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </aside>
                                        <aside class="widget">
                                            <h3 class="widget-title">Books Category</h3>
                                            <div class="uni-divider"></div>
                                            <div class="widget-content">
                                                <div class="uni-widget-category">
                                                    <ul>
                                                       <?php
														require_once('connect.php');
														$sales6 ="SELECT Distinct Category FROM `productdetails` order by IDDesc Desc LIMIT 20";
														$result5=mysqli_query($link,$sales6);
														$counter1=1;
														while($row6=mysqli_fetch_assoc($result5)){
															
														$sales7 ="SELECT COUNT(Category) as mynumber FROM `productdetails` where Category='".$row6['Category']."' order by IDDesc Desc LIMIT 20";
														$result8=mysqli_query($link,$sales7);
														if($row8=mysqli_fetch_assoc($result8)){
														 
																		   echo" <li><a href='shop.php'><i class='fa fa-angle-right' aria-hidden='true'></i>".$row6['Category']."(".$row8['mynumber'].")</a></li>";
														}
														}?>
                                                    </ul>
                                                    </ul>
                                                </div>
                                            </div>
                                        </aside>
                                        <aside class="widget">
                                            <h3 class="widget-title">Recent Blogs</h3>
                                            <div class="uni-divider"></div>
                                            <div class="widget-content">
                                                <div class="uni-widget-popular-posts">
                                                    <ul>
                                                        <?php
													require_once('connect.php');
													$sales6 ="SELECT blogtitle,description,attachment,blogimage,blogid,blogshotdescription,Date,postedby FROM `blogs` order by blogid Desc LIMIT 3";
													$result5=mysqli_query($link,$sales6);
													$counter1=1;
													while($row5=mysqli_fetch_assoc($result5)){
                                                         echo"<li>";
                                                            echo"<div class='item-widget-popular-post'>";
                                                                echo"<div class='item-img'>";
                                                                    echo"<a href='single_post.php?ids=".$row5['blogid']."'><img src='images/blogimg/".$row5['blogimage']."' alt=''></a>";
                                                                echo"</div>";
                                                                echo"<div class='item-caption'>";
                                                                    echo"<h4 style='text-align: justify;text-justify: inter-word'><a href='single_post.php?ids=".$row5['blogid']."'>".$row5['blogshotdescription']."</a></h4>";
                                                                    echo"<div class='time'><i class='fa fa-calendar' aria-hidden='true'></i>".$row5['Date']."</div>";
                                                                echo"</div>";
                                                            echo"</div>";
                                                        echo"</li>";
                                                        
									}?>  
                                                    </ul>
                                                </div>
                                            </div>
                                        </aside>
                                       <!-- <aside class="widget">
                                            <h3 class="widget-title">Archives</h3>
                                            <div class="uni-divider"></div>
                                            <div class="widget-content">
                                                <div class="uni-widget-archive">
                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Octorber 2017</a></li>
                                                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> September 2017</a></li>
                                                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> August 2017</a></li>
                                                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> July 2017</a></li>
                                                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> June 2017</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </aside>
                                        <aside class="widget">
                                            <h3 class="widget-title">tags clound</h3>
                                            <div class="uni-divider"></div>
                                            <div class="widget-content">
                                                <div class="uni-widget-tagsclound">
                                                    <ul>
                                                        <li><a href="#">Automatic</a></li>
                                                        <li><a href="#">Car Dealer</a></li>
                                                        <li><a href="#">Motos</a></li>
                                                        <li><a href="#">Vehicle</a></li>
                                                        <li><a href="#">Marketing</a></li>
                                                        <li><a href="#">Racing Car</a></li>
                                                        <li><a href="#">Construction</a></li>
                                                        <li><a href="#">Interior</a></li>
                                                        <li><a href="#">Exterior</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </aside>-->
                                    </aside>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
        </div>

       <footer class="site-footer footer-default">
		<div class="footer-main-content">
			<div class="container">
				<div class="row">
					<div class="footer-main-content-elements">
						<div class="footer-main-content-element col-md-3 col-sm-6">
							<aside class="widget">
								<div class="widget-title uni-uppercase"><a href="#"><img src="images/logowhite.png" alt="" class="img-responsive"></a></div>
								<div class="widget-content">
									<div class="uni-info-contact">
										<ul>
											<li> <i class="fa fa-map-marker" aria-hidden="true"></i> Kikulu Sonde off Nabusugwe, Goma, Mukono</li>
											<li><i class="fa fa-phone" aria-hidden="true"></i> (256) 782 577687</li>
											<li><i class="fa fa-envelope-o" aria-hidden="true"></i> info@africainterfaithuganda.org</li>
										</ul>
									</div>
								</div>
							</aside>
						</div>
						<div class="footer-main-content-element col-md-3 col-sm-6">
							<aside class="widget">
								<h3 class="widget-title uni-uppercase">quick links</h3>
								<div class="widget-content">
									<div class="uni-quick-link">
										<ul>
											<li><a href="index.php"><span>+</span> Home</a></li>
											<li><a href="about.php"><span>+</span> about</a></li>
											<li><a href="services.php"><span>+</span> sermons</a></li>
											<li><a href="shop.php"><span>+</span> Shop</a></li>
											<li><a href="gallery.php"><span>+</span> Gallery</a></li>
											<li><a href="contact.php"><span>+</span> contact</a></li>
										</ul>
									</div>
								</div>
							</aside>
						</div>
						<div class="footer-main-content-element col-md-3 col-sm-6">
							<aside class="widget">
								<h3 class="widget-title uni-uppercase">latest posts</h3>
								<div class="widget-content">
									<div class="uni-footer-latest-post">
										<ul>
										<?php
											require_once('connect.php');
											$sales6 ="SELECT blogtitle,description,attachment,blogimage,blogid,blogshotdescription,Date,postedby FROM `blogs` order by blogid Desc";
											$result5=mysqli_query($link,$sales6);
											$counter1=1;
											while($row5=mysqli_fetch_assoc($result5)){
											echo"<li>";
												echo"<h4><a href='#'>".$row5['blogtitle']."</a></h4>";
												echo"<span class='time'>".$row5['Date']."</span>";
											echo"</li>";
											}
											?>
										</ul>
									</div>
								</div>
							</aside>
						</div>
						<div class="footer-main-content-element col-md-3 col-sm-6">
							<aside class="widget">
								<h3 class="widget-title uni-uppercase">News<span>letter</span></h3>
								<div class="widget-content">
									<div class="uni-footer-newletter">
										<div class="input-group">
										<form method='post' action='mailing2.php'>
											<input type="email" class="form-control" name="emails" id=="emails" placeholder="Enter your email">
											<button class="btn btn-sub" type="submit">subscribe</button>
										</form>
										</div>
										<div class="uni-social">
											<h4>Follow us</h4>
											<ul>
												<li><a href="https://m.facebook.com/AIFULimited" target="blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
												<li><a href="https://twitter.com/AfricaInterfai1" target="blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
												<li><a href="https://www.linkedin.com/in/aifu-africa-interfaith-uganda-b3472220b" target="blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
												<li><a href="https://www.youtube.com/channel/UCKK27AyJ-sa0UPHopbbQOIg" target="blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
												<li><a href="https://www.instagram.com/p/CNcajjJLII-/?igshid=1hx7z46q6i7en" target="blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</aside>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="copyright-area">
			<div class="container">
				<div class="copyright-content">
					<div class="row">
						<div class="col-sm-6">
							<p class="copyright-text">Copyright &copy; <script>document.write(new Date().getFullYear());</script> All Rights Reserved. Designed By: <span><a href="http://essentialsystems.atwebpages.com">&nbsp;Eng. Denis Ogwal</a></span></p>
						</div>
						<div class="col-sm-6">
							<ul class="copyright-menu">
								<li><a href="termsandconditions.php">Term Of Use</a></li>
								<li><a href="privacyandpolicy.php">Privacy Policy</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
    </div>
</div>
<script src="plugin/jquery/jquery-2.0.2.min.js"></script>
<script src="plugin/jquery-ui/jquery-ui.min.js"></script>
<script src="plugin/bootstrap/js/bootstrap.js"></script>
<script src="plugin/process-bar/tox-progress.js"></script>
<script src="plugin/waypoint/jquery.waypoints.min.js"></script>
<script src="plugin/counterup/jquery.counterup.min.js"></script>
<script src="plugin/owl-carouse/owl.carousel.min.js"></script>
<script src="plugin/jquery-ui/jquery-ui.min.js"></script>
<script src="plugin/mediaelement/mediaelement-and-player.js"></script>
<script src="plugin/masonry/masonry.pkgd.min.js"></script>
<script src="plugin/datetimepicker/moment.min.js"></script>
<script src="plugin/datetimepicker/bootstrap-datepicker.min.js"></script>
<script src="plugin/datetimepicker/bootstrap-datepicker.tr.min.js"></script>
<script src="plugin/datetimepicker/bootstrap-datetimepicker.js"></script>
<script src="plugin/datetimepicker/bootstrap-datetimepicker.fr.js"></script>

<script src="plugin/lightgallery/picturefill.min.js"></script>
<script src="plugin/lightgallery/lightgallery.js"></script>
<script src="plugin/lightgallery/lg-pager.js"></script>
<script src="plugin/lightgallery/lg-autoplay.js"></script>
<script src="plugin/lightgallery/lg-fullscreen.js"></script>
<script src="plugin/lightgallery/lg-zoom.js"></script>
<script src="plugin/lightgallery/lg-hash.js"></script>
<script src="plugin/lightgallery/lg-share.js"></script>
<script src="plugin/sticky/jquery.sticky.js"></script>

<script src="js/main.js"></script>
</body>

<!-- 05_01_blog_list.html  [XR&CO'2014], Tue, 22 Oct 2019 11:55:53 GMT -->
</html>