@extends('dashboard.master')

@section('title')
    Index Section
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
                        <label class="" style="font-size: 30px">Section</label>
                        <button class="btn btn-primary px-3"><a href="{{route('sectionCreate')}}" class="text-white"><i
                                    class="fa fa-plus pe-2"></i>Add</a></button>
                    </div>
                    <table class="table">


                        <thead>
                            <tr>
                                <th scope="col">SR No.</th>
                                <th scope="col">Section</th>
                                <th scope="col">Class</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody id="sectionData">


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

 {{-- // show Section Data --}}
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
    integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {

        // alert('jh');

        function showSectionData() {
            $.ajax({
                url: "/show/section",
                dataType: "json",
                method: "GET",
                success: function(response) {

                    if (response) {
                        x = response.success;
                    }
                    for (i = 0; i < x.length; i++) {

                        tr = $("<tr></tr>");

                        var td = $("<td>" + [i + 1] + "</td><td>" + x[i].name + "</td><td>" + x[i].class.name +
                            "</td><td>"+ x[i].status +
                            "</td><td value=" + x[i].id +
                            "><button class='btn btn-primary' id='section_edit' section_id=" +
                            x[i].id +
                            ">Edit</button> <button class='btn btn-danger' id='section_delete'  section_id=" + x[i].id + ">Delete</button> </td>");

                        tr.append(td);
                        $("#sectionData").append(tr);
                    }
                },
            })
        }
        showSectionData();

          //edit Section

          $('#sectionData').on('click', '#section_edit', function(e) {
            e.preventDefault();
            // alert('hi');
            let id = $(this).attr("section_id");
            window.location.href = "/edit/section/" + id;
        });

         //// Delete Section

         $('#sectionData').on('click', '#section_delete', function(e) {
            e.preventDefault();

            let id = $(this).attr("section_id");

            console.log(id);

            $.ajax({
                url: "/destroy/section/" + id,
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