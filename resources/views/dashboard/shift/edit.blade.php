@extends('dashboard.master')

@section('title')
    Edit shift
@endsection

@section('body')
    {{-- <div class="container"> --}}
    <div class="container py-5 ">
        <div class="row">
            <div class="col-md-11 mt-5 bg-white mx-5 py-3">
                <h3>Edit shift</h3>
                <form action="" method="POST" id="shift_update" shift_id="{{ $Shift->id }}">

                    @csrf

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Name</label>
                            <input type="text" class="form-control"
                             name="name" id="name" value="{{ $Shift->name}}">
                        </div>

                        <div class="col-md-6 ">
                            <label>Status</label><br>
                            <input type="radio" value="1" {{ $Shift->status == 1 ? 'checked' : '' }} name="status">
                            Active <br>
                            <input type="radio" value="0" {{ $Shift->status == 0 ? 'checked' : '' }} name="status">
                            Inactive
                        </div>
                    </div>    

                    <div class="col-12">
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
    
                $('#shift_update').submit(function(e) {
                    e.preventDefault();
                    let id = $(this).attr("shift_id");
                    // alert('hi');
    
                    $.ajax({
                        url: "/update/shift/" + id,
                        method: "POST",
                        data: $(this).serialize(),
                        dataType: "json",
                        success: function(response) {
    
                            if (response.success == true) {
                                alert('Update Successfully');
                                window.location.href ='/index/shift';
                            } else {
                                window.location.href ="/edit/shift/" + id;
                            }
                        },
                    });
                });
            });
        </script>

@endsection
