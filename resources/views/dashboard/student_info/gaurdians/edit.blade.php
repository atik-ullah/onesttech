@extends('dashboard.master')

@section('title')
    Create Gaurdian
@endsection

@section('body')
    {{-- <div class="container"> --}}
    <div class="container py-5 ">
        <div class="row">
            <div class="col-md-11 mt-5 bg-white mx-5 py-3">
                <form action="" method="POST" id="gaurdian_update" enctype="multipart/form-data"  gardian_id="{{ $guardians->id}}">

                    @csrf

                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label>Father Name</label>
                            <input type="text" class="form-control"
                             name="fath_name" id="fath_name" value="{{ $guardians->fath_name }}">

                        </div>
                        <div class="col-md-3 mb-3">
                            <label>Father Mobile</label>
                            <input type="number" class="form-control"
                             name="fath_mobile" id="fath_mobile" value="{{ $guardians->fath_mobile }}">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label>Father profession</label>
                            <input type="text" class="form-control"
                             name="fath_prof" id="fath_prof" value="{{ $guardians->fath_prof }}">

                        </div>
                        <div class="col-md-3 mb-3">
                            <label>Father image (95 x 95 px)</label>
                            <input type="file" class="form-control"
                             name="fath_img" id="fath_img" value="{{ $guardians->fath_img }}">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label>Mother Name</label>
                            <input type="text" class="form-control"
                             name="mother_name" id="mother_name"  value="{{ $guardians->mother_name }}">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label>Mother Mobile</label>
                            <input type="number" class="form-control"
                             name="mother_mobile" id="mother_mobile"  value="{{ $guardians->mother_mobile }}">
                        </div>

                        {{-- class --}}
                        <div class="col-md-3 mb-3">
                            <label>Mother profession</label>
                            <input type="text" class="form-control"
                             name="mother_prof" id="mother_prof"  value="{{ $guardians->mother_prof }}">
                        </div>

                        {{-- Section --}}
                        <div class="col-md-3 mb-3">
                            <label>Mother image (95 x 95 px)</label>
                            <input type="file" class="form-control"
                             name="mother_img" id="mother_img"  value="{{ $guardians->mother_img }}">
                        </div>

                        <div class="col-md-3 mb-3">
                            <label>Guardian name *</label>
                            <input type="text" class="form-control"
                             name="guard_name" id="guard_name" value="{{ $guardians->guard_name }}">
                        </div>

                        <div class="col-md-3 mb-3">
                            <label>Guardian mobile *</label>
                            <input type="number" class="form-control" 
                            name="guard_mobile" id="guard_mobile" value="{{ $guardians->guard_mobile }}">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label>Guardian profession</label>
                            <input type="text" class="form-control" 
                            name="guard_prof" id="guard_prof" value="{{ $guardians->guard_prof }}">
                        </div>

                        <div class="col-md-3 mb-3">
                            <label>Guardian Image (95 x 95 px)</label>
                            <input type="file" class="form-control"
                             name="guard_img" id="guard_img" value="{{ $guardians->guard_img }}">
                        </div>

                        <div class="col-md-3 mb-3">
                            <label>Guardian email</label>
                            <input type="email" class="form-control"
                             name="guard_email" id="guard_email" value="{{ $guardians->guard_email }}">
                            
                        </div>

                        <div class="col-md-3 mb-3">
                            <label>Guardian address</label>
                            <input type="text" class="form-control"
                             name="guard_address" id="guard_address" value="{{ $guardians->guard_address }}">
                        </div>

                        <div class="col-md-3 mb-3">
                            <label>Guardian Relation</label>
                            <input type="text" class="form-control"
                             name="guard_rel" id="guard_rel" value="{{ $guardians->guard_rel }}">
                        </div>
                     

                        <div class="col-md-3 ">
                            <label>Status</label> <br>
                            <select class="form-control" name="guard_status" id="guard_status">
                                <option value="1" {{$guardians->guard_status==1 ? 'checked' : '' }}>Active</option>
                                <option value="0" {{$guardians->guard_status==0 ? 'checked' : '' }}>Inactive</option>
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
        $('#gaurdian_update').submit(function(e) {
            e.preventDefault();
            x = new FormData(document.getElementById("gaurdian_update"));
            let id = $(this).attr("gardian_id");
            // console.log(id);
            $.ajax({
                url: "/update/gardian/" + id,
                method: "POST",
                data: x,
                processData: false,
                contentType: false,
                dataType: "json",
                success: function(response) {

                    if (response.success == true) {
                        alert('Update Successfully');
                        window.location.href = '/index/gardian';
                    } else {
                        window.location.href = "/edit/gardian/" + id;
                    }
                },
            });
        });
    });
</script>
    @endsection