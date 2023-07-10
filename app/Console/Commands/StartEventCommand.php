<?php

namespace App\Console\Commands;

use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Auth;

class StartEventCommand extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'start:event';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command starts a new event';

    /**
     * Execute the console command.
     */

    public function handle()
    {
        $currentTime = Carbon::now()->timestamp * 1000;

        $upcommingEvents = Event::where(['status' => 'SCHEDULED'])->get();

        foreach ($upcommingEvents as $key => $event) {
            if ($currentTime >= $event->opening_date_time_millis && $currentTime <= $event->closing_date_time_millis) {
                $event->status = 'RUNNING';
                $event->save();
            }

            if ($currentTime >= $event->closing_date_time_millis) {
                $event->status = 'COMPLETED';
                $event->save();
            }
        }
        dump($upcommingEvents);
    }
}
