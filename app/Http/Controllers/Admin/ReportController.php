<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Leavereport;

class ReportController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

       public function index()
    {
        return view('admin.leave.report.index');
    }
}
