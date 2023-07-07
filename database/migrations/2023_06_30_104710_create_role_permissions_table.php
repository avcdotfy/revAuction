<?php

use App\Models\Company;
use App\Models\Permission;
use App\Models\Role;
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
        Schema::create('role_permission', function (Blueprint $t) {
            $t->id();
            $t->foreignIdFor(Role::class);
            $t->foreignIdFor(Permission::class);
            $t->foreignIdFor(User::class)->comment('Creator ID');
            $t->foreignIdFor(Company::class)->comment('Company Creator ID');
            $t->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('role_permission');
    }
};
