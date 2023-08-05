@extends('dashboard.master')

@section('title')
    Index Student
@endsection

@section('body')
    {{-- <div class="container"> --}}
    <div class="container py-5 ">
        <div class="row">
            <div class="col-md-11 mt-5 mx-5 py-3">
                <div class="">
                    <h4 class="bradecrumb-title mb-1">Student list</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">Home</a></li>
                        <li class="breadcrumb-item">Student list</li>
                    </ol>
                </div>

                <div class="row  bg-white">

                    <div class="col-md-2 my-3">
                        <h2>Filtering</h2>
                    </div>
                    <div class="col-md-3 my-3">
                        <select class="form-control">
                            <option value="0">Select class</option>


                        </select>
                    </div>
                    <div class="col-md-3 my-3">
                        <select class="form-control">
                            <option value="0">Select section</option>
                        </select>
                    </div>
                    <div class="col-md-2 my-3">
                        <input class="form-control" type="text" placeholder="Enter Keyword">
                    </div>

                    <div class="col-md-2 my-3 d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary ">Submit</button>
                    </div>

                </div>

                <div class="row  bg-white mt-3">
                    <div class="col-12 mb-3 d-flex justify-content-between">
                        <label class="" style="font-size: 30px">Student list</label>
                        <button class="btn btn-primary px-3"><a href="{{ route('create') }}" class="text-white"><i
                                    class="fa fa-plus pe-2"></i>Add</a></button>
                    </div>
                    <table class="table">


                        <thead>
                            <tr>
                                <th scope="col">SR No.</th>
                                <th scope="col">Admission NO</th>
                                <th scope="col">Roll NO</th>
                                <th scope="col">Student name</th>
                                <th scope="col">Class (Section)</th>
                                <th scope="col">Guardian name</th>
                                <th scope="col">Date of birth</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Mobile number</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody id="studentData">


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{-- // show student Data --}}
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {

            // alert('jh');

            function showStudentData() {
                $.ajax({
                    url: "/show/student",
                    dataType: "json",
                    method: "GET",
                    success: function(response) {

                        if (response) {
                            x = response.success;
                        }
                        for (i = 0; i < x.length; i++) {

                            tr = $("<tr></tr>");

                            var td = $("<td>" + [i + 1] + "</td><td>" + x[i].admission_no +
                                "</td><td>" + x[i].roll_no + "</td><td>" + x[i].first_name + ' ' +
                                x[i].last_name + "</td><td>" + x[i].class.name + "("+ x[i].section.name +")" + "</td><td>" + x[i]
                                .parent + "</td><td>" + x[i].b_date + "</td><td>" + x[i].gender +
                                "</td><td>" + x[i].mobile + "</td><td class='badge rounded-pill bg-primary text-white'>" + x[i].status +
                                "</td><td value=" + x[i].id +
                                "><button  id='student_edit' student_id=" +
                                x[i].id +
                                "><i class='fas fa-edit'></i></button> <button id='student_delete'  student_id=" + x[i].id + "><i class='fas fa-trash'></i></button> </td>");

                            tr.append(td);
                            $("#studentData").append(tr);
                        }
                    },
                })
            }
            showStudentData();

            // edit student

            $('#studentData').on('click', '#student_edit', function(e) {
                e.preventDefault();
                // alert('hi');
                let id = $(this).attr("student_id");
                window.location.href = "/edit/student/" + id;
            });



            //// Delete student

            $('#studentData').on('click', '#student_delete', function(e) {
                e.preventDefault();

                let id = $(this).attr("student_id");

                // console.log(id);

                $.ajax({
                    url: "/destroy/student/" + id,
                    method: "GET",
                    dataType: "json",
                    success: function(response) {

                        if (response.success == true) {
                            alert('Are you sure delete this Student?');
                        } else {
                            alert('OOPs something wrong!');
                        }
                    },

                })
                
            });

        });
    </script>
@endsection
