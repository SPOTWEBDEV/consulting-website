<?php

include('../server/connection.php');

if (!isset($_SESSION['admin_login_']) && $_SESSION['admin_login_'] != true) {
  echo "
    <script>
      window.location.href = 'login.php';
    </script>";
}

?>
<!DOCTYPE html>
<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html lang="en" class="light-style layout-menu-fixed " dir="ltr" data-theme="theme-default" data-assets-path="assets/" data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Dashboard - Home</title>

  <meta name="description" content="Most Powerful &amp; Comprehensive Bootstrap 5 HTML Admin Dashboard Template built for developers!" />
  <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
  <!-- Canonical SEO -->
  <link rel="canonical" href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/">

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.ico" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Icons. Uncomment required icon fonts -->
  <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css" />



  <!-- Core CSS -->
  <link rel="stylesheet" href="assets/vendor/css/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="assets/css/demo.css" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

  <link rel="stylesheet" href="assets/vendor/libs/apex-charts/apex-charts.css" />

  <!-- Page CSS -->

  <!-- Helpers -->
  <script src="assets/vendor/js/helpers.js"></script>

  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="assets/js/config.js"></script>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async="async" src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'GA_MEASUREMENT_ID');
  </script>
  <!-- Custom notification for demo -->
  <!-- beautify ignore:end -->

</head>

