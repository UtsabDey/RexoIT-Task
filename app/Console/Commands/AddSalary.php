<?php

namespace App\Console\Commands;

use App\Models\Wallet;
use Illuminate\Console\Command;

class AddSalary extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rexoit:salary';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add salary to all User';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // echo "This is custom console command";
        $value = $this->ask('Input Salary');

        $salary = Wallet::all();
        foreach ($salary as $salary) {
            $data = Wallet::where('id', $salary->id)->first();
            $data->update([
                'salary_amount' => $salary->salary_amount + $value,
            ]);
        }
        $this->info('Salary Updated Successfully');

    }
}
