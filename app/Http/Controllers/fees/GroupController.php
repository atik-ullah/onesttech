<?php

namespace App\Http\Controllers\fees;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Group;

class GroupController extends Controller
{
    public function index(){
        return view('dashboard.fees.group.index');
    }
    public function create(){
        return view('dashboard.fees.group.create');
    }
    public function store(Request $request){
        
        return view('dashboard.fees.group.index');
    }
    public function show(){
        
        return view('dashboard.fees.group.index');
    }
    public function update(){

        return view('dashboard.fees.group.index');
    }
    public function delete(){
        
        return view('dashboard.fees.group.index');
    }

}
