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
        Schema::create('skill_categories', function (Blueprint $table){
            $table->id();
            $table->string('name');
        });

        Schema::create('player_traits', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedInteger('reference')->default(0);
        });

        Schema::create('player_skills', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedInteger('reference')->default(0);
            $table->foreignId('skill_category_id')
                ->references('id')
                ->on('skill_categories');
        });

        Schema::create('skill_descriptions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('skill_id')
                ->references('id')
                ->on('player_skills');
            $table->unsignedTinyInteger('indentation')->default(0);
            $table->unsignedInteger('order')->default(0);
            $table->text('text');
        });

        Schema::create('trait_descriptions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('trait_id')
                ->references('id')
                ->on('player_traits');
            $table->unsignedTinyInteger('indentation')->default(0);
            $table->unsignedInteger('order')->default(0);
            $table->text('text');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trait_descriptions');
        Schema::dropIfExists('skill_descriptions');
        Schema::dropIfExists('player_skills');
        Schema::dropIfExists('player_traits');
        Schema::dropIfExists('skill_categories');
    }
};
