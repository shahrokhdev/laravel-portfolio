<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
class dummy extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dummy:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'copy images directory to public';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        return File::copyDirectory('storage\dummy\images', 'storage\app\public');
    }
}
