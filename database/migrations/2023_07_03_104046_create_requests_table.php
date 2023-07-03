<?php

use App\Models\Company;
use App\Models\Vendor;
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
        Schema::create('requests', function (Blueprint $t) {
            $t->id();
            $t->foreignIdFor(Vendor::class);
            $t->foreignIdFor(Company::class);
            $t->enum('status', REQUEST_STATUS)->default(REQUEST_STATUS[2]);
            $t->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requests');
    }
};
