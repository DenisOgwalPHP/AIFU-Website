<?php session_start();?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>AIFU | Home</title>
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
<?php 
if(isset($_SESSION['aifuuser'])){
	}
	else{
				$_SESSION['aifuuser']="Guest";
				require_once('connect.php');
				$query = "INSERT INTO `guests` (nos) VALUES('1')";
				$results=mysqli_query($link,$query);				
				$sales12 ="SELECT COUNT(IDs) as Carttotals from guests";
				$resultss=mysqli_query($link,$sales12);
				if($resultss)
				{
					if($row9=mysqli_fetch_assoc($resultss)){
					$_SESSION['aifuemail']= $row9['Carttotals'];
					}
				}
				
				$_SESSION['aifuTelephone']="0";
		
		}
?>
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

<div class="uni-home-2">
<div id="wrapper-container" class="site-wrapper-container">
	<header>
		<div class="uni-medicare-header sticky-menu">
			<div class="uni-header-top">
				<div class="container">
					<div class="uni-header-top-left">
						<ul>
							<li> <i class="fa fa-map-marker" aria-hidden="true"></i>Kikulu Sonde off Nabusugwe, Goma, Mukono</li>
							<li><i class="fa fa-phone" aria-hidden="true"></i> (256) 782 577687</li>
							<li><i class="fa fa-envelope-o" aria-hidden="true"></i> info@africainterfaithuganda.org</li>
						</ul>
					</div>
					<div class="uni-header-top-right">
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

			<div class="container">
				<div class="uni-medicare-header-main">
					<!--LOGO-->
					<div class="wrapper-logo">
						<a class="logo-default" href="#"><img src="images/logo-home-2.png" alt="" class="img-responsive"></a>
						<div class="clearfix"></div>
					</div>

					<!--MENU TEXT-->
					<div class="uni-main-menu">
						<nav class="main-navigation uni-menu-text">
							<div class="cssmenu">
								<ul>
									<li ><a href="index.php">Home</a></li>
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


					<!--FORM SEARCH
					<div class="uni-form-search-header">
						<div class="box-search-header collapse " id="box-search-header">
							<div class="uni-input-group">
								<input type="text" name="key" placeholder="Search" class="form-control">
								<button class="uni-btn btn-search">
									<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
								</button>
							</div>
						</div>
					</div>-->
				</div>
			</div>
		</div>
	</header>

	<div id="main-content" class="site-main-content">
		<section class="site-content-area">

			<!--BANNER-->
			<div class="uni-banner">
				<div class="uni-owl-one-item owl-carousel owl-theme">

				<div class="item">
						<!--<div class="uni-banner-img uni-background-5"></div>-->
						<div class="content animated" data-animation="flipInX" data-delay="0.1s">
							<div class="container">
								<div class="caption">
								<h1>INTRODUCTION</h1>
									<p style="text-align:Center;text-align:justify;text-justify:inter-word;">
									In interfaith we come together to define the will of God on earth and the purpose of each faith in the kingdom of heaven. Well aware that we are different and each and each faith has a role to play in the kingdom of God. It is there fore very necessary to sit together as servants and children of the same God and find solutions and answers for very many unanswered questions that believers need to know. 
									</p>
									<p style="text-align:Center;text-align:justify;text-justify:inter-word;">
									The main word here is faith in God; interfaith is a deliberate effort to bring together people of different faith for a common purpose. Hebrews 11:6 “And without faith it is impossible to please God, because anyone who comes to him must believe that he exists and that he rewards those who earnestly seek him.” Having faith in God is the best thing that can happen to you, but that faith must be the true faith, believing a lie is as disastrous as death.
									</p>
									<p style="text-align:Center;text-align:justify;text-justify:inter-word;">
									The dis-unity in the body of Christ is causing the children of God to be tossed up and down by the waves of ignorance and wrong doctrines. Ephesians 4:13-14 “until we all reach unity in the faith and in the knowledge of the Son of God and become mature, attaining to the whole measure of the fullness of Christ. Then we will no longer be infants, tossed back and forth by the waves, and blown here and there by every wind of teaching and by the cunning and craftiness of men in their deceitful scheming.
									</p>
									<p style="text-align:Center;text-align:justify;text-justify:inter-word;">
									Africa interfaith council ltd is the legal entity that hosts the interfaith council that dialogues on the doctrines taught by different faith and cultural institutions, the bills passed by parliament and implemented by the judiciary affects faith and people on whom they are applied.  
									</p>
									
								</div>
							</div>
						</div>
					</div>

					<div class="item">
						<!--<div class="uni-banner-img uni-background-5"></div>-->
						<div class="content animated" data-animation="flipInX" data-delay="0.1s">
							<div class="container">
								<div class="caption">
								<h1>WELCOME MESSAGE</h1>
									<p style="text-align:Center;text-align:justify;text-justify:inter-word;">
										You are most welcome to Africa Interfaith Uganda ltd an organization that positions and unites
										the body of Christ. This AIFU organization positions and fixes different faith ministries into proper
										positions in the heavenly kingdom settings. The kingdom of heaven has different ministries and
										departments and each ministry or department has a role to play in the kingdom settings.
										The organization aims at perfecting and improving the performance of all religious and faith
										organization in accordance to the word of God. The organization respectfully but truly guides on
										the unity of the body of Christ, follow up on every bill passed by the parliament to ensure that
										the will of God is not tempered with, find way of incorporating kingdoms and religious
										organizations in service delivery to the communities using their structures.
										The organization emphasizes family positioning to resolve several family issues, doctrine sturdy
										and harmonization considering the different faith doctrines, traditional healing and Africa
										traditional religion, the ministry of Moses, Elijah, Jesus Christ and prophet Mohamed, taking a
										deeper look into the ministries of priests, Apostles, and prophets, and how each of these affects
										the doctrines world over.
										Please you are invited to part of this world revival that will prepare, educate and transform you
										and your family to qualify for the kingdom of heaven. 
									</p>
									
									<a href="Subscribers.php">SUBSCRIBE</a>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<!--<div class="uni-banner-img uni-background-2"></div>-->
						<div class="content animated" data-animation="flipInX" data-delay="0.1s">
							<div class="container">
								<div class="caption">
									<h1>MESSAGE FROM THE PRESIDENT</h1>
									<p style="text-align:Center;text-align:justify;text-justify:inter-word;">
										I thank the Almighty God for giving us his unconditional love, mercy, joy and peace through His
										only Son Jesus Christ. May the blessings of the Almighty God be with you all, be on your families,
										finances, jobs, businesses and everything you lay your hands on as promised by God. In whichever
										faith you are based to say that God is Lord, Jesus Christ is Lord, in whichever language you use,
										as long as the God you are referring to is the almighty God.
									</p>
									<a href="about.php">About Us</a>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<!--<div class="uni-banner-img uni-background-3"></div>-->
						<div class="content animated" data-animation="flipInX" data-delay="0.9s">
							<div class="container">
								<div class="caption">
									<h1> Isaiah 1: 18-20</h1>
									<p style="text-align:Center;text-align:justify;text-justify:inter-word;">
										“Come now, let us reason together,” says the LORD. “Though your sins
											are like scarlet, they shall be as white as snow; though they are red as crimson, they shall be
											like wool. If you are willing and obedient, you will eat the best from the land; but if you resist
											and rebel, you will be devoured by the sword.” For the mouth of the LORD has spoken.” 
									</p>
									<a href="services.php">Sermons</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!--BOOK APPOINTMENTS-->
			<div class="uni-home-2-book-appointment uni-background-4">
				<div class="container">
					<div class="uni-home-title">
						<h3>Book An appointment</h3>
					</div>
					<form action="insertappointment.php" Method="POST">
						<div class="row">
							<div class="col-md-4">
								<div class="input-group form-group">
									<span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="names" value="" placeholder="your name">
								</div>
							</div>
							<div class="col-md-4">
								<div class="input-group form-group">
									<span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
									<input type="tel" class="form-control" name="phones" value="" placeholder="phone number">
								</div>
							</div>
							<div class="col-md-4">
								<div class="input-group form-group">
									<span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
									<input type="email" class="form-control" name="emails" value="" placeholder="email">
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<div class="input-group date date-check-in" data-date="04/05/2021" data-date-format="mm/dd/yyyy">
										<span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
										<input name="date1" class="form-control" type="text" value="04/05/2021">
										<span class="input-group-addon btn"><i class="fa fa-angle-down" id="ti-calendar1" aria-hidden="true"></i></span>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="input-group form-group">
									<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
									<input type="text" class="form-control" name="notes" value="" placeholder="Note">
								</div>
							</div>
							<div class="col-md-4">
								<button class="vk-btn vk-btn-send" name="addappointment" id="addappointment">Book appointment</button>
							</div>
						</div>
					</form>
				</div>
			</div>

			<!--DEPARTMENTS-->
			<div class="uni-hơm-1-department">
				<div class="container">
					<div class="uni-home-title">
						<h3>Our Programs</h3>
						<div class="uni-underline"></div>
					</div>
					<div class="uni-shortcode-icon-box-1">
						<div class="row">

						<div class="col-md-4  col-sm-6">
								<div class="uni-shortcode-icon-box-1-default">
									<div class="item-icons">
										<img src="images/icons_box/icon_1/icon-5.jpg" alt="" class="img-responsive">
									</div>
									<div class="item-caption" style='Height:400px;width:100%;overflow-y:scroll;'>
										<h4>INTERFAITH DOCTRINE DIALOGUE</h4>
										<p style="text-align: justify;text-justify: inter-word">The worst nightmare we have is having wrong doctrine taught in bible collages and schools. This means that the wrong doctrine will be taught and passed on from generation to generation. The need to dialogue on the doctrine by the faith leaders themselves to chart a way forward. </p>
										
									</div>
								</div>
							</div>

							<div class="col-md-4  col-sm-6">
								<div class="uni-shortcode-icon-box-1-default">
									<div class="item-icons">
										<img src="images/icons_box/icon_1/icon-5.jpg" alt="" class="img-responsive">
									</div>
									<div class="item-caption" style='Height:400px;width:100%;overflow-y:scroll;'>
										<h4>SCHOOL INTERFAITH PROGRAMS</h4>
										<p style="text-align: justify;text-justify: inter-word">The training you give the children is the one they will maintain for the rest of their time. The confusions and fighting between different faith must be discussed and the children told the truth or the true doctrine. And where there is divergence a proper explanation must be given, or we stand the risk of the youth shaming the faith. Proverbs 22:6 “Train a child in the way he should go, and when he is old he will not turn from it.”  </p>
										
									</div>
								</div>
							</div>

							<div class="col-md-4  col-sm-6">
								<div class="uni-shortcode-icon-box-1-default">
									<div class="item-icons">
										<img src="images/icons_box/icon_1/icon-5.jpg" alt="" class="img-responsive">
									</div>
									<div class="item-caption" style='Height:400px;width:100%;overflow-y:scroll;'>
										<h4>INTERFAITH MEN MENTORSHIP PROGRAM</h4>
										<p style="text-align: justify;text-justify: inter-word">The man who is created in God’s glory need to be taught how to be and stand like a man he ought to be. This corner will emancipate men to know their roles in the family. 1 Corinthians 11:7 “A man ought not to cover his head, since he is the image and glory of God; but the woman is the glory of man.</p>
										
									</div>
								</div>
							</div>

							<div class="col-md-4  col-sm-6">
								<div class="uni-shortcode-icon-box-1-default">
									<div class="item-icons">
										<img src="images/icons_box/icon_1/icon-5.jpg" alt="" class="img-responsive">
									</div>
									<div class="item-caption" style='Height:500px;width:100%;overflow-y:scroll;'>
										<h4>INTERFAITH WOMEN MENTORSHIP PROGRAMS </h4>
										<p style="text-align: justify;text-justify: inter-word">We will educate women to occupy their position as women created for men and as the glory of men. If ester could influence and reverse the decisions of the king, women can achieve a lot in the suitable helper’s position. 1 Corinthians 11:7 “A man ought not to cover his head, since he is the image and glory of God; but the woman is the glory of man.</p>
										
									</div>
								</div>
							</div>

							<div class="col-md-4  col-sm-6">
								<div class="uni-shortcode-icon-box-1-default">
									<div class="item-icons">
										<img src="images/icons_box/icon_1/icon-5.jpg" alt="" class="img-responsive">
									</div>
									<div class="item-caption" style='Height:500px;width:100%;overflow-y:scroll;'>
										<h4>INTERFAITH CHILDREN MENTORSHIP PROGRAM</h4>
										<p style="text-align: justify;text-justify: inter-word">There are things that God wants us to teach our children in our homes not leaving them to schools. The home is the first school that must not be left to die out but must be promoted. Deuteronomy 11:18-19 “Fix these words of mine in your hearts and minds; tie them as symbols on your hands and bind them on your foreheads. Teach them to your children, talking about them when you sit at home and when you walk along the road, when you lie down and when you get up.” The million-dollar question is what are you teaching your children as far as faith is concerned. </p>
										
									</div>
								</div>
							</div>

							<div class="col-md-4  col-sm-6">
								<div class="uni-shortcode-icon-box-1-default">
									<div class="item-icons">
										<img src="images/icons_box/icon_1/icon-5.jpg" alt="" class="img-responsive">
									</div>
									<div class="item-caption" style='Height:500px;width:100%;overflow-y:scroll;'>
										<h4>PRESERVATION OF NATURAL RESOURCES</h4>
										<p style="text-align: justify;text-justify: inter-word">Here we look at a man as the custodian of God’s creation and prepare him to be ready to account for all the natural recourses he has destroyed. A man is in charge of everything that God created and he must account how he used these recourses for God’s glory. Genesis 1:26 “Then God said, “Let us make man in our image, in our likeness, and let them rule over the fish of the sea and the birds of the air, over the live- stock, over all the earth, and over all the creatures that move along the ground.” Interfaith is concerned about climate change due to the destruction of the natural resources and over exploitation. It is the faith leaders that can stop the believers from destroying nature.</p>
										
									</div>
								</div>
							</div>


						<!--	<div class="col-md-4  col-sm-6">
								<div class="uni-shortcode-icon-box-1-default">
									<div class="item-icons">
										<img src="images/icons_box/icon_1/icon-5.jpg" alt="" class="img-responsive">
									</div>
									<div class="item-caption" style='Height:500px;width:100%;overflow-y:scroll;'>
										<h4>HUMANITY AS GOD’S IMAGE:</h4>
										<b>Body</b> <p style="text-align: justify;text-justify: inter-word">The body was created out of soil and it must return to the soil when it dies, it feeds on food, it grows, can be sick, can die, it can be trained, it has basic needs like food, shelter, clothing etc. it is checked and put right by the law of Moses, under this project we establish how to care and provide for the body.</p>
										<b>Soul</b> <p style="text-align: justify;text-justify: inter-word">The soul lives in the body, it came from Heaven and the body was created in the likeness of the soul which is also the son of God. It came from heaven and must return to heaven when the body dies because it does not die, it can enjoy the everlasting life in heaven or hell if it is found to have fallen short of God’s glory. The soul is the one that moves around when someone is in the dream, and the brain of the soul is the mind.</p>
										<b>Spirit</b><p style="text-align: justify;text-justify: inter-word">The spirit lives in the soul of a person, it specifically lives in the mind of the person. The mind is the brain of the soul which hosts the spirit. One can have the Holly Spirit in his mind or the evil spirit in His mind depending on his training, faith and actions.  </p>
									</div>
								</div>
							</div>

							<div class="col-md-4 col-sm-6">
								<div class="uni-shortcode-icon-box-1-default">
									<div class="item-icons">
										<img src="images/icons_box/icon_1/icon-4.jpg" alt="" class="img-responsive">
									</div>
									<div class="item-caption" style='Height:500px;width:100%;overflow-y:scroll;'>
										<h4>DOCTRINE DIALOGUES</h4>
										<b>Christian basic doctrine.</b><p style="text-align: justify;text-justify: inter-word">We have several religions reading the same bible believing in the same God but understanding the bible differently to the extent of fighting each other, if it is the same God, same bible then definitely something is wrong and someone has got it wrong.  Under this project we dialogue on the basic doctrine that should be taught to specific groups of faith groups.</p>
										<b>Islam and Christianity</b><p style="text-align: justify;text-justify: inter-word">Moslems call Jesus Isa, we will look into the doctrine of the Islam faith about Jesus or Isa and be able to clearly come out with the key acceptable doctrine to teach the flock. Under this project we look into key issues that create the rift between the two factions and find the true doctrine that will bridge the gaps.</p> 
										<b>Basic interfaith doctrine</b><p style="text-align: justify;text-justify: inter-word">Under this project we look at different faith in Uganda, Africa and beyond excluding or neglecting none because they all belong to God. This project also includes those who believe in the African Tradition Religion, Bahia, Hindu, and many more.   </p>
									
									</div>
								</div>
							</div>

							<div class="col-md-4 col-sm-6">
								<div class="uni-shortcode-icon-box-1-default">
									<div class="item-icons">
										<img src="images/icons_box/icon_1/icon-3.png" alt="" class="img-responsive">
									</div>
									<div class="item-caption" style='Height:500px;width:100%;overflow-y:scroll;'>
										<h4>UNITY IN THE BODY OF CHRIST</h4>
										<b>Positioning the body parts.</b><p style="text-align: justify;text-justify: inter-word">Different parts of the body have different functions to perform but these parts must be united to function. The body of Christ cannot remain separated if it has to be functional and meaningful. Under this project we reposition the already disconnected body of Christ.</p> 
										<b>Empowering the body parts</b><p  style="text-align: justify;text-justify: inter-word">Everybody needs training to be able to function properly, under this project we train each part of the body of Christ how to function properly and benefit other body parts.</p>
										<b>The family unity</b><p style="text-align: justify;text-justify: inter-word">The family is a very important institution in the kingdom of heaven because it represents God in Coo creation. The devil hates family with a passion. This program will position family members and spell out clearly each person’s roles and responsibilities. </p>
										
									</div>
								</div>
							</div>

							<div class="col-md-4 col-sm-6">
								<div class="uni-shortcode-icon-box-1-default">
									<div class="item-icons">
										<img src="images/icons_box/icon_1/icon-2.jpg" alt="" class="img-responsive">
									</div>
									<div class="item-caption" style='Height:500px;width:100%;overflow-y:scroll;'>
										<h4>SERVICE DELIVERY</h4>
										<b>Body needs service delivery</b><p style="text-align: justify;text-justify: inter-word">Under this project we will look into the body needs that is considering the body, we spell out who should deliver which service to who. There are several ministers positioned by God to deliver services to this body elements that is part of a human being.</p>
										<b>Soul needs service delivery</b><p style="text-align: justify;text-justify: inter-word">Under this project we will look into the soul’s needs that is considering the soul, we spell out who should deliver which service to who. There are several ministers positioned by God to deliver services to this soul element that is part of a human being.</p>
										<b>Spiritual needs service delivery</b><p style="text-align: justify;text-justify: inter-word">This is God living in us, under this project we look into the Spirit’s needs that is considering the Spirit, we will spell out who should deliver which service to who. There are several ministers positioned by God to deliver services to this spirit elements that is part of a human being.</p>
										<b>Interfaith watchtower magazine</b><p style="text-align: justify;text-justify: inter-word">This is the print and online magazine that disclose all information needed by the locals, it discloses, informs and educates the people at the grassroots. </p>
										
									</div>
								</div>
							</div>

							<div class="col-md-4 col-sm-6">
								<div class="uni-shortcode-icon-box-1-default">
									<div class="item-icons">
										<img src="images/icons_box/icon_1/icon-1.png" alt="" class="img-responsive">
									</div>
									<div class="item-caption" style='Height:500px;width:100%;overflow-y:scroll;'>
										<h4>MONITORING AND EVALUATION</h4>
										<b>Contracts monitoring and evaluation</b><p style="text-align: justify;text-justify: inter-word">People by nature need to be monitored or they will do what pleases them, when God put Adam in the Garden of Eden and gave him strict instructions to obey by not eating on the two trees but when God came monitoring them he found them hiding because they had done what God had forbidden them. We must monitor all government contracts if we are to reduce fraud, corruption and shoddy work. This project trucks the budget process, contract award, implementation, monitoring and up to the awarding of the certificate of conclusion.</p>
										<b>Doctrine monitoring and evaluation</b><p style="text-align: justify;text-justify: inter-word">All religious, faith and spiritual leaders serve God by attending to the spiritual needs of God’s people. Those ministers entrusted with people’s souls especially the Apostles must be monitored and evaluated to find out whether what they teach is the right doctrine. This project looks intently into the doctrines of different faith with the intentions of building harmony and unity.</p>
										<b>Spiritual monitoring and evaluation</b><p style="text-align: justify;text-justify: inter-word">The bible allows us to test every spirit to see if it is from God, because there are very many false and counterfeit spirits. Because the spirit is given and received, one must be sure whether what you are receiving is the right spirit otherwise one may run with a wrong spirit which is not from God, so spiritual monitoring is very crucial.</p>
										
									</div>
								</div>
							</div>-->

							
						</div>
					</div>
				</div>
			</div>

			<!--OUR SERVICES-->
			<div class="uni-home-2-our-services">
				<div class="uni-our-services-2 uni-background-4">
					<div class="container">
						<div class="uni-home-title">
							<h3 style="color:white;">Recent sermons</h3>
							<div class="uni-underline"></div>
						</div>

						<div class="uni-our-service-2-body">
							<div class="row">
								<div class="col-md-3">
									<div class="tab-nav">
										<ul class="nav-pills nav-stacked">
											<li class="active"><a href="#tab_a" data-toggle="pill">Textual</a></li>
											<li><a href="#tab_b" data-toggle="pill">Expository</a></li>
											<li><a href="#tab_c" data-toggle="pill">Topical</a></li>
											<li><a href="#tab_d" data-toggle="pill">Devotional</a></li>
											<li><a href="#tab_e" data-toggle="pill">Allegorical</a></li>
										</ul>
									</div>
								</div>
								<div class="col-md-9">
									<div class="tab-content">
										<div class="tab-pane active" id="tab_a">
											<div class="uni-our-service-2-content-default">
												<div class="row">
												<?php
													require_once('connect.php');
													$sales6 ="SELECT * FROM `sermons` where Category='Textual' order by IDs Desc LIMIT 1";
													$result5=mysqli_query($link,$sales6);
													$counter1=1;
													while($row5=mysqli_fetch_assoc($result5)){
													echo"<div class='col-md-5'>";
														echo"<div class='item-img'>";
															echo"<img src='images/SermonImage/".$row5['sermonimage']."' alt='' class='img-responsive'>";
														echo"</div>";
													echo"</div>";
													echo"<div class='col-md-7'>";
													
														echo"<div class='item-caption'>";
															echo"<div class='item-caption-title'>";
																echo"<h3>".$row5['Topic']."</h3>";
																echo"<div class='uni-line'></div>";
															echo"</div>";
															echo"<p style='text-align: justify;text-justify: inter-word;'>".$row5['ShortDescription']."</p>";
														echo"</div>";
													echo"</div>";
													}
													?>
												</div>
											</div>
										</div>
										<div class="tab-pane" id="tab_b">
											<div class="uni-our-service-2-content-default">
												<div class="row">
													<?php
													require_once('connect.php');
													$sales6 ="SELECT * FROM `sermons` where Category='Expository' order by IDs Desc LIMIT 1";
													$result5=mysqli_query($link,$sales6);
													$counter1=1;
													while($row5=mysqli_fetch_assoc($result5)){
													echo"<div class='col-md-5'>";
														echo"<div class='item-img'>";
															echo"<img src='images/SermonImage/".$row5['sermonimage']."' alt='' class='img-responsive'>";
														echo"</div>";
													echo"</div>";
													echo"<div class='col-md-7'>";
													
														echo"<div class='item-caption'>";
															echo"<div class='item-caption-title'>";
																echo"<h3>".$row5['Topic']."</h3>";
																echo"<div class='uni-line'></div>";
															echo"</div>";
															echo"<p style='text-align: justify;text-justify: inter-word;'>".$row5['ShortDescription']."</p>";
														echo"</div>";
													echo"</div>";
													}
													?>
												</div>
											</div>
										</div>
										<div class="tab-pane" id="tab_c">
											<div class="uni-our-service-2-content-default">
												<div class="row">
													<?php
													require_once('connect.php');
													$sales6 ="SELECT * FROM `sermons` where Category='Topical' order by IDs Desc LIMIT 1";
													$result5=mysqli_query($link,$sales6);
													$counter1=1;
													while($row5=mysqli_fetch_assoc($result5)){
													echo"<div class='col-md-5'>";
														echo"<div class='item-img'>";
															echo"<img src='images/SermonImage/".$row5['sermonimage']."' alt='' class='img-responsive'>";
														echo"</div>";
													echo"</div>";
													echo"<div class='col-md-7'>";
													
														echo"<div class='item-caption'>";
															echo"<div class='item-caption-title'>";
																echo"<h3>".$row5['Topic']."</h3>";
																echo"<div class='uni-line'></div>";
															echo"</div>";
															echo"<p style='text-align: justify;text-justify: inter-word;'>".$row5['ShortDescription']."</p>";
														echo"</div>";
													echo"</div>";
													}
													?>
												</div>
											</div>
										</div>
										<div class="tab-pane" id="tab_d">
											<div class="uni-our-service-2-content-default">
												<div class="row">
											<?php
													require_once('connect.php');
													$sales6 ="SELECT * FROM `sermons` where Category='Devotional' order by IDs Desc LIMIT 1";
													$result5=mysqli_query($link,$sales6);
													$counter1=1;
													while($row5=mysqli_fetch_assoc($result5)){
													echo"<div class='col-md-5'>";
														echo"<div class='item-img'>";
															echo"<img src='images/SermonImage/".$row5['sermonimage']."' alt='' class='img-responsive'>";
														echo"</div>";
													echo"</div>";
													echo"<div class='col-md-7'>";
													
														echo"<div class='item-caption'>";
															echo"<div class='item-caption-title'>";
																echo"<h3>".$row5['Topic']."</h3>";
																echo"<div class='uni-line'></div>";
															echo"</div>";
															echo"<p style='text-align: justify;text-justify: inter-word;'>".$row5['ShortDescription']."</p>";
														echo"</div>";
													echo"</div>";
													}
													?>
												</div>
											</div>
										</div>
										<div class="tab-pane" id="tab_e">
											<div class="uni-our-service-2-content-default">
												<div class="row">
												<?php
													require_once('connect.php');
													$sales6 ="SELECT * FROM `sermons` where Category='Allegorical' order by IDs Desc LIMIT 1";
													$result5=mysqli_query($link,$sales6);
													$counter1=1;
													while($row5=mysqli_fetch_assoc($result5)){
													echo"<div class='col-md-5'>";
														echo"<div class='item-img'>";
															echo"<img src='images/SermonImage/".$row5['sermonimage']."' alt='' class='img-responsive'>";
														echo"</div>";
													echo"</div>";
													echo"<div class='col-md-7'>";
													
														echo"<div class='item-caption'>";
															echo"<div class='item-caption-title'>";
																echo"<h3>".$row5['Topic']."</h3>";
																echo"<div class='uni-line'></div>";
															echo"</div>";
															echo"<p style='text-align: justify;text-justify: inter-word;'>".$row5['ShortDescription']."</p>";
														echo"</div>";
													echo"</div>";
													}
													?>
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
<!--<script src="plugin/datetimepicker/bootstrap-datepicker.min.js"></script>-->
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

<!-- 01_02_home_2.html  [XR&CO'2014], Tue, 22 Oct 2019 11:54:52 GMT -->
</html>