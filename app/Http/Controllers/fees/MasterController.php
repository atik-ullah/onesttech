<?php

namespace App\Http\Controllers\fees;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Master;
use App\Models\Group;
use App\Models\Type;
use Illuminate\Support\Facades\Validator;

class MasterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.fees.master.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.fees.master.create', [
            'groups' => Group::all(),
            'types' => Type::all(),
           
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $validator = Validator::make($request->all(),[
            'group_id' => 'required|string|max:255',
            'type_id' => 'required|string|max:32',
            'amount' => 'required|min:3|max:8|',
            'fine_type' => 'required|min:3|max:25',
            'fine_amount' => 'required|min:2|max:255',
        ]);

        if ($validator->passes()) {
            $master = new Master();
            $master->group_id = $request['group_id'];
            $master->type_id = $request['type_id'];
            $master->due_date = $request['due_date'];
            $master->amount = $request['amount'];
            $master->fine_type = $request['fine_type'];
            $master->percentage = $request['percentage'];
            $master->fine_amount = $request['fine_amount'];
            $master->status = $request['status'];
            $master->save();
            $data['success'] = true;
            return $data;
        } else {           
            $errors = $validator->errors();
           
            $data['errors']=$errors; 
            return json_encode($data);
            // print_r($p);
            // die();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {  
        $master = Master::with('group','type')->get();

        return response()->json(['success' => $master]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('dashboard.fees.master.edit',[
            'master'=> Master::find($id),
            'groups' => Group::all(),
            'types' => Type::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'group_id' => 'required|string|max:255',
            'type_id' => 'required|string|max:32',
            'amount' => 'required|min:3|max:8|',
            'fine_type' => 'required|min:3|max:25',
        ]);

        if ($validator->passes()) {
            $master = Master::find($id);
            $master->group_id = $request['group_id'];
            $master->type_id = $request['type_id'];
            $master->due_date = $request['due_date'];
            $master->amount = $request['amount'];
            $master->fine_type = $request['fine_type'];
            $master->percentage = $request['percentage'];
            $master->fine_amount = $request['fine_amount'];
            $master->status = $request['status'];
            $master->save();
            $data['success'] = true;
            return $data;
        } else {           
            $errors = $validator->errors();
           
            $data['errors']=$errors; 
            return json_encode($data);
           
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $master= Master::find($id);
        if($master){
            $master->delete();
            return $data['success']=true;
        }        
        else{
            return $data['success']=false;
            }
    }
}