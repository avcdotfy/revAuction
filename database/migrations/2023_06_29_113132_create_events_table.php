<?php

use App\Models\Category;
use App\Models\EventMode;
use App\Models\Item;
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
        Schema::create('events', function (Blueprint $t) {
            $t->id();
            $t->foreignIdFor(EventMode::class)->commet('daily , weekly , monthly');
            $t->string('opening_date');
            $t->string('opening_time');
            $t->string('closing_date');
            $t->string('closing_time');
            $t->foreignIdFor(Category::class);
            $t->text('terms_condition')->nullable();
            $t->text('subject_line');
            $t->foreignIdFor(User::class)->comment('creator id');
            $t->enum('status', EVENT_STATUS)->default(EVENT_STATUS[0]);
            $t->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
