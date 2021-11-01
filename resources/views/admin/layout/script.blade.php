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
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

{{-- editor CKE --}}
<script src="{{ URL::asset('admin_asset\ckeditor\ckeditor.js') }}"></script>
