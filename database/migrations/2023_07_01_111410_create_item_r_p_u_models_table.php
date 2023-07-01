<?php

use App\Models\Category;
use App\Models\Item;
use App\Models\Region;
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
        Schema::create('item_r_p_u_models', function (Blueprint $t) {
            $t->id();
            $t->foreignIdFor(Region::class)->comment('area wherer this item is availble');
            $t->integer('price');
            $t->integer('item_unit');
            $t->text('item_unit_details');
            $t->foreignIdFor(Category::class);
            $t->foreignIdFor(User::class);
            $t->foreignIdFor(Item::class);
            $t->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item_r_p_u_models');
    }
};
