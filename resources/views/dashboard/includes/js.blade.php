{{-- custom js --}}

<script src="{{asset('/')}}admin/assets/js/min.js"></script>




<!-- JAVASCRIPT -->
<script src="{{asset('/')}}admin/assets/libs/jquery/jquery.min.js"></script>
<script src="{{asset('/')}}admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('/')}}admin/assets/libs/metismenu/metisMenu.min.js"></script>
<script src="{{asset('/')}}admin/assets/libs/simplebar/simplebar.min.js"></script>
<script src="{{asset('/')}}admin/assets/libs/node-waves/waves.min.js"></script>

<script src="{{asset('/')}}admin/assets/js/pages/dashboard.init.js"></script>

<!-- Select2 JS -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<!-- App js -->
<script src="{{asset('/')}}admin/assets/js/app.js"></script>
<!-- Datatable init js -->
<!-- <script src="{{asset('/')}}admin/assets/js/pages/datatables.init.js"></script> -->



{{-- custom js by atik --}}
{{-- <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script> --}}
<script src="{{asset('/')}}admin/assets/js/atik.js"></script>




<!-- Custom js -->
<script src="{{asset('/')}}admin/assets/js/custom.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@if(Session::has('success'))
    <script>
        toastr.success("{{Session::get('success')}}");
    </script>
    {{ Session::forget('success') }};
@endif



{{-- summernote --}}
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

<script>
    $(document).ready(function() {
      $('#summernote').summernote();
    });
  </script>
  