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
            $table->unsignedInteger('ma')->nullable();
            $table->unsignedInteger('st')->nullable();
            $table->unsignedInteger('ag')->nullable();
            $table->unsignedInteger('pa')->nullable();
            $table->unsignedInteger('av')->nullable();
            $table->unsignedInteger('cost')->nullable();
            $table->string('special');
            $table->mediumText('description');
            $table->boolean('display')->default(true);
            $table->string('pair_key')->nullable()->index();
        });

        Schema::create('star_player_skills', function (Blueprint $table) {
            $table->id();
            $table->foreignId('star_player_id');
            $table->foreignId('star_player_skill_id');
            $table->foreign('star_player_id')->references('id')->on('star_players');
            $table->foreign('star_player_skill_id')->references('id')->on('player_skills');
        });

        Schema::create('star_player_traits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('star_player_id');
            $table->foreignId('star_player_trait_id');
            $table->foreign('star_player_id')->references('id')->on('star_players');
            $table->foreign('star_player_trait_id')->references('id')->on('player_traits');
        });

        Schema::create('star_player_regions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('star_player_id');
            $table->foreignId('star_player_region_id');
            $table->foreign('star_player_id')->references('id')->on('star_players');
            $table->foreign('star_player_region_id')->references('id')->on('team_regions');
        });

        Schema::create('star_player_team_rules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('star_player_id');
            $table->foreignId('star_player_team_rule_id');
            $table->foreign('star_player_id')->references('id')->on('star_players');
            $table->foreign('star_player_team_rule_id')->references('id')->on('team_rules');
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
        Schema::dropIfExists('star_player_regions');
        Schema::dropIfExists('star_player_team_rules');
    }
};
