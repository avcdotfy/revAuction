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
        Schema::create('login_trails', function (Blueprint $t) {
            $t->id();
            $t->string('login_id');
            $t->string('login_date_time');
            $t->string('logout_date_time');
            $t->string('public_ip');
            $t->foreignIdFor(User::class)->comment('login details belong to this user');
            $t->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('login_trails');
    }
};
