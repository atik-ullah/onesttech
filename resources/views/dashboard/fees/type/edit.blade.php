@extends('dashboard.master')

@section('title')
    Edit Types
@endsection

@section('body')
<div class="container py-5 ">
    <div class="row">    
        <div class="col-md-11 mt-5  mx-5 py-3">
            <div class="row d-flex justify-content-between">
                <h3 class="p-3">Home / Fees-Types /Edit Types</h3>
                <a href="{{url('/groups/index')}}"><button class="p-3 btn-primary"><strong>See Group</strong></button></a>
            </div>

            <form action="" method="POST" id="updateType" type_id="{{$type->id}}">
                @csrf
                <div class="row p-5 bg-white d-flex">
                    <div class="col-md-5">
                        <label for="" >Name</label>
                        {{-- <input type="text" class="form-control" hidden group_id="{{$group->id}}"> --}}
                        <input type="text" class="form-control" name="name" value="{{$type->name}}">
                    </div>

                    <div class="col-md-5">
                        <label for="" >Code</label>
                        <input type="text" class="form-control" name="code" value="{{$type->code}}">
                    </div>
                   
                   
                    <div class="col-md-7" >
                        <label for="" >Description</label>
                        <textarea name="description"  class="form-control" cols="30" rows="10" id="summernote">{{$type->description }}</textarea>
                    </div>

                    <div class="col-md-5 mt-3">
                        <label for="" class="col-md-12">Status</label>

                        <select class="js-example-basic-single col-md-12 form-control" name="status">
                            <option value="{{$type->status}}">{{$type->status==1 ? 'Active' : 'Inactive' }}</option>
                            <option value="1">Active</option>
                            <option value="0">InActive</option>
                        </select>
                    </div>
                    <div class="col-md-12" >
                        <input type="submit" class="btn btn-primary" value="Update">
                    </div>
                </div>
         </form>

        </div>
    </div>
</div>

@endsection
