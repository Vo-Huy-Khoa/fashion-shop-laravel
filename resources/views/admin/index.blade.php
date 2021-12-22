<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('title') | Admin</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="admin_asset/img/logo/logo.png" rel="icon">
  <link rel="stylesheet" href="{{ URL::asset('admin_asset/vendor/fontawesome-free/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('admin_asset/vendor/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('admin_asset/css/ruang-admin.min.css') }}">
  {{-- DataTable --}}
  <link rel="stylesheet" href="{{ URL::asset('admin_asset/vendor/datatables/dataTables.bootstrap4.min.css') }}">
  {{-- User --}}
  <link rel="stylesheet" href="{{ URL::asset('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('resources/css/app.css') }}">
  {{-- Admin Profile --}}
  <link rel="stylesheet" href="{{ URL::asset('Front/css/admin_profile.css') }}">
  {{-- message --}}
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css" rel="stylesheet">
  <link rel="stylesheet" href="{{ URL::asset('admin_asset/css/message.css') }}">
    {{-- Css input --}}
  <link rel="stylesheet" href="{{ URL::asset('admin_asset/css/input.css') }}">
  <base href="{{asset('')}}">
</head>
<body id="page-top">
  <div id="wrapper">
      <!-- Sidebar -->
      @include('admin.layout.sidebar')
      <!-- Sidebar -->
      <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <!-- TopBar -->
            @include('admin.layout.header')
            <!-- TopBar -->
            <!-- Container Fluid-->
            @yield('content')
            <!---Container Fluid-->
        </div>
        <!-- Footer -->
        @include('admin.layout.footer')
        <!-- Footer -->
      </div>
  </div>
  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
</body>
<script>
  $(document).ready(function () {
    $('#dataTable').DataTable(); // ID From dataTable 
    $('#dataTableHover').DataTable(); // ID From dataTable with Hover
  });
</script>
  <!-- Login Content -->
  <script src="{{ URL::asset('admin_asset/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ URL::asset('admin_asset/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ URL::asset('admin_asset/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
  <script src="{{ URL::asset('admin_asset/js/ruang-admin.min.js') }}"></script>
  {{-- Script Index --}}
  <script src="{{ URL::asset('admin_asset/vendor/chart.js/Chart.min.js') }}"></script>
  <script src="{{ URL::asset('admin_asset/js/demo/chart-area-demo.js') }}"></script>
  {{-- DataTable --}}
    <!-- Page level plugins -->
  <script src="{{ URL::asset('admin_asset/vendor/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ URL::asset('admin_asset/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <!-- Page level custom scripts -->
    <script>
      $(document).ready(function () {
        $('#dataTable').DataTable(); // ID From dataTable 
        $('#dataTableHover').DataTable(); // ID From dataTable with Hover
      });
    </script>
{{-- Script User --}}
<script src="{{ URL::asset('https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js') }}"></script>
{{-- <script src="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js') }}"></script> --}}
<script>
  /*  ==========================================
    SHOW UPLOADED IMAGE
* ========================================== */
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#imageResult')
                .attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}
$(function () {
    $('#upload').on('change', function () {
        readURL(input);
    });
});
/*  ==========================================
    SHOW UPLOADED IMAGE NAME
* ========================================== */
var input = document.getElementById( 'upload' );
var infoArea = document.getElementById( 'upload-label' );
input.addEventListener( 'change', showFileName );
function showFileName( event ) {
  var input = event.srcElement;
  var fileName = input.files[0].name;
  infoArea.textContent = 'File name: ' + fileName;
}
</script>
{{-- script message --}}
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
{{-- editor CKE --}}
<script src="{{ URL::asset('admin_asset\ckeditor\ckeditor.js') }}"></script>
</html>