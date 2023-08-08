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
        Schema::create('countries', function (Blueprint $t) {
            $t->id();
            $t->string('name')->unique();
            $t->string('code')->nullable();
            $t->foreignIdFor(User::class)->comment('Creator ID');
            $t->foreignIdFor(Company::class)->comment('Company creator ID');
            $t->boolean('is_active')->default(1);
            $t->string('description')->nullable();
            $t->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('countries');
    }
};
