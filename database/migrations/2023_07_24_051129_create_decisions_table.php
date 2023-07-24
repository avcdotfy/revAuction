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
        Schema::create('decisions', function (Blueprint $t) {
            $t->id();
            $t->foreignIdFor(Event::class);
            $t->foreignIdFor(Vendor::class);
            $t->foreignIdFor(Item::class);
            $t->foreignIdFor(Bid::class);
            $t->string('remarks');
            $t->string('accepted_qty');
            $t->string('accepted_amount');
            $t->string('decision_status');
            $t->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('decisions');
    }
};
