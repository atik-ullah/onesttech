@extends('dashboard.master')

@section('title')
    Create Student
@endsection

@section('body')
    {{-- <div class="container"> --}}
    <div class="container py-5 ">
        <div class="row">
            <div class="col-md-11 mt-5 bg-white mx-5 py-3">
                <form action="#" method="POST" id="student_insert">

                    @csrf

                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label>Admission NO</label>
                            <input type="number" class="form-control" name="admission_no" id="admission_no">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label>Roll NO</label>
                            <input type="number" class="form-control" name="roll_no" id="roll_no">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label>First name</label>
                            <input type="text" class="form-control" name="first_name" id="first_name">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label>Last name</label>
                            <input type="text" class="form-control" name="last_name" id="last_name">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label>Mobile</label>
                            <input type="number" class="form-control" name="mobile" id="mobile">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" id="email">
                        </div>

                        {{-- class --}}
                        <div class="col-md-3 mb-3">
                            <label>Class</label>
                            <select name="class_id" class="form-control" id="class_id">
                                <option value="" checked>--Select--</option>

                                @foreach ($classes as $class)
                                    <option value="{{ $class->id }}">
                                        {{ $class->name }}
                                    </option>
                                @endforeach

                            </select>
                        </div>

                        {{-- Section --}}
                        <div class="col-md-3 mb-3">
                            <label>Section</label>
                            <select name="section_id" class="form-control" id="section_id">
                            <option value="">--Select--</option>
                                @foreach ($sections as $section)
                                    <option value="{{ $section->id }}">
                                        {{ $section->name }}
                                    </option>
                                @endforeach

                            </select>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label>Shift</label>
                            <select name="shift_id" class="form-control" id="shift_id">
                                <option value="">--Select--</option>
                                @foreach ($shifts as $shift)
                                    <option value="{{ $shift->id }}">
                                        {{ $shift->name }}
                                    </option>
                                @endforeach

                            </select>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label>Date of Birth</label>
                            <input type="date" class="form-control" name="b_date" id="b_date">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label>Religion</label>
                            <select name="religion" class="form-control" id="religion">
                                <option value="0">Select religion</option>
                                <option value="Islam">Islam</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Christan">Christan</option>
                            </select>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label>Gender</label>
                            <select name="gender" class="form-control" id="gender">
                                <option value="0">Select gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>

                            </select>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label>Category</label>
                            <select name="category_id" class="form-control" id="category_id">
                                <option value="">Select category</option>
                                <option value="Regular">Regular</option>
                                <option value="Irregular">Irregular</option>

                            </select>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label>Blood</label>
                            <select name="blood" class="form-control" id="blood">
                                <option value="0">Select blood</option>
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>

                            </select>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label>Admission date</label>
                            <input type="date" class="form-control" name="admission_date" id="admission_date">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label>Image( 100x100 px)</label>
                            <input type="file" class="form-control" name="image" id="image">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label>Select Parent</label>
                            <select name="parent" class="form-control" id="parent">
                                <option value="">--Select--</option>
                                @foreach ($guardians as $guardian)
                                    <option value="{{ $guardian->id }}">
                                        {{ $guardian->fath_name }}
                                    </option>
                                @endforeach

                            </select>
                        </div>

                        <div class="col-md-3 ">
                            <label>Status</label> <br>
                            <input type="radio" value="1" name="status" checked> Active <br>
                            <input type="radio" value="0" name="status"> Inactive
                        </div>


                    </div>
                    <div class="row">
                        <div class="col-12 mb-3 d-flex justify-content-between">
                            <label class="" style="font-size: 30px">Upload Documents</label>
                            <button class="btn btn-primary px-3"><i class="fa fa-plus pe-2"></i>Add</button>
                        </div>
                    </div>

                    <div class="row">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">document</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                        </table>
                    </div>

                    <div class="row  d-flex justify-content-end px-3">
                        <button type="submit" class="btn btn-primary ">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {

            $('#student_insert').submit(function(e) {
                e.preventDefault();

                console.log('hi');

                x = new FormData(document.getElementById("student_insert"));
                $.ajax({
                    url: "{{ route('store') }}",
                    method: "POST",
                    data: x,
                    processData: false,
                    contentType: false,
                    dataType: "json",
                    success: function(response) {
                        if (response.success == true) {
                            window.location.href = "http://127.0.0.1:8000/index/student";
                        }
                    }
                });
            });
        });
        
    </script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
     integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" 
     crossorigin="anonymous"></script>

{{-- <script>
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
@endsection
