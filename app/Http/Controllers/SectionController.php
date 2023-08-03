<?php

namespace App\Http\Controllers;
use App\Models\Classes;
use App\Models\Student;
use App\Models\Section;

use Illuminate\Http\Request;

class SectionController extends Controller
{
    public $response = [];

    public function sectionIndex()
    {
        return view('dashboard.section.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function sectionCreate()
    {
        return view('dashboard.section.create',
    [
        'classes'  => Classes::all(),
    ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function sectionStore(Request $request)
    {
        $section = new Section();
        $section ->name= $request->name;
        $section ->class_id= $request->class_id;
        $section ->status = $request->status;        
        $section->save();
        $this->response['success'] = true;
        return $this->response;
    }

    /**
     * Display the specified resource.
     */
    public function sectionShow()
    {

        $section = Section::with('class')->get();
            $response['success']=$section; 
        return response()->json($response);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function sectionEdit(string $id)
    {
        return view('dashboard.section.edit', [

            'section' => Section::find($id),
            'classes'  => Classes::all(),
          
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function sectionUpdate(Request $request, string $id)
    {
        $section = Section::find($id);
        $section ->name= $request->name;
        $section ->class_id= $request->class_id;
        $section ->status = $request->status;        
        $section->save();
        $this->response['success'] = true;
        return $this->response;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function sectionDestroy(string $id)
    {
        $delete_section = Section::find($id);
        $delete_section->delete();

        $this->response['success'] = true;
        return $this->response;
    }

//class with section
   public function section($id)
   {
    $sectionAll = Section::where('class_id', $id)->get();
    $abc =$sectionAll->toArray();
    return $abc;
   }


}
