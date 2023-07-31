<?php

use App\Models\Event;
use App\Models\Item;
use App\Models\ItemRPUModel;
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
        Schema::create('bids', function (Blueprint $t) {
            $t->id();
            $t->foreignIdFor(Event::class);
            $t->foreignIdFor(Item::class);
            $t->foreignIdFor(Vendor::class);
            $t->foreignIdFor(ItemRPUModel::class);
            $t->foreignIdFor(Region::class)->nullable();
            $t->double('bidding_price');
            $t->double('capping_price')->default(0);
            $t->integer('least_status')->nullable();
            $t->string('decision_status')->nullable();
            $t->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bids');
    }
};
