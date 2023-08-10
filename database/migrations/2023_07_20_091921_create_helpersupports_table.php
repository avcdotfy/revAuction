<?php

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
        Schema::create('helpersupports', function (Blueprint $t) {
            $t->id();
            $t->text('msg')->nullable();
            $t->string('email');
            $t->string('phone');
            $t->foreignId('company_id');
            $t->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('helpersupports');
    }
};
