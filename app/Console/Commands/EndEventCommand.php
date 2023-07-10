<?php

namespace App\Console\Commands;

use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Console\Command;

class EndEventCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'end:event';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command ENDS EVENT';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $currentTime = Carbon::now()->timestamp * 1000;

        $upcommingEvents = Event::where(['status' => 'RUNNING'])->get();

        foreach ($upcommingEvents as $key => $event) {

            if ($currentTime >= $event->closing_date_time_millis) {
                $event->status = 'COMPLETED';
                $event->save();
            }
        }
        dump($upcommingEvents);
    }
}
