<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Log;
use App\Http\Controllers\CategoryController;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        \App\Console\Commands\Inspire::class,
        \App\Console\Commands\TestSchedule::class
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        //          ->hourly();

        $schedule->call(function(){
            Log::info("at 9:59");
        })->dailyAt('9:59');

        // use command
        $schedule->command('test_schedule')->dailyAt('8:24');

        $schedule->call(function(){
            Log::info("every 5 minutes ".date('H:i',time()));
        })->everyFiveMinutes();

        $schedule->call(function () {
            Log::info("Runs once a week on Monday at 9:59...");
        })->weekly()->mondays()->at('9:59');
    }
}
