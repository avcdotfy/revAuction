<?php

use App\Models\Category;
use App\Models\Company;
use App\Models\Department;
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
        Schema::create('employees', function (Blueprint $t) {
            $t->id();
            $t->foreignIdFor(Role::class);
            $t->foreignIdFor(Department::class);
            $t->string('designation');
            $t->string('employee_id');
            $t->boolean('is_active')->default(1);
            $t->foreignId('emp_user_id')->comment('this employee information belong to this user');
            $t->foreignId('user_id')->comment('Creator ID');
            $t->foreignIdFor(Company::class)->comment('This employee belong to this company');
            $t->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
