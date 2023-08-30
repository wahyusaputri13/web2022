<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\Log;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();
        $schedule->command('telescope:prune')->daily();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        // $schedule->call(function () {

        //     //Pengecekan apakah cronjob berhasil atau tidak
        //     //Mencatat info log 
        //     Log::info('Cronjob berhasil dijalankan');
        // })->everyTenSeconds();
=======
>>>>>>> f1e503c (hidden themes)
=======
=======
>>>>>>> 8cfd830 (CKEDITOR EDIT PAGE)
=======
        $schedule->call(function () {

            //Pengecekan apakah cronjob berhasil atau tidak
            //Mencatat info log 
            Log::info('Cronjob berhasil dijalankan');
        })->everyTenSeconds();
>>>>>>> 0a6ee61 (contoh nge log)
<<<<<<< HEAD
>>>>>>> 052d733 (contoh nge log)
=======
=======
        // $schedule->call(function () {

        //     //Pengecekan apakah cronjob berhasil atau tidak
        //     //Mencatat info log 
        //     Log::info('Cronjob berhasil dijalankan');
        // })->everyTenSeconds();
>>>>>>> 5dcee73 (CKEDITOR EDIT PAGE)
>>>>>>> 8cfd830 (CKEDITOR EDIT PAGE)
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
