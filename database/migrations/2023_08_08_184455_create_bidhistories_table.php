<?php

use App\Models\Bid;
use App\Models\Event;
use App\Models\Item;
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
        Schema::create('bidhistories', function (Blueprint $t) {
            $t->id();
            $t->foreignIdFor(Bid::class)->onDelete('cascade');
            $t->foreignIdFor(Vendor::class)->onDelete('cascade');
            $t->foreignIdFor(Event::class)->onDelete('cascade');
            $t->string('previous_state');
            $t->string('new_state');
            $t->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bidhistories');
    }
};
