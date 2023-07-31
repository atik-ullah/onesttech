<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Onest--@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose dashboard & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    @include('dashboard.includes.css')
</head>

<body data-sidebar="dark">
    <!-- Begin page -->
    <div id="layout-wrapper">
        <header id="page-topbar">
            @include('dashboard.includes.header')
        </header> <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">
            <div data-simplebar class="h-100">
                <!--- Sidemenu -->
                @include('dashboard.includes.menu')
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <!-- End Page-content -->
            <!-- Modal -->
            <!-- end modal -->
            
            @yield('body')
        </div>
        <!-- end main content-->
        @include('dashboard.includes.footer')

    </div>
<<<<<<< HEAD

    {{-- <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>


    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });
    </script>


    <script>
        $(document).on('change', '#categoryName', function() {
            var categoryId = $(this).val();
            $.ajax({
                url: "/get-sub-category-by-category-id/" + categoryId,
                method: "GET",
                dataType: "JSON",
                success: function(data) {
                    console.log(data);
                    var option = '';
                    option += '<option selected disabled>Select a sub category</option>';
                    $.each(data, function(key, value) {
                        option += '<option value="' + value.id + '">' + value
                            .sub_category_name + '</option>';
                    });
                    $('#subCategoryName').empty().append(option);
                },
            })
        })
    </script> --}}

    {{-- <script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('long_description');
    </script> --}}
=======
>>>>>>> 6c88b300609f84ce6f609fc2d76b98b4756e3018

    @include('dashboard.includes.js')

</body>


<!-- Mirrored from themesbrand.com/skote/layouts/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Sep 2020 15:07:20 GMT -->

</html>
