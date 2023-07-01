<?php

use App\Models\Category;
use App\Models\Company;
use App\Models\Employee;
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
        Schema::create('employee_categories', function (Blueprint $t) {
            $t->id();
            $t->foreignIdFor(Category::class);
            $t->foreignIdFor(Employee::class);
            $t->foreignIdFor(Company::class);
            $t->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_categories');
    }
};
