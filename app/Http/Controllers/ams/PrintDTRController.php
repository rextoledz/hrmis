<?php

namespace App\Http\Controllers\ams;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Attendance;
use App\Models\Holiday;
use Carbon\Carbon;

class PrintDTRController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $employees = Employee::get();
        
        return view('ams.printdtr',[
            'employees'=>  $employees 
        ]);
    }  
     
     public function printdtrbackup(Request $request)
     {
         $employees = Employee::where('id', $request->id)->first();
         $date=Carbon::create($request->dateFrom)->format('F d')." to ".Carbon::create($request->dateTo)->format('d, Y');
         return view('ams.dtr',[
         'employees'=>  $employees,
             'dateFrom' =>  $date
      ]);
     }
     
     public function printdtr(Request $request)
     {
        // $attendance = Attendance::where('biometric', $request->id)
        //                         ->whereMonth('date', $request->month)
        //                         ->whereYear('date', $request->year)
        //                          ->get();

        $attendances = Attendance::where('biometric', $request->id)
                                 ->whereBetween('date', [$request->startDate, $request->endDate])
                                 ->get();  
                                 
                                 
                                 $date1 = Carbon::parse($request->startDate);
                                 $date2 = Carbon::parse($request->endDate);
                                 
                                 // Get the month, day, and year
                                //  $month = $date1->format('m');
                                //  $day = $date1->format('d');
                                //  $year = $date1->format('Y');

                                //  $date1 = new DateTime($request->startDate);
                                //  $date2 = new DateTime($request->endDate);
                                 
                                 // Get the month and year
                                 $month = $date1->format('m');
                                 $year = $date1->format('Y');
                                 $startDay = $date1->format('d');

                                 $endDay = $date2->format('d');




        $attendanceList = [];
                                 foreach ($attendances as $entry) {
                                     $attendanceList[] = [
                                         'date' => $entry->date,
                                         'am_in' => $entry->am_in,
                                         'am_out'=> $entry->am_out, 
                                         'pm_in'=> $entry->pm_in, 
                                         'pm_out'=>  $entry->pm_out,
                                     ];
                                 }

        $employees = Employee::where('biometric', $request->id)
                                 ->get();
        $holiday = Holiday::where('startdate', $request->startDate)
                            ->where('enddate', $request->endDate)
                            // ->whereYear('startdate', $request->year)
                            ->get();
        
        $holidayList = [];
                                 foreach($holiday as $data){
                                    
                                    $holidayList[] = [
                                        'holidayName' => $data->nameofholiday,
                                        'startdate' => $data->startdate,
                                        'enddate' => $data->enddate
                                    ];
                                 }
        // return json_encode($attendance);
         return view('ams.dtr',[
            'attendanceList'=> $attendanceList,
            'employees'=>  $employees,
            'startDate' => $request->startDate,
            'endDate' => $request->endDate,
            'month' => $month,
            'year' => $year,
            'startDay' => $startDay,
            'endDay' => $endDay,
            'holiday' => $holidayList
         ]);
        }
        public function printdtr_alt(Request $request)
        {
            $startDate = Carbon::parse($request->startdate);
            $endDate = Carbon::parse($request->enddate);

            $firstDayOfMonth = $startDate->firstOfMonth();
            $lastDayOfMonth = $endDate->lastOfMonth();

            

            
            $daysList = [];
            for ($date = $firstDayOfMonth; $date->lte($lastDayOfMonth); $date->addDay()) {
                $daysList[] = $date->format('d-m-Y');
            }

            $employee = Employee::where('biometric', $request->id)
                                 ->first();

            return view('ams.dtr_alt',[
                'daysList'=> $daysList,
                'employee'=>  $employee,
                'startDate' => Carbon::parse($request->startdate),
                'endDate' => Carbon::parse($request->enddate),
                'month' => Carbon::parse($request->startdate)->format('F'),
                'year' => $startDate->format('Y'),
                'emp_num'=>$request->id
            ]);
        }


}
