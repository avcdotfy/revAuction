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
        Schema::create('users', function (Blueprint $t) {
            $t->id();
            $t->string('name');
            $t->string('username')->unique();
            $t->string('email')->unique();

            $t->string('company_type')->nullable();
            $t->string('company_name')->nullable();
            $t->string('contact_person')->nullable();
            $t->string('GSTIN')->nullable();
            $t->string('pan_tan')->nullable();
            $t->string('establish_year')->nullable();
            $t->string('is_mse_registered')->nullable();
            $t->string('mse_registration_number')->nullable();
            $t->string('phone')->nullable();
            $t->string('landline')->nullable();
            $t->string('fax_number')->nullable();
            $t->string('registered_address')->nullable();
            $t->string('country_id')->nullable();
            $t->string('state_id')->nullable();
            $t->string('city')->nullable();
            $t->string('pin_code')->nullable();
            $t->string('preference_category')->nullable();
            $t->string('preference_region')->nullable();
            $t->string('logo')->nullable();
            $t->boolean('is_approved')->nullable();
            $t->foreignId('approved_by')->nullable()->comment('User ID of Admin');
            $t->enum('user_type', USER_TYPES);
            $t->timestamp('email_verified_at')->nullable();
            $t->string('password');

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
