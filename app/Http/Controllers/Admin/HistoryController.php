<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\FileLoan;

class HistoryController extends Controller
{
    public function loanHistory()
    {
        $loanHistories = FileLoan::where('status', 0)->get();
        return view('admin.history.loan-history', ['loanHistories' => $loanHistories]);
    }
    public function pengembalianHistory()
    {
        $loanHistories = FileLoan::where('status', 1)->get();
        return view('admin.history.pengembalian-history', ['loanHistories' => $loanHistories]);
    }
}
