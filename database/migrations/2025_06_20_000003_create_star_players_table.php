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
        Schema::create('star_players', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedInteger('ma');
            $table->unsignedInteger('st');
            $table->unsignedInteger('ag');
            $table->unsignedInteger('pa');
            $table->unsignedInteger('av');
            $table->unsignedInteger('cost');
            $table->string('special');
            $table->mediumText('description');
        });

        Schema::create('star_player_skills', function (Blueprint $table) {
            $table->id();
            $table->foreignId('player_id');
            $table->foreignId('player_skill_id');
            $table->foreign('player_id')->references('id')->on('star_players');
            $table->foreign('player_skill_id')->references('id')->on('player_skills');
        });

        Schema::create('star_player_traits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('player_id');
            $table->foreignId('player_trait_id');
            $table->foreign('player_id')->references('id')->on('star_players');
            $table->foreign('player_trait_id')->references('id')->on('player_traits');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('star_players');
        Schema::dropIfExists('star_player_skills');
        Schema::dropIfExists('star_player_traits');
    }
};
