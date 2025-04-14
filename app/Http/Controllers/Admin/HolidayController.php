<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Holiday;

class HolidayController extends Controller
{
     public function holidayleave()
    {
        $holidays = Holiday::get();
        return view('admin.leave.holiday.index',[
            'holidays'=>$holidays
        ]);
    }

    public function storeholiday(Request $request){
        $holidaysave =new Holiday();
        $holidaysave->nameofholiday = $request->nameofholiday;
        $holidaysave->startdate = $request->startdate;
        if($holidaysave->save()) {
            return redirect()->back();
        }
    }

    public function editholiday(Request $request){
        $holiday = Holiday::where('id', $request->id)->first();
        $holidays = Holiday::orderBy('updated_at', 'asc')->get();

        return view('admin.leave.holiday.update',[
            'holiday'=>$holiday,
            'holidays'=>$holidays
        ]);
    }

    public function updateholiday(Request $request){
        $Updatesave=Holiday::where('id' ,$request->id)->first();
        $Updatesave-> nameofholiday =$request->nameofholiday;
        $Updatesave-> startdate =$request->startdate;

        if($Updatesave->update()) {
            return redirect()->back()->withErrors('Updated!');
        }
    }

    public function deleteholiday(Request $request){
        $Deletesave=Holiday::where('id' ,$request->id)->first();
        $Deletesave-> nameofholiday =$request->nameofholiday;
        $Deletesave-> startdate =$request->startdate;
        if($Deletesave->delete()) {
            return redirect()->back()->withErrors('Deleted!');
        }
    }
}
