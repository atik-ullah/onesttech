@extends('dashboard.master')

@section('title')
    index type
@endsection

@section('body')

<div class="container py-5 ">
    <div class="row">    
        <div class="col-md-11 mt-5 bg-white mx-5 py-3">
            <div class="row d-flex justify-content-between">
                <h3 class="p-3">Fees type</h3>
                <a href="{{url('/types/create')}}"><button class="p-3 btn-primary "><strong>+Add Type</strong></button></a>
            </div>
            <div class="row mt-3">
                <table class="table">
                    <h4 class="text-center">All-Types</h4>
                    <thead>
                        <th>Sr No</th>
                        <th>Type</th>
                        <th>Code</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Action</th>
                    </thead>
                    <tbody id="typeData">

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

 
@endsection
