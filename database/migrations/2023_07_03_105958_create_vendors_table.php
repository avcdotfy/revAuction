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
        Schema::create('vendors', function (Blueprint $t) {
            $t->id();
            $t->string('company_type')->nullable();
            $t->string('company_name')->nullable();
            $t->string('contact_person')->nullable();
            $t->string('GSTIN')->nullable();
            $t->string('pan_tan')->nullable();
            $t->string('establish_year')->nullable();
            $t->string('is_mse_registered')->nullable();
            $t->string('vendor_type')->nullable();
            $t->string('mse_registration_number')->nullable();
            $t->boolean('is_approved')->nullable();
            $t->foreignId('approved_by')->nullable()->comment('User ID of Admin');
            $t->string('preference_category')->nullable();
            $t->string('preference_region')->nullable();
            $t->string('type')->nullable();
            $t->string('logo')->nullable();
            $t->foreignIdFor(User::class);
            $t->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendors');
    }
};
