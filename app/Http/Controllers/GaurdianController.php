<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guardian;

class GaurdianController extends Controller
{
    public $response = [];

    public function gardianIndex()
    {
        return view('dashboard.gaurdians.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function gardianCreate()
    {
        return view('dashboard.gaurdians.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function gardianStore(Request $request)
    {


        $fatherImageName = time() . '_' . $request->file('fath_img')->getClientOriginalName();
        $fath_img = $request->file('fath_img')->move(public_path('uploads'), $fatherImageName);

        $motherImageName = time() . '_' . $request->file('mother_img')->getClientOriginalName();
        $mother_img = $request->file('mother_img')->move(public_path('uploads'), $motherImageName);

        $gaurdianImageName = time() . '_' . $request->file('guard_img')->getClientOriginalName();
        $guardian_img = $request->file('guard_img')->move(public_path('uploads'), $gaurdianImageName);


                $guardian = new Guardian();

                $guardian ->fath_name= $request->fath_name;
                $guardian ->fath_mobile = $request->fath_mobile;
                $guardian ->fath_prof = $request->fath_prof;
                $guardian ->fath_img = $fath_img;
                $guardian ->mother_name = $request->mother_name;
                $guardian ->mother_mobile = $request->mother_mobile;
                $guardian ->mother_prof = $request->mother_prof;
                $guardian ->mother_img =  $mother_img;
                $guardian ->guard_name = $request->guard_name;
                $guardian ->guard_mobile = $request->guard_mobile;
                $guardian ->guard_prof = $request->guard_prof;
                $guardian ->guard_img = $guardian_img;
                $guardian ->guard_email = $request->guard_email;
                $guardian ->guard_address = $request->guard_address;
                $guardian ->guard_rel = $request->guard_rel;
                $guardian ->guard_status = $request->guard_status;
                $guardian->save();



        $this->response['success'] = true;

        return $this->response;
    }

    /**
     * Display the specified resource.
     */
    public function gardianShow()
    {
        $guardian = Guardian::all();
        $response['success']=$guardian; 
        return response()->json($response);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function gardianEdit(string $id)
    {
        return view('dashboard.gaurdians.edit', [

            'guardians' => Guardian::find($id),
          
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function gardianUpdate(Request $request, string $id)
    {
       
        $fatherImageName = time() . '_' . $request->file('fath_img')->getClientOriginalName();
        $fath_img = $request->file('fath_img')->move(public_path('uploads'), $fatherImageName);

        $motherImageName = time() . '_' . $request->file('mother_img')->getClientOriginalName();
        $mother_img = $request->file('mother_img')->move(public_path('uploads'), $motherImageName);

        $gaurdianImageName = time() . '_' . $request->file('guard_img')->getClientOriginalName();
        $guardian_img = $request->file('guard_img')->move(public_path('uploads'), $gaurdianImageName);


                $guardian = Guardian::find($id);

                $guardian ->fath_name= $request->fath_name;
                $guardian ->fath_mobile = $request->fath_mobile;
                $guardian ->fath_prof = $request->fath_prof;
                $guardian ->fath_img = $fath_img;
                $guardian ->mother_name = $request->mother_name;
                $guardian ->mother_mobile = $request->mother_mobile;
                $guardian ->mother_prof = $request->mother_prof;
                $guardian ->mother_img =  $mother_img;
                $guardian ->guard_name = $request->guard_name;
                $guardian ->guard_mobile = $request->guard_mobile;
                $guardian ->guard_prof = $request->guard_prof;
                $guardian ->guard_img = $guardian_img;
                $guardian ->guard_email = $request->guard_email;
                $guardian ->guard_address = $request->guard_address;
                $guardian ->guard_rel = $request->guard_rel;
                $guardian ->guard_status = $request->guard_status;
                $guardian->save();



        $this->response['success'] = true;

        return $this->response;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function gardianDestroy(string $id)
    {
        $delete_gardian = Guardian::find($id);

        $delete_gardian->delete();

        $this->response['success'] = true;
        return $this->response;
    }
}
