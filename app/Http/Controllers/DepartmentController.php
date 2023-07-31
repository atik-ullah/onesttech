<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{

    public $response = [];

    // Show Department Details
    public function showDept()
    {
        return view('dashboard.staff.department');
    }

    // Create Department Details
    public function createDeptForm()
    {
        return view('dashboard.staff.create_dept');
    }

    // Create Department Details
    public function createDept(Request $request)
    {
        // $data = Department::create([
        //     'department' => $request->dept_name,
        //     'status' => $request->status,
        // ]);

        $data = new Department();
        $data->department = $request->dept_name;
        $data->status = $request->status;

        $data->save();

        if($data) {
            
        }

        return response()->json(['data' => $data]);
    }
}
