<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EarnedLeave;

class EarnedLeaveController extends Controller
{
     public function earnedleaveleave()
    {
        $earnedleaves = EarnedLeave::get();
        return view('users.leave.earnedleave.index',[
            'earnedleaves'=>$earnedleaves
        ]);
    }
}