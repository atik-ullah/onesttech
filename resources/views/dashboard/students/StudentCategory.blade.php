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
                    <h4 class="bradecrumb-title mb-1">Category list</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">Home</a></li>
                        <li class="breadcrumb-item">Category list</li>
                    </ol>
                </div>


                <div class="row  bg-white mt-3">
                    <div class="col-12 mb-3 d-flex justify-content-between">
                        <label class="" style="font-size: 30px">Student Category</label>
                        <button class="btn btn-primary px-3"><a href="#" class="text-white"><i
                                    class="fa fa-plus pe-2"></i>Add</a></button>
                    </div>
                    <table class="table">


                        <thead>
                            <tr>
                                <th scope="col">SR No.</th>
                                <th scope="col">Name</th>
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
                        url: "http://localhost/onesttech/public/show/student",
                        dataType: "json",
                        method: "GET",
                        success: function(response) {
    
                            if (response) {
                                x = response.success;
                            }
                            for (i = 0; i < x.length; i++) {
    
                                tr = $("<tr></tr>");
    
                                var td = $("<td>" + [i + 1] + "</td><td>" + x[i].category_id +
                                    "</td><td>" + x[i].status + "</td><td value=" + x[i].id +
                                    "><button class='btn btn-primary' id='student_edit' student_id=" + x[i].id + ">Edit</button> <button class='btn btn-danger' id='student_delete'  student_id=" + x[i].id + ">Delete</button> </td>");
    
                                tr.append(td);
                                $("#studentData").append(tr);
                            }
                        },
                    })
                }
                showStudentData();

    
            });
        </script>

    @endsection