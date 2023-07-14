<?php

use App\Models\Event;
use App\Models\Region;
use App\Models\Vendor;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('event_region', function (Blueprint $t) {
            $t->id();
            $t->foreignIdFor(Region::class)->comment('Region ids where this event is being conducted event');
            $t->foreignIdFor(Event::class)->comment('event id');
            $t->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_vendors');
    }
};
