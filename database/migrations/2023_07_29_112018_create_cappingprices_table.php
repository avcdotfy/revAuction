<?php

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
        Schema::create('cappingprices', function (Blueprint $t) {
            $t->id();
            $t->foreignIdFor(Vendor::class);
            $t->foreignIdFor(Event::class);
            $t->foreignIdFor(Item::class);
            $t->string('capping_price');
            $t->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cappingprices');
    }
};
