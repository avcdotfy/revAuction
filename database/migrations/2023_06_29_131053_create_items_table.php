<?php

use App\Models\Category;
use App\Models\UnitOfMeasure;
use App\Models\User;
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
        Schema::create('items', function (Blueprint $t) {
            $t->id();
            $t->string('code')->nullable();
            $t->string('name')->nullable();
            $t->foreignIdFor(UnitOfMeasure::class);
            $t->text('description')->nullable();
            $t->integer('decrement_price')->nullable();
            $t->boolean('is_active');
            $t->boolean('is_manually_change_bidding_price');
            $t->foreignIdFor(Category::class)->comment("item belong to this category ");
            $t->foreignIdFor(User::class)->comment("Creator ID");
            $t->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
