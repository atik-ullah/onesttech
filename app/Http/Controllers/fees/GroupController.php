<?php

namespace App\Http\Controllers\fees;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Group;
use Illuminate\Support\Facades\Validator;


class GroupController extends Controller
{
    public function index(){
        return view('dashboard.fees.group.index');
    }
    public function create(){
        return view('dashboard.fees.group.create');
    }
    public function store(Request $request){

        $validator = Validator::make($request->all(),[
            'name' => 'required|string|max:255',
            'description' => 'required|min:11|max:255|',
        ]);

        if ($validator->passes()) {
            $group = new Group();
        $group->name = $request['name'];
        $group->description = $request['description'];
        $group->status = $request['status'];
        $group->save();
        $data['success']=true;
        return $data;
           
        } else {           
            $errors = $validator->errors();
           
            $data['errors']=$errors; 
            return json_encode($data);
           
        }        
    }
    public function show(){
        $group = Group::all();
        $data['success']=$group; 
        return response()->json($data);
    }
    public function edit($id){
         return view('dashboard.fees.group.edit',[
            'group' => Group::find($id),
        ]);
    }
    public function update(Request $request, $id){

        $group = Group::find($id);
        // print_r($group->toArray());
        // die();
        if($group){
            $group->name = $request['name'];
            $group->description = $request['description'];
            $group->status = $request['status'];
            $group->save();
            $data['success']=true;
            return $data;
        }else{
            $data['success']=false;
            return $data;
        }
      
    }
    public function delete($id){
        $group = Group::find($id);
        if($group){
            $group->delete();
            return $data['success']=true;
        }        
        else{
            return $data['success']=false;
            }
    }

}
