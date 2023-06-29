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
        Schema::create('email_configurations', function (Blueprint $t) {
            $t->id();
            $t->string('service_type')->nullable();
            $t->string('smtp_host')->nullable();
            $t->string('smtp_port')->nullable();
            $t->string('mail_from')->nullable();
            $t->string('display_name')->nullable();
            $t->string('user_name')->nullable();
            $t->string('password')->nullable();
            $t->boolean('is_enable_ssl')->nullable();
            $t->foreignIdFor(User::class)->comment('Creator ID');
            $t->boolean('is_active')->default(true);
            $t->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('email_configurations');
    }
};
