<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notice;

class NoticeController extends Controller
{
       public function index()
    {
        $notices = Notice::get();
        return view('users.notice.index', [
            'notices'=>$notices
        ]);
    }

}