@extends('dashboard.master')

@section('title')
    Create Group
@endsection

@section('body')
<div class="container py-5 ">
    <div class="row">    
        <div class="col-md-11 mt-5  mx-5 py-3">
            <div class="row d-flex justify-content-between">
                <h3 class="p-3">Home / Fees-Group / Create</h3>
                <a href="{{url('/groups/index')}}"><button class="p-3 btn-primary"><strong>See Group</strong></button></a>
            </div>

            <form action="" method="POST" id="groupStore">
                @csrf
                <div class="row p-5 bg-white d-flex">
                    <div class="col-md-5">
                        <label for="" >Name</label>
                        <input type="text" class="form-control" name="name">
                        <span id="name_error" class="error"></span>
                    </div>

                   
                    <div class="col-md-5">
                        <label for="" class="col-md-12">Status</label>
                        <select class="js-example-basic-single " name="status">
                            <option >select status</option>
                           <option value="1">Active</option>
                            <option value="0">InActive</option>
                        </select>
                        <span id="status_error" class="error"></span>
                    </div>
                    <div class="col-md-12" >
                        <label for="" >Description</label>
                        <textarea name="description"  class="form-control" cols="30" rows="10" id="summernote"></textarea>
                        <span id="description_error" class="error"></span>
                    </div>
                    <div class="col-md-12" >
                        <input type="submit" class="btn btn-primary" value="create">    
                       </div>
                </div>
         </form>

        </div>
    </div>
</div>

@endsection
