<?php

namespace App\Http\Controllers\fees;

use App\Http\Controllers\Controller;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.fees.type.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.fees.type.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(),[
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:32',
            'description' => 'required|min:11|max:255|',
          ]);

        if ($validator->passes()) {
            $type = new Type();
            $type->name = $request['name'];
            $type->code = $request['code'];
            $type->description = $request['description'];
            $type->status = $request['status'];
            $type->save();
            $data['success'] = true;
            return $data;
           }
            else {           
            $errors = $validator->errors();
           
            $data['errors']=$errors; 
            return json_encode($data);
           
        }
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $type = Type::all();
        return response()->json(['success' => $type]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('dashboard.fees.type.edit', [
            "type" => Type::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // print_r($id);
        // die();


        $type = Type::find($id);

        if ($type) {
            $type->name = $request['name'];
            $type->code = $request['code'];
            $type->description = $request['description'];
            $type->status = $request['status'];
            $type->save();
            $data['success'] = true;
            return $data;
        } else {
            $data['success'] = false;
            return $data;
        }
    }

    public function restore(Request $request, $id)
    {
        $type = Type::find($id);
        if ($type) {
            $type->name = $request['name'];
            $type->code = $request['code'];
            $type->description = $request['description'];
            $type->status = $request['status'];
            $type->save();
            $data['success'] = true;
            return $data;
        } else {
            $data['success'] = false;
            return $data;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        // $type = Type::find($id);
        // if($type){
        //     $type->delete();
        //     return $data['success']=true;
        // }        
        // else{
        //     return $data['success']=false;
        //     }
    }
    public function delete( $id)
    {
        $type = Type::find($id);
            $type->delete();
            return response()->json(['success' => true]);
    }
}