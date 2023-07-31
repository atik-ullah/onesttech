@extends('dashboard.master')

@section('title')
    Index Student
@endsection

@section('body')
    {{-- <div class="container"> --}}
    <div class="container py-5 ">
        <div class="row">
            <div class="col-md-11 mt-5 mx-5 py-3">
                <div class="">
                    <h4 class="bradecrumb-title mb-1">Student list</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">Home</a></li>
                        <li class="breadcrumb-item">Student list</li>
                    </ol>
                </div>

                <div class="row  bg-white">

                    <div class="col-md-2 my-3">
                        <h2>Filtering</h2>
                    </div>
                    <div class="col-md-3 my-3">
                        <select class="form-control">
                            <option value="0">Select class</option>

                        
                        </select>
                    </div>
                    <div class="col-md-3 my-3">
                        <select class="form-control">
                            <option value="0">Select section</option>
                        </select>
                    </div>
                    <div class="col-md-2 my-3">
                        <input class="form-control" type="text" placeholder="Enter Keyword">
                    </div>

                    <div class="col-md-2 my-3 d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary ">Submit</button>
                    </div>

                </div>

                <div class="row  bg-white mt-3">
                    <div class="col-12 mb-3 d-flex justify-content-between">
                        <label class="" style="font-size: 30px">Student list</label>
                        <button class="btn btn-primary px-3"><a href="{{route('create')}}" class="text-white"><i class="fa fa-plus pe-2"></i>Add</a></button>
                    </div>
                    <table class="table">


                        <thead>
                            <tr>
                                <th scope="col">SR No.</th>
                                <th scope="col">Admission NO</th>
                                <th scope="col">Roll NO</th>
                                <th scope="col">Student name</th>
                                <th scope="col">Class (Section)</th>
                                <th scope="col">Guardian name</th>
                                <th scope="col">Date of birth</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Mobile number</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
