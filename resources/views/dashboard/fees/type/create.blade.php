@extends('dashboard.master')

@section('title')
    Create Types
@endsection

@section('body')
<div class="container py-5 ">
    <div class="row">    
        <div class="col-md-11 mt-5  mx-5 py-3">
            <div class="row d-flex justify-content-between">
                <h3 class="p-3">Home / Fees-Types / Create</h3>
                <a href="{{url('/types')}}"><button class="p-3 btn-primary"><strong>See Type</strong></button></a>
            </div>

            <form action="" method="POST" id="typeStore">
                @csrf
                <div class="row p-5 bg-white d-flex">
                    <div class="col-md-5">
                        <label for="" >Name</label>
                        <input type="text" class="form-control" name="name">
                        <span id="name_error" class="error"></span>
                    </div>
                    <div class="col-md-5">
                        <label for="" >Code</label>
                        <input type="text" class="form-control" name="code">
                        <span id="code_error" class="error"></span>

                    </div>

                    <div class="col-md-5" >
                        <label for="" >Description</label>
                        <textarea name="description"  class="form-control" cols="30" rows="10" id="summernote">
                        </textarea>
                        <span id="description_error" class="error"></span>
                    </div>
                   
                    <div class="col-md-5 mt-5 ">
                        <label for="" class="col-md-12 ">Status</label>
                        <select class="js-example-basic-single" class=" col-md-12 form-control" name="status">
                            <option class="form-control">select status</option>
                            <option class="form-control" value="1">Active</option>
                            <option class="form-control" value="0">InActive</option>
                            <span id="status_error" class="error"></span>
                      
                        </select>
                    </div>
                
                    <div class="col-md-12" >
                        <input type="submit" class="btn btn-primary" value="Add Type">    
                        </div>
                </div>
         </form>

        </div>
    </div>
</div>

@endsection
