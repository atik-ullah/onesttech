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
                <a href="{{url('/masters')}}"><button class="p-3 btn-primary"><strong>See Master</strong></button></a>
            </div>

            {{-- <p class="text-center" id="error"></p> --}}
            <form action="" method="POST" id="masterStore">
                @csrf
                

                <div class="row p-5 bg-white d-flex">
                    <div class="col-md-5">
                        <label for="" class="col-md-12" >Fees Group Name</label>
                        <select class="js-example-basic-single col-md-12 form-control" name="group_id">
                            <option class="form-control">select fees group</option>
                            @foreach ($groups as $group)  
                                <option class="form-control" value="{{$group->id}}">{{$group->name}}</option>
                            @endforeach
                          
                        </select>
                        <span id="group_id_error" class="error"></span>
                    </div>
                    <div class="col-md-5">
                        <label for="" class="col-md-12">Fees Type</label>
                        <select class="js-example-basic-single col-md-12 form-control"      name="type_id">
                                <option class="form-control">select fees type</option>
                                @foreach ($types as $type)  
                                    <option class="form-control" value="{{$type->id}}">{{$type->name}}</option>
                                @endforeach
                            </select>
                            
                        <span id="type_id_error" class="error"></span>
                    </div>

                    <div class="text-danger" id="errorAll">
                       
                      </div>
                    <div class="col-md-5 mt-3" >
                        <label for="" >Due Date</label>
                      <input type="date" class="form-control" name="due_date" >
                    
                      <span id="due_date_error" class="error"></span>
                    </div>
                   

                    <div class="col-md-5 mt-3" >
                        <label for="" >Amount</label>
                      <input type="number" name="amount" id="amount" min="0" class="form-control">
                      <span id="amount_error" class="error"></span>
                    </div>
                   
                    <div class="col-md-5 mt-3">
                         <label for="" class="col-md-12 ">Fine type</label>                              
                            <select class=" col-md-12 form-control" id="selectPercentage" name="fine_type" >
                                <option class="form-control" value="option1">select a fine type</option>
                                <option class="form-control" value="option2">Fix Amount 2</option>
                                <option class="form-control" value="option3">Percentage</option>
                              </select>

                              <span id="fine_type_error" class="error"></span>
                    </div>
                    <div class="col-md-5 mt-3 ">
                        <label for="" class="col-md-12 ">Status</label>
                        <select class="js-example-basic-single col-md-12 form-control" name="status">
                            <option class="form-control">select status</option>
                            <option class="form-control" value="1">Active</option>
                            <option class="form-control" value="0">InActive</option>
                        </select>

                        <span id="status_error" class="error"></span>
                    </div>
            
                    <div class="col-md-5 mt-3" id="inputShow" style="display: none;">
                        <label  id="inputShow" for="inputField">percentage</label>
                        <input type="text" id="percentage" min="0" name="percentage" class="col-md-12 form-control">
                    </div>
                    
                    <div class="col-md-5 mt-3" id="inputAmount" style="display: none;">
                        <label for="inputField">Fine Amount</label>
                        <input type="text" id="fineAmount" min="0"  name="fine_amount" class="col-md-12 form-control">

                        <span id="fine_amount_error" class="error"></span>
                    </div>

                    <div class="col-md-12 mt-3" >
                        <input type="submit" class="btn btn-primary mx-auto" value="Add Type">    
                     </div>
                </div>
         </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var selectPercentage = document.getElementById('selectPercentage');
        var inputShow = document.getElementById('inputShow');
        var inputAmount = document.getElementById('inputAmount');
        selectPercentage.addEventListener('change', function() {
        if(selectPercentage.value ==='option1') {
            inputShow.style.display = 'none';
            inputAmount.style.display = 'none';
        }else if(selectPercentage.value ==='option2') {
            inputAmount.style.display = 'block';
            inputShow.style.display = 'none';
        }else {
            inputShow.style.display = 'block';
            inputAmount.style.display = 'block';
        }
        });
    });

    $(document).ready(function() {
    $('#amount, #percentage').on('input', function() {
      var amount = parseFloat($('#amount').val());
      var percentage = parseFloat($('#percentage').val());
      var fineAmount = amount * (percentage / 100);

      $('#fineAmount').val(fineAmount.toFixed(2)); // Display fine amount with 2 decimal places
    });
  });
  </script>

@endsection
