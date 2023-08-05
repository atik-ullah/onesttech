@extends('dashboard.master')

@section('title')
    Disable Student
@endsection

@section('body')
    {{-- <div class="container"> --}}
    <div class="container py-5 ">
        <div class="row">
            <div class="col-md-11 mt-3 mx-5 py-3">
                <div class="">
                    <h2 class="bradecrumb-title mb-1">Disabled Students</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">Home</a></li>
                        <li class="breadcrumb-item">Disabled Students</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="row  bg-white  mx-5 py-2">
            <div class="col-12  mb-3 d-flex justify-content-between">
                <label class="" style="font-size: 30px">Disabled Students</label>
            </div>
            {{-- form --}}
            <form action="" class="col-md-12" id="search">
                @csrf
                <div class="row">
                    {{-- class --}}
                    <div class="col-md-6 mb-3">
                        <label>Class <sup class="text-danger">*</sup></label>
                       
                        <select name="class_id" class="form-control" id="class_id">
                            <option checked>--Select a class--</option>

                            @foreach ($classes as $class)
                                <option value="{{ $class->id }}">
                                    {{ $class->name }}
                                </option>
                            @endforeach

                        </select>
                    </div>

                    {{-- Section --}}
                    <div class="col-md-6 mb-3">
                        <label>Section <sup class="text-danger">*</sup></label>
                        <select name="section_id" class="form-control" id="section_id">
                            <option checked>--Select a section--</option>
                        </select>
                    </div>
                </div>

                <div class="row col-12 d-flex justify-content-end">

                    <button class="btn btn-lg btn-primary text-white"><i class="fa fa-search px-1"></i>Search</button>
                </div>
            </form>

            {{-- form end --}}

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
                    </tr>
                </thead>
                <tbody id="DisablestudentData">

                </tbody>
            </table>

        </div>

    </div>

    {{-- // show Disable student Data --}}
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>


    {{-- Disable student search --}}
    <script>
        $(document).ready(function() {

            $('#search').submit(function(e) {
                e.preventDefault();

                $.ajax({
                    url: '/search/student',
                    method: 'POST',
                    data: $(this).serialize(),
                    dataType: 'json',
                    success: function(response) {
                        output = [];
                        x = response.success;
                        console.log(x);
                        for (i = 0; i < x.length; i++) {

                            var tr = $("<tr></tr>");
                            var td = $("<td>" + [i + 1] + "</td><td>" + x[i].admission_no +
                                "</td><td>" + x[i].roll_no + "</td><td>" + x[i].first_name + ' ' +
                                x[i].last_name + "</td><td>" + x[i].class.name + "("+ x[i].section.name +")" + "</td><td>" + x[i]
                                .parent + "</td><td>" + x[i].b_date + "</td><td>" + x[i].gender +
                                "</td><td>" + x[i].mobile + "</td><td class='badge rounded-pill bg-primary text-white'>" + x[i].status +
                                "</td><td value=" + x[i].id +
                                "></td>");

                            tr.append(td);
                            $("#DisablestudentData").append(tr);
                        }
                    },
                });
            });

        });
    </script>



    {{-- //section with class --}}
    <script>
        $(document).ready(function() {

            $(document).on('change', '#class_id', function() {
                var classId = $(this).val();
                // console.log(classId);
                $.ajax({
                    url: "/getSection/" + classId,
                    method: "GET",
                    dataType: "JSON",
                    success: function(data) {

                        var option = '';
                        option += '<option selected disabled>Select Section</option>';

                        for (const key in data) {
                            option += "<option value=" + data[key]['id'] + ">" + data[key][
                                'name'
                            ] + '</option>';
                        };
                        $('#section_id').empty().append(option);

                    },
                })
            })

        });
    </script>
@endsection
