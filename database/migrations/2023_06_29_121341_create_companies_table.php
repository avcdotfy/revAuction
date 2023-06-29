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
        Schema::create('companies', function (Blueprint $t) {
            $t->id();
            $t->string('name')->nullable();
            $t->string('app_name')->nullable();
            $t->string('logo')->nullable();
            $t->string('fav_icon')->nullable();
            $t->string('web_url')->nullable();
            $t->foreignIdFor(User::class)->comment('Creator ID');
            $t->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
