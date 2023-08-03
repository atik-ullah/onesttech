@extends('dashboard.master')

@section('title')
    Create Shift
@endsection

@section('body')
    {{-- <div class="container"> --}}
    <div class="container py-5 ">
        <div class="row">
            <div class="col-md-11 mt-5 bg-white mx-5 py-3">
                <h3>Create Shift</h3>
                <form action="" method="POST" id="shift_insert">

                    @csrf

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name" id="name">
                        </div>

                        <div class="col-md-6 ">
                            <label>Status</label><br>
                            <input type="radio" value="1" name="status" checked> Active <br>
                            <input type="radio" value="0" name="status"> Inactive
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

            $('#shift_insert').submit(function(e) {
                e.preventDefault();

                // alert('hi');

                $.ajax({
                    url: "{{ route('shiftStore') }}",
                    method: "POST",
                    data: $(this).serialize(),
                    dataType: "json",
                    success: function(response) {
                        if (response.success == true) {
                            alert('Add Successfully');
                            $('#shift_insert')[0].reset();
                        }
                    }
                });
            });
        });
    </script>

@endsection
