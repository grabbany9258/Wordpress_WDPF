<!DOCTYPE html>
<html <?php language_attributes()?>>
	<head>
		<meta charset="<?php bloginfo('charset')?>">
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- For Window Tab Color -->
		<!-- Chrome, Firefox OS and Opera -->
		<meta name="theme-color" content="#151515">
		<!-- Windows Phone -->
		<meta name="msapplication-navbutton-color" content="#151515">
		<!-- iOS Safari -->
		<meta name="apple-mobile-web-app-status-bar-style" content="#151515">
		<title><?php the_title()?></title>
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

	<body <?php body_class()?>>
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
			<header class="theme-main-header theme-header-one">
				<div class="top-header">
					<div class="container clearfix">
						<p class="float-left email-us">Email us at : <a href="mailto:info@apacheconsultancy.com">info@apacheconsultancy.com</a></p>
						<p class="float-right call-us">Call us for any questions : <a href="tel:(088) 987 555 123">(088) 987 555 123</a></p>
					</div> <!-- /.container -->
				</div> <!-- /.top-header -->

				<div class="theme-menu-wrapper">
					<div class="container">
						<div class="inner-wrapper clearfix">
							<!-- ================= Logo ==================== -->
							<div class="logo"><a href="index.html"><img src="<?php echo get_template_directory_uri()?>/images/logo/logo.png" alt="logo"></a></div>
							<!-- ============== Menu Warpper ================ -->
					   		<div class="menu-wrapper float-right">
					   			<nav id="mega-menu-holder" class="clearfix">
								   <ul class="clearfix">
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
								   </ul>
								</nav> <!-- /#mega-menu-holder -->
					   		</div> <!-- /.menu-wrapper -->
						</div> <!-- /.inner-wrapper -->
					</div> <!-- /.container -->
				</div> <!-- /.theme-menu-wrapper -->
			</header> <!-- /.theme-main-header -->

			
			<!-- 
			=============================================
				Theme Main Banner
			============================================== 
			-->
			<div id="theme-main-banner" class="banner-one section-spacing">
				<div data-src="<?php echo get_template_directory_uri()?>/images/home/slide-1.jpg">
					<div class="camera_caption text-center">
						<div class="container">
							<h1 class="wow fadeInUp animated"><span>Business for</span> Consuling &amp; Investment</h1>
							<p class="wow fadeInUp animated" data-wow-delay="0.2s">Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas. Dynamically innovate</p>
							<a href="about.html" class="theme-button-one wow fadeInUp animated" data-wow-delay="0.278s">Read more</a>
						</div> <!-- /.container -->
					</div> <!-- /.camera_caption -->
				</div>
				<div data-src="<?php echo get_template_directory_uri()?>/images/home/slide-2.jpg">
					<div class="camera_caption text-center">
						<div class="container">
							<h1 class="wow fadeInUp animated"><span>We are Apache We are Future</span> Coworking &amp; Community</h1>
							<p class="wow fadeInUp animated" data-wow-delay="0.2s">Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas. Dynamically innovate</p>
							<a href="about.html" class="theme-button-one wow fadeInUp animated" data-wow-delay="0.278s">Read more</a>
						</div> <!-- /.container -->
					</div> <!-- /.camera_caption -->
				</div>
			</div> <!-- /#theme-main-banner -->
			
			
			<!-- 
			=============================================
				Feature Work
			============================================== 
			-->
			<div class="feature-work section-spacing">
				<div class="container">
					<div class="feature-work-slider">
						<div class="item">
							<div class="single-feature">
								<h5 class="title">Who we are?</h5>
								<p>Objectively integrate enterprise-wide strategic theme areas with functionalized infrastructures. Interactively productize </p>
								<a href="#" class="learn-more">Learn More</a>
							</div> <!-- /.single-feature -->
						</div>
						<div class="item">
							<div class="single-feature">
								<h5 class="title">What we do?</h5>
								<p>Objectively integrate enterprise-wide strategic theme areas with functionalized infrastructures. Interactively productize </p>
								<a href="#" class="learn-more">Learn More</a>
							</div> <!-- /.single-feature -->
						</div>
						<div class="item">
							<div class="single-feature">
								<h5 class="title">How we are working?</h5>
								<p>Objectively integrate enterprise-wide strategic theme areas with functionalized infrastructures. Interactively productize </p>
								<a href="#" class="learn-more">Learn More</a>
							</div> <!-- /.single-feature -->
						</div>
					</div> <!-- /.feature-work-slider -->
				</div> <!-- /.container -->
			</div> <!-- /.feature-work -->


			<!-- 
			=============================================
				About Company
			============================================== 
			-->
			<div class="about-compnay styleone section-spacing">
				<div class="row no-gutters">
					<div class="col-lg-6 col-12 left-side">
						<div class="inner-content clearfix">
							<div class="main-wrapper">
								<div class="text-wrapper">
									<div class="theme-title-one">
										<h2 class="title">We are World Leading <br> Consulting Firm</h2>
									</div> <!-- /.theme-title-one -->
									<p>Mauris at varius orci. Vestibulum interdum felis eu nisl pulvinar, quis ultricies nibh. Sed ultricies ante vitae laoreet sagittis. In pellentesque viverra purus. Sed risus est, molestie nec hendrerit hendrerit, sollicitudin</p>
									<ul class="clearfix">
										<li><span> Senectus et netus et malesuada.</span></li>
										<li><span> Integer congue scelerisque ultrices.</span></li>
										<li><span> Fames ac turpis egestas.</span></li>
										<li><span> Maecenas nulla est, rutrum.</span></li>
										<li><span> Duis ligula odio, tristique eget.</span></li>
										<li><span> Vitae orci eget, finibus suscipit.</span></li>
										<li><span> Convallis a, blandit sollicitudin.</span></li>
									</ul>
									<a href="about.html" class="theme-button-one">View More Info</a>
								</div> <!-- /.text-wrapper -->
							</div> <!-- /.main-wrapper -->
						</div> <!-- /.inner-content -->
					</div>
					<div class="col-lg-6 col-12 right-side">
						<div class="image-wrapper clearfix row no-gutters">
							<div class="col-sm-6 col-12">
								<div class="image-box full-height" style="background:url(<?php echo get_template_directory_uri()?>/images/home/1.jpg); background-size:cover;">
									<div class="overlay">
										<div class="single-counter-box">
					        				<div class="number"><span class="timer" data-from="0" data-to="135" data-speed="1200" data-refresh-interval="5">0</span></div>
					        				<p>Projects</p>
					        			</div> <!-- /.single-counter-box -->
									</div>
								</div> <!-- /.image-box -->
							</div>
							<div class="col-sm-6 col-12">
								<div class="image-box half-height" style="background:url(<?php echo get_template_directory_uri()?>/images/home/2.jpg); background-size:cover;">
									<div class="overlay">
										<div class="single-counter-box">
					        				<div class="number"><span class="timer" data-from="0" data-to="75" data-speed="1200" data-refresh-interval="5">0</span>+</div>
					        				<p>Cases</p>
					        			</div> <!-- /.single-counter-box -->
									</div>
								</div> <!-- /.image-box -->
								<div class="image-box half-height" style="background:url(<?php echo get_template_directory_uri()?>/images/home/3.jpg); background-size:cover;">
									<div class="overlay">
										<div class="single-counter-box">
					        				<div class="number"><span class="timer" data-from="0" data-to="595" data-speed="1200" data-refresh-interval="5">0</span>+</div>
					        				<p>Awards</p>
					        			</div> <!-- /.single-counter-box -->
									</div>
								</div> <!-- /.image-box -->
							</div>
						</div> <!-- /.image-wrapper -->
					</div> <!-- /.right-side -->
				</div> <!-- /.row -->
			</div> <!-- /.about-compnay -->


			<!-- 
			=============================================
				Video Presentation
			============================================== 
			-->
			<div class="video-presentation section-spacing">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-12 wow fadeInLeft animated">
							<div class="video-player">
								<a data-fancybox href="https://www.youtube.com/embed/r-AuLm7S3XE?rel=0&amp;showinfo=0" class="play-button"><i class="flaticon-right-arrow"></i></a>
							</div> <!-- /.video-player -->
							<div class="video-length"><span>Video name — 3:45 min.</span></div>
							<ul class="counter-text-wrapper clearfix">
								<li>
									<div class="number"><span class="timer" data-from="0" data-to="1700" data-speed="1200" data-refresh-interval="5">0</span>+</div>
									<h6>Trusted clients</h6>
									<p>sagittis. In pellentesque viverra purus.</p>
								</li>
								<li>
									<div class="number"><span class="timer" data-from="0" data-to="120" data-speed="1200" data-refresh-interval="5">0</span>+</div>
									<h6>Successful cases</h6>
									<p>sagittis. In pellentesque viverra purus.</p>
								</li>
								<li>
									<div class="number">$<span class="timer" data-from="0" data-to="56" data-speed="1200" data-refresh-interval="5">0</span></div>
									<h6>Billions recovered</h6>
									<p>sagittis. In pellentesque viverra purus.</p>
								</li>
							</ul> <!-- /.counter-text-wrapper -->
						</div> <!-- /.col- -->
						<div class="col-lg-6 col-12 wow fadeInRight animated">
							<div class="info-text-wrapper">
								<div class="theme-title-one text-center">
									<h2 class="title">Check Video Presentation to find out More About Us</h2>
								</div>
								<p>Mauris at varius orci. Vestibulum interdum felis eu nisl pulvinar, quis ultricies nibh. Sed ultricies ante vitae laoreet sagittis. In pellentesque viverra purus. Sed risus est, molestie nec hendrerit hendrerit, sollicitudin nec ante. Pellentesque habitant morbi tristique.Rapaciously seize tive infomediaries and user-centric intellectual capital.</p>
								<div class="help"><p>Just <span>Mail</span> us. We can answer all your questions</p> <a href="#">info@apacheconsult.com.</a></div>
								<ul class="clearfix">
									<li><img src="<?php //echo get_template_directory_uri()?>/images/home/sign.png" alt=""></li>
									<li>
										<div class="name">Carol J. Stephens</div>
										<span>CEO Company</span>
									</li>
								</ul>
							</div> <!-- /.info-text-wrapper -->
						</div>
					</div> <!-- /.row -->
				</div> <!-- /.container -->
			</div> <!-- /.video-presentation -->


			<!-- 
			=============================================
				Service Style One
			============================================== 
			-->
			<div class="service-style-one section-spacing">
				<div class="section-bg-half left-half wow fadeInLeft animated" data-wow-delay="0.278s"><div class="opacity"></div></div>
				<div class="section-bg-half right-half wow fadeInRight animated" data-wow-delay="0.278s"></div>
				<div class="main-container">
					<div class="main-bg-wrapper">
						<div class="container">
							<div class="clearfix">
								<div class="left-side">
									<div class="theme-title-one">
										<h2 class="title">Our Services</h2>
									</div> <!-- /.theme-title-one -->
									<p>Vitae laoreet sagittis. In pellentesqueviverra purus. Sed risus est, molhendrerit,Proactively envisioned multimedia Phosfluorescently engage worldwide methodologies with web-enabled technology. Interactively coordinate proactive e-commerce via process-centric "outside the box" thinking. Completely </p>
									<a href="#" class="theme-button-one">View All Services</a>
								</div> <!-- /.left-side -->

								<div class="right-side">
									<div class="row">
										<div class="col-md-6 col-12 wow fadeInUp animated">
											<div class="single-service">
												<i class="icon flaticon-bag"></i>
												<div class="srvc-name">
													<h6><a href="#">Business Consulting</a></h6>
													<span>We are Consulting Company</span>
												</div> <!-- /.srvc-name -->
												<p>Vitae laoreet sagittis. In pellentesqueviverra purus. Sed risus est, molhendrerit,Proactively envisioned multimedia </p>
											</div> <!-- /.single-service -->
										</div> <!-- /.col- -->
										<div class="col-md-6 col-12 wow fadeInUp animated">
											<div class="single-service">
												<i class="icon flaticon-chair"></i>
												<div class="srvc-name">
													<h6><a href="#">IT Consulting</a></h6>
													<span>We are Consulting Company</span>
												</div> <!-- /.srvc-name -->
												<p>Vitae laoreet sagittis. In pellentesqueviverra purus. Sed risus est, molhendrerit,Proactively envisioned multimedia </p>
											</div> <!-- /.single-service -->
										</div> <!-- /.col- -->
										<div class="col-md-6 col-12 wow fadeInUp animated">
											<div class="single-service">
												<i class="icon flaticon-law"></i>
												<div class="srvc-name">
													<h6><a href="#">Lawyers Consulting</a></h6>
													<span>We are Consulting Company</span>
												</div> <!-- /.srvc-name -->
												<p>Vitae laoreet sagittis. In pellentesqueviverra purus. Sed risus est, molhendrerit,Proactively envisioned multimedia </p>
											</div> <!-- /.single-service -->
										</div> <!-- /.col- -->
										<div class="col-md-6 col-12 wow fadeInUp animated">
											<div class="single-service">
												<i class="icon flaticon-chart2"></i>
												<div class="srvc-name">
													<h6><a href="#">Financial Consulting</a></h6>
													<span>We are Consulting Company</span>
												</div> <!-- /.srvc-name -->
												<p>Vitae laoreet sagittis. In pellentesqueviverra purus. Sed risus est, molhendrerit,Proactively envisioned multimedia </p>
											</div> <!-- /.single-service -->
										</div> <!-- /.col- -->
									</div> <!-- /.row -->
								</div> <!-- /.right-side -->
							</div>
						</div> <!-- /.container -->
					</div> <!-- /.main-bg-wrapper -->
				</div> <!-- /.main-container -->
			</div> <!-- /.service-style-one -->


			<!--
			=====================================================
				Latest Project
			=====================================================
			-->
			<div class="latest-project section-spacing">
				<div class="container">
					<div class="theme-title-one text-center">
						<h2 class="title">Our Latest Projects</h2>
					</div> <!-- /.theme-title-one -->
					<div class="row">
						<div class="col-lg-3 col-sm-6 col-12">
							<div class="single-block">
								<img src="<?php echo get_template_directory_uri()?>/images/portfolio/1.jpg" alt="">
								<div class="overlay">
									<div>
										<h6><a href="project-details.html">Thought Leadership</a></h6>
										<span>Current Project</span>
									</div>
								</div> <!-- /.overlay -->
							</div> <!-- /.single-block -->
						</div> <!-- /.col- -->
						<div class="col-lg-3 col-sm-6 col-12">
							<div class="single-block">
								<img src="<?php echo get_template_directory_uri()?>/images/portfolio/2.jpg" alt="">
								<div class="overlay">
									<div>
										<h6><a href="project-details.html">Thought Leadership</a></h6>
										<span>Current Project</span>
									</div>
								</div> <!-- /.overlay -->
							</div> <!-- /.single-block -->
						</div> <!-- /.col- -->
						<div class="col-lg-3 col-sm-6 col-12">
							<div class="single-block">
								<img src="<?php echo get_template_directory_uri()?>/images/portfolio/3.jpg" alt="">
								<div class="overlay">
									<div>
										<h6><a href="project-details.html">Thought Leadership</a></h6>
										<span>Current Project</span>
									</div>
								</div> <!-- /.overlay -->
							</div> <!-- /.single-block -->
						</div> <!-- /.col- -->
						<div class="col-lg-3 col-sm-6 col-12">
							<div class="single-block">
								<img src="<?php echo get_template_directory_uri()?>/images/portfolio/4.jpg" alt="">
								<div class="overlay">
									<div>
										<h6><a href="project-details.html">Thought Leadership</a></h6>
										<span>Current Project</span>
									</div>
								</div> <!-- /.overlay -->
							</div> <!-- /.single-block -->
						</div> <!-- /.col- -->
						<div class="col-lg-3 col-sm-6 col-12">
							<div class="single-block">
								<img src="<?php echo get_template_directory_uri()?>/images/portfolio/5.jpg" alt="">
								<div class="overlay">
									<div>
										<h6><a href="project-details.html">Thought Leadership</a></h6>
										<span>Current Project</span>
									</div>
								</div> <!-- /.overlay -->
							</div> <!-- /.single-block -->
						</div> <!-- /.col- -->
						<div class="col-lg-3 col-sm-6 col-12">
							<div class="single-block">
								<img src="<?php echo get_template_directory_uri()?>/images/portfolio/6.jpg" alt="">
								<div class="overlay">
									<div>
										<h6><a href="project-details.html">Thought Leadership</a></h6>
										<span>Current Project</span>
									</div>
								</div> <!-- /.overlay -->
							</div> <!-- /.single-block -->
						</div> <!-- /.col- -->
						<div class="col-lg-3 col-sm-6 col-12">
							<div class="single-block">
								<img src="<?php echo get_template_directory_uri()?>/images/portfolio/7.jpg" alt="">
								<div class="overlay">
									<div>
										<h6><a href="project-details.html">Thought Leadership</a></h6>
										<span>Current Project</span>
									</div>
								</div> <!-- /.overlay -->
							</div> <!-- /.single-block -->
						</div> <!-- /.col- -->
						<div class="col-lg-3 col-sm-6 col-12">
							<div class="single-block">
								<img src="<?php echo get_template_directory_uri()?>/images/portfolio/8.jpg" alt="">
								<div class="overlay">
									<div>
										<h6><a href="project-details.html">Thought Leadership</a></h6>
										<span>Current Project</span>
									</div>
								</div> <!-- /.overlay -->
							</div> <!-- /.single-block -->
						</div> <!-- /.col- -->
					</div> <!-- /.row -->

					<div class="view-all-project clearfix">
						<p class="float-left">Leverage agile frameworks to provide a robust synopsis for high level overviews. <br> Iterative approaches  to corporate strategy foster collaborative thinking to further the overall .</p>
						<a href="project-grid.html" class="theme-button-one float-right">View All Project</a>
					</div> <!-- /.view-all-project -->
				</div> <!-- /.container -->
			</div> <!-- /.latest-project -->


			<!--
			=====================================================
				FAQ Section
			=====================================================
			-->
			<div class="faq-section">
				<img src="<?php echo get_template_directory_uri()?>/images/home/man.png" alt="" class="man-image wow fadeInUp animated" data-wow-delay="0.3s">
				<div class="container clearfix">
					<div class="main-wrapper">
						<div class="faq-tab-wrapper">
							<h2 class="title">Frequently Asked Questions</h2>

							<div class="accordion-one">
								<div class="panel-group theme-accordion" id="accordion">
								  <div class="panel">
								    <div class="panel-heading">
								      <h6 class="panel-title">
								        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
								        How does the business mailing address work?</a>
								      </h6>
								    </div>
								    <div id="collapse1" class="panel-collapse collapse">
								      <div class="panel-body">
								      	<p>Mauris at varius orci. Vestibulum interdum felis eu nisl pulvinar, quis nibh.d ultricies ante vitae laoreet sagittis. In pellentesque viverra Pellentesque habitant morbi tristique.</p>
								      </div>
								    </div>
								  </div> <!-- /panel 1 -->
								  <div class="panel">
								    <div class="panel-heading active-panel">
								      <h6 class="panel-title">
								        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
								        How does the business mailing address work?</a>
								      </h6>
								    </div>
								    <div id="collapse2" class="panel-collapse collapse show">
								      <div class="panel-body">
								      	<p>Mauris at varius orci. Vestibulum interdum felis eu nisl pulvinar, quis nibh.d ultricies ante vitae laoreet sagittis. In pellentesque viverra Pellentesque habitant morbi tristique.</p>
								      </div>
								    </div>
								  </div> <!-- /panel 2 -->
								  <div class="panel">
								    <div class="panel-heading">
								      <h6 class="panel-title">
								        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
								        How does the business mailing address work?</a>
								      </h6>
								    </div>
								    <div id="collapse3" class="panel-collapse collapse">
								      <div class="panel-body">
								      	<p>Mauris at varius orci. Vestibulum interdum felis eu nisl pulvinar, quis nibh.d ultricies ante vitae laoreet sagittis. In pellentesque viverra Pellentesque habitant morbi tristique.</p>
								      </div>
								    </div>
								  </div> <!-- /panel 3 -->
								  <div class="panel">
								    <div class="panel-heading">
								      <h6 class="panel-title">
								        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
								       What makes your financial projections special?</a>
								      </h6>
								    </div>
								    <div id="collapse4" class="panel-collapse collapse">
								      <div class="panel-body">
								      	<p>Mauris at varius orci. Vestibulum interdum felis eu nisl pulvinar, quis nibh.d ultricies ante vitae laoreet sagittis. In pellentesque viverra Pellentesque habitant morbi tristique.</p>
								      </div>
								    </div>
								  </div> <!-- /panel 4 -->
								</div> <!-- end #accordion -->
							</div> <!-- End of .accordion-one -->
						</div> <!-- /.faq-tab-wrapper -->
					</div>
				</div> <!-- /.container -->
			</div> <!-- /.faq-section -->


			<!--
			=====================================================
				Partner Section One
			=====================================================
			-->
			<div class="partner-section-one section-spacing">
				<div class="overlay">
					<div class="container">
						<div class="partner-slider">
							<div class="item"><img src="<?php echo get_template_directory_uri()?>/images/logo/p-1.png" alt=""></div>
							<div class="item"><img src="<?php echo get_template_directory_uri()?>/images/logo/p-2.png" alt=""></div>
							<div class="item"><img src="<?php echo get_template_directory_uri()?>/images/logo/p-3.png" alt=""></div>
							<div class="item"><img src="<?php echo get_template_directory_uri()?>/images/logo/p-4.png" alt=""></div>
							<div class="item"><img src="<?php echo get_template_directory_uri()?>/images/logo/p-5.png" alt=""></div>
						</div>
					</div> <!-- /.container -->
				</div> <!-- /.overlay -->
			</div> <!-- /.partner-section-one -->


			<!--
			=====================================================
				Call Back Form One
			=====================================================
			-->
			<div class="call-back-form-one section-spacing">
				<div class="container">
					<div class="theme-title-one text-center">
						<h2 class="title">Request a Call Back</h2>
					</div> <!-- /.theme-title-one -->
					<form action="#">
						<div class="row">
							<div class="col-lg-4 col-md-6 col-12"><input type="text" placeholder="Name"></div>
							<div class="col-lg-4 col-md-6 col-12"><input type="email" placeholder="Email"></div>
							<div class="col-lg-4 col-12"><input type="text" placeholder="Phone"></div>
							<div class="col-lg-4 col-12">
								<select class="form-control" id="exampleSelect1">
								    <option>I would like to discuss</option>
								    <option>Business Services</option>
								    <option>Consumer Product</option>
								    <option>Financial Services</option>
								    <option>Software Research</option>
								</select>
								<input type="text" placeholder="Any Other Topic ">
							</div>
							<div class="col-lg-8 col-12"><textarea placeholder="Your Words"></textarea></div>
						</div>
						<button class="theme-button-one">Submit</button>
					</form>
				</div> <!-- /.container -->
			</div> <!-- /.call-back-form-one -->


			<!--
			=====================================================
				Testimonial Section One
			=====================================================
			-->
			<div class="testimonial-section-one section-spacing wow fadeInUp animated">
				<div class="inner-wrapper clearfix">
					<div class="main-bg">
						<div class="testimonial-slider-one">
							<div class="item">
								<i class="icon flaticon-chat"></i>
								<p>Completely synergize resource taxing ships via premier niche markets. Professionally cultivate oneone customer service with robust ideas. Dynamically innovate vice.</p>
								<h6 class="name">Donald Simpson</h6>
								<span>Chief Financial Officer </span>
							</div>
							<div class="item">
								<i class="icon flaticon-chat"></i>
								<p>Completely synergize resource taxing ships via premier niche markets. Professionally cultivate oneone customer service with robust ideas. Dynamically innovate vice.</p>
								<h6 class="name">Zinedine Zidane</h6>
								<span>Chief Financial Officer </span>
							</div>
						</div> <!-- /.testimonial-slider -->
					</div> <!-- /.main-bg -->
				</div> <!-- /.inner-wrapper -->
			</div> <!-- /.testimonial-section-one -->



			<!--
			=====================================================
				Our Blog 
			=====================================================
			-->
			<div class="our-blog center-text-blog section-spacing">
				<div class="container">
					<div class="theme-title-one text-center">
						<h2 class="title">Latest News &amp; Updates</h2>
					</div> <!-- /.theme-title-one -->
					<div class="latest-news-slider">
						<div class="item">
							<div class="single-blog-meta">
								<div class="img-box">
									<img src="<?php echo get_template_directory_uri()?>/images/blog/1.jpg" alt="">
									<a href="#" class="date">25 May 2018</a>
								</div>
								<div class="text">
									<ul class="post-info clearfix">
										<li>By <a href="#">Consultpro</a></li>
										<li><a href="#">11 Likes</a></li>
										<li><a href="#">0 comment</a></li>
									</ul>
									<h6 class="title"><a href="blog-details.html">Within the construction industry as their overdraft</a></h6>
									<p>Our approach is collaborative and adaptive. want clients to be immersed in the project and creative process. Through activities like </p>
								</div> <!-- /.text -->
							</div> <!-- /.single-blog-meta -->
						</div> <!-- /.item -->
						<div class="item">
							<div class="single-blog-meta">
								<div class="img-box">
									<img src="<?php echo get_template_directory_uri()?>/images/blog/2.jpg" alt="">
									<a href="#" class="date">21 May 2018</a>
								</div>
								<div class="text">
									<ul class="post-info clearfix">
										<li>By <a href="#">Consultpro</a></li>
										<li><a href="#">15 Likes</a></li>
										<li><a href="#">05 comment</a></li>
									</ul>
									<h6 class="title"><a href="blog-details.html">Strategic and commercial approach with issues</a></h6>
									<p>Our approach is collaborative and adaptive. want clients to be immersed in the project and creative process. Through activities like </p>
								</div> <!-- /.text -->
							</div> <!-- /.single-blog-meta -->
						</div> <!-- /.item -->
						<div class="item">
							<div class="single-blog-meta">
								<div class="img-box">
									<img src="<?php echo get_template_directory_uri()?>/images/blog/3.jpg" alt="">
									<a href="#" class="date">15 May 2018</a>
								</div>
								<div class="text">
									<ul class="post-info clearfix">
										<li>By <a href="#">Consultpro</a></li>
										<li><a href="#">09 Likes</a></li>
										<li><a href="#">03 comment</a></li>
									</ul>
									<h6 class="title"><a href="blog-details.html">Seven weeks working ‘pro bono’ with a charity</a></h6>
									<p>Our approach is collaborative and adaptive. want clients to be immersed in the project and creative process. Through activities like </p>
								</div> <!-- /.text -->
							</div> <!-- /.single-blog-meta -->
						</div> <!-- /.item -->
					</div> <!-- /.latest-news-slider -->
				</div> <!-- /.container -->
			</div> <!-- /.our-blog -->




			<!--
			=====================================================
				Footer
			=====================================================
			-->
			<footer class="theme-footer-one">
				<div class="container">
					<div class="top-footer">
						<div class="logo"><a href="index.html"><img src="<?php echo get_template_directory_uri()?>/images/logo/logo.png" alt="logo"></a></div>
						<ul class="clearfix">
							<li>
								<i class="icon flaticon-smartphone"></i>
								<h6>Get us on ;</h6>
								<a href="#">(088) 987 555 321</a>
							</li>
							<li>
								<i class="icon flaticon-message"></i>
								<h6>Send us on ;</h6>
								<a href="#">support@apache.com</a>
							</li>
						</ul>
					</div> <!-- /.top-footer -->
				</div> <!-- /.container -->

				<div class="main-footer-widget">
					<div class="container">
						<div class="row">
							<div class="col-lg-3 col-sm-6 about-widget">
								<h6 class="title">About Us</h6>
								<p>Our approach is collaborative and adaptive. want clients to be immersed in the Phosfluorescently engage worl-dwide methodologies with </p>
								<h6 class="title">About Us</h6>
								<p>Donald M. Palmer 2595 Pearlman Avenue Sudbury, <span>MA 01776</span> </p>
							</div> <!-- /.about-widget -->

							<div class="col-lg-2 col-sm-6 list-widget">
								<h6 class="title">Extra links</h6>
								<ul>
									<li><a href="index.html">Home</a></li>
									<li><a href="about.html">About Us</a></li>
									<li><a href="service-v1.html">Services</a></li>
									<li><a href="#">Cases</a></li>
									<li><a href="blog-classic.html">News</a></li>
									<li><a href="project-grid.html">Portfolio</a></li>
									<li><a href="contact.html">Contacts</a></li>
								</ul>
							</div> <!-- /.list-widget -->

							<div class="col-lg-4 col-md-6 col-12 comment-widget">
								<h6 class="title">Recent Comment</h6>
								<ul>
									<li class="clearfix">
										<img src="<?php echo get_template_directory_uri()?>/images/blog/4.jpg" alt="">
										<div class="text">
											<p><a href="blog-details.html">Geoffrey Weaver</a> commented on Standard <span>gallery</span> post</p>
											<div class="date"><i class="icon flaticon-clock"></i> May 25, 2018</div>
										</div>
									</li>
									<li class="clearfix">
										<img src="<?php echo get_template_directory_uri()?>/images/blog/5.jpg" alt="">
										<div class="text">
											<p><a href="blog-details.html">Donald Simpson</a> commented on Standard <span>gallery</span> post</p>
											<div class="date"><i class="icon flaticon-clock"></i> May 25, 2018</div>
										</div>
									</li>
								</ul>
							</div> <!-- /.comment-widget -->

							<div class="col-lg-3 col-md-6 col-12 subscribe-widget">
								<h6 class="title">Subscribe Us</h6>
								<form action="#">
									<input type="email" placeholder="Email Address">
									<button><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
								</form>
								<p>Signup for our mailing list to get latest updates and news.</p>
								<ul class="social-icon">
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
								</ul>
							</div> <!-- /.subscribe-widget -->
						</div> <!-- /.row -->
					</div> <!-- /.container -->
				</div> <!-- /.main-footer-widget -->

				<div class="bottom-footer">
					<div class="container">
						<p>Copyright 2022 Mighty Business Consultancy – All Right Reserved</p>
					</div>
				</div> <!-- /.bottom-footer -->
                <?php wp_footer()?>
			</footer> <!-- /.theme-footer -->
			

	        

	        <!-- Scroll Top Button -->
			<button class="scroll-top tran3s">
				<i class="fa fa-angle-up" aria-hidden="true"></i>
			</button>
			


		<!-- Optional JavaScript _____________________________  -->

    	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    	<!-- jQuery -->
		<script src="<?php echo get_template_directory_uri()?>/vendor/jquery.2.2.3.min.js"></script>
		<!-- Popper js -->
		<script src="<?php echo get_template_directory_uri()?>/vendor/popper.js/popper.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="<?php echo get_template_directory_uri()?>/vendor/bootstrap/js/bootstrap.min.js"></script>
		<!-- Style-switcher  -->
		<script src="<?php echo get_template_directory_uri()?>/vendor/jQuery.style.switcher.min.js"></script>
		<!-- Camera Slider -->
		<script src='<?php echo get_template_directory_uri()?>/vendor/Camera-master/scripts/jquery.mobile.customized.min.js'></script>
	    <script src='<?php echo get_template_directory_uri()?>/vendor/Camera-master/scripts/jquery.easing.1.3.js'></script> 
	    <script src='<?php echo get_template_directory_uri()?>/vendor/Camera-master/scripts/camera.min.js'></script>
	    <!-- menu  -->
		<script src="<?php echo get_template_directory_uri()?>/vendor/menu/src/js/jquery.slimmenu.js"></script>
		<!-- WOW js -->
		<script src="<?php echo get_template_directory_uri()?>/vendor/WOW-master/dist/wow.min.js"></script>
		<!-- owl.carousel -->
		<script src="<?php echo get_template_directory_uri()?>/vendor/owl-carousel/owl.carousel.min.js"></script>
		<!-- js count to -->
		<script src="<?php echo get_template_directory_uri()?>/vendor/jquery.appear.js"></script>
		<script src="<?php echo get_template_directory_uri()?>/vendor/jquery.countTo.js"></script>
		<!-- Fancybox -->
		<script src="<?php echo get_template_directory_uri()?>/vendor/fancybox/dist/jquery.fancybox.min.js"></script>

		<!-- Theme js -->
		<script src="<?php echo get_template_directory_uri()?>/js/theme.js"></script>
		</div> <!-- /.main-page-wrapper -->
	</body>
</html>