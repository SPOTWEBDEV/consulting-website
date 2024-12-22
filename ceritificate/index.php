<?php include('../server/connection.php') ?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $sitename ?> || Home</title>
    <meta name="description" content="<?php echo $sitename ?> - Business Consulting Website">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $domain ?>assets/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-xxx" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha384-QxTsrmnncW/q7+xu5jx7AxR9AqE6d/NZZ+2RjVpJhMQuYjdCeQurLDG/QzfsGb0E" crossorigin="anonymous">
    <!-- CSS here -->
    <link rel="stylesheet" href="<?php echo $domain ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $domain ?>assets/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo $domain ?>assets/css/magnific-popup.css">

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
    <?php include('../includes/nav.php') ?>
    <!-- header-area-end -->


    <!-- main-area -->
    <main class="fix">

        <!-- banner-area -->
        <section class="banner-area-three">
            
        </section>

        <!-- banner-area-end -->

        

        <!-- overview-area -->
        <section class="overview-area-two">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 col-md-10">
                        <div class="overview-img-two">
                            <div class="mask-img-two">
                                <img src="<?php echo $domain ?>assets/img/images/h3_overview_img01.jpg" alt="">
                            </div>
                            <img src="<?php echo $domain ?>assets/img/images/h3_overview_img02.jpg" alt="" class="img-two" data-parallax='{"y" : 100 }'>
                            <div class="overview-shape-wrap">
                                <img src="<?php echo $domain ?>assets/img/images/h3_overview_shape01.png" alt="">
                                <img src="<?php echo $domain ?>assets/img/images/h3_overview_shape02.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="overview-content-two">
                            <div class="section-title-two mb-30 tg-heading-subheading animation-style1">
                                <span class="sub-title tg-element-title">Company Overview</span>
                                <h2 class="title tg-element-title">Crafting Effective Strategies for Business Success</h2>
                            </div>
                            <p>At MyBusTaxBookkeeping, we’re committed to providing strategies that help businesses navigate challenges, optimize growth, and achieve lasting success.</p>
                            <div class="progress-wrap">
                                <div class="progress-item">
                                    <h6 class="title">Consulting</h6>
                                    <div class="progress" role="progressbar" aria-label="Consulting" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar wow slideInLeft" data-wow-delay=".1s" style="width: 85%"><span>85%</span></div>
                                    </div>
                                </div>
                                <div class="progress-item">
                                    <h6 class="title">Financial Planning</h6>
                                    <div class="progress" role="progressbar" aria-label="Financial Planning" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar wow slideInLeft" data-wow-delay=".2s" style="width: 76%"><span>76%</span></div>
                                    </div>
                                </div>
                                <div class="progress-item">
                                    <h6 class="title">Tax Preparation</h6>
                                    <div class="progress" role="progressbar" aria-label="Tax Preparation" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar wow slideInLeft" data-wow-delay=".3s" style="width: 90%"><span>90%</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- overview-area-end -->

       
       

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