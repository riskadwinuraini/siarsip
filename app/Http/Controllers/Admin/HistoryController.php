<?php

namespace App\Http\Controllers\Admin;

use App\Exports\LoanHistoryExport;
use App\Exports\ReturnHistoryExport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\FileLoan;
use Maatwebsite\Excel\Facades\Excel;

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

    public function exportPinjaman() {
       return Excel::download(new LoanHistoryExport, 'history-pinjaman.xlsx'); 
    }
    
    public function exportPengembalian() {
       return Excel::download(new ReturnHistoryExport, 'history-pengembalian.xlsx'); 
    }
}
