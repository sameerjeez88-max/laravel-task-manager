<?php

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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Kis user ka task hai
            $table->string('title'); // Task ka naam
            $table->text('description')->nullable(); // Task ki details
            $table->string('priority')->default('Medium'); // Low, Medium, High
            $table->date('due_date')->nullable(); // Kab tak karna hai
            $table->boolean('is_completed')->default(false); // Ho gaya ya nahi
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};