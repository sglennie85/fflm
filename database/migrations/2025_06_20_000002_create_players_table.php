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
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('plural_name');
            $table->unsignedInteger('ma');
            $table->unsignedInteger('st');
            $table->unsignedInteger('ag');
            $table->unsignedInteger('pa');
            $table->unsignedInteger('av');
            $table->unsignedInteger('limit');
            $table->unsignedInteger('cost');
            $table->boolean('big')->default(false);
            $table->boolean('line')->default(false);
            $table->unsignedBigInteger('team_id');
        });

        Schema::create('player_player_skills', function (Blueprint $table) {
            $table->id();
            $table->foreignId('player_id');
            $table->foreignId('player_skill_id');
            $table->foreign('player_id')->references('id')->on('players');
            $table->foreign('player_skill_id')->references('id')->on('player_skills');
        });

        Schema::create('player_player_traits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('player_id');
            $table->foreignId('player_trait_id');
            $table->foreign('player_id')->references('id')->on('players');
            $table->foreign('player_trait_id')->references('id')->on('player_traits');
        });

        Schema::create('player_primaries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('player_id');
            $table->foreignId('category_id');
            $table->foreign('player_id')->references('id')->on('players');
            $table->foreign('category_id')->references('id')->on('skill_categories');
        });

        Schema::create('player_secondaries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('player_id');
            $table->foreignId('category_id');
            $table->foreign('player_id')->references('id')->on('players');
            $table->foreign('category_id')->references('id')->on('skill_categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('players');
        Schema::dropIfExists('player_player_skills');
        Schema::dropIfExists('player_player_traits');
        Schema::dropIfExists('player_primaries');
        Schema::dropIfExists('player_secondaries');
    }
};
