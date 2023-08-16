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
        Schema::create('notices', function (Blueprint $t) {
            $t->id();
            $t->string('title');
            $t->text('msg')->nullable();
            $t->boolean('is_active')->default(1);
            $t->foreignIdFor(User::class)->comment('creator id');
            $t->foreignIdFor(Company::class)->comment('creator company id');
            $t->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notices');
    }
};
