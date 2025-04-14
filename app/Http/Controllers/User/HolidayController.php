<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Holiday;

class HolidayController extends Controller
{
     public function holidayleave()
    {
        $holidays = Holiday::get();
        return view('users.leave.holiday.index',[
            'holidays'=>$holidays
        ]);
    }
}
