@extends('dashboard.master')

@section('title')
Create Department
@endsection

<!-- Create Department area -->
@section('body')
<div class="container py-5 px-5">
    <!-- Page Heading & Breadcrumb -->
    <div class="row">
        <div class="col-12 col-md-12 pt-5 px-0">

            <div class="page_hading_bredcrumb">
                <h2>Department</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb_bg">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Department</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data</li>
                    </ol>
                </nav>
            </div>

        </div>
    </div>
    <!-- End Page Heading & Breadcrumb -->

    <!-- Page Content -->
    <form action="#" method="POST" class="row" id="create_dept_form">

        @csrf

        <div class="col-12 col-md-6">
            <div class="mb-3">
                <label for="dept_name" class="form-label">Name</label>
                <input type="text" class="form-control" name="dept_name" id="dept_name">
            </div>
        </div>

        <div class="col-12 col-md-6">
            <div class="mb-3">
                <p>Status</p>
                <select class="select2_states" name="status">
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                </select>
            </div>
        </div>

        <button class="btn btn-primary float-end">Submit</button>
    </form>
    <!-- End Page Content -->


</div>
<<<<<<< HEAD
=======

@endsection
>>>>>>> main
<!-- Department AJAX -->
<script>
$( document ).ready(function() {
    console.log( "ready!" );
});
</script>
<!-- End Department AJAX -->

<<<<<<< HEAD
@endsection
=======
>>>>>>> main
