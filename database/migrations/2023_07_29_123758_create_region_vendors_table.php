<?php

use App\Models\Region;
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
        Schema::create('region_vendor', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Vendor::class);
            $table->foreignIdFor(Region::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('region_vendors');
    }
};
