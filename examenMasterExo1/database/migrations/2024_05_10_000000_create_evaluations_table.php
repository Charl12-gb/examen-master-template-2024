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
        Schema::create('evaluations', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_note')->default(false);
            $table->year('evaluation_year');
            $table->string('moment');
            $table->integer('number_miss_day')->default(0);
            $table->integer('number_working_days')->default(0);
            $table->integer('skills')->default(0);
            $table->integer('pontualite')->default(0);
            $table->integer('assiduite')->default(0);
            $table->integer('respect')->default(0);
            $table->text('appreciations');
            $table->text('file');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluations');
    }
};
