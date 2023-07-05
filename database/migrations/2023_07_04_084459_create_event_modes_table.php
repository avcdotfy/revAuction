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
        Schema::create('event_modes', function (Blueprint $t) {
            $t->id();
            $t->string('mode');
            $t->boolean('is_active');
            $t->foreignIdFor(User::class)->comment('creator id');
            $t->foreignIdFor(Company::class)->comment('company id');
            $t->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_modes');
    }
};
