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
                <a href="{{url('/masters')}}"><button class="p-3 btn-primary"><strong>See Master</strong></button></a>
                <a href="{{url('/masters/create')}}"><button class="p-3 btn-primary "><strong>+Add Master</strong></button></a>
         
            </div>
            <form action="" method="POST" id="assignStore">
                @csrf
                

                <div class="row p-5 bg-white d-flex">
                    <div class="col-md-3 mt-3">
                        <label for="" class="col-md-12" >Group Name</label>
                        <select class="js-example-basic-single col-md-12 form-control" name="group_id">
                            <option class="form-control">select fees group</option>
                            @foreach ($groups as $group)  
                                <option class="form-control" value="{{$group->id}}">{{$group->name}}</option>
                            @endforeach
                          
                        </select>
                        <span id="group_id_error" class="error"></span>
                    </div>

                    <div class="col-md-2 mt-3">
                        <label for="" class="col-md-12">Class</label>
                        <select id="classAssign" class="js-example-basic-single col-md-12 form-control" name="class_id">
                                <option class="form-control">select Class</option>
                                @foreach ($classes as $class)  
                                    <option class="form-control" value="{{$class->id}}">{{$class->name}}</option>
                                @endforeach
                            </select>        
                        <span id="type_id_error" class="error"></span>
                    </div>

                    <div class="col-md-2 mt-3" >
                        <label for="" >Sections</label>
                        <select class="js-example-basic-single col-md-12 form-control" name="section_id" id="section">
                           
                        </select>        
                        <span id="due_date_error" class="error"></span>
                    </div>
                   
                    <div class="col-md-2 mt-3" >
                        <label for="" >Gender</label>
                        <select class="js-example-basic-single col-md-12 form-control" name="gender">
                            <option class="form-control" >select Gender</option>
                            <option class="form-control" value="M">Male</option>
                            <option class="form-control" value="F">Female</option>
                            <option class="form-control" value="O">Other</option>
                        </select>
                        <span id="gender_error" class="error"></span>
                    </div>
                   
                    <div class="col-md-3 mt-3" >
                        <label for="" >Student Category</label>
                        <select class="js-example-basic-single col-md-12 form-control" name="category_id">
                            <option class="form-control">Select Category</option>
                            @foreach ($categories as $category)  
                                <option class="form-control" value="{{$category->id}}">{{$category->cat_name}}</option>
                            @endforeach
                        </select>        
                        <span id="due_date_error" class="error"></span>
                    </div>

                    <div class="col-md-4 mt-3 border bg-light">
                        <h2>fees Types</h2>
                        <div class="row">
                           <table class="table border">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th class="d-flex justify-content-between">
                                        <label for="\">All</label>
                                        <input class="form-check-input" type="checkbox" >
                                    </th>
                                    <th>Name</th>
                                    <th>Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($masters as $master)
                                <tr>
                                    <td></td>
                                    <td>
                                        <input class="form-check-input" type="checkbox" value="{{$master->id}}" >
                                    </td>
                                    <td>{{$master->type->name}}</td>
                                    <td>{{$master->amount}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                           </table>
                        </div>
                    </div>

                    <div class="col-md-8 mt-3 border ">
                        <h2>Student List</h2>
                        <div class="row">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th scope="col mx-auto" class="d-flex">
                                            <label for="\">All</label>
                                            <input class="form-check-input" type="checkbox" >
                                        </th>
                                        <th scope="col">Admission NO</th>
                                        <th scope="col">Student name</th>
                                        <th scope="col">Class (Section)</th>
                                        <th scope="col">Guardian name</th>
                                        <th scope="col">Mobile number</th>
                                    </tr>
                                </thead>
                                    <tbody id="studentData">
                                       @foreach($students as $student)
                                            <tr>
                                                <td>
                                                    <input class="form-check-input" type="checkbox" value="{{$student->id}}">
                                                </td>
                                                <td>{{$student->admission_no}}</td>
                                                <td>{{$student->first_name}} {{$student->last_name}}</td>
                                                <td>{{$student->class->name}} ( {{$student->section->name}} )</td>
                                                <td>{{$student->parent}}</td>
                                                <td>{{$student->mobile}}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                            </table>
                        </div>
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

      $('#fineAmount').val(fineAmount.toFixed(2));
    });
  });
  </script>

@endsection
