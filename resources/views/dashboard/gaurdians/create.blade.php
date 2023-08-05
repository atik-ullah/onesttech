@extends('dashboard.master')

@section('title')
    Create Gaurdian
@endsection

@section('body')
    {{-- <div class="container"> --}}
    <div class="container py-5 ">
        <div class="row">
            <div class="col-md-11 mt-5 bg-white mx-5 py-3">
                <form action="" method="POST" id="gaurdian_insert" enctype="multipart/form-data">

                    @csrf

                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label>Father Name</label>
                            <input type="text" class="form-control" name="fath_name" id="fath_name">

                        </div>
                        <div class="col-md-3 mb-3">
                            <label>Father Mobile</label>
                            <input type="number" class="form-control" name="fath_mobile" id="fath_mobile">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label>Father profession</label>
                            <input type="text" class="form-control" name="fath_prof" id="fath_prof">

                        </div>
                        <div class="col-md-3 mb-3">
                            <label>Father image (95 x 95 px)</label>
                            <input type="file" class="form-control" name="fath_img" id="fath_img">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label>Mother Name</label>
                            <input type="text" class="form-control" name="mother_name" id="mother_name">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label>Mother Mobile</label>
                            <input type="number" class="form-control" name="mother_mobile" id="mother_mobile">
                        </div>

                        {{-- class --}}
                        <div class="col-md-3 mb-3">
                            <label>Mother profession</label>
                            <input type="text" class="form-control" name="mother_prof" id="mother_prof">
                        </div>

                        {{-- Section --}}
                        <div class="col-md-3 mb-3">
                            <label>Mother image (95 x 95 px)</label>
                            <input type="file" class="form-control" name="mother_img" id="mother_img">
                        </div>

                        <div class="col-md-3 mb-3">
                            <label>Guardian name *</label>
                            <input type="text" class="form-control" name="guard_name" id="guard_name">
                        </div>

                        <div class="col-md-3 mb-3">
                            <label>Guardian mobile *</label>
                            <input type="number" class="form-control" name="guard_mobile" id="guard_mobile">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label>Guardian profession</label>
                            <input type="text" class="form-control" name="guard_prof" id="guard_prof">
                        </div>

                        <div class="col-md-3 mb-3">
                            <label>Guardian Image (95 x 95 px)</label>
                            <input type="file" class="form-control" name="guard_img" id="guard_img">
                        </div>

                        <div class="col-md-3 mb-3">
                            <label>Guardian email</label>
                            <input type="email" class="form-control" name="guard_email" id="guard_email">
                            
                        </div>

                        <div class="col-md-3 mb-3">
                            <label>Guardian address</label>
                            <input type="text" class="form-control" name="guard_address" id="guard_address">
                        </div>

                        <div class="col-md-3 mb-3">
                            <label>Guardian Relation</label>
                            <input type="text" class="form-control" name="guard_rel" id="guard_rel">
                        </div>
                     

                        <div class="col-md-3 ">
                            <label>Status</label> <br>
                            <select class="form-control" name="guard_status" id="guard_status">
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>

                    <div class="col-12 d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary ">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {

            $('#gaurdian_insert').submit(function(e) {
                e.preventDefault();

                console.log('hi');

                x = new FormData(document.getElementById("gaurdian_insert"));
                $.ajax({
                    url: "{{ route('gardianStore') }}",
                    method: "POST",
                    data: x,
                    processData: false,
                    contentType: false,
                    dataType: "json",
                    success: function(response) {
                        if (response.success == true) {
                            alert('Add Successfully');
                            $('#gaurdian_insert')[0].reset();
                        }
                    }
                });
            });
        });
    </script>

@endsection
