<?php

namespace App\Exports;

use App\Models\FileLoan;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ReturnHistoryExport implements FromView
{
    public function view(): View
    {
        return view('admin.history.common.pengembalian-history-table',[
            'loanHistories' => FileLoan::where('status', 1)->get()
        ]);
    }
}
