<?php
include('../server/connection.php');

$edit_id  = '';
$title = '';
$content = '';
if (isset($_GET['edit_id'])) {
  $edit_id = $_GET['edit_id'];
  $query = mysqli_query($connection, "SELECT * FROM services WHERE id='$edit_id'");
  $row = mysqli_fetch_assoc($query);

  if ($row) {
    $title = $row['title'];
    $content = $row['content'];
  }
}




?>
<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed " dir="ltr" data-theme="theme-default" data-assets-path="assets/" data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Create A Users</title>

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
  <script src="jquery-3.6.0.min.js"></script>
  <script src="sweetalert2.all.min.js"></script>

</head>

<body>

  <?php


  // If edit is requested



  ?>


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



          </div>



        </nav>

        <!-- / Navbar -->


        <!-- Content wrapper -->
        <div class="content-wrapper">

          <!-- Content -->

          <div class="container-xxl flex-grow-1 container-p-y">

            <h4 class="fw-bold py-3 mb-4">
              <span class="text-muted fw-light">Admin /</span> create Service
            </h4>

            <!-- Basic Layout -->
            <div class="row">
              <div class="col-xl">
                <div class="card mb-4">
                  <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">create Service</h5> <small class="text-muted float-end"></small>
                  </div>
                  <div class="card-body">

                    <?php
                    if (isset($_POST['save'])) {
                      // Sanitize the form input

                      $title = mysqli_real_escape_string($connection, $_POST['title']);
                      $content = mysqli_real_escape_string($connection, $_POST['content']); // This is the content with HTML tags


                      if ($edit_id == '') {
                        // Insert the service into the database
                        $query = mysqli_query($connection, "INSERT INTO services (title, content) VALUES ('$title', '$content')");
                      } else {
                        $query = mysqli_query($connection, "UPDATE services SET title='$title', content='$content' WHERE id='$edit_id'");
                      }





                      if ($query) {
                        echo "<script>alert('Service Created => Your service has been successfully created or save')</script>";
                      } else {
                        echo "<script>alert('Error=>Failed to create service or update service')</script>";
                      }
                    }




                    ?>


                    <form method="POST" id="service-form">
                      <div class="mb-3">
                        <label class="form-label" for="basic-default-title">Service Title</label>
                        <input type="text" class="form-control" value="<?php echo ($title != '') ? $title : '' ?>" name="title" id="basic-default-title" placeholder="Enter Service Title" required />
                      </div>

                      <div class="mb-3">
                        <label class="form-label" for="basic-default-content">Service Content</label>
                        <!-- This textarea will be replaced by CKEditor -->
                        <textarea style="min-height: 500px;"
                        class="form-control" value name="content" id="basic-default-content" rows="10" placeholder="Enter service content (HTML allowed)"><?php echo $content ?></textarea>
                      </div>


                      <button type="submit" class="btn btn-primary" name="save">SAVE</button>


                    </form>

                    <!-- CKEditor integration -->
                    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
                    <script>
                      ClassicEditor
                        .create(document.querySelector('#basic-default-content'))
                        .then(editor => {
                          editor.ui.view.editable.element.style.minHeight = '300px'; // or 400px, etc.
                          // Make sure the CKEditor content is updated in the textarea on form submission
                          const form = document.getElementById('service-form');
                          form.addEventListener('submit', function(event) {
                            // Set the value of the textarea to the CKEditor content before submitting
                            console.log(editor.getData())
                            const contentField = document.querySelector('textarea[name="content"]');
                            contentField.value = editor.getData();
                            contentField.innnerHTML = editor.getData();
                          });
                        })
                        .catch(error => {
                          console.error(error);
                        });
                    </script>




                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Basic form end -->
          <!-- / Content -->




          <!-- Footer -->
          <!-- <footer class="content-footer footer bg-footer-theme">
            <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
              <div class="mb-2 mb-md-0">
                © <script>
                  document.write(new Date().getFullYear())
                </script>
                , made with ❤️ by <a href="https://themeselection.com" target="_blank" class="footer-link fw-bolder">ThemeSelection</a>
              </div>
              <div>

                <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
                <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>

                <a href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/" target="_blank" class="footer-link me-4">Documentation</a>

                <a href="https://github.com/themeselection/sneat-html-admin-template-free/issues" target="_blank" class="footer-link me-4">Support</a>


              </div>
            </div>
          </footer> -->
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




  <!-- <div class="buy-now">
    <a href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/" target="_blank" class="btn btn-danger btn-buy-now">Upgrade to Pro</a>
  </div> -->


  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  <script src="assets/vendor/libs/jquery/jquery.js"></script>
  <script src="assets/vendor/libs/popper/popper.js"></script>
  <script src="assets/vendor/js/bootstrap.js"></script>
  <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

  <script src="assets/vendor/js/menu.js"></script>
  <!-- endbuild -->

  <!-- Vendors JS -->



  <!-- Main JS -->
  <script src="assets/js/main.js"></script>

  <!-- Page JS -->



  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>

</body>

</html>