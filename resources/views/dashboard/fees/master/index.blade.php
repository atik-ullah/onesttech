@extends('dashboard.master')

@section('title')
    index masters
@endsection

@section('body')

<div class="container py-5 ">
    <div class="row">    
        <div class="col-md-11 mt-5 bg-white mx-5 py-3">
            <div class="row d-flex justify-content-between">
                <h3 class="p-3">Fees masters</h3>
                <a href="{{url('/masters/create')}}"><button class="p-3 btn-primary "><strong>+Add Master</strong></button></a>
            </div>
            <div class="row mt-3">
                <table class="table ">
                    <h4 class="text-center">All-Master</h4>
                    <h3 id="msg"></h3>
                    <thead>
                        <tr>
                            <th>Sr No</th>
                            <th>Group</th>
                            <th>Type</th>
                            <th>Due-Date</th>
                            <th>Amount</th>
                            <th>fine-type</th>
                            <th>percentage</th>
                            <th>fine-amount</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="masterData">
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

 
@endsection
