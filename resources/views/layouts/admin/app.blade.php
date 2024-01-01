<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin2 </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="/star-admin/vendors/feather/feather.css">
  <link rel="stylesheet" href="/star-admin/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="/star-admin/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="/star-admin/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="/star-admin/vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="/star-admin/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="/star-admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="/star-admin/js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="/star-admin/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="/star-admin/images/favicon.png" />
</head>
<body>
  <div class="container-scroller"> 
    <!-- partial:partials/_navbar.html -->
    @include('layouts.admin.header')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      @include('layouts.admin.sidebar')
      <!-- partial -->
      @if(Session::has('error'))
           <div id="alertNotif" class="alert alert-danger" style="position:fixed;z-index:1000;bottom:0;right:0;" role="alert">
        {{ Session::get('error') }}
      </div>
      @endif
      @if(Session::has('success'))
        <div id="alertNotif" class="alert alert-success" style="position:fixed;z-index:1000;bottom:0;right:0;" role="alert">
        {{ Session::get('success') }}
      </div>
      @endif
      @yield('content')
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
       @extends('layouts.admin.footer')
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script>
    setTimeout(function() {
        document.getElementById('alertNotif').style.display = 'none';
    }, 4000);
  </script>
  <script src="/star-admin/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="/star-admin/vendors/chart.js/Chart.min.js"></script>
  <script src="/star-admin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="/star-admin/vendors/progressbar.js/progressbar.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="/star-admin/js/off-canvas.js"></script>
  <script src="/star-admin/js/hoverable-collapse.js"></script>
  <script src="/star-admin/js/template.js"></script>
  <script src="/star-admin/js/settings.js"></script>
  <script src="/star-admin/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="/star-admin/js/dashboard.js"></script>
  <script src="/star-admin/js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