<body>

  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar  ">
    <div class="layout-container">



      <!-- Menu -->
      <?php include('includes/side_bar.php') ?>
      <!-- / Menu -->

      <!-- Layout container -->
      <div class="layout-page">


        <!-- Navbar -->
        <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">

          <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0   d-xl-none ">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
              <i class="bx bx-menu bx-sm"></i>
            </a>
          </div>


          <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            <!-- Search -->
            <div class="navbar-nav align-items-center">
              <div class="nav-item d-flex align-items-center">
                <i class="bx bx-search fs-4 lh-0"></i>
                <input type="text" class="form-control border-0 shadow-none" placeholder="Search..." aria-label="Search...">
              </div>
            </div>
            <!-- /Search -->
            <ul class="navbar-nav flex-row align-items-center ms-auto">
             
              
              <!-- / User -->
            </ul>
          </div>
        </nav>
        <!-- / Navbar -->

        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->
          <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
              <div class="col-lg-8 mb-4 order-0">
                <div class="card">
                  <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                      <div class="card-body">
                        <h5 class="card-title text-primary">Welcome to Your Dashboard</h5>
                        <p class="mb-4">You have <span class="fw-bold">
                            <?php
                            $get_all = mysqli_query($connection, "SELECT * FROM `users`");
                            echo mysqli_num_rows($get_all)
                            ?>
                          </span> Registered Users And You can manage your website from
                          the action pane</p>

                        <a href="all.php" class="btn btn-sm btn-outline-primary">See Users</a>
                      </div>
                    </div>
                    <div class="col-sm-5 text-center text-sm-left">
                      <div class="card-body pb-0 px-0 px-md-4">
                        <img src="assets/img/illustrations/man-with-laptop-light.png" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 order-1">
                <div class="row">
                  <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                      <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                          <div class="avatar flex-shrink-0">
                            <img src="assets/img/icons/unicons/chart-success.png" alt="chart success" class="rounded">
                          </div>
                          <div class="dropdown">
                            <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                              <a class="dropdown-item" href="deposits.php">View More</a>
                            </div>
                          </div>
                        </div>
                        <span class="fw-semibold d-block mb-1">BookKeeping</span>
                        <h3 class="card-title mb-2">
                          <?php
                          $get_all = mysqli_query($connection, "SELECT * FROM `booking`");
                          echo mysqli_num_rows($get_all)
                          ?>
                        </h3>
                        <small class="text-success fw-semibold"><i class='bx bx-up-arrow-alt'></i> %</small>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                      <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                          <div class="avatar flex-shrink-0">
                            <img src="assets/img/icons/unicons/wallet-info.png" alt="Credit Card" class="rounded">
                          </div>
                          <!-- <div class="dropdown">
                            <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                              <a class="dropdown-item" href="javascript:void(0);">View More</a>
                              <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                            </div>
                          </div> -->
                        </div>
                        <span>Total Booking Amount</span>
                        <h3 class="card-title text-nowrap mb-1">

                          <?php
                          $get_all = mysqli_query($connection, "SELECT sum(amount) as total FROM `booking`");
                          $row =  mysqli_fetch_assoc($get_all);
                          echo number_format($row['total']) ?? 0;
                          ?>




                        </h3>
                        <small class="text-success fw-semibold"><i class='bx bx-up-arrow-alt'></i><?php // echo $total_amount / 100 
                                                                                                  ?>%</small>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Total Revenue -->
              <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
                <div class="card">
                  <div class="row row-bordered g-0">
                    <div class="col-md-8">
                      <h5 class="card-header m-0 me-2 pb-3">Statistics Pane</h5>
                      <div id="totalRevenueChart" class="px-2"></div>
                    </div>
                    <div class="col-md-4">
                      <div class="card-body">
                        <div class="text-center">
                          <div class="dropdown">
                            <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" id="growthReportId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              2022
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="growthReportId">
                              <a class="dropdown-item" href="javascript:void(0);">2022</a>
                              <a class="dropdown-item" href="javascript:void(0);">2021</a>
                              <a class="dropdown-item" href="javascript:void(0);">2020</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div id="growthChart"></div>
                      <div class="text-center fw-semibold pt-3 mb-2">% Company Growth</div>

                      <div class="d-flex px-xxl-4 px-lg-2 p-4 gap-xxl-3 gap-lg-1 gap-3 justify-content-between">
                        <div class="d-flex">
                          <div class="me-2">
                            <span class="badge bg-label-primary p-2"><i class="bx bx-dollar text-primary"></i></span>
                          </div>
                          <div class="d-flex flex-column">
                            <small>2022</small>
                            <h6 class="mb-0">$32.5k</h6>
                          </div>
                        </div>
                        <div class="d-flex">
                          <div class="me-2">
                            <span class="badge bg-label-info p-2"><i class="bx bx-wallet text-info"></i></span>
                          </div>
                          <div class="d-flex flex-column">
                            <small>2021</small>
                            <h6 class="mb-0">$41.2k</h6>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--/ Total Revenue -->
              <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
                <div class="row">
                  <div class="col-6 mb-4">
                    <div class="card">
                      <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                          <div class="avatar flex-shrink-0">
                            <img src="assets/img/icons/unicons/paypal.png" alt="Credit Card" class="rounded">
                          </div>
                          <div class="dropdown">
                            <button class="btn p-0" type="button" id="cardOpt4" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                              <a class="dropdown-item" href="withdrawals.php">View More</a>
                            </div>
                          </div>
                        </div>
                        <span class="d-block mb-1">Total Booking Approved</span>
                        <h3 class="card-title text-nowrap mb-2">
                          <?php
                          $get_all = mysqli_query($connection, "SELECT sum(amount) as total FROM `booking` WHERE status = 'approved' || status = 'completed' || status = 'success'");
                          $row =  mysqli_fetch_assoc($get_all);
                          echo number_format($row['total']) ?? 0;
                          ?>
                        </h3>
                        <small class="text-danger fw-semibold"><i class='bx bx-down-arrow-alt'></i><?php echo $row['total'] / 100 ?>%</small>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 mb-4">
                    <div class="card">
                      <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                          <div class="avatar flex-shrink-0">
                            <img src="assets/img/icons/unicons/cc-primary.png" alt="Credit Card" class="rounded">
                          </div>
                          <div class="dropdown">
                            <button class="btn p-0" type="button" id="cardOpt1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="cardOpt1">
                              <a class="dropdown-item" href="all.php">View More</a>
                            </div>
                          </div>
                        </div>
                        <span class="fw-semibold d-block mb-1">Total users</span>
                        <h3 class="card-title mb-2">

                        </h3>
                        <small class="text-success fw-semibold"><i class='bx bx-up-arrow-alt'></i> <?php


                              $get_all = mysqli_query($connection, "SELECT * FROM `users`");
                              echo mysqli_num_rows($get_all) / 100 ?>%</small>
                      </div>
                    </div>
                  </div>
                  <!-- 
                    </div>
                    <div class="row"> 
                  -->

                </div>
              </div>
            </div>






          </div>
          <!-- / Content -->




          <!-- Footer -->

          <!-- / Footer -->


          <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>



    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>


  </div>
  <!-- / Layout wrapper -->







  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  <script src="assets/vendor/libs/jquery/jquery.js"></script>
  <script src="assets/vendor/libs/popper/popper.js"></script>
  <script src="assets/vendor/js/bootstrap.js"></script>
  <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

  <script src="assets/vendor/js/menu.js"></script>
  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="assets/vendor/libs/apex-charts/apexcharts.js"></script>

  <!-- Main JS -->
  <script src="assets/js/main.js"></script>

  <!-- Page JS -->
  <script src="assets/js/dashboards-analytics.js"></script>

  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>

</body>

</html>