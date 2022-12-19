<?php session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
if(isset($_SESSION['iafuuser'])){
	}
	else{
		
		}
?>
<!doctype html>
<html lang="en">

<!-- 06_03_cart.html  [XR&CO'2014], Tue, 22 Oct 2019 11:56:17 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AIFU | cart</title>
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

<div class="uni-cart">
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
                                            <ul>
											<li><a href="index.php">Home</a></li>
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
									<li class="has-sub"><a style="background:#3f97da;" href='#'>shop</a>
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
            <div class="site-content-area">

                <div class="uni-banner-default uni-background-1">
                    <div class="container">
                        <!-- Page title -->
                        <div class="page-title">
                            <div class="page-title-inner">
                                <h1>your cart</h1>
                            </div>
                        </div>
                        <!-- End page title -->

                        <!-- Breadcrumbs -->
                        <ul class="breadcrumbs">
                            <li><a href="index.php">home</a></li>
                            <li><a href="shop.php">shop</a></li>
                            <li><a href="cart.php">cart</a></li>
                        </ul>
                        <!-- End breadcrumbs -->
                    </div>
                </div>

                <main id="main" class="site-main">
                    <div class="uni-cart-body">
                        <div id="post" class="container">
                            <div class="entry-content">
                                <div class="woocommerce">
                                    <form class="woocommerce-cart-form" method="GET">
                                        <table class="woocommerce-cart-form__contents table shop_table_responsive">
                                            <thead>
                                            <tr>
                                                <th class="product-remove">Delete</th>
												<th class="product-edit">Update</th>
                                                <th class="product-name">Product</th>
                                                <th class="product-price">Price</th>
                                                <th class="product-quantity">Quantity</th>
                                                <th class="product-subtotal">Total</th>
                                            </tr>
                                            </thead>

                                            <tbody>
								<?php
								
								if(isset($_SESSION['aifuuser'])){
								require_once('connect.php');
								$sales7 ="SELECT Product,Quantity,Cost,ProductID,IDs FROM `carttemporary`  where User='".$_SESSION['aifuemail']."' and AddTo='Cart' order by IDs ASC ";
								$result8=mysqli_query($link,$sales7);
								while($row8=mysqli_fetch_assoc($result8)){
									$rates=$row8['Cost']/$row8['Quantity'];
									$productidss=$row8['ProductID'];
                                            echo"<tr class='woocommerce-cart-form__cart-item cart_item'>";
                                                echo"<td class='product-remove'>";
													echo"<button class='flaticon-delete' name='deletes' id='deletes' value='".$row8['IDs']."'><i class='fa fa-times-circle' aria-hidden='true'></i></button>";
                                                echo"</td>";
												echo"<td class='product-edit'>";
													echo"<button class='button' name='updates' id='updates' value='".$row8['IDs']."' >UPDATE</button>";
												echo"</td>";
                                                echo"<td class='product-name'>";
                                                    echo"<span class='product-thumbnail'>";
                                                        echo"<a href='#'>";
														require_once('connect.php');
															$sales9 ="SELECT ProductImage FROM `productdetails` where IDDesc='".$productidss."'";
															$result10=mysqli_query($link,$sales9);
															if($row9=mysqli_fetch_assoc($result10)){
                                                            echo"<img src='images/shop/".$row9['ProductImage']."' alt='' class='attachment-shop_thumbnail size-shop_thumbnail wp-post-image img-responsive'>";
															}
														echo"</a>";
                                                    echo"</span>";
                                                    echo"<a href='#'>".$row8['Product']."</a>";
                                                echo"</td>";
                                                echo"<td class='product-price'>";
                                                    echo"<span class='woocommerce-Price-amount amount'>";
                                                        echo"<span class='woocommerce-Price-currencySymbol'>Shs.</span>".$rates."</span>";
														echo"<input class='mtext-104 cl3 txt-center num-product' type='hidden' name='singlecost' id='singlecost' value='".$rates."'>";
                                                echo"</td>";
                                                echo"<td class='product-quantity'>";
                                                    echo"<div class='quantity'>";
                                                        echo"<input type='number' name='numproduct' id='numproduct' class='qty' min='0'  value='".$row8['Quantity']."'>";
                                                    echo"</div>";
                                                echo"</td>";
                                                echo"<td class='product-subtotal'>";
                                                    echo"<div class='woocommerce-Price-amount amount'>";
                                                        echo"<span class='woocommerce-Price-currencySymbol'>shs.</span>".$row8['Cost']."";
                                                    echo"</div>";
                                                echo"</td>";
                                            echo"</tr>";
												}
												}
												?>
                                            
                                            </tbody>

                                            <tfoot>
                                            <tr>
                                                <td class="actions" colspan="5">
                                                    <div class="coupon">
                                                        <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="Coupon code">
                                                        <input type="submit" class="button" name="apply_coupon" value="Apply coupon">
                                                    </div>
                                                    <input type="submit" class="button" name="continueshopping" value="CONTINUE SHOPPING">
                                                </td>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </form>
								

                                    <div class="cart-collaterals">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="cart_totals">
                                                    <h2>Cart totals</h2>
                                                    <table class="shop_table shop_table_responsive">
                                                        <tbody><tr class="cart-subtotal">
                                                            <th>Subtotal</th>
                                                            <td><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">Shs.</span><?php
															if(isset($_SESSION['aifuuser'])){
															require_once('connect.php');					
															$sales11 ="SELECT SUM(Cost) as Carttotal from carttemporary where User='".$_SESSION['aifuemail']."' and AddTo='Cart'";
															$results=mysqli_query($link,$sales11);
															if($results)
															{
																if($row9=mysqli_fetch_assoc($results)){
																Echo "".$row9['Carttotal'];
																}
															}
															}else{
																Echo " 0";
															}
															?></span></td>
                                                        </tr>
                                                        <tr class="order-total">
                                                            <th>Total</th>
                                                            <td><strong><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">Shs.</span><?php
															if(isset($_SESSION['aifuuser'])){
															require_once('connect.php');					
															$sales11 ="SELECT SUM(Cost) as Carttotal from carttemporary where User='".$_SESSION['aifuemail']."' and AddTo='Cart'";
															$results=mysqli_query($link,$sales11);
															if($results)
															{
																if($row9=mysqli_fetch_assoc($results)){
																Echo "".$row9['Carttotal'];
																}
															}
															}else{
																Echo " 0";
															}
															?></span></strong> </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>

                                                    <div class="wc-proceed-to-checkout">
														<form method='GET'>
														<button  name="finalsubmission" id="finalsubmission" value="submit" style="margin:20px;padding:20px; background:#3f97da;;color:white; width:90%;" >Proceed to checkout</button>
														 </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>

            </div>
        </div>
<?php
				if(isset($_GET['continueshopping'])){
					echo '<script type="application/javascript">';
					echo'window.location.href="shop.php";';
					echo '</script>';
				}
				if(isset($_SESSION['aifuuser'])){
				if(isset($_GET['deletes'])){
					$id=$_GET['deletes'];	
                        if(isset($id)){
				$sales6 ="DELETE  FROM carttemporary WHERE IDs='".$id."' and User='".$_SESSION['aifuemail']."'";
				$result=mysqli_query($link,$sales6);
				if($result){
				echo '<script type="application/javascript">';
				echo'alert("Item successfully Deleted");';
				echo'window.location.href="cart.php";';
				echo '</script>';
				}
				}
				}
				}else{}
				
				if(isset($_SESSION['aifuuser'])){
				if(isset($_GET['updates']))
				{
					$id=$_GET['updates'];
					$quantityss=$_GET['numproduct'];
					$costss=$_GET['singlecost']*$quantityss;
				require_once('connect.php');				
				$sales11 ="UPDATE carttemporary SET Quantity='$quantityss',Cost='$costss' WHERE IDs='".$id."' and User='".$_SESSION['aifuemail']."'";
				$results=mysqli_query($link,$sales11);
				if($results)
				{
				echo '<script type="application/javascript">';
				echo'alert("Item successfully Updated");';
				echo'window.location.href="cart.php";';
				echo '</script>';
				}
							
				}	
				}else{}
				
//session_start();

				if(isset($_GET['finalsubmission'])){	
				if(isset($_SESSION['aifuuser']) && !empty($_SESSION['aifuuser'])){
				require_once('connect.php');
				$dates4=date("Y-m-d");
				$sales12 ="SELECT COUNT(IDDesc) as Carttotals from orders where OrderDate like '".$dates4."%' ";
				$resultss=mysqli_query($link,$sales12);
				$row9=mysqli_fetch_assoc($resultss);
				$totalorders=$row9['Carttotals'];
				$dates1=date("d");
				$dates2=date("m");
				$dates3=date("y");
				$OrderCode=$dates2.$totalorders.$dates1.$dates3;
				$sales6 ="SELECT User,Product,Quantity,Cost,ProductID FROM `carttemporary` where User='".$_SESSION['aifuemail']."' and AddTo='Cart' ";
				$result5=mysqli_query($link,$sales6);
				if(mysqli_num_rows($result5) >=1){
				while($row5=mysqli_fetch_assoc($result5)){
				$orderammount=$row5['Cost'];
				$orderproduct=$row5['Product'];
				$orderuser=$row5['User'];
				//$orderproductsize=$row5['Size'];
				//$orderproductcolor=$row5['Color'];
				$orderproductquantity=$row5['Quantity'];
				$orderproductid=$row5['ProductID'];

				$orderuser = $_SESSION['aifuuser'];
				$orderemail =$_SESSION['aifuemail'];
				$orderphone =$_SESSION['aifuTelephone'];
				$query = "INSERT INTO `orders` (OrderBy,OrderByEmail,OrderByPhone,OrderCost,ProductName,Quantity,OrderCode) VALUES('$orderuser','$orderemail','$orderphone','$orderammount','$orderproduct','$orderproductquantity','$OrderCode')";
				$results=mysqli_query($link,$query);
				
				echo '<script type="application/javascript">';
				echo'alert("Your Order has been Registered, you can proceed to Checkout");';
				echo'window.location.href="checkout.php"';
				echo '</script>';
	
				}

				$sales7 ="DELETE  FROM carttemporary where User='".$_SESSION['aifuemail']."' and AddTo='Cart'";
				$resultss=mysqli_query($link,$sales7);
				require 'PHPMailer/src/Exception.php';
				require 'PHPMailer/src/PHPMailer.php';
				require 'PHPMailer/src/SMTP.php';			
								
								
					$to = $orderemail;
					$subject = 'Order Made';
					$message = 'Hi. Some Order has been made, Check your Admin Web DashBoard.';
					$headers = "MIME-Version: 1.0" . "\r\n";
					$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
					$headers = 'From:  info@africainterfaithuganda.org ' . "\r\n" .
						'Reply-To: no-reply@africainterfaithuganda.org ' . "\r\n" .
						'X-Mailer: PHP/' . phpversion();

					echo (mail($to, $subject, $message, $headers)) ? 'Message sent!' : 'Message not sent!';
				
				$last_id = mysqli_insert_id($link);
				//Account created notify user.
				echo '<script type="application/javascript">';
				echo'alert("Your Order has been Registered, you can proceed to Checkout");';
				echo'window.location.href="checkout.php"';
				echo '</script>';
				
			/*}else{
				//Account creation failed, thow the user an error message
				echo '<script type="application/javascript">';
				echo'alert("Order Could not be registered");';
				echo'window.location.href="index.php";';
				echo '</script>';
			}*/
			
}else{
	echo '<script type="application/javascript">';
				echo'alert("You dont have any Product in your Cart");';
				echo'window.location.href="index.php";';
				echo '</script>';
}
}else{
			echo '<script type="application/javascript">';
				echo'alert("Unsuccessful, Login First.");';
				echo'window.location.href="index.php";';
				echo '</script>';
			die;
		}
		}
?>
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

<!-- 06_03_cart.html  [XR&CO'2014], Tue, 22 Oct 2019 11:56:17 GMT -->
</html>