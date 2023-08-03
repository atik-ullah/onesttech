<?php

namespace App\Http\Controllers;

use App\Models\Shift;
use Illuminate\Http\Request;

class ShiftController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function shiftIndex()
    {
        return view('dashboard.shift.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function shiftCreate()
    {
        return view('dashboard.shift.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function shiftStore(Request $request)
    {
        $shift = new Shift();
        $shift ->name= $request->name;
        $shift ->status = $request->status;        
        $shift->save();
        $this->response['success'] = true;
        return $this->response;
    }

    /**
     * Display the specified resource.
     */
    public function shiftShow()
    {
        $shift = Shift::all();
        $response['success']=$shift; 
        return response()->json($response);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function shiftEdit(string $id)
    {
        return view('dashboard.shift.edit', [

            'Shift' => Shift::find($id),
          
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function shiftUpdate(Request $request, string $id)
    {
        $shift = Shift::find($id);

        $shift ->name= $request->name;
        $shift ->status = $request->status;
        $shift->save();
        $this->response['success'] = true;
        return $this->response;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function shiftDestroy(string $id)
    {
        $delete_shift = Shift::find($id);
        $delete_shift->delete();

        $this->response['success'] = true;
        return $this->response;
    }
}
