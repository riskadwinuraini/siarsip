<?php

namespace App\Http\Controllers\Admin;

use App\Exports\LoanHistoryExport;
use App\Exports\ReturnHistoryExport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\FileLoan;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Facades\Excel;

class HistoryController extends Controller
{
    public function loanHistory(Request $request)
    {
        $month = Carbon::now()->format('m');
        $year = Carbon::now()->format('Y');
        $query = FileLoan::where('status', 0);
        Session::forget('filter');
        if ($request->has('filter')) {
            Session::put('filter',$request->get('filter'));
            if ($request->get('filter') == 'minggu-ini') {
                $loanHistories = $query->whereBetween('loan_date',[Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get();
            } elseif ($request->get('filter') == 'bulan-ini') {
                $loanHistories = $query->whereMonth('loan_date', '=', $month)->get();
            } else {
                $loanHistories = $query->whereYear('loan_date', '=', $year)->get();
            }
        }
        else{
            $loanHistories = $query->get();
        }
        return view('admin.history.loan-history', ['loanHistories' => $loanHistories]);
    }
    public function pengembalianHistory(Request $request)
    {
        $month = Carbon::now()->format('m');
        $year = Carbon::now()->format('Y');
        $query = FileLoan::where('status', 1);
        Session::forget('filter');
        if ($request->has('filter')) {
            Session::put('filter',$request->get('filter'));
            if ($request->get('filter') == 'minggu-ini') {
                $loanHistories = $query->whereBetween('return_date',[Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get();
            } elseif ($request->get('filter') == 'bulan-ini') {
                $loanHistories = $query->whereMonth('return_date', '=', $month)->get();
            } else {
                $loanHistories = $query->whereYear('return_date', '=', $year)->get();
            }
        }
        else{
            $loanHistories = $query->get();
        }
        return view('admin.history.pengembalian-history', ['loanHistories' => $loanHistories]);
    }

    public function exportPinjaman() {

       return Excel::download(new LoanHistoryExport, 'history-pinjaman.xlsx');
    }

    public function exportPengembalian() {
       return Excel::download(new ReturnHistoryExport, 'history-pengembalian.xlsx');
    }
}
