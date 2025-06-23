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
        Schema::create('regions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
        });

        Schema::create('team_rules', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });

        Schema::create('rule_descriptions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('rule_id')->references('id')->on('team_rules');
            $table->unsignedTinyInteger('indentation')->default(0);
            $table->unsignedInteger('order')->default(0);
            $table->text('text');
            $table->boolean('narrative')->default(false);
        });

        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('plural_name');
            $table->unsignedBigInteger('tier');
            $table->boolean('apothecary');
            $table->unsignedBigInteger('reroll_limit')->default(8);
            $table->unsignedBigInteger('reroll_cost');
            $table->boolean('is_chaos');
            $table->boolean('is_norse');
            $table->boolean('big_choices')->default(false);
        });

        Schema::create('team_regions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('region_id');
            $table->foreignId('team_id');
            $table->foreign('region_id')->references('id')->on('regions');
            $table->foreign('team_id')->references('id')->on('teams');
        });

        Schema::create('team_team_rules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('team_rule_id');
            $table->foreignId('team_id');
            $table->foreign('team_rule_id')->references('id')->on('team_rules');
            $table->foreign('team_id')->references('id')->on('teams');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('regions');
        Schema::dropIfExists('team_rules');
        Schema::dropIfExists('teams');
        Schema::dropIfExists('region_team');
        Schema::dropIfExists('rule_team');
    }
};
