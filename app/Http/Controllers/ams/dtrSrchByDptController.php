<?php

namespace App\Http\Controllers\ams;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Attendance;
use Carbon\Carbon;

class dtrSrchByDptController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function searchByDepartment(Request $request){
        $employees = Employee::where('department',$request->dpt)
                                ->get();

        // return view('ams.printdtr',[
        //     'employeesByDepartment'=>  $employees 
        // ]);
        return response()->json(['data' => $employees]);
    }
}
