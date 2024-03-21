<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Classes; 
// use App\Models\Nationality; 
use Illuminate\Support\Facades\Session;
use DataTables;
use Illuminate\Support\Facades\Hash;

class ClassController extends Controller
{

    public function index()
    {
        // fetch all student which are active and not soft deleted
        $classes = Classes::select('class.*')
                ->orderBy('class.AddedDate', 'desc')
                ->get();
        
        return view('class.list', compact('classes'));
    } 


     public function create()
    {
       //display registration form with NATIONALITY and REGion 
         $national_id = DB::table('nationality')->get();
         $student_region = DB::table('region')->get();
         $student_religion = DB::table('religion')->get();

         return view('class.add', compact('national_id', 'student_region', 'student_religion'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'classname' => 'required|min:3|max:50',
            'numberofsubjects' => 'required|min:3|max:50',
            'added_id' => 'nullable',
            'user_id' => 'nullable',
        ]);

        $existingPayer = Classes::where('ClassName', $request->input('classname'))
                          ->first();

        if ($existingPayer) {
            return redirect()->back()->withErrors(['error' => 'Class with the same details already exists.']);
        }
        // Retrieve the count of existing taxpayers
        $count_payers = Student::count();
        // Extract the initials from the surname and firstname
        $surname_initial = strtoupper(substr($request->input('firstname'), 0, 1));
        $firstname_initial = strtoupper(substr($request->input('lastname'), 0, 1));
        $count_plus_one = $count_payers + 1;
        // $currentMinute = date('i');
        // $currentSecond = date('s');
        $currentHour = date('H');
        $currentDay = date('d');
        $currentMonth = date('m');
        $currentYear = date('Y');
        $desiredLength = 4;
        $formatted_id = str_pad($count_plus_one, $desiredLength, '0', STR_PAD_LEFT);
        $id_generated = $surname_initial.$formatted_id.$firstname_initial.$currentHour.$currentDay.$currentMonth.$currentYear;

        $payer_details = new Student();
        $payer_details->StudentId = $id_generated;
        $payer_details->Firstname = strtoupper($request->input('firstname'));
        $payer_details->Lastname = strtoupper($request->input('lastname'));
        $payer_details->Gender = $request->input('gender');
        $payer_details->NationalityId = $request->input('national_id');
        $payer_details->Address = $request->input('address');
        $payer_details->DOB = $request->input('dob');
        $payer_details->PortfolioId = $request->input('portfolio_id');
        $payer_details->ReligionId = $request->input('religion_id');
        $payer_details->RegionId = $request->input('region_id');
        $payer_details->DateJoined = $request->input('date_joined');
        $payer_details->DenominationId = $request->input('denomination_id');
        // $payer_details->Transaction = $request->input('longitude');
        $payer_details->SectionId = $request->input('section_id');
        $payer_details->PrevSchool = strtoupper($request->input('prev_school'));
        $payer_details->Image = strtoupper($request->input('image'));
        $payer_details->AddedId = $request->input('added_id');
        $payer_details->UserId = strtoupper($request->input('user_id'));
        $payer_details->save();
        
        return redirect()->back()->with('success', $id_generated);
    }
}
