<!DOCTYPE html>
<html <?php language_attributes()?>>
	<head>
		<meta charset="<?php bloginfo('charset') ?>">
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="<?php bloginfo('description') ?>">
		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- For Window Tab Color -->
		<!-- Chrome, Firefox OS and Opera -->
		<meta name="theme-color" content="#151515">
		<!-- Windows Phone -->
		<meta name="msapplication-navbutton-color" content="#151515">
		<!-- iOS Safari -->
		<meta name="apple-mobile-web-app-status-bar-style" content="#151515">
		<title><?php bloginfo('name')?></title>
		<!-- Favicon -->
		<link rel="icon" type="image/png" sizes="56x56" href="<?php echo get_template_directory_uri()?>/images/fav-icon/icon.png">
		<!-- Main style sheet -->
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri()?>/css/style.css">
		<!-- responsive style sheet -->
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri()?>/css/responsive.css">
		<!-- Theme-Color css -->
		<link rel="stylesheet" id="jssDefault" href="<?php echo get_template_directory_uri()?>/css/color.css">

		<!-- Fix Internet Explorer ______________________________________-->
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script src="<?php //echo get_template_directory_uri()?>/vendor/html5shiv.js"></script>
			<script src="<?php //echo get_template_directory_uri()?>/vendor/respond.js"></script>
		<![endif]-->
        <?php wp_head()?>	
	</head>
	<body <?php body_class() ?>>
		<div class="main-page-wrapper">

			<!-- ===================================================
				Loading Transition
			==================================================== -->
			<div id="loader-wrapper">
				<div id="loader"></div>
			</div>

			<!-- ==================== Style Switcher ==================== -->
			<div class="switcher">
				<!-- Switcher button -->
				<div class="switch-btn">
					<button><i class="fa fa-cog fa-spin"></i></button>
				</div>

				<!-- switcher body -->
				<div class="switch-menu">
					<h5 class="title">Style Switcher</h5>						
					<!-- Theme color changer -->
					<div class="switcher-container">
						<h5>Color Skins</h5>
						<ul id="styleOptions" title="Switch Color" class="clearfix">
							<li><a href="javascript: void(0)" data-theme="color" class="color1"></a></li>
							<li><a href="javascript: void(0)" data-theme="color-2" class="color2"></a></li>
							<li><a href="javascript: void(0)" data-theme="color-3" class="color3"></a></li>
							<li><a href="javascript: void(0)" data-theme="color-4" class="color4"></a></li>
							<li><a href="javascript: void(0)" data-theme="color-5" class="color5"></a></li>
						</ul>
					</div>
				</div> <!-- /switch-menu -->
			</div> <!-- /.switcher -->

			

			<!-- 
			=============================================
				Theme Header
			============================================== 
			-->
			<header class="theme-main-header theme-header-two">
				<div class="top-header bg-color">
					<div class="container clearfix">
						<p class="float-left email-us">Email us at : <a href="mailto:info@mightybusinessconsultancy.com">info@mightybusinessconsultancy.com</a></p>
						<p class="float-right call-us">Call us for any questions : <a href="mob:(088) 0164 254 1075">(088) 0164 254 1075</a></p>
					</div> <!-- /.container -->
				</div> <!-- /.top-header -->

				<div class="middle-header">
					<div class="container clearfix">
						<!-- ================= Logo ==================== -->
						<div class="logo"><a href="<?php echo get_home_url()?>"><img src="<?php echo get_template_directory_uri()?>/images/logo/logo.png" alt="logo"></a></div>

						<ul class="our-address clearfix">
							<li>
								<i class="icon flaticon-map"></i>
								<p>1010 Avenue Inner Circular Road <br>Polton, <span>POST 1000</span> </p>
							</li>
							<li>
								<i class="icon flaticon-clock"></i>
								<p>SAT To THU - <span>Sat 8.00 AM - 05.00 PM</span> <br> Friday CLOSED</p>
							</li>
							<li>
								<i class="icon flaticon-phone-call"></i>
								<p><a href="#">0153 330 8717</a> <br>Free call</p>
							</li>
						</ul>
					</div>
				</div> <!-- /.middle-header -->

				<div class="theme-menu-wrapper">
					<div class="container">
						<div class="inner-wrapper clearfix">
							<!-- ============== Menu Warpper ================ -->
					   		<div class="menu-wrapper float-left">
					   			<nav id="mega-menu-holder" class="clearfix">

         <!-- For dynamic nav menu -->
	
                                    <?php 
                                        wp_nav_menu(array(
											'container'	=> false,
                                            'menu_class' =>"clearfix",
                                            'theme_location' =>"primary_menu",
											
                                        ));
                                    ?>

								   <!-- <ul class="clearfix">
									    <li class="active"><a href="#">Home</a>
									    	<ul class="dropdown">
									        	<li><a href="index.html">Home version one</a></li>
									        	<li><a href="index-2.html">Home version two</a></li>
									      </ul>
									    </li>
									    <li><a href="#">Pages</a>
									    	<ul class="dropdown">
									    		<li><a href="about.html">About us</a></li>
									    		<li><a href="404.html">404</a></li>
									       </ul>
									    </li>
									    <li><a href="#">Services</a>
									    	<ul class="dropdown">
									        	<li><a href="service-v1.html">Service Version one</a></li>
									        	<li><a href="service-v2.html">Service version two</a></li>
									       </ul>
									    </li>
									    <li><a href="#">Project</a>
									    	<ul class="dropdown">
									        	<li><a href="project-grid.html">project Grid</a></li>
									        	<li><a href="project-full-width.html">project Fullwidth</a></li>
									        	<li><a href="project-details.html">Project details</a></li>
									       </ul>
									    </li>
									    <li><a href="#">News</a>
									    	<ul class="dropdown">
									        	<li><a href="blog-classic.html">Blog Classic</a></li>
									        	<li><a href="blog-grid.html">Blog Grid</a></li>
									        	<li><a href="blog-details.html">Blog details</a></li>
									       </ul>
									    </li>
									    <li><a href="#">Portfolio</a>
									    	<ul class="dropdown">
									        	<li><a href="portfolio-v1.html">Portfolio Version One</a></li>
									        	<li><a href="portfolio-v2.html">Portfolio Version two</a></li>
									        	<li><a href="portfolio-v3.html">Portfolio Version three</a></li>
									        	<li><a href="portfolio-v4.html">Portfolio Version Four</a></li>
									       </ul>
									    </li>
									    <li><a href="contact.html">contact</a></li>
								   </ul> -->
								</nav> <!-- /#mega-menu-holder -->
					   		</div> <!-- /.menu-wrapper -->

					   		<ul class="social-icon float-right">
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
							</ul>
						</div> <!-- /.inner-wrapper -->
					</div> <!-- /.container -->
				</div> <!-- /.theme-menu-wrapper -->
			</header> <!-- /.theme-main-header -->