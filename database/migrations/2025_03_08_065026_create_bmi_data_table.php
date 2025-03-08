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
        Schema::create('bmi_data', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('user_name');
            $table->decimal('height', 5, 2);
            $table->decimal('weight', 5, 2);
            $table->integer('age');
            $table->string('gender');
            $table->string('bmi_category');
            $table->decimal('bmi', 5, 2);
            $table->string('range_category');
            $table->json('disease_histories')->nullable();
            $table->string('disease')->nullable();
            $table->json('eating_habits')->nullable();
            $table->json('sleep_patterns')->nullable();
            $table->json('eat_recommendation')->nullable();
            $table->json('sleep_recommendation')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bmi_data');
    }
};
