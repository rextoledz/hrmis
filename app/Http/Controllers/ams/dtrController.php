<?php

namespace App\Http\Controllers\ams;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Attendance;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class dtrController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $employees = Employee::get();

        return view('ams.dtr',[
            'employees'=>  $employees 
        ]);
    }
     
    //  public function printdtrbackup(Request $request)
    //  {
    //      $employees = Employee::where('id', $request->id)->first();
    //      $date=Carbon::create($request->dateFrom)->format('F d')." to ".Carbon::create($request->dateTo)->format('d, Y');
    //      return view('ams.dtr',[
    //      'employees'=>  $employees,
    //          'dateFrom' =>  $date
    //   ]);
    //  }
     
     public function dtr(Request $request)
     {
         $attendance = Attendance::where('biometric', $request->id)
                                 ->get();
        // return json_encode($attendance);
         return view('ams.dtr',[
           'attendance'=>  $attendance 
         ]);
        }


}
