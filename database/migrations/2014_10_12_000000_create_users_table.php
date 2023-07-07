<?php

use App\Models\Role;
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
        Schema::create('users', function (Blueprint $t) {
            $t->id();
            $t->string('name')->nullable();
            $t->string('username')->unique();
            $t->string('email')->unique();
            $t->string('phone')->nullable();
            $t->string('landline')->nullable();
            $t->string('fax_number')->nullable();
            $t->string('registered_address')->nullable();
            $t->string('country_id')->nullable();
            $t->string('state_id')->nullable();
            $t->string('city')->nullable();
            $t->string('pin_code')->nullable();
            $t->enum('user_type', USER_TYPES);
            $t->timestamp('email_verified_at')->nullable();
            $t->string('password');
            $t->foreignIdFor(Role::class)->nullable();
            $t->rememberToken();
            $t->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
