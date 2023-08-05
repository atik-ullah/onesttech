@extends('dashboard.master')

@section('title')
    Collect
@endsection

@section('body')
<div class="container py-5 ">
    <div class="row">
        <div class="col-md-11 mt-5  mx-5 py-3">
            <div class="row d-flex justify-content-between">
                <h3 class="p-3">Home / Fees Collect / Search to see</h3>
               
            </div>

            <form action="" method="POST" id="searchCollect">
                @csrf
                <div class="row p-5 bg-white d-flex">
                    
                    <div class="col-md-2 mt-3">
                        <label for="" class="col-md-12">Class</label>
                        <select id="classAssign" class="js-example-basic-single col-md-12 form-control" name="class_id">
                                <option class="form-control">select Class</option>
                                @foreach ($classes as $class)  
                                    <option class="form-control" value="{{$class->id}}">{{$class->name}}</option>
                                @endforeach
                            </select>        
                    </div>

                    <div class="col-md-2 mt-3" >
                        <label for="" >Sections</label>
                        <select class="js-example-basic-single col-md-12 form-control" name="section_id" id="section">             
                            <option class="form-control">select Section</option>              
                        </select>        
                      
                    </div>
                   
                    <div class="col-md-2 mt-3">
                        <label for="" class="col-md-12" >Admission No</label>
                        <select class="js-example-basic-single col-md-12 form-control" name="admission_no">
                            
                            <option class="form-control" value="">enter admission_no</option>
                            @foreach ($students as $student)  
                                <option class="form-control" value="{{$student->admission_no}}">{{$student->admission_no}}</option>
                            @endforeach
                          
                        </select>
                    </div>     
                               
                    <div class="col-md-3 mt-3">
                        <label for="" class="col-md-12" >Student Name</label>
                        <input type="text" name="student_name" class="form-control" placeholder="Student_name..">
                    </div> 
                    <div class="col-md-3 mt-4">
                        <label for="" class="col-md-12" ></label>
                        <input type="submit" class="btn btn-primary" value="Search"> 
                    </div> 
                     

                </div>
            </form>

            <div class="row mt-3">
                <h2>Collect Student fees </h2>
                <div class="col-md-12 bg-white">
                   <table class="table border p-3 mt-3">
                    <thead>
                        <tr>
                            <th>Sr No <span class="text-danger">*</span></th>
                            <th>student name <span class="text-danger">*</span></th>
                            <th>Admission-No <span class="text-danger">*</span></th>
                            <th>Class(Section) <span class="text-danger">*</span></th>
                            <th>Gurdian Name <span class="text-danger">*</span></th>
                            <th>Mobile <span class="text-danger">*</span></th>
                            <th>Action <span class="text-danger">*</span></th>
                        </tr>
                    </thead>
                   
                    <tbody id="searchResults">
                       
                    </tbody>
                        
                   </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
