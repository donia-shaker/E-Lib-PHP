<!DOCTYPE html>


<?php echo dirname(__DIR__);?>

<!-- beautify ignore:start -->
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed " dir="ltr" data-theme="theme-semi-dark" data-http://localhost:8000/assets-path="http://localhost:8000/assets/" data-template="vertical-menu-template-semi-dark">

  
<!-- form-layouts-vertical.html , Sat, 26 Mar 2022 16:53:12 GMT -->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title> Vertical Layouts - Forms | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>
    
    <meta name="description" content="Most Powerful &amp; Comprehensive Bootstrap 5 HTML Admin Dashboard Template built for developers!" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/http://localhost:8000/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="http://localhost:8000/assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="http://localhost:8000/assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="http://localhost:8000/assets/vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="http://localhost:8000/assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="http://localhost:8000/assets/vendor/css/rtl/theme-semi-dark.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="http://localhost:8000/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="http://localhost:8000/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="http://localhost:8000/assets/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="http://localhost:8000/assets/vendor/libs/flatpickr/flatpickr.css" />
<link rel="stylesheet" href="http://localhost:8000/assets/vendor/libs/select2/select2.css" />

    <!-- Page CSS -->
    
    <!-- Helpers -->
    <!-- <script src="http://localhost:8000/assets/vendor/js/helpers.js"></script> -->

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="http://localhost:8000/assets/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="http://localhost:8000/assets/js/config.js"></script>
    
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

      <?php include("aside.php");?>
      <!-- / Menu -->


    <!-- Layout container -->
    <div class="layout-page">
      
      

<!-- Navbar -->

      <?php include("nav.php");?>

<!-- / Navbar -->

      <!-- Content wrapper -->
      <div class="content-wrapper">

        <!-- Content -->
        
          <div class="container-xxl flex-grow-1 container-p-y">
            
            
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Vertical Layouts</h4>




<!-- Multi Column with Form Separator -->
<div class="card mb-4">
  <h5 class="card-header">?????????? ?????? ????????</h5>

  <form class="card-body" action="/update_city" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $params->id ; ?>">
    <?php
    //  print_r($params) ;
?>
    <div class="row g-3">
      <div class="col-md-6">
        <label class="form-label" for="multicol-username">?????? ??????????</label>
        <input name="name"  value="<?php echo $params->name ; ?>" type="text" id="multicol-username" class="form-control" placeholder="john.doe" />
      </div>
    </div>

      
      <div class="col-md-6">
        <div class="form-password-toggle">
          <label class="form-label" for="multicol-confirm-password">?????????? ??????????</label>
          <div class="input-group input-group-merge">
          <label class="switch">
              <input name="is_active" value=1 type="checkbox" checked class="switch-input" />
              <span class="switch-toggle-slider">
                <span class="switch-on"></span>
                <span class="switch-off"></span>
              </span>
              <span class="switch-label">is active</span>
            </label>
          </div>
        </div>
      </div>
    </div>
    
    
    <div class="pt-4">
      <button type="submit"  class="btn btn-primary me-sm-3 me-1">Submit</button>
      <button type="reset" class="btn btn-label-secondary">Cancel</button>
    </div>
  </form>
</div>





            
          </div>
          <!-- / Content -->

          
          

<!-- Footer -->
<footer class="content-footer footer bg-footer-theme">
  <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
    <div class="mb-2 mb-md-0">
      ?? <script>
      document.write(new Date().getFullYear())
      </script>
      , made with ?????? by <a href="https://themeselection.com/" target="_blank" class="footer-link fw-bolder">ThemeSelection</a>
    </div>
    <div>
      
      <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
      <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>
      
      <a href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/" target="_blank" class="footer-link me-4">Documentation</a>
      
      
      <a href="https://themeselection.com/support/" target="_blank" class="footer-link d-none d-sm-inline-block">Support</a>
      
    </div>
  </div>
</footer>
<!-- / Footer -->

          
          <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>

    
    
    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
    
    
    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>
    
  </div>
  <!-- / Layout wrapper -->

  
  <div class="buy-now">
    <a href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/" target="_blank" class="btn btn-danger btn-buy-now">Buy Now</a>
  </div>
  

  

  <!-- Core JS -->
  <!-- build:js http://localhost:8000/assets/vendor/js/core.js -->
  <script src="http://localhost:8000/assets/vendor/libs/jquery/jquery.js"></script>
  <script src="http://localhost:8000/assets/vendor/libs/popper/popper.js"></script>
  <script src="http://localhost:8000/assets/vendor/js/bootstrap.js"></script>
  <script src="http://localhost:8000/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  
  <script src="http://localhost:8000/assets/vendor/libs/hammer/hammer.js"></script>
  <script src="http://localhost:8000/assets/vendor/libs/i18n/i18n.js"></script>
  <script src="http://localhost:8000/assets/vendor/libs/typeahead-js/typeahead.js"></script>
  
  <script src="http://localhost:8000/assets/vendor/js/menu.js"></script>
  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="http://localhost:8000/assets/vendor/libs/cleavejs/cleave.js"></script>
<script src="http://localhost:8000/assets/vendor/libs/cleavejs/cleave-phone.js"></script>
<script src="http://localhost:8000/assets/vendor/libs/moment/moment.js"></script>
<script src="http://localhost:8000/assets/vendor/libs/flatpickr/flatpickr.js"></script>
<script src="http://localhost:8000/assets/vendor/libs/select2/select2.js"></script>

  <!-- Main JS -->
  <script src="http://localhost:8000/assets/js/main.js"></script>

  <!-- Page JS -->
  <script src="http://localhost:8000/assets/js/form-layouts.js"></script>
  
</body>


<!-- form-layouts-vertical.html , Sat, 26 Mar 2022 16:53:13 GMT -->
</html>
