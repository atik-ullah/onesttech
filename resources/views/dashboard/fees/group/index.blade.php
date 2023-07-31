@extends('dashboard.master')

@section('title')
    index Group
@endsection

@section('body')
    <section class="py-5">
    <div class="container  ">
        <div class="row ">
            <div class="col-md-10 mt-5 bg-white">
                <div class="row d-flex justify-content-between">
                    <h3>Fees Group</h3>
                    <a href="{{url('/groups/create')}}"><button class="">+ Add</button></a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
