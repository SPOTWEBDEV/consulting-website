<?php include('../server/connection.php') ?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $domain ?> || Service-Page</title>
    <meta name="description" content="Gerow - Business Consulting HTML Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $domain ?>assets/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="<?php echo $domain ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $domain ?>assets/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo $domain ?>assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo $domain ?>assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?php echo $domain ?>assets/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo $domain ?>assets/css/odometer.css">
    <link rel="stylesheet" href="<?php echo $domain ?>assets/css/jarallax.css">
    <link rel="stylesheet" href="<?php echo $domain ?>assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?php echo $domain ?>assets/css/slick.css">
    <link rel="stylesheet" href="<?php echo $domain ?>assets/css/aos.css">
    <link rel="stylesheet" href="<?php echo $domain ?>assets/css/default.css">
    <link rel="stylesheet" href="<?php echo $domain ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo $domain ?>assets/css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/brands.min.css">

</head>

<body>

    <!-- preloader -->
    <div id="preloader">
        <div id="loading-center">
            <div class="loader">
                <div class="loader-outter"></div>
                <div class="loader-inner"></div>
            </div>
        </div>
    </div>
    <!-- preloader-end -->

    <!-- Scroll-top -->
    <button class="scroll-top scroll-to-target" data-target="html">
        <i class="fas fa-angle-up"></i>
    </button>
    <!-- Scroll-top-end-->

    <!-- header-area -->
    <div id="header-fixed-height"></div>
    <?php include('../includes/nav-one.php') ?>
    <!-- header-area-end -->


    <!-- main-area -->
    <main class="fix">

        <!-- breadcrumb-area -->
        <section class="breadcrumb-area breadcrumb-bg" data-background="<?php echo $domain ?>assets/img/bg/breadcrumb_bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-content">
                            <h2 class="title">Our Services</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Services</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="breadcrumb-shape-wrap">
                <img src="<?php echo $domain ?>assets/img/images/breadcrumb_shape01.png" alt="">
                <img src="<?php echo $domain ?>assets/img/images/breadcrumb_shape02.png" alt="">
            </div>
        </section>
        <!-- breadcrumb-area-end -->


        <!-- services-area -->
        <section class="services-area-five inner-services-bg" data-background="<?php echo $domain ?>assets/img/bg/inner_services_bg.jpg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-10">
                        <div class="section-title-two text-center mb-50">
                            <h2 class="title">Services</h2>
                            <p>Our services are designed to serve entrepreneurs of all sizes who are striving to manage, maintain, and grow their business, as well as effective compliance standards on federal, state, and local government policies.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="services-item">
                            <div class="services-content">
                                <div class="content-top">
                                    <div class="icon">
                                        <i class="fas fa-briefcase"></i>
                                    </div>
                                    <h2 class="title">Bookkeeping</h2>
                                </div>
                                <div class="services-thumb">
                                    <img src="<?php echo $domain ?>assets/img/services/services_img01.jpg" alt="">
                                    <a href="<?php echo $domain ?>service/" class="btn transparent-btn">Our Services</a>
                                </div>
                                <ul class="list-wrap">
                                    <p>Running a business involves effective decision-making. This may become impossible without accurate bookkeeping or accounting records. We’ll teach your company how to effectively keep records of your business transactions. </p>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="services-item">
                            <div class="services-content">
                                <div class="content-top">
                                    <div class="icon">
                                        <i class="fas fa-calculator"></i>
                                    </div>
                                    <h2 class="title">Financial Accounting</h2>
                                </div>
                                <div class="services-thumb">
                                    <img src="<?php echo $domain ?>assets/img/services/services_img02.jpg" alt="">
                                    <a href="<?php echo $domain ?>service/" class="btn transparent-btn">Our Services</a>
                                </div>
                                <ul class="list-wrap">
                                    <p>We provide more in-depth financial accounting services for profit entities, not-for-profit organizations, partnerships, individuals, etc. The Business and Tax Consulting Group, Inc., can assist in organizing your financial transactions and tasks at a higher level other than bookkeeping. </p>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="services-item">
                            <div class="services-content">
                                <div class="content-top">
                                    <div class="icon">
                                        <i class="fas fa-hand-holding-usd"></i>
                                    </div>
                                    <h2 class="title">Tax Services</h2>
                                </div>
                                <div class="services-thumb">
                                    <img src="<?php echo $domain ?>assets/img/services/services_img03.jpg" alt="">
                                    <a href="<?php echo $domain ?>service/" class="btn transparent-btn">Our Services</a>
                                </div>
                                <ul class="list-wrap">
                                   <p>In our tax services, we understand the liability and huge business payout that is involved with noncompliance in federal, state, and local tax administrations.</p>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="services-item">
                            <div class="services-content">
                                <div class="content-top">
                                    <div class="icon">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <h2 class="title">Tax Planning</h2>
                                </div>
                                <div class="services-thumb">
                                    <img src="<?php echo $domain ?>assets/img/services/services_img04.jpg" alt="">
                                    <a href="<?php echo $domain ?>service/" class="btn transparent-btn">Our Services</a>
                                </div>
                                <ul class="list-wrap">
                                    <p>The essence of tax planning is to allocate and arrange your financial affairs in a manner that taxes are minimized. As tax experts, our team is on your side to assist in minimum payment of tax burdens.</p>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="services-item">
                            <div class="services-content">
                                <div class="content-top">
                                    <div class="icon">
                                        <i class="fas fa-bullseye"></i>
                                    </div>
                                    <h2 class="title">Business Consulting</h2>
                                </div>
                                <div class="services-thumb">
                                    <img src="<?php echo $domain ?>assets/img/services/services_img05.jpg" alt="">
                                    <a href="<?php echo $domain ?>service/" class="btn transparent-btn">Our Services</a>
                                </div>
                                <ul class="list-wrap">
                                    <p>Our business consulting expertise is tailored to the needs of small or medium-size businesses. We help analyze your business and create solutions to enable organizations to achieve their operational goals and objectives. </p>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="services-item">
                            <div class="services-content">
                                <div class="content-top">
                                    <div class="icon">
                                        <i class="fas fa-calculator"></i>
                                    </div>
                                    <h2 class="title">Entrepreneurship Start-up and Training</h2>
                                </div>
                                <div class="services-thumb">
                                    <img src="<?php echo $domain ?>assets/img/services/services_img06.jpg" alt="">
                                    <a href="<?php echo $domain ?>service/" class="btn transparent-btn">Our Services</a>
                                </div>
                                <ul class="list-wrap">
                                    <p>In our House of Knowledge program, we help create value in the training of individuals, employees, managers, and company executives to manage tasks effectively and to enhance employee retention and productivity. </p>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- services-area-end -->


    </main>
    <!-- main-area-end -->


    <!-- footer-area -->
    <?php include('../includes/footer.php') ?>
    <!-- footer-area-end -->


    <!-- JS here -->
    <script src="<?php echo $domain ?>assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="<?php echo $domain ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo $domain ?>assets/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo $domain ?>assets/js/jquery.odometer.min.js"></script>
    <script src="<?php echo $domain ?>assets/js/jquery.appear.js"></script>
    <script src="<?php echo $domain ?>assets/js/gsap.js"></script>
    <script src="<?php echo $domain ?>assets/js/ScrollTrigger.js"></script>
    <script src="<?php echo $domain ?>assets/js/SplitText.js"></script>
    <script src="<?php echo $domain ?>assets/js/gsap-animation.js"></script>
    <script src="<?php echo $domain ?>assets/js/jarallax.min.js"></script>
    <script src="<?php echo $domain ?>assets/js/jquery.parallaxScroll.min.js"></script>
    <script src="<?php echo $domain ?>assets/js/particles.min.js"></script>
    <script src="<?php echo $domain ?>assets/js/jquery.easypiechart.min.js"></script>
    <script src="<?php echo $domain ?>assets/js/jquery.inview.min.js"></script>
    <script src="<?php echo $domain ?>assets/js/swiper-bundle.min.js"></script>
    <script src="<?php echo $domain ?>assets/js/slick.min.js"></script>
    <script src="<?php echo $domain ?>assets/js/ajax-form.js"></script>
    <script src="<?php echo $domain ?>assets/js/aos.js"></script>
    <script src="<?php echo $domain ?>assets/js/wow.min.js"></script>
    <script src="<?php echo $domain ?>assets/js/main.js"></script>
</body>

</html>