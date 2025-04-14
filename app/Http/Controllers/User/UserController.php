<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if(Auth::check()) {
        $user = Auth::user();

        return view('users.dashboard.index');
        }
    }

    public function showNoticeBoard()
{
    $notices = Notice::all();

    return view('dashboard.notice', ['notices' => $notices]);
}

}
