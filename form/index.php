<?php
include '../server/connection.php';
include '../server/model.php';
include '../server/payment/index.php';

?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $sitename ?> || Form Page</title>
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



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
    <?php include '../includes/nav-one.php' ?>
    <!-- header-area-end -->


    <!-- main-area -->
    <main class="fix">

        <!-- breadcrumb-area -->
        <section class="breadcrumb-area breadcrumb-bg" data-background="<?php echo $domain ?>assets/img/bg/breadcrumb_bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-content">
                            <h2 class="title">Form Page</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo $domain ?>">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Request/Apply Now</li>
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

        <!-- contact-area -->
        <section class="inner-contact-area  pb-120">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 mx-auto">

                        <div class="container mt-5">
                            <h2 class="mb-4 text-primary">Request/Apply Now</h2>

                            <style>
                                form input {
                                    height: 50px;
                                }
                            </style>

                            <?php
                            // Check if the form is submitted
                            if (isset($_POST['form_btn'])) {
                                // Retrieve form data
                                $membership_type = isset($_POST['membership']) ? $_POST['membership'] : '';  // Get selected membership type
                                $name = $connection->real_escape_string($_POST['name']);
                                $occupation = $connection->real_escape_string($_POST['occupation']);
                                $address = $connection->real_escape_string($_POST['address']);
                                $phone = $connection->real_escape_string($_POST['phone']);
                                $city = $connection->real_escape_string($_POST['city']);
                                $state = $connection->real_escape_string($_POST['state']);
                                $country = $connection->real_escape_string($_POST['country']);
                                $email = $connection->real_escape_string($_POST['email']);
                                $date_of_birth = $connection->real_escape_string($_POST['datebirth']);
                                $gender = $connection->real_escape_string($_POST['gender']);

                                // Check if membership type is selected
                                if (empty($membership_type)) {
                                    echo "<script>Swal.fire({ icon: 'error', title: 'Oops...', text: 'Please select a membership type to apply for.'});</script>";
                                } else {
                                    // Prepare the SQL query
                                    $sql = "INSERT INTO `form`(`membership_type`, `name`, `date`, `occupation`, `address`, `phone`, `city`, `state`, `country`, `email`, `date_of_birth`, `gender`)
                                         VALUES ('$membership_type', '$name', '$date_of_birth', '$occupation', '$address', '$phone', '$city', '$state', '$country', '$email', '$date_of_birth', '$gender')";

                                    // Execute the query
                                    if ($connection->query($sql) === true) {
                                        echo "<script>
                                            Swal.fire({
                                                title: 'Application Successful!',
                                                text: 'Your membership request has been successfully submitted.',
                                                icon: 'success',
                                                confirmButtonText: 'Okay',
                                            });
                                        </script>";
                                    } else {
                                        echo "<script>
                                            Swal.fire({
                                                icon: 'error',
                                                title: 'Oops...',
                                                text: 'Something went wrong with your membership application. Please try again later.',
                                                confirmButtonText: 'Okay'
                                            });
                                        </script>";
                                    }
                                }
                            }
                            ?>


                            <form method="POST">
                                <!-- Name Field -->
                                <div class="mb-3">
                                    <input type="radio" class="form-check-input" id="studentMember" name="membership" value="student">
                                    <label for="studentMember" class="form-check-label">Student Member Request ($39.99)</label>
                                </div>

                                <div class="mb-3">
                                    <input type="radio" class="form-check-input" id="professionalMember" name="membership" value="professional">
                                    <label for="professionalMember" class="form-check-label">Professional Member Request ($49.99)</label>
                                </div>


                                <div class="mb-3">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name">
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="phone" name="email" placeholder="Enter Your Email">
                                </div>



                                <div class="mb-3">
                                    <input type="text" class="form-control" id="name" name="occupation" placeholder="Enter your occupation">
                                </div>

                                <div class="mb-3">
                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Your Phone Number">
                                </div>

                                <div class="mb-3">
                                    <input type="text" class="form-control" id="name" name="address" placeholder="Enter Your Home Address">
                                </div>

                                <div class="mb-3">
                                    <input type="text" class="form-control" id="phone" name="city" placeholder="Enter Your City">
                                </div>

                                <div class="mb-3">
                                    <input type="text" class="form-control" id="phone" name="state" placeholder="Enter Your State">
                                </div>

                                <div class="mb-3">
                                    <input type="text" class="form-control" id="phone" name="country" placeholder="Enter Your Country">
                                </div>

                                <div class="mb-3">
                                    <label for="">Date of Birth</label>
                                    <input type="date" class="form-control" id="dateInput" name="datebirth">
                                </div>

                                <div class="mb-3">

                                    <select class="form-select" id="gender" name="gender">
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>

                                    </select>
                                </div>


                                <!-- Submit Button -->
                                <button type="submit" name="form_btn" class="btn btn-primary">Request/Apply Now</button>
                            </form>



                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- contact-area-end -->





    </main>
    <!-- main-area-end -->


    <!-- footer-area -->
    <?php include '../includes/footer.php' ?>
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