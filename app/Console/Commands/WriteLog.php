<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class WriteLog extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'writelog:info';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'write info messages in log file';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        logger()->info('This is WriteLog Command.');
    }
    
}
