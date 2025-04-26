<?php include('../server/connection.php') ?>
<!doctype html>
<html class="no-js" lang="en">

         <head>
                  <meta charset="utf-8">
                  <meta http-equiv="x-ua-compatible" content="ie=edge">
                  <title>Gerow - Business Consulting HTML Template</title>
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
                  <link rel="stylesheet"
                           href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
                  <link rel="stylesheet"
                           href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/brands.min.css">

         </head>

         <style>
         .title-two {

                  text-transform: lowercase;
                  /* Capitalizes the first letter of each word */

         }
         </style>

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
    <section class="breadcrumb-area breadcrumb-bg"
        data-background="<?php echo $domain ?>assets/img/bg/breadcrumb_bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h2 class="title">Service Details</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Business Analysis</li>
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

    <!-- services-details-area -->
    <section class="services-details-area pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-71 order-0 order-lg-2">
                    <div class="services-details-wrap">
                        <div class="services-details-content">
                            <!-- Service details will be dynamically loaded here -->
                        </div>
                    </div>
                </div>
                <div class="col-29">
                    <aside class="services-sidebar">
                        <div class="services-cat-list services-cat-list-two mb-30">
                            <ul class="list-wrap" id="section">
                                <!-- Service list will be dynamically loaded here -->
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- services-details-area-end -->
</main>

                  <!-- main-area-end -->
                  
                   <!-- JS here -->

                   <script type="module">
    // Function to load the list of services (categories)
    const loadingSection = () => {
        fetch('<?php echo $domain ?>server/admin/api/getService.php')
            .then(response => response.json()) // Parse the JSON response
            .then(services => {
                // Loop through the fetched services and generate the HTML dynamically
                services.forEach(service => {
                    const { id, name } = service;
                    const html = `
                        <li class="active"><a href="<?php echo $domain ?>service-details/?index=${id}">${name} <i class="fas fa-arrow-right"></i></a></li>
                    `;
                    document.querySelector('#section').innerHTML += html;
                });
            })
            .catch(error => console.error('Error fetching services:', error));
    };

    // Function to load the selected service's details
    const loadingContents = () => {
        // Get the service ID from the URL (query parameter)
        const urlParams = new URLSearchParams(window.location.search);
        let id = urlParams.get('index'); // Get 'index' from query string

        if (!id) id = 1; // Default to 1 if 'index' is not provided in URL

        fetch('<?php echo $domain ?>server/admin/api/getService.php')
            .then(response => response.json())  // Parse the JSON response
            .then(services => {
                // Find the service that matches the ID
                const selectedService = services.find(service => service.id == id);
                
                if (selectedService) {
                    // Populate the service details
                    const { name, message } = selectedService;
                    document.querySelector('.services-details-content').innerHTML =
                       
                        ` <h2 class="title text-center">${name}</h2>
                         ${message}
                        
                        `;
                    
                    
                }
            })
            .catch(error => console.error('Error fetching service details:', error));
    };

    // Call the functions to load the sections and contents
    loadingSection();
    loadingContents();
</script>


                  <style>
                  .services-details-content .title-two {
                           text-transform: lowercase !important;
                  }
                  </style>


                  <!-- footer-area -->
                  <?php include('../includes/footer.php') ?>
                  <!-- footer-area-end -->


                 





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