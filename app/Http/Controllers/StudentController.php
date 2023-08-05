<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Classes;
use App\Models\Section;
use App\Models\Shift;
use App\Models\Guardian;

class StudentController extends Controller
{
    public $response = [];

    public function index()
    {
        return view('dashboard.student_info.students.index',
        [
            'classes'  => Classes::all(),
            'shifts' => Shift::all(),
            'guardians' => Guardian::all(),
            'sections' => Section::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.student_info.students.create',
        [
            'classes'  => Classes::all(),
            'shifts' => Shift::all(),
            'guardians' => Guardian::all(),
            'sections' => Section::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(),[
                'admission_no' => 'required',
                'roll_no' => 'required',
                'first_name' => 'required|string|max:11|',
                'last_name' => 'required|string|max:11|',
                'mobile' => 'required|max:3|',
                'email' => 'required|email',
                'image' => 'required',
        ]);


        if ($validator->passes()) {
            $student = new Student();
            $student ->admission_no= $request->admission_no;
            $student ->roll_no = $request->roll_no;
            $student ->first_name = $request->first_name;
            $student ->last_name = $request->last_name;
            $student ->mobile = $request->mobile;
            $student ->email = $request->email;
            $student ->class_id = $request->class_id;
            $student ->section_id = $request->section_id;
            $student ->shift_id = $request->shift_id;
            $student ->b_date = $request->b_date;
            $student ->religion = $request->religion;
            $student ->gender = $request->gender;
            $student ->category_id = $request->category_id;
            $student ->blood = $request->blood;
            $student ->admission_date = $request->admission_date;
            $student ->image = self::uploadFile($request->file('image'), 'student', isset($id) ? Student::find($id)->image : null);
            $student ->parent = $request->parent;
            $student ->status = $request->status;
            $student->save();

            $this->response['success'] = true;
            return $this->response;
        } else {           
            $errors = $validator->errors();
           
            $response['errors']=$errors; 
            return json_encode($response);

        }
       
   
    }

    public static function uploadFile ($fileObject, $directory, $existFileUrl = null)
    {
        if ($fileObject)
        {
            if ($existFileUrl)
            {
                if (file_exists($existFileUrl))
                {
                    unlink($existFileUrl);
                }
            }
            $fileName = time().rand(10, 1000).$fileObject->getClientOriginalName();
            $fileDirectory = 'admin/assets/images/upload-images/'.$directory.'/';
            $fileObject->move($fileDirectory, $fileName);
            $fileUrl = $fileDirectory.$fileName;
        } else {
            if ($existFileUrl)
            {
                $fileUrl = $existFileUrl;
            } else {
                $fileUrl = null;
            }
        }
        return $fileUrl;
    }



    public function show()
    {
        // $section  = Section::where('class_id', $id);
        $student = Student::with('class','section')->get();
        $response['success']=$student; 
        return response()->json($response);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('dashboard.student_info.students.edit', [
            "student" => Student::find($id),
            'classes'  => Classes::all(),
            'shifts' => Shift::all(),
            'guardians' => Guardian::all(),
            'sections' => Section::all(),
            
        ]);
    }

   
    public function update(Request $request, string $id)
    {
       
        $student =Student::find($id);

        $student ->admission_no= $request->admission_no;
        $student ->roll_no = $request->roll_no;
        $student ->first_name = $request->first_name;
        $student ->last_name = $request->last_name;
        $student ->mobile = $request->mobile;
        $student ->email = $request->email;
        $student ->class_id = $request->class_id;
        $student ->section_id = $request->section_id;
        $student ->shift_id = $request->shift_id;
        $student ->b_date = $request->b_date;
        $student ->religion = $request->religion;
        $student ->gender = $request->gender;
        $student ->category_id = $request->category_id;
        $student ->blood = $request->blood;
        $student ->admission_date = $request->admission_date;
        $student ->image = self::uploadFile($request->file('image'), 'student', isset($id) ? Student::find($id)->image : null);
        $student ->parent = $request->parent;
        $student ->status = $request->status;
        $student->save();

       $this->response['success'] = true;
       return $this->response;
    }

    

   

    public function destroy(string $id)
    {
        $delete_student = Student::find($id);

        $delete_student->delete();

        $this->response['success'] = true;
        return $this->response;
    }


    public function StudentCategory()
    {
        return view('dashboard.student_info.students.StudentCategory');
    }

    public function disable()
    {
        return view('dashboard.student_info.students.disable',[
            'classes'  => Classes::all(),
            'sections' => Section::all(),
        ]);
    }

    //class with section
   public function section($id)
   {
    $sectionAll = Section::where('class_id', $id)->get();
    $abc =$sectionAll->toArray();
    return $abc;
   }

   //disabled student search
   public function search(Request $request){

    $student = Student::where('class_id', $request->class_id)
    ->orWhere('section_id', $request->section_id)->get();

    return response()->json(['success' => $student]);

   }

}
