@extends('dashboard.master')

@section('title')
    index Assign
@endsection

@section('body')

<div class="container py-5 ">
    <div class="row">    
        <div class="col-md-11 mt-5 bg-white mx-5 py-3">
            <div class="row d-flex justify-content-between">
                <h3 class="p-3">Home / Fees Assing / Index</h3>
                <a href="{{url('/assigns/create')}}"><button class="p-3 btn-primary "><strong>+Add Assign</strong></button></a>
            </div>
            <div class="row mt-3">
                <table class="table ">
                    <h4 class="text-center">All-Assign</h4>
                    <h3 id="msg"></h3>
                    <thead>
                        <tr>
                            <th>Sr No</th>
                            <th>Group</th>
                            <th>Class(Section)</th>
                            <th>Category</th>
                            <th>Gender</th>
                            <th>Student-List</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="assignData">
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

 
@endsection
