<?php

namespace App\Exports;

use App\Models\FileLoan;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Concerns\FromView;

class ReturnHistoryExport implements FromView
{
    public function view(): View
    {
        $month = Carbon::now()->format('m');
        $year = Carbon::now()->format('Y');
        $query = FileLoan::where('status', 1);
        if (Session::has('filter') ) {
            if (Session::get('filter') == 'minggu-ini') {
                $loanHistories = $query->whereBetween('return_date',[Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get();
            } elseif (Session::get('filter') == 'bulan-ini') {
                $loanHistories = $query->whereMonth('return_date', '=', $month)->get();
            } else {
                $loanHistories = $query->whereYear('return_date', '=', $year)->get();
            }
        }else{
            $loanHistories = $query->get();
        }
        return view('admin.history.common.pengembalian-history-table',[
            'loanHistories' => $loanHistories
        ]);
    }
}
