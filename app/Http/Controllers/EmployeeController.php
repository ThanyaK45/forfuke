<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;
use Inertia\Inertia;
 
class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // ได้ข้อมูลแถวแรก 1 record
        // $emp = DB::table('employees')->first();
        // ได้ข้อมูล 50 record
        $emp = DB::table('employees')
        ->take(300)
        ->get(['emp_no', 'first_name', 'last_name']);

        $dept = DB::table('departments')
        ->orderBy('dept_name','asc')
        ->get(['dept_name']);

        $male = DB::table('employees')
        ->where('first_name', 'like', 'A%')
        ->where('gender', 'M')
        ->take(50)
        ->get(['first_name', 'last_name', 'gender']);
        
        $female = DB::table('employees')
        ->where('gender', 'F')
        ->whereRaw('YEAR(CURDATE()) - YEAR(birth_date) > 50')
        ->take(50)
        ->get(['first_name', 'last_name']);

     // เลือกเฉพาะ column : emp_no, first_name, last_name
     //  $emp = DB::table('departments')->pluck('dept_no' ,'dept_name', );
 
        // $data = json_decode(json_encode($emp), true);
        
        // Log::info(  $data);
        // return response()->json($emp);
        // return Response($data);
  
        // แสดงผลใน .VUE
        return Inertia::render('Employee/index', [
            'emp' => $emp,
            'dept' => $dept,
            'male' => $male,
            'female' => $female,
        ]);
 
    }
 
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
        //
    }
 
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
}