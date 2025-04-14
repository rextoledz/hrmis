<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Earnedleave;

class EarnedLeaveController extends Controller
{
     public function earnedleaveleave()
    {
        $earnedleaves = EarnedLeave::get();
        return view('admin.leave.earnedleave.index',[
            'earnedleaves'=>$earnedleaves
        ]);
    }

    public function storeearnedleave(Request $request){
        $earnedleavesave =new EarnedLeave();
        $earnedleavesave->emid = $request->emid;
        $earnedleavesave->startdate = $request->startdate;
        $earnedleavesave->enddate = $request->enddate;

        if($earnedleavesave->save()) {
            return redirect()->back();
        }
    }
}
