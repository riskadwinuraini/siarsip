<?php

namespace App\Exports;

use App\Models\FileLoan;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;


class LoanHistoryExport implements FromView
{

    public function view(): View
    {
        return view('admin.history.common.loan-history-table',[
            'loanHistories' => FileLoan::where('status', 0)->get()
        ]);
    }
}
