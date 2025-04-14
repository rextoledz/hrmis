<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Employee;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (Auth::check()) {
            $user = Auth::user();
            
            $employees = Employee::count();
            $permanent = Employee::where('status', 'Permanent')->count();
            $casual = Employee::where('status', 'Casual')->count();
            $joborder = Employee::where('status', 'Job Order')->count();
            $coterminous = Employee::where('status', 'Co-Terminous')->count();
            $electives = Employee::where('status', 'Elective')->count();

            return view('admin.dashboard.index', compact('permanent', 'casual', 'joborder', 'coterminous' , 'electives', 'employees'));
        }
    }
}

