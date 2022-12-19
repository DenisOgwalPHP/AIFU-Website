<!doctype html>
<html lang="en">

<!-- 06_04_checkout.html  [XR&CO'2014], Tue, 22 Oct 2019 11:56:17 GMT -->

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>AIFU | Donate</title>
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

	<div class="uni-checkout">
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
				<div class="site-content-area">

					<div class="uni-banner-default uni-background-1">
						<div class="container">
							<!-- Page title -->
							<div class="page-title">
								<div class="page-title-inner">
									<h1>Donate</h1>
								</div>
							</div>
							<!-- End page title -->

							<!-- Breadcrumbs -->
							<ul class="breadcrumbs">
								<li><a href="index.php">home</a></li>
								<li><a href="donate.php">Donate</a></li>
							</ul>
							<!-- End breadcrumbs -->
						</div>
					</div>

					<main id="main" class="clearfix right_sidebar">
						<div class="uni-checkout-body">
							<div class="container">
								<div class="tg-container">
									<div id="primary">

										<div class="entry-thumbnail">

											<div class="entry-content-text-wrapper clearfix">
												<div class="entry-content-wrapper">
													<div class="entry-content">
														<div class="woocommerce">

															<div class="row">
																<div class="vk-checkout-billing-left">
																	<div class="col-md-6">
																		<div class="woocommerce-billing-fields">

																			<h3>Leave us your details</h3>
																			<div class="woocommerce-billing-fields__field-wrapper">
																				<div class="row">
																					<!--action="insertdonation.php"-->
																					<form class="woocomerce-form woocommerce-form-login login" method="post" action="https://www.paypal.com/cgi-bin/webscr">
																						<div class="col-md-6">
																							<p class="form-row form-row-first validate-required woocommerce-invalid woocommerce-invalid-required-field" id="billing_first_name_field" data-priority="10">
																								<label for="billing_first_name" class="">First name <abbr class="required" title="required">*</abbr></label>
																								<input type="text" class="input-text " name="first_name" id="first_name" placeholder="" value="" required autocomplete="given-name">
																							</p>
																						</div>
																						<div class="col-md-6">
																							<p class="form-row form-row-last validate-required" id="billing_last_name_field" data-priority="20">
																								<label for="billing_last_name" class="">Last name <abbr class="required" title="required">*</abbr></label>
																								<input type="text" class="input-text " name="last_name" id="last_name" placeholder="" required value="">
																							</p>
																						</div>
																						<div class="col-md-6">
																							<p class="form-row form-row-last validate-required" id="billing_phone_field" data-priority="20">
																								<label for="billing_phone" class="">Phone <abbr class="required" title="required">*</abbr></label>
																								<input type="tel" class="input-text " name="phone" id="phone" placeholder="" required value="">
																							</p>
																						</div>
																						<div class="col-md-6">
																							<p class="form-row form-row-last validate-required" id="billing_email_field" data-priority="20">
																								<label for="billing_phone" class="">Email <abbr class="required" title="required">*</abbr></label>
																								<input type="email" class="input-text " name="email" id="email" placeholder="" required value="">
																							</p>
																						</div>
																				</div>
																				<p class="form-row form-row-last validate-required" id="billing_company_field" data-priority="20">
																					<label for="billing_company" class="">Company name</label>
																					<input type="text" class="input-text " name="company" id="company" placeholder="" value="">
																				</p>
																				<p class="form-row form-row-last validate-required" id="billing_country" data-priority="20">
																					<label for="billing_country" class="">Continent</label>
																					<select name="addressContinent" id="addressContinent">
																						<option value="">Select a continent</option>
																						<option value="Africa">Africa</option>
																						<option value="Antarctica">Antarctica</option>
																						<option value="Asia">Asia</option>
																						<option value="Australia / Oceania">Australia / Oceania</option>
																						<option value="Europe">Europe</option>
																						<option value="North America">North America</option>
																						<option value="South America">South America</option>
																					</select>
																				</p>
																				<p class="form-row form-row-last validate-required" id="billing_country_field" data-priority="20">
																					<label for="billing_country" class="">Country</label>
																					<select name="country" id="country" class="country_to_state country_select select2-hidden-accessible" autocomplete="country" tabindex="-1" aria-hidden="true">
																						<option value="">Select a country…</option>
																						<option value="Uganda">Uganda</option>
																						<option value="Afganistan">Afghanistan</option>
																						<option value="Albania">Albania</option>
																						<option value="Algeria">Algeria</option>
																						<option value="American Samoa">American Samoa</option>
																						<option value="Andorra">Andorra</option>
																						<option value="Angola">Angola</option>
																						<option value="Anguilla">Anguilla</option>
																						<option value="Antigua & Barbuda">Antigua & Barbuda</option>
																						<option value="Argentina">Argentina</option>
																						<option value="Armenia">Armenia</option>
																						<option value="Aruba">Aruba</option>
																						<option value="Australia">Australia</option>
																						<option value="Austria">Austria</option>
																						<option value="Azerbaijan">Azerbaijan</option>
																						<option value="Bahamas">Bahamas</option>
																						<option value="Bahrain">Bahrain</option>
																						<option value="Bangladesh">Bangladesh</option>
																						<option value="Barbados">Barbados</option>
																						<option value="Belarus">Belarus</option>
																						<option value="Belgium">Belgium</option>
																						<option value="Belize">Belize</option>
																						<option value="Benin">Benin</option>
																						<option value="Bermuda">Bermuda</option>
																						<option value="Bhutan">Bhutan</option>
																						<option value="Bolivia">Bolivia</option>
																						<option value="Bonaire">Bonaire</option>
																						<option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
																						<option value="Botswana">Botswana</option>
																						<option value="Brazil">Brazil</option>
																						<option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
																						<option value="Brunei">Brunei</option>
																						<option value="Bulgaria">Bulgaria</option>
																						<option value="Burkina Faso">Burkina Faso</option>
																						<option value="Burundi">Burundi</option>
																						<option value="Cambodia">Cambodia</option>
																						<option value="Cameroon">Cameroon</option>
																						<option value="Canada">Canada</option>
																						<option value="Canary Islands">Canary Islands</option>
																						<option value="Cape Verde">Cape Verde</option>
																						<option value="Cayman Islands">Cayman Islands</option>
																						<option value="Central African Republic">Central African Republic</option>
																						<option value="Chad">Chad</option>
																						<option value="Channel Islands">Channel Islands</option>
																						<option value="Chile">Chile</option>
																						<option value="China">China</option>
																						<option value="Christmas Island">Christmas Island</option>
																						<option value="Cocos Island">Cocos Island</option>
																						<option value="Colombia">Colombia</option>
																						<option value="Comoros">Comoros</option>
																						<option value="Congo">Congo</option>
																						<option value="Cook Islands">Cook Islands</option>
																						<option value="Costa Rica">Costa Rica</option>
																						<option value="Cote DIvoire">Cote DIvoire</option>
																						<option value="Croatia">Croatia</option>
																						<option value="Cuba">Cuba</option>
																						<option value="Curaco">Curacao</option>
																						<option value="Cyprus">Cyprus</option>
																						<option value="Czech Republic">Czech Republic</option>
																						<option value="Denmark">Denmark</option>
																						<option value="Djibouti">Djibouti</option>
																						<option value="Dominica">Dominica</option>
																						<option value="Dominican Republic">Dominican Republic</option>
																						<option value="East Timor">East Timor</option>
																						<option value="Ecuador">Ecuador</option>
																						<option value="Egypt">Egypt</option>
																						<option value="El Salvador">El Salvador</option>
																						<option value="Equatorial Guinea">Equatorial Guinea</option>
																						<option value="Eritrea">Eritrea</option>
																						<option value="Estonia">Estonia</option>
																						<option value="Ethiopia">Ethiopia</option>
																						<option value="Falkland Islands">Falkland Islands</option>
																						<option value="Faroe Islands">Faroe Islands</option>
																						<option value="Fiji">Fiji</option>
																						<option value="Finland">Finland</option>
																						<option value="France">France</option>
																						<option value="French Guiana">French Guiana</option>
																						<option value="French Polynesia">French Polynesia</option>
																						<option value="French Southern Ter">French Southern Ter</option>
																						<option value="Gabon">Gabon</option>
																						<option value="Gambia">Gambia</option>
																						<option value="Georgia">Georgia</option>
																						<option value="Germany">Germany</option>
																						<option value="Ghana">Ghana</option>
																						<option value="Gibraltar">Gibraltar</option>
																						<option value="Great Britain">Great Britain</option>
																						<option value="Greece">Greece</option>
																						<option value="Greenland">Greenland</option>
																						<option value="Grenada">Grenada</option>
																						<option value="Guadeloupe">Guadeloupe</option>
																						<option value="Guam">Guam</option>
																						<option value="Guatemala">Guatemala</option>
																						<option value="Guinea">Guinea</option>
																						<option value="Guyana">Guyana</option>
																						<option value="Haiti">Haiti</option>
																						<option value="Hawaii">Hawaii</option>
																						<option value="Honduras">Honduras</option>
																						<option value="Hong Kong">Hong Kong</option>
																						<option value="Hungary">Hungary</option>
																						<option value="Iceland">Iceland</option>
																						<option value="Indonesia">Indonesia</option>
																						<option value="India">India</option>
																						<option value="Iran">Iran</option>
																						<option value="Iraq">Iraq</option>
																						<option value="Ireland">Ireland</option>
																						<option value="Isle of Man">Isle of Man</option>
																						<option value="Israel">Israel</option>
																						<option value="Italy">Italy</option>
																						<option value="Jamaica">Jamaica</option>
																						<option value="Japan">Japan</option>
																						<option value="Jordan">Jordan</option>
																						<option value="Kazakhstan">Kazakhstan</option>
																						<option value="Kenya">Kenya</option>
																						<option value="Kiribati">Kiribati</option>
																						<option value="Korea North">Korea North</option>
																						<option value="Korea Sout">Korea South</option>
																						<option value="Kuwait">Kuwait</option>
																						<option value="Kyrgyzstan">Kyrgyzstan</option>
																						<option value="Laos">Laos</option>
																						<option value="Latvia">Latvia</option>
																						<option value="Lebanon">Lebanon</option>
																						<option value="Lesotho">Lesotho</option>
																						<option value="Liberia">Liberia</option>
																						<option value="Libya">Libya</option>
																						<option value="Liechtenstein">Liechtenstein</option>
																						<option value="Lithuania">Lithuania</option>
																						<option value="Luxembourg">Luxembourg</option>
																						<option value="Macau">Macau</option>
																						<option value="Macedonia">Macedonia</option>
																						<option value="Madagascar">Madagascar</option>
																						<option value="Malaysia">Malaysia</option>
																						<option value="Malawi">Malawi</option>
																						<option value="Maldives">Maldives</option>
																						<option value="Mali">Mali</option>
																						<option value="Malta">Malta</option>
																						<option value="Marshall Islands">Marshall Islands</option>
																						<option value="Martinique">Martinique</option>
																						<option value="Mauritania">Mauritania</option>
																						<option value="Mauritius">Mauritius</option>
																						<option value="Mayotte">Mayotte</option>
																						<option value="Mexico">Mexico</option>
																						<option value="Midway Islands">Midway Islands</option>
																						<option value="Moldova">Moldova</option>
																						<option value="Monaco">Monaco</option>
																						<option value="Mongolia">Mongolia</option>
																						<option value="Montserrat">Montserrat</option>
																						<option value="Morocco">Morocco</option>
																						<option value="Mozambique">Mozambique</option>
																						<option value="Myanmar">Myanmar</option>
																						<option value="Nambia">Nambia</option>
																						<option value="Nauru">Nauru</option>
																						<option value="Nepal">Nepal</option>
																						<option value="Netherland Antilles">Netherland Antilles</option>
																						<option value="Netherlands">Netherlands (Holland, Europe)</option>
																						<option value="Nevis">Nevis</option>
																						<option value="New Caledonia">New Caledonia</option>
																						<option value="New Zealand">New Zealand</option>
																						<option value="Nicaragua">Nicaragua</option>
																						<option value="Niger">Niger</option>
																						<option value="Nigeria">Nigeria</option>
																						<option value="Niue">Niue</option>
																						<option value="Norfolk Island">Norfolk Island</option>
																						<option value="Norway">Norway</option>
																						<option value="Oman">Oman</option>
																						<option value="Pakistan">Pakistan</option>
																						<option value="Palau Island">Palau Island</option>
																						<option value="Palestine">Palestine</option>
																						<option value="Panama">Panama</option>
																						<option value="Papua New Guinea">Papua New Guinea</option>
																						<option value="Paraguay">Paraguay</option>
																						<option value="Peru">Peru</option>
																						<option value="Phillipines">Philippines</option>
																						<option value="Pitcairn Island">Pitcairn Island</option>
																						<option value="Poland">Poland</option>
																						<option value="Portugal">Portugal</option>
																						<option value="Puerto Rico">Puerto Rico</option>
																						<option value="Qatar">Qatar</option>
																						<option value="Republic of Montenegro">Republic of Montenegro</option>
																						<option value="Republic of Serbia">Republic of Serbia</option>
																						<option value="Reunion">Reunion</option>
																						<option value="Romania">Romania</option>
																						<option value="Russia">Russia</option>
																						<option value="Rwanda">Rwanda</option>
																						<option value="St Barthelemy">St Barthelemy</option>
																						<option value="St Eustatius">St Eustatius</option>
																						<option value="St Helena">St Helena</option>
																						<option value="St Kitts-Nevis">St Kitts-Nevis</option>
																						<option value="St Lucia">St Lucia</option>
																						<option value="St Maarten">St Maarten</option>
																						<option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
																						<option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
																						<option value="Saipan">Saipan</option>
																						<option value="Samoa">Samoa</option>
																						<option value="Samoa American">Samoa American</option>
																						<option value="San Marino">San Marino</option>
																						<option value="Sao Tome & Principe">Sao Tome & Principe</option>
																						<option value="Saudi Arabia">Saudi Arabia</option>
																						<option value="Senegal">Senegal</option>
																						<option value="Seychelles">Seychelles</option>
																						<option value="Sierra Leone">Sierra Leone</option>
																						<option value="Singapore">Singapore</option>
																						<option value="Slovakia">Slovakia</option>
																						<option value="Slovenia">Slovenia</option>
																						<option value="Solomon Islands">Solomon Islands</option>
																						<option value="Somalia">Somalia</option>
																						<option value="South Africa">South Africa</option>
																						<option value="Spain">Spain</option>
																						<option value="Sri Lanka">Sri Lanka</option>
																						<option value="Sudan">Sudan</option>
																						<option value="Suriname">Suriname</option>
																						<option value="Swaziland">Swaziland</option>
																						<option value="Sweden">Sweden</option>
																						<option value="Switzerland">Switzerland</option>
																						<option value="Syria">Syria</option>
																						<option value="Tahiti">Tahiti</option>
																						<option value="Taiwan">Taiwan</option>
																						<option value="Tajikistan">Tajikistan</option>
																						<option value="Tanzania">Tanzania</option>
																						<option value="Thailand">Thailand</option>
																						<option value="Togo">Togo</option>
																						<option value="Tokelau">Tokelau</option>
																						<option value="Tonga">Tonga</option>
																						<option value="Trinidad & Tobago">Trinidad & Tobago</option>
																						<option value="Tunisia">Tunisia</option>
																						<option value="Turkey">Turkey</option>
																						<option value="Turkmenistan">Turkmenistan</option>
																						<option value="Turks & Caicos Is">Turks & Caicos Is</option>
																						<option value="Tuvalu">Tuvalu</option>
																						<option value="United Kingdom">United Kingdom</option>
																						<option value="Ukraine">Ukraine</option>
																						<option value="United Arab Erimates">United Arab Emirates</option>
																						<option value="United States of America">United States of America</option>
																						<option value="Uraguay">Uruguay</option>
																						<option value="Uzbekistan">Uzbekistan</option>
																						<option value="Vanuatu">Vanuatu</option>
																						<option value="Vatican City State">Vatican City State</option>
																						<option value="Venezuela">Venezuela</option>
																						<option value="Vietnam">Vietnam</option>
																						<option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
																						<option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
																						<option value="Wake Island">Wake Island</option>
																						<option value="Wallis & Futana Is">Wallis & Futana Is</option>
																						<option value="Yemen">Yemen</option>
																						<option value="Zaire">Zaire</option>
																						<option value="Zambia">Zambia</option>
																						<option value="Zimbabwe">Zimbabwe</option>
																					</select>
																				</p>
																				<p class="form-row form-row-last validate-required" id="billing_address_field" data-priority="20">
																					<label for="billing_address" class="">Region<abbr class="required" title="required"></abbr></label>
																					<input type="text" class="input-text " name="region" id="region" placeholder="" value="">
																				</p>
																				<p class="form-row form-row-last validate-required" id="billing_address_field" data-priority="20">
																					<label for="billing_address" class="">Address<abbr class="required" title="required"></abbr></label>
																					<input type="text" class="input-text " name="address" id="address" placeholder="" value="">
																				</p>
																				<p class="form-row form-row-last validate-required" id="billing_town_city_field" data-priority="20">
																					<label for="billing_town_city" class="">Town/City<abbr class="required" title="required"></abbr></label>
																					<input type="text" class="input-text " name="town_city" id="town_city" placeholder="" value="">
																				</p>
																			</div>
																		</div>

																	</div>

																	<div class="col-md-6">
																		<div class="vk-checkout-order-paypal">
																			<div id="order_review" class="woocommerce-checkout-review-order">
																				<div class="vk-checkout-order-left">
																					<h3>&nbsp;</h3>

																					<p class="form-row form-row-last validate-required" id="billing_postcode_field" data-priority="20">
																						<label for="billing_postcode" class="">Postcode/ZIP</label>
																						<input type="text" class="input-text " name="postcode" id="postcode" placeholder="" value="">
																					</p>
																					<p class="form-row form-row-last validate-required" id="billing_ordernote_field" data-priority="20">
																						<label class="">Notes</label>
																						<textarea class="input-text " name="notes" id="notes" placeholder=""></textarea>

																					</p>
																					<p class="form-row form-row-last validate-required" id="billing_town_city_field" data-priority="20">
																						<label for="billing_town_city" class="">Amount($):<abbr class="required" title="required">*</abbr></label>
																						<input type="number" class="input-text " name="Amount" id="Amount" placeholder="Amount in USD" value="">
																					</p>

																				</div>

																				<div id="payment" class="woocommerce-checkout-payment">

																					<ul class="wc_payment_methods payment_methods">
																						<li class="wc_payment_method payment_method_cheque">
																							<label for="payment_method_cheque">
																								Message </label>
																							<div class="payment_box payment_method_cheque">
																								<p>Thank you for choosing to support Africa Interfaith Uganda. We commit to using your donation in the
																									best way possible with the purpose of reaching out to religious, cultural, spiritual, traditional,
																									political leaders and the public with the intention of dialoguing, teaching, training and
																									unveiling the mysteries of the kingdom of God by promoting unity, harmonious living and
																									co-existence with in Uganda, Africa and the entire world. </p>
																							</div>
																						</li>
																						<li>
																							<hr>
																						</li>

																					</ul>
																					<div id="paypalbutton" class="form-row place-order">

																						<!-- <input type="submit" class="button alt" name="place_order" id="place_order" value="DONATE USING PAYPAL" data-value="Place order">

                                                                                    <input type="hidden" id="wpnonce" name="_wpnonce" value="341d89a24a"><input type="hidden" name="_wp_http_referer" value="/structure-contruction/checkout/?wc-ajax=update_order_review">-->
																						</form>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="clearfix"></div>
															</div>
														</div>
													</div><!-- .entry-content -->
												</div>
											</div>
										</div>


									</div> <!-- Primary end -->
								</div>
							</div>
						</div>
					</main>

				</div>
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
													$sales6 = "SELECT blogtitle,description,attachment,blogimage,blogid,blogshotdescription,Date,postedby FROM `blogs` order by blogid Desc";
													$result5 = mysqli_query($link, $sales6);
													$counter1 = 1;
													while ($row5 = mysqli_fetch_assoc($result5)) {
														echo "<li>";
														echo "<h4><a href='#'>" . $row5['blogtitle'] . "</a></h4>";
														echo "<span class='time'>" . $row5['Date'] . "</span>";
														echo "</li>";
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
														<input type="email" class="form-control" name="emails" id="emails" placeholder="Enter your email">
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
									<p class="copyright-text">Copyright &copy; <script>
											document.write(new Date().getFullYear());
										</script> All Rights Reserved. Designed By: <span><a href="http://essentialsystems.atwebpages.com">&nbsp;Eng. Denis Ogwal</a></span></p>
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
	<script src="https://www.paypal.com/sdk/js?&client-id=AU7C8HS0EhybLgly4_zyw_1DHrju4C5OMBiDNgxkv6dsfEv2f2_EX8bsA2E6MGRAa9oIKbyoq0Rh_zN4"></script>

	<div id="paypal-button-container"></div>

	<script>
		paypal.Buttons({

			style: {
				color: 'blue',
				shape: 'pill',
				label: 'pay'
			},
			createOrder: function(data, actions) {
				return actions.order.create({
					purchase_units: [{
						amount: {
							value: document.getElementById("Amount").value,
							currency_code: "USD"
						}

					}]

				});
			},
			onApprove: function(data, actions) {
				return actions.order.capture().then(function(details) {
					//	window.location = "insertdonation.php?&orderID="+data.orderID+"&email="+document.getElementById("phone").value;
					window.location = "insertdonation.php?orderID=" + data.orderID + "&email=" + document.getElementById("email").value + "&first_name=" + document.getElementById("first_name").value + "&last_name=" + document.getElementById("last_name").value + "&region=" + document.getElementById("region").value + "&address=" + document.getElementById("address").value + "&postcode=" + document.getElementById("postcode").value + "&Amount=" + details.purchase_units[0].amount.value + "&country=" + document.getElementById("country").value + "&town_city=" + document.getElementById("town_city").value + "&notes=" + document.getElementById("notes").value + "&phone=" + document.getElementById("phone").value + "&company=" + document.getElementById("company").value + "&addressContinent=" + document.getElementById("addressContinent").value;
					//alert('Transaction completed by '+document.getElementById("phone").value);
					//
					//details.payer.email_address
					//details.payer.name.given_name
					//details.payer.name.surname
					//details.purchase_units[0].shipping.address.address_line_1
					//details.purchase_units[0].shipping.address.admin_area_2
					//details.purchase_units[0].shipping.address.admin_area_1
					//details.purchase_units[0].shipping.address.postal_code
					//details.purchase_units[0].shipping.address.country_code
					//details.purchase_units[0].amount.value
				});
			}
		}).render('#paypalbutton');
	</script>
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

<!-- 06_04_checkout.html  [XR&CO'2014], Tue, 22 Oct 2019 11:56:17 GMT -->

</html>