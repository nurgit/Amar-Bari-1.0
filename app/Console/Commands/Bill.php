<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Bill extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:Bill';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'this will add  every month  Flat Bill';

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
        return 0;
    }
}
