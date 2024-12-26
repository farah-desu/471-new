<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('study_time_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->timestamp('start_time')->useCurrent(); // Default to the current timestamp
            $table->timestamp('end_time')->nullable();    // Allow NULL until the session ends
            $table->integer('total_duration')->nullable(); // Make this nullable if calculated later
            $table->integer('time_currency_earned'); // based on total duration
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('study_time_logs');
    }
};
