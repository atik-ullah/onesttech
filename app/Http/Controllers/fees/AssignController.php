<?php

namespace App\Http\Controllers\fees;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Classes;
use App\Models\Section;
use App\Models\Group;
use App\Models\Assign;
use App\Models\Master;
use App\Models\Student;
use Illuminate\Http\Request;

class AssignController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.fees.assign.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.fees.assign.create',[
            'groups' => Group::all(),
            'classes' => Classes::all(),
            'sections' => Section::all(),
            'categories' => Category::all(),
            'masters' => Master::with('type')->get(),
            'students' => Student::with('type')->get(),
            
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $master = Assign::with('group','class','section','category')->get();

        return response()->json(['success' => $master]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('dashboard.fees.assign.edit',[
            'assign'=>Assign::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function section( $id)
    {
        $abc = Section::where('class_id', $id)->get();
        // $abc =$sectionAll->toArray();
        // return response()->json(['success' => true, 'section' => $sectionAll]);
  
        return $abc;
    }


    public function collect()
    {
        
        // $searchQuery = $request->input('searchQuery');
        // $results = Student::where('class_id', 'LIKE', '%' . $searchQuery . '%')
        // ->orWhere('section_id', 'LIKE', '%' . $searchQuery . '%')
        // ->orWhere('admission_no', 'LIKE', '%' . $searchQuery . '%')
        // ->orWhere('first_name', 'LIKE', '%' . $searchQuery . '%')
        // ->orWhere('last_name', 'LIKE', '%' . $searchQuery . '%')
        // ->get();
        // $results = Student::where('class_id', 'LIKE', '%' . $request->class_id . '%')
        // ->orWhere('section_id', 'LIKE', '%' . $request->section_id . '%')
        // ->orWhere('admission_no', 'LIKE', '%' . $request->admission_no . '%')
        // ->orWhere('first_name', 'LIKE', '%' . $request->first_name. '%')
        // ->orWhere('last_name', 'LIKE', '%' .$request->last_name . '%')
        // ->get();
        return view('dashboard.fees.collect.index',[
           'classes' => Classes::all(),
            'sections' => Section::all(),
            'students' => Student::all(),
        ]);
    }
    public function searchCollect(Request $request)
    {

        $results = Student::where('class_id', $request->class_id)
                      ->orWhere('section_id', $request->section_id )
                      ->orWhere('admission_no', $request->admission_no)
                      ->orWhere('first_name', $request->first_name)
                      ->orWhere('last_name', $request->last_name)
                      ->get();

       return response()->json(['success' => $results]);
  
    }
}


