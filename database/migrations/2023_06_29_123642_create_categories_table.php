<?php

use App\Models\Company;
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
        Schema::create('categories', function (Blueprint $t) {
            $t->id();
            $t->string('code')->unique();
            $t->string('name')->unique();
            $t->text('terms_condition')->nullable();
            $t->boolean('item_time_trigger');
            // $t->integer('time_gap_between_each_item');
            $t->integer('last_minute_closing_time_increment')->nullable();
            $t->boolean('is_active');
            $t->foreignIdFor(User::class)->comment("Creator ID");
            $t->foreignIdFor(Company::class)->comment("company ID");
            $t->enum('status', EVENT_STATUS);
            $t->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
