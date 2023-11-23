<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\UserFile;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $typefile = UserFile::where('user_id', auth()->user()->id)->get();
        return view('employee.dashboard', compact('typefile'));
    }
}
