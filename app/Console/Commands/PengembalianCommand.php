<?php

namespace App\Console\Commands;

use App\Models\FileLoan;
use Carbon\Carbon;
use Illuminate\Console\Command;

class PengembalianCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pengembalian:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $tanggal_sekarang = Carbon::now();
        $data = FileLoan::whereDate('return_date',$tanggal_sekarang)->first()->update([
            'status' => true
        ]);
        $this->info('Pengembalian updated successfully!');
    }
}
