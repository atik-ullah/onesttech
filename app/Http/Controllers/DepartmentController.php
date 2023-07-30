<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{

    public $department;

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
        Department::create([
            'department' => $request->dept_name,
            'status' => $request->status,
        ]);
        return redirect()->back();
    }
}
