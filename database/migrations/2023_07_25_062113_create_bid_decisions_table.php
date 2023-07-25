<?php

use App\Models\Bid;
use App\Models\Decision;
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
        Schema::create('bid_decision', function (Blueprint $t) {
            $t->id();
            $t->foreignIdFor(Bid::class);
            $t->foreignIdFor(Decision::class);
            $t->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bid_decisions');
    }
};
