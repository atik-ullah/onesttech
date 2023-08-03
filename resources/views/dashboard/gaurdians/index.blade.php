@extends('dashboard.master')

@section('title')
    Index Gaurdian
@endsection

@section('body')
    {{-- <div class="container"> --}}
    <div class="container py-5 ">
        <div class="row">
            <div class="col-md-11 mt-5 mx-5 py-3">
                <div class="row  bg-white">

                    <div class="col-md-2 my-3">
                        <h2>Filtering</h2>
                    </div>
                   
                   <div class="d-flex justify-content-end">
                    <div class="my-3">
                        <input class="form-control" type="text" placeholder="Enter Keyword">
                    </div>

                    <div class=" px-2 my-3 ">
                        <button type="submit" class="btn btn-primary ">Search</button>
                    </div>
                   </div>

                </div>

                <div class="row  bg-white mt-3">
                    <div class="col-12 mb-3 d-flex justify-content-between">
                        <label class="" style="font-size: 30px">Gaurdian list</label>
                        <button class="btn btn-primary px-3"><a href="{{ route('gardianCreate') }}" class="text-white"><i
                                    class="fa fa-plus pe-2"></i>Add</a></button>
                    </div>
                    <table class="table">


                        <thead>
                            <tr>
                                <th scope="col">SR No.</th>
                                <th scope="col">Name</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Email</th>
                                <th scope="col">Address</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody id="gardianData">


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    {{-- // show gardian Data --}}
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {

            // alert('jh');

            function showGaurdiantData() {
                $.ajax({
                    url: "/show/gardian",
                    dataType: "json",
                    method: "GET",
                    success: function(response) {

                        if (response) {
                            x = response.success;
                        }
                        for (i = 0; i < x.length; i++) {

                            tr = $("<tr></tr>");

                            var td = $("<td>" + [i + 1] + "</td><td>" + x[i].guard_name +
                                "</td><td>" + x[i].guard_mobile + "</td><td>" + x[i].guard_email + "</td><td>" + x[i]
                                .guard_address + "</td><td>" + x[i].guard_status +
                                "</td><td value=" + x[i].id +
                                "><button class='btn btn-primary' id='gardian_edit' gardian_id=" +
                                x[i].id +
                                ">Edit</button> <button class='btn btn-danger' id='gardian_delete'  gardian_id=" + x[i].id + ">Delete</button> </td>");

                            tr.append(td);
                            $("#gardianData").append(tr);
                        }
                    },
                })
            }
            showGaurdiantData();


              // edit gardian

              $('#gardianData').on('click', '#gardian_edit', function(e) {
                e.preventDefault();
                // alert('hi');
                let id = $(this).attr("gardian_id");
                window.location.href = "/edit/gardian/" + id;
            });

             //// Delete Gaurdian

             $('#gardianData').on('click', '#gardian_delete', function(e) {
                e.preventDefault();

                let id = $(this).attr("gardian_id");

                // console.log(id);

                $.ajax({
                    url: "/destroy/gardian/" + id,
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