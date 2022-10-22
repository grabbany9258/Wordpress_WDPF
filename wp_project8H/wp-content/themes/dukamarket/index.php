<?php get_template_part('template-parts/header/header', 'top-header') ?>
<main>
    <!-- page-banner-area-start -->
    <div class="page-banner-area page-banner-height-2" data-background="<?php echo get_template_directory_uri() ?>/assets/img/banner/page-banner-4.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page-banner-content text-center">
                        <h4 class="breadcrumb-title">Blog</h4>
                        <div class="breadcrumb-two">
                            <nav>
                                <nav class="breadcrumb-trail breadcrumbs">
                                    <ul class="breadcrumb-menu">
                                        <li class="breadcrumb-trail">
                                            <a href="index.html"><span>Home</span></a>
                                        </li>
                                        <li class="trail-item">
                                            <span>Blog</span>
                                        </li>
                                    </ul>
                                </nav>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page-banner-area-end -->

    <!-- news-detalis-area-start -->
    <div class="blog-area mt-120 mb-75">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="row">
                        <!-- content part -->
                        <?php get_template_part('template-parts/content/content', 'blog-content-loop part') ?>

                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="basic-pagination text-center pt-30 pb-30">
                                <nav>
                                    <ul>
                                        <li>
                                            <a href="blog.html" class="active">1</a>
                                        </li>
                                        <li>
                                            <a href="blog.html">2</a>
                                        </li>
                                        <li>
                                            <a href="blog.html">3</a>
                                        </li>
                                        <li>
                                            <a href="blog.html">5</a>
                                        </li>
                                        <li>
                                            <a href="blog.html">6</a>
                                        </li>
                                        <li>
                                            <a href="shop.html">
                                                <i class="fal fa-angle-double-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- sidebar part -->
                <?php get_template_part('template-parts/sidebar/sidebar') ?>
            </div>
        </div>
    </div>
    <!-- news-detalis-area-end  -->

    <!-- cta-area-start -->
    <section class="cta-area d-ldark-bg pt-55 pb-10">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="cta-item cta-item-d mb-30">
                        <h5 class="cta-title">Follow Us</h5>
                        <p>We make consolidating, marketing and tracking your social media website easy.</p>
                        <div class="cta-social">
                            <div class="social-icon">
                                <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="youtube"><i class="fab fa-youtube"></i></a>
                                <a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#" class="rss"><i class="fas fa-rss"></i></a>
                                <a href="#" class="dribbble"><i class="fab fa-dribbble"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="cta-item mb-30">
                        <h5 class="cta-title">Sign Up To Newsletter</h5>
                        <p>Join 60.000+ subscribers and get a new discount coupon on every Saturday.</p>
                        <div class="subscribe__form">
                            <form action="#">
                                <input type="email" placeholder="Enter your email here...">
                                <button>subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="cta-item mb-30">
                        <h5 class="cta-title">Download App</h5>
                        <p>DukaMarket App is now available on App Store & Google Play. Get it now.</p>
                        <div class="cta-apps">
                            <div class="apps-store">
                                <a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/brand/app_ios.png" alt=""></a>
                                <a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/brand/app_android.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- cta-area-end -->

</main>

<!-- footer-start -->
<?php get_template_part('template-parts/footer/footer') ?>