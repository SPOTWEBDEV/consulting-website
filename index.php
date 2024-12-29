<?php include('./server/connection.php') ?>
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
    <?php include('./includes/nav.php') ?>
    <!-- header-area-end -->


    <!-- main-area -->
    <main class="fix">

        <!-- banner-area -->
        <section class="banner-area-three">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7 col-md-9 order-0 order-lg-2">
                        <div class="banner-img-three" data-aos="fade-left" data-aos-delay="300">
                            <img src="<?php echo $domain ?>assets/images/Photo A.jpg" alt="Business Consultation" class="main-img">
                            <img src="<?php echo $domain ?>assets/img/banner/h3_banner_img02.jpg" alt="Parallax Image 2" class="img-two" data-parallax='{"y" : 100 }'>
                            <img src="<?php echo $domain ?>assets/img/banner/h3_banner_img03.jpg" alt="Parallax Image 3" class="img-three" data-parallax='{"x" : -100 }'>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="banner-content-three">
                            <h2 class="title" data-aos="fade-right" data-aos-delay="0">Need Business Consultation Today?</h2>
                            <p data-aos="fade-right" data-aos-delay="300">Business and Tax Consulting, Incprovides expert insights to help your business overcome challenges and thrive.</p>
                            <a href="<?php echo $domain ?>book-me/"><button type="button" class="btn btn-primary mb-4">Book Now</button></a>
                            <?php


                            if (isset($_POST['book_btn'])) {

                                $email = $_POST['email'];


                                $check = mysqli_query($connection, "SELECT * FROM `users` WHERE `email`='$email'");
                                if (mysqli_num_rows($check)) {
                                    echo "<script>
                                Message({status:false,text:'This Email has already use by another user'})
                            </script>";
                                } else {
                                    $query = mysqli_query($connection, " INSERT INTO `users`(`email`) VALUES ('$email')");
                                }
                            }
                            ?>
                            <form method="POST" class="banner-form" data-aos="fade-right" data-aos-delay="600">
                                <label for="email" class="sr-only">E-mail Address</label>
                                <input type="email" name="email" id="email" placeholder="E-mail Address" required>
                                <button type="submit" name="btn"><i class="fas fa-arrow-right"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-shape-wrap-three">
                <img src="<?php echo $domain ?>assets/img/banner/h3_banner_shape01.png" alt="Banner Shape 1">
                <img src="<?php echo $domain ?>assets/img/banner/h3_banner_shape02.png" alt="Banner Shape 2">
            </div>
        </section>

        <!-- banner-area-end -->

        <!-- brand-area -->

        <!-- brand-area-end -->

        <!-- features-area -->
        <section class="features-area-three">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-7">
                        <div class="section-title-two text-center mb-40 tg-heading-subheading animation-style1">
                            <span class="sub-title tg-element-title">What We Do For You</span>
                            <h2 class="title tg-element-title">The features that make our Service unique</h2>
                        </div>
                    </div>
                </div>
                <div class="features-item-wrap-two">
                    <div id="services" class="row justify-content-center">


                        <script type="module">
                            import {
                                services
                            } from '<?php echo $domain ?>assets/js/data.js';
                            console.log(services);

                            for (let i = 0; i < services.length; i++) {
                                const {
                                    id,
                                    name,
                                    message
                                } = services[i];
                                const html = `<div class="col-xl-3 col-lg-4 col-md-6">
                                                <div class="features-item-three">
                                                    <div class="features-icon-three">
                                                    <i class="fas fa-calculator"></i>
                                                    </div>
                                                    <div class="features-content-three">
                                                        <h2 class="title">${name}</h2>
                                                        <p>${displayFirst20Characters(message[0].details)}</p>
                                                        <a href="<?php echo $domain ?>service-details/?index=${id}" class="link-btn">See Details <img src="<?php echo $domain ?>assets/img/icons/right-arrow.svg" alt=""></a>
                                                    </div>
                                                </div>  
                                            </div>`

                                document.querySelector('#services').innerHTML += html
                            }

                            function displayFirst20Characters(text) {
                                // Ensure the text is at least 20 characters long, otherwise, just return the whole text
                                const displayText = text.length > 200 ? text.slice(0, 200) : text;
                                return displayText + '...';
                            }
                        </script>
                    </div>
                </div>
            </div>
        </section>

        <!-- features-area-end -->

        <!-- about-area -->
        <section class="about-area-four pb-120">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-7 col-md-10 order-0 order-lg-2">
                        <div class="about-img-wrap-four">
                            <div class="mask-img-wrap">
                                <img src="<?php echo $domain ?>assets/images/Photo B.jpg" alt="">
                            </div>
                            <div class="icon"><i class="fas fa-chalkboard-teacher"></i></div> <!-- Replaced with Font Awesome icon -->
                            <img src="<?php echo $domain ?>assets/img/images/h3_about_img02.jpg" alt="" class="img-two">
                            <div class="about-shape-wrap-three">
                                <img src="<?php echo $domain ?>assets/img/images/h3_about_shape01.png" alt="">
                                <img src="<?php echo $domain ?>assets/img/images/h3_about_shape02.png" alt="">
                                <img src="<?php echo $domain ?>assets/img/images/h3_about_shape03.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="about-content-four">
                            <div class="section-title-two mb-30 tg-heading-subheading animation-style1">
                                <span class="sub-title tg-element-title">Get To Know Us</span>
                                <h2 class="title tg-element-title">Empowering Businesses for Success</h2>
                            </div>
                            <p>With over 25 years of expertise, we provide strategic consulting tailored to each business’s unique challenges, helping them thrive and grow.</p>
                            <div class="about-list-three">
                                <ul class="list-wrap">
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-chart-line"></i> <!-- Replaced with Font Awesome icon -->
                                        </div>
                                        <div class="content">
                                            <h2 class="title">Business Growth</h2>
                                            <p>Helping you achieve sustainable growth and enhanced profitability.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-bullseye"></i> <!-- Replaced with Font Awesome icon -->
                                        </div>
                                        <div class="content">
                                            <h2 class="title">Targeted Strategies</h2>
                                            <p>Custom solutions designed to reach and engage your ideal clients.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- about-area-end -->

        <!-- overview-area -->
        <section class="overview-area-two">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 col-md-10">
                        <div class="overview-img-two">
                            <div class="mask-img-two">
                                <img src="<?php echo $domain ?>assets/images/Photo C.jpg" alt="">
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

        <!-- project-area -->
        <section class="project-area-three pb-90">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-8">
                        <div class="section-title-two mb-40 tg-heading-subheading animation-style1">
                            <span class="sub-title tg-element-title">Our Projects</span>
                            <h2 class="title tg-element-title">Comprehensive Solutions for Business Success</h2>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-4">
                        <div class="view-all-btn text-end mb-30">
                            <a href="#" class="btn btn-three">View All Projects</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container custom-container-three">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="project-item-three">
                            <div class="project-thumb-three">
                                <a href="project-details.html"><img src="<?php echo $domain ?>assets/images/Photo D.jpg" alt="Project Image 1"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="project-item-three">
                            <div class="project-thumb-three">
                                <a href="project-details.html"><img src="<?php echo $domain ?>assets/images/Photo E.jpg" alt="Project Image 2"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="project-item-three">
                            <div class="project-thumb-three">
                                <a href="project-details.html"><img src="<?php echo $domain ?>assets/images/Photo F.jpg" alt="Project Image 3"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="project-item-three">
                            <div class="project-thumb-three">
                                <a href="project-details.html"><img src="<?php echo $domain ?>assets/images/Photo G.jpg" alt="Project Image 4"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- project-area-end -->

        <!-- counter-area -->
       

        <!-- counter-area-end -->

        <!-- team-area -->
        <section style="display:none" class="team-area-three">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-title-two text-center mb-50 tg-heading-subheading animation-style1">
                            <span class="sub-title tg-element-title">Our Expert Team</span>
                            <h2 class="title tg-element-title">Meet Our Dedicated Professionals</h2>
                            <p>Our skilled team is here to provide top-tier business and tax consulting to help your business thrive.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                        <div class="team-item-three">
                            <div class="team-thumb-three">
                                <img src="<?php echo $domain ?>assets/img/team/h3_team_img01.png" alt="Brooklyn Simmons">
                                <div class="team-social-three">
                                    <div class="social-toggle-icon">
                                        <i class="fas fa-share-alt"></i>
                                    </div>
                                    <ul class="list-wrap">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content-three">
                                <h4 class="title"><a href="team-details.html">Brooklyn Simmons</a></h4>
                                <span>Business Consultant</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                        <div class="team-item-three">
                            <div class="team-thumb-three">
                                <img src="<?php echo $domain ?>assets/img/team/h3_team_img02.png" alt="Jenny Wilson">
                                <div class="team-social-three">
                                    <div class="social-toggle-icon">
                                        <i class="fas fa-share-alt"></i>
                                    </div>
                                    <ul class="list-wrap">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content-three">
                                <h4 class="title"><a href="team-details.html">Jenny Wilson</a></h4>
                                <span>Tax Specialist</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                        <div class="team-item-three">
                            <div class="team-thumb-three">
                                <img src="<?php echo $domain ?>assets/img/team/h3_team_img03.png" alt="Ronald Richards">
                                <div class="team-social-three">
                                    <div class="social-toggle-icon">
                                        <i class="fas fa-share-alt"></i>
                                    </div>
                                    <ul class="list-wrap">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content-three">
                                <h4 class="title"><a href="team-details.html">Ronald Richards</a></h4>
                                <span>Financial Advisor</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                        <div class="team-item-three">
                            <div class="team-thumb-three">
                                <img src="<?php echo $domain ?>assets/img/team/h3_team_img04.png" alt="Marvin McKinney">
                                <div class="team-social-three">
                                    <div class="social-toggle-icon">
                                        <i class="fas fa-share-alt"></i>
                                    </div>
                                    <ul class="list-wrap">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content-three">
                                <h4 class="title"><a href="team-details.html">Marvin McKinney</a></h4>
                                <span>Operations Manager</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- team-area-end -->

        <!-- testimonial-area -->
        <section class="testimonial-area-three">
            <div class="container">
                <div class="row g-0 align-items-end">
                    
                    <div class="col-73">
                        <div class="testimonial-item-wrap-three" data-background="<?php echo $domain ?>assets/img/bg/h3_testimonial_bg.png">
                            <div class="testimonial-active-three">
                                <div class="testimonial-item-three">
                                    <div class="testimonial-content-three">
                                        <div class="rating">
                                            <!-- Font Awesome Star Icons -->
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <p>“ Business and Tax Consulting, Inchas been a game-changer for our finances. Their dedication and professionalism helped streamline our accounting processes seamlessly. Highly recommended!”</p>
                                        <div class="testimonial-info">
                                            <h2 class="title">Ifeanyi Ewoh</h2>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-item-three">
                                    <div class="testimonial-content-three">
                                        <div class="rating">
                                            <!-- Font Awesome Star Icons -->
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <p>“The team at Business and Tax Consulting, Incmade our tax preparation effortless. They’re detail-oriented and responsive, which makes them a pleasure to work with every tax season.”</p>
                                        <div class="testimonial-info">
                                            <h2 class="title">John Nsude</h2>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-nav-three"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- testimonial-area-end -->

        <!-- cta-area -->
        <section class="cta-area-two pt-120">
            <div class="container">
                <div class="cta-inner-wrap-two" data-background="<?php echo $domain ?>assets/img/bg/cta_bg02.jpg">
                    <div class="row align-items-center">
                        <div class="col-lg-9">
                            <div class="cta-content">
                                <div class="cta-info-wrap">
                                    <div class="icon">
                                        <i class="fas fa-phone-alt"></i>
                                    </div>
                                    <div class="content">
                                        <span>Call for Business Assistance</span>
                                        <a href="tel:0123456789"><?php echo $sitenumber ?></a>
                                    </div>
                                </div>
                                <h2 class="title">Request a Free Consultation to Boost Your Business</h2>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="cta-btn text-end">
                                <a href="<?php echo $domain ?>contact/" class="btn btn-three">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- cta-area-end -->

        <!-- blog-area -->
        <section class="blog-area-three pt-120 pb-90">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-title-two text-center mb-50 tg-heading-subheading animation-style1">
                            <span class="sub-title tg-element-title">News & Blogs</span>
                            <h2 class="title tg-element-title">Read Our Latest Insights</h2>
                            <p>Stay up to date with the latest trends and expert advice to help grow your business and manage your taxes efficiently.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="blog-post-item-two">
                            <div class="blog-post-thumb-two">
                                <a href="blog-details.html"><img src="<?php echo $domain ?>assets/images/Photo K.jpg" alt=""></a>
                                <a href="blog.html" class="tag tag-two">Business Growth</a>
                            </div>
                            <div class="blog-post-content-two">
                                <h2 class="title"><a href="blog-details.html">Maximize Your Business Potential with Smart Tax Strategies</a></h2>
                                <p>Discover how effective tax planning can save your business money and fuel its growth.</p>
                                <div class="blog-meta">
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="blog-post-item-two">
                            <div class="blog-post-thumb-two">
                                <a href="blog-details.html"><img src="<?php echo $domain ?>assets/images/Photo L.jpg" alt=""></a>
                                <a href="blog.html" class="tag tag-two">Tax Advisory</a>
                            </div>
                            <div class="blog-post-content-two">
                                <h2 class="title"><a href="blog-details.html">Why Effective Tax Advice is Crucial for Your Business</a></h2>
                                <p>Explore the importance of professional tax guidance and how it can lead to long-term financial success.</p>
                                <div class="blog-meta">
                                    <ul class="list-wrap">
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="blog-post-item-two">
                            <div class="blog-post-thumb-two">
                                <a href="blog-details.html"><img src="<?php echo $domain ?>assets/images/Photo M.jpg" alt=""></a>
                                <a href="blog.html" class="tag tag-two">Finance Tips</a>
                            </div>
                            <div class="blog-post-content-two">
                                <h2 class="title"><a href="blog-details.html">How to Optimize Your Business Tax Filing</a></h2>
                                <p>Learn best practices to streamline your tax filing process and avoid common pitfalls.</p>
                                <!-- <div class="blog-meta">
                                    <ul class="list-wrap">
                                        <li>
                                            <a href="blog-details.html"><img src="<?php echo $domain ?>assets/img/blog/blog_avatar01.png" alt="">Kat Doven</a>
                                        </li>
                                        <li><i class="far fa-calendar"></i>22 Jan, 2023</li>
                                    </ul>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- blog-area-end -->

    </main>
    <!-- main-area-end -->


    <!-- footer-area -->
    <?php include('./includes/footer.php') ?>
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