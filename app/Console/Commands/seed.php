<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
// use Redis;

class seed extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = "app:seed";

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = "Initialize the database and seed it with tombstone data";

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
        Artisan::call("migrate:refresh");
        Artisan::call("db:seed --class=DatabaseSeeder");
        $this->info('FINISHED initializing and seeding database.');
    }
}
