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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@iconify/iconify@3.0.0/dist/iconify.min.css">

  <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

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

      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
        var alertNotif = document.getElementById('alertNotif');
        if (alertNotif) {
            alertNotif.style.display = 'none';
        }
    }, 4000);
  </script>

<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

<script>
	//  CKEDITOR.replace('editor', {
  //   });

    CKEDITOR.replace('editor-about', {
    });
    CKEDITOR.replace('editor-visi', {
    });
    CKEDITOR.replace('editor-misi', {
    });

</script>

<script src="https://cdn.jsdelivr.net/npm/@iconify/iconify@3.0.0/dist/iconify.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Ambil elemen select
        const selectElement = document.getElementById('iconSelect');

        // Container untuk menampilkan ikon yang dipilih
        const selectedIconContainer = document.getElementById('selectedIconContainer');

        // Tambahkan event listener untuk menampilkan ikon yang dipilih
        selectElement.addEventListener('change', function () {
            const selectedIcon = this.value;
            
            // Hapus konten sebelumnya
            selectedIconContainer.innerHTML = '';

            // Tambahkan ikon yang dipilih ke dalam container
            const iconElement = document.createElement('span');
            iconElement.className = 'iconify';
            iconElement.setAttribute('data-icon', `mdi:${selectedIcon}`);
            iconElement.setAttribute('data-inline', 'false');

            selectedIconContainer.appendChild(iconElement);
        });

        // Tambahkan gambar ikon di dalam setiap opsi
        const options = selectElement.getElementsByTagName('option');
        Array.from(options).forEach(option => {
            const iconValue = option.getAttribute('data-icon');
            const imgElement = document.createElement('img');
            imgElement.src = `https://cdn.jsdelivr.net/npm/@iconify/iconify@3.0.0/dist/${iconValue}.svg`;
            imgElement.alt = iconValue;
            imgElement.style.width = '20px'; // Sesuaikan ukuran gambar sesuai kebutuhan
            option.insertBefore(imgElement, option.firstChild);
        });
    });

    
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

