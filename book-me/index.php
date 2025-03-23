<?php
include('../server/connection.php');
include('../server/model.php');
include('../server/payment/index.php');








?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $sitename ?> || Book Page</title>
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



</head>

<body>

<?php

if (isset($_GET['cancel'])) {
    $cancel = $_GET['cancel'];

    $query = mysqli_query($connection, "UPDATE `booking` SET `status` = 'cancelled' WHERE `id` = '$cancel'");

    if ($query) {
        echo "<script>window.onload = () => Model('Your booking has been marked as cancelled. Please try again or contact support if you need help.', 'danger');

        window.location.href='index.php';
        
        </script>";
    } else {
        echo "<script>window.onload = () => Model('Something went wrong in updating status', 'danger');
         window.location.href='index.php';
        </script>";
    }
}



if (isset($_POST['book_btn'])) {
    $name    = $_POST['name'];
    $email   = $_POST['email'];
    $phone   = $_POST['phone'];
    $type    = $_POST['type'];
    $amounts = $_POST['amount'];

    $amount = str_replace('$', '', $amounts);

    $status = "pending"; // Initial status before payment completion

                                 // Insert initial record with "pending" status
    $date = date("Y-m-d H:i:s"); // Current date and time

    $check = mysqli_query($connection, "SELECT * FROM `users` WHERE `email`='$email'");
    echo mysqli_error($connection);
    if (! mysqli_num_rows($check)) {
        $query = mysqli_query($connection, " INSERT INTO `users`(`name`, `email`, `phone`, `date_registered`, `status`) VALUES ('$name','$email','$phone','$date','')");
        echo mysqli_error($connection);
        if (! $query) {
            echo "<script>window.onload = () => Model('Something went wrong , your booking could not be completed. Please try again later or contact support', 'danger');</script>";
        }
    }

    $statement = mysqli_query($connection, "INSERT INTO `booking`(`name`,`email`,`phone`,`type`,`date`, `amount`,`status`) VALUES ('$name','$email','$phone','$type','$date','$amount','$status')");
    if ($statement) {
        
        $insert_id = $connection->insert_id;

        makePayment($amount, $email, $insert_id , 'book-me');

        
    } else {
        echo "<script>window.onload = () => Model('Your booking could not be completed. Please try again later or contact support', 'danger');</script>";
    }
}



?>

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
                            <h2 class="title">Booking Page</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo $domain ?>">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Book Now</li>
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
                            <h2 class="mb-4 text-primary">Book Service</h2>

                            <style>
                                form input {
                                    height: 50px;
                                }
                            </style>

                            <form method="POST">
                                <!-- Name Field -->
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name">
                                </div>
                                <!-- Email Field -->
                                <div class="mb-3">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email">
                                </div>
                                <!-- Phone Field -->
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Your Phone Number">
                                </div>
                                <!-- Business Type Select -->
                                <div class="mb-3">
                                    <select name="type" class="form-select" id="businessType">
                                        <option selected disabled>Select A Business</option>
                                    </select>
                                </div>
                                <!-- Amount Field -->
                                <div class="mb-3">
                                    <input type="text" name="amount" class="form-control" id="amount" placeholder="Enter Amount" readonly>
                                </div>
                                <!-- Submit Button -->
                                <button type="submit" name="book_btn" class="btn btn-primary">Book Now</button>
                            </form>

                            <script>
                                // Array of business options with prices
                                const businessOptions = [{
                                        id: 1,
                                        name: "Bookkeeping Orientation Level",
                                        price: 200
                                    },
                                    {
                                        id: 2,
                                        name: "Analyzing and Recording Transactions",
                                        price: 200
                                    },
                                    {
                                        id: 3,
                                        name: "Bookkeeping and Accounting Cyber Process",
                                        price: 200
                                    },
                                    {
                                        id: 4,
                                        name: "Analysis of Financial Statement",
                                        price: 200
                                    },
                                    {
                                        id: 5,
                                        name: "Business Start-ups",
                                        price: 200
                                    },
                                    {
                                        id: 6,
                                        name: "Basic bookkeeping financial statement",
                                        price: 200
                                    },
                                    {
                                        id: 7,
                                        name: "Financial Statement Analysis",
                                        price: 200
                                    },
                                    {
                                        id: 8,
                                        name: "Business Plan (Hand free experience)",
                                        price: 200
                                    },
                                ];


                                // Get the elements
                                const businessTypeSelect = document.getElementById('businessType');
                                const amountInput = document.getElementById('amount');

                                // Populate the select element with options from the array
                                businessOptions.forEach(option => {
                                    const opt = document.createElement('option');
                                    opt.value = option.name;
                                    opt.textContent = option.name;
                                    businessTypeSelect.appendChild(opt);
                                });

                                // Add an event listener to update the price
                                businessTypeSelect.addEventListener('change', function() {
                                    const selectedOption = businessOptions.find(option => option.name === this.value);
                                    amountInput.value = selectedOption ? `$${selectedOption.price}` : '';
                                });
                            </script>

                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- contact-area-end -->





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