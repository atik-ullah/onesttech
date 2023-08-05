@extends('dashboard.master')

@section('title')
    Edit Class
@endsection

@section('body')
    {{-- <div class="container"> --}}
    <div class="container py-5 ">
        <div class="row">
            <div class="col-md-11 mt-5 bg-white mx-5 py-3">
                <h3>edit Class</h3>
                <form action="" method="POST" id="class_update" class_id="{{ $classes->id }}">

                    @csrf

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name" id="name"
                                value="{{ $classes->name }}">
                        </div>

                        <div class="col-md-6 ">
                            <label>Status</label><br>
                            <input type="radio" value="1" {{ $classes->status == 1 ? 'checked' : '' }} name="status">
                            Active <br>
                            <input type="radio" value="0" {{ $classes->status == 0 ? 'checked' : '' }} name="status">
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

            $('#class_update').submit(function(e) {
                e.preventDefault();
                let id = $(this).attr("class_id");
                // alert('hi');

                $.ajax({
                    url: "/update/class/" + id,
                    method: "POST",
                    data: $(this).serialize(),
                    dataType: "json",
                    success: function(response) {

                        if (response.success == true) {
                            alert('Update Successfully');
                            window.location.href ='/index/class';
                        } else {
                            window.location.href = "/edit/class/" + id;
                        }
                    },
                });
            });
        });
    </script>
@endsection
