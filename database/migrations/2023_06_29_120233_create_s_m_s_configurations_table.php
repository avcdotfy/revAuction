<?php

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
        Schema::create('s_m_s_configurations', function (Blueprint $t) {
            $t->id();
            $t->string('api')->nullable();
            $t->string('to_number')->nullable();
            $t->string('text_msg')->nullable();
            $t->foreignIdFor(User::class)->comment('Creator ID');
            $t->boolean('is_active')->default(true);
            $t->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('s_m_s_configurations');
    }
};
