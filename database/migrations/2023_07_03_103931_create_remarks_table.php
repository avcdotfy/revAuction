<?php

use App\Models\Request;
use App\Models\User;
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
        Schema::create('remarks', function (Blueprint $t) {
            $t->id();
            $t->text('message');
            $t->foreignIdFor(Request::class);
            $t->foreignIdFor(Vendor::class);
            $t->foreignIdFor(User::class)->comment('remark giver id');
            $t->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('remarks');
    }
};
