<?php

use App\Models\Event;
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
        Schema::create('event_vendors', function (Blueprint $t) {
            $t->id();
            $t->foreignIdFor(Vendor::class)->comment('vendor ids who are invited for this event');
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
