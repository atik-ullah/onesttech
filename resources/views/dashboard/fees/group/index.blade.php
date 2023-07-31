@extends('dashboard.master')

@section('title')
    index Group
@endsection

@section('body')

<div class="container py-5 ">
    <div class="row">    
        <div class="col-md-11 mt-5 bg-white mx-5 py-3">
            <div class="row d-flex justify-content-between">
                <h3 class="p-3">Fees Group</h3>
                <a href="{{url('/groups/create')}}"><button class="p-3 btn-primary "><strong>+ Add</strong></button></a>
            </div>

            <form action="#" method="POST" id="student_insert">

                @csrf
            </form>
        </div>
    </div>
</div>

 
@endsection
