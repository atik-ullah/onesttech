<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use Illuminate\Http\Request;

class ClassesController extends Controller
{
    public $response = [];

    public function classIndex()
    {
        return view('dashboard.class.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function classCreate()
    {
        return view('dashboard.class.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function classStore(Request $request)
    {
        $class = new Classes();

        $class ->name= $request->name;
        $class ->status = $request->status;
        
        $class->save();

       $this->response['success'] = true;

       return $this->response;
    }

    /**
     * Display the specified resource.
     */
    public function classShow()
    {
        $class = Classes::all();
        $response['success']=$class; 
        return response()->json($response);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function classEdit(string $id)
    {
        return view('dashboard.class.edit', [

            'classes' => Classes::find($id),
          
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function classUpdate(Request $request, string $id)
    {
        $class = Classes::find($id);

        $class ->name= $request->name;
        $class ->status = $request->status;
        $class->save();
        $this->response['success'] = true;
        return $this->response;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function classDestroy(string $id)
    {
        $delete_class = Classes::find($id);
        $delete_class->delete();

        $this->response['success'] = true;
        return $this->response;
    }

    
}
