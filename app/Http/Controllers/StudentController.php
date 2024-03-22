<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Student; 
use App\Models\Nationality; 
use Illuminate\Support\Facades\Session;
use DataTables;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{

    public function index()
    {
        // fetch all student which are active and not soft deleted
        $students = Student::rightJoin('users', 'users.UserId', '=', 'students.UserId')
                ->where('students.Archived', 'NO')
                ->select('students.*', 'students.StudentId AS StudentIdNo', 'users.UserId as UserId', 'users.Fullname as Username')
                ->orderBy('students.AddedDate', 'desc')
                ->get();
        
        return view('student.list', compact('students'));
    } 


     public function create()
    {
       //display registration form with NATIONALITY and REGion 
         $national_id = DB::table('nationality')->get();
         $student_region = DB::table('region')->get();
         $student_religion = DB::table('religion')->get();

         return view('student.add', compact('national_id', 'student_region', 'student_religion'));
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'firstname' => 'required|min:3|max:100',
            'lastname' => 'required|min:3|max:100',
            'gender' => 'nullable |min:1',
            'nationality' => 'nullable|min:3|max:100',
            'birth_date' => 'nullable',
            'religion' => 'nullable|min:3|max:50',
            'address' => 'nullable|min:3|max:200',
            'region' => 'nullable|min:3|max:50',
            'last_known_school' => 'nullable|min:3|max:150',
            'last_known_class' => 'nullable|min:3|max:50',
            'user_id' => 'nullable|min:3|max:50',
            'transaction' => 'nullable',
            // 'section_id' => 'nullable|min:3|max:50',
            // 'prev_school' => 'nullable|min:3|max:50',
            // 'image' => 'nullable',
            // 'added_id' => 'nullable',
            // 'user_id' => 'nullable',
            
        ]);

        $existingPayer = Student::where('Firstname', $request->input('firstname'))
                          ->where('Lastname', strtoupper($request->input('lastname')))
                          ->where('DOB', strtoupper($request->input('dob')))
                          ->first();

        if ($existingPayer) {
            return redirect()->back()->withErrors(['error' => 'Student with the same details already exists.']);
        }
        
        $id_generated = $this->generateStudentId($request);         

        $payer_details = new Student();
        $payer_details->StudentId = $id_generated;
        $payer_details->Firstname = strtoupper($request->input('firstname'));
        $payer_details->Lastname = strtoupper($request->input('lastname'));
        $payer_details->Gender = $request->input('gender');
        $payer_details->NationalityId = $request->input('nationality');
        $payer_details->DOB = $request->input('birth_date');
        $payer_details->ReligionId = $request->input('religion');
        $payer_details->Address = $request->input('address');
        $payer_details->RegionId = $request->input('region');
        $payer_details->PreviousSchool = strtoupper($request->input('last_known_school'));
        $payer_details->PreviousClass = strtoupper($request->input('last_known_class'));
        // $payer_details->Image = strtoupper($request->input('image'));
        $payer_details->AddedId = $request->input('user_id');
        $payer_details->UserId = strtoupper($request->input('user_id'));
        $payer_details->save();
        
        return response()->json(['success' => true, 'id_generated' => $id_generated], 200);
    }

    private function generateStudentId(Request $request)
    {
        // Retrieve the count of existing taxpayers
        $count_payers = Student::count();
        // Extract the initials from the surname and firstname
        $surname_initial = strtoupper(substr($request->input('firstname'), 0, 1));
        $firstname_initial = strtoupper(substr($request->input('lastname'), 0, 1));
        $count_plus_one = $count_payers + 1;
        $currentHour = date('H');
        $currentDay = date('d');
        $currentMonth = date('m');
        $currentYear = date('Y');
        $desiredLength = 4;
        $formatted_id = str_pad($count_plus_one, $desiredLength, '0', STR_PAD_LEFT);
        $id_generated = $surname_initial.$formatted_id.$firstname_initial.$currentHour.$currentDay.$currentMonth.$currentYear;
        return $id_generated;
    }
}
