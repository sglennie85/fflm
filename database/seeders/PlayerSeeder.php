<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlayerSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $amazonPlayers = [
            [
                'name' => 'Eagle Warrior Linewoman',
                'plural_name' => 'Eagle Warrior Linewomen',
                'ma' => '6',
                'st' => '3',
                'ag' => '3',
                'pa' => '4',
                'av' => '8',
                'limit' => 16,
                'cost' => 50000,
                'big' => false,
                'line' => true,
                'team_id' => 1,
                'skills' => [5],
                'traits' => [],
                'primaries' => [2],
                'secondaries' => [1, 5],
            ],
            [
                'name' => 'Jaguar Warrior Blocker',
                'plural_name' => 'Jaguar Warrior Blockers',
                'ma' => '6',
                'st' => '4',
                'ag' => '3',
                'pa' => '5',
                'av' => '9',
                'limit' => 2,
                'cost' => 110000,
                'big' => false,
                'line' => false,
                'team_id' => 1,
                'skills' => [2, 5],
                'traits' => [],
                'primaries' => [2, 5],
                'secondaries' => [1],
            ],
            [
                'name' => 'Piranha Warrior Blitzer',
                'plural_name' => 'Piranha Warrior Blitzers',
                'ma' => '7',
                'st' => '3',
                'ag' => '3',
                'pa' => '5',
                'av' => '8',
                'limit' => 2,
                'cost' => 90000,
                'big' => false,
                'line' => false,
                'team_id' => 1,
                'skills' => [5, 6],
                'traits' => [18],
                'primaries' => [1, 2],
                'secondaries' => [5],
            ],
            [
                'name' => 'Python Warrior Thrower',
                'plural_name' => 'Python Warrior Throwers',
                'ma' => '6',
                'st' => '3',
                'ag' => '3',
                'pa' => '4',
                'av' => '8',
                'limit' => 2,
                'cost' => 80000,
                'big' => false,
                'line' => false,
                'team_id' => 1,
                'skills' => [5, 47, 48, 50],
                'traits' => [],
                'primaries' => [2, 4],
                'secondaries' => [1, 5],
            ],
        ];
        foreach ($amazonPlayers as $amazonPlayer) {
            $skills = $amazonPlayer['skills'];
            $traits = $amazonPlayer['traits'];
            $primaries = $amazonPlayer['primaries'];
            $secondaries = $amazonPlayer['secondaries'];
            unset(
                $amazonPlayer['skills'],
                $amazonPlayer['traits'],
                $amazonPlayer['primaries'],
                $amazonPlayer['secondaries'],
            );

            $player = \App\Models\Player::updateOrCreate($amazonPlayer);

            foreach ($skills as $skill) {
                DB::table('player_player_skills')->insert([
                    'player_id' => $player->id,
                    'player_skill_id' => $skill,
                ]);
            }

            foreach ($traits as $trait) {
                DB::table('player_player_traits')->insert([
                    'player_id' => $player->id,
                    'player_trait_id' => $trait,
                ]);
            }

            foreach ($primaries as $primary) {
                DB::table('player_primaries')->insert([
                    'player_id' => $player->id,
                    'category_id' => $primary,
                ]);
            }

            foreach ($secondaries as $secondary) {
                DB::table('player_secondaries')->insert([
                    'player_id' => $player->id,
                    'category_id' => $secondary,
                ]);
            }
        }

        $blackOrcPlayers = [
            [
                'name' => 'Black Orc',
                'plural_name' => 'Black Orcs',
                'ma' => '4',
                'st' => '4',
                'ag' => '4',
                'pa' => '5',
                'av' => '10',
                'limit' => 6,
                'cost' => 90000,
                'big' => false,
                'line' => false,
                'team_id' => 2,
                'skills' => [52, 54],
                'traits' => [],
                'primaries' => [2, 5],
                'secondaries' => [1, 4],
            ],
            [
                'name' => 'Goblin Bruiser Lineman',
                'plural_name' => 'Goblin Bruiser Linemen',
                'ma' => '6',
                'st' => '2',
                'ag' => '3',
                'pa' => '4',
                'av' => '8',
                'limit' => 12,
                'cost' => 45000,
                'big' => false,
                'line' => true,
                'team_id' => 2,
                'skills' => [5, 64],
                'traits' => [32, 35],
                'primaries' => [1],
                'secondaries' => [2, 4, 5],
            ],
            [
                'name' => 'Trained Troll',
                'plural_name' => 'Trained Troll',
                'ma' => '4',
                'st' => '5',
                'ag' => '5',
                'pa' => '5',
                'av' => '10',
                'limit' => 1,
                'cost' => 115000,
                'big' => true,
                'line' => false,
                'team_id' => 2,
                'skills' => [58],
                'traits' => [9, 22, 29, 30, 31, 40],
                'primaries' => [5],
                'secondaries' => [1, 2, 4],
            ],
        ];
        foreach ($blackOrcPlayers as $blackOrcPlayer) {

            $skills = $blackOrcPlayer['skills'];
            $traits = $blackOrcPlayer['traits'];
            $primaries = $blackOrcPlayer['primaries'];
            $secondaries = $blackOrcPlayer['secondaries'];
            unset(
                $blackOrcPlayer['skills'],
                $blackOrcPlayer['traits'],
                $blackOrcPlayer['primaries'],
                $blackOrcPlayer['secondaries']
            );

            $player = \App\Models\Player::updateOrCreate($blackOrcPlayer);


            foreach ($skills as $skill) {
                DB::table('player_player_skills')->insert([
                    'player_id' => $player->id,
                    'player_skill_id' => $skill,
                ]);
            }

            foreach ($traits as $trait) {
                DB::table('player_player_traits')->insert([
                    'player_id' => $player->id,
                    'player_trait_id' => $trait,
                ]);
            }

            foreach ($primaries as $primary) {
                DB::table('player_primaries')->insert([
                    'player_id' => $player->id,
                    'category_id' => $primary,
                ]);
            }
            foreach ($secondaries as $secondary) {
                DB::table('player_secondaries')->insert([
                    'player_id' => $player->id,
                    'category_id' => $secondary,
                ]);
            }
        }

        $chaosChosenPlayers = [
            [
                'name' => 'Beastman Runner Lineman',
                'plural_name' => 'Beastman Runner Linemen',
                'ma' => '6',
                'st' => '3',
                'ag' => '3',
                'pa' => '4',
                'av' => '9',
                'limit' => 16,
                'cost' => 60000,
                'big' => false,
                'line' => true,
                'team_id' => 3,
                'skills' => [32],
                'traits' => [],
                'primaries' => [2, 3, 5],
                'secondaries' => [1, 4],
            ],
            [
                'name' => 'Chosen Blocker',
                'plural_name' => 'Chosen Blockers',
                'ma' => '5',
                'st' => '4',
                'ag' => '3',
                'pa' => '5',
                'av' => '10',
                'limit' => 4,
                'cost' => 100000,
                'big' => false,
                'line' => false,
                'team_id' => 3,
                'skills' => [],
                'traits' => [],
                'primaries' => [2, 3, 5],
                'secondaries' => [1],
            ],
            [
                'name' => 'Chaos Ogre',
                'plural_name' => 'Chaos Ogre',
                'ma' => '5',
                'st' => '5',
                'ag' => '4',
                'pa' => '5',
                'av' => '10',
                'limit' => 1,
                'cost' => 140000,
                'big' => true,
                'line' => false,
                'team_id' => 3,
                'skills' => [58, 64],
                'traits' => [15, 23, 40],
                'primaries' => [3, 5],
                'secondaries' => [1, 2],
            ],
            [
                'name' => 'Chaos Troll',
                'plural_name' => 'Chaos Troll',
                'ma' => '4',
                'st' => '5',
                'ag' => '5',
                'pa' => '5',
                'av' => '10',
                'limit' => 1,
                'cost' => 115000,
                'big' => true,
                'line' => false,
                'team_id' => 3,
                'skills' => [58],
                'traits' => [9, 23, 29, 30, 31, 40],
                'primaries' => [3, 5],
                'secondaries' => [1, 2],
            ],
            [
                'name' => 'Minotaur',
                'plural_name' => 'Minotaur',
                'ma' => '5',
                'st' => '5',
                'ag' => '4',
                'pa' => '0',
                'av' => '9',
                'limit' => 1,
                'cost' => 150000,
                'big' => true,
                'line' => false,
                'team_id' => 3,
                'skills' => [19, 32, 58, 64],
                'traits' => [23, 43],
                'primaries' => [3, 5],
                'secondaries' => [1, 2],
            ],
        ];
        foreach ($chaosChosenPlayers as $chaosChosenPlayer) {

            $skills = $chaosChosenPlayer['skills'];
            $traits = $chaosChosenPlayer['traits'];
            $primaries = $chaosChosenPlayer['primaries'];
            $secondaries = $chaosChosenPlayer['secondaries'];
            unset(
                $chaosChosenPlayer['skills'],
                $chaosChosenPlayer['traits'],
                $chaosChosenPlayer['primaries'],
                $chaosChosenPlayer['secondaries']
            );

            $player = \App\Models\Player::updateOrCreate($chaosChosenPlayer);


            foreach ($skills as $skill) {
                DB::table('player_player_skills')->insert([
                    'player_id' => $player->id,
                    'player_skill_id' => $skill,
                ]);
            }

            foreach ($traits as $trait) {
                DB::table('player_player_traits')->insert([
                    'player_id' => $player->id,
                    'player_trait_id' => $trait,
                ]);
            }

            foreach ($primaries as $primary) {
                DB::table('player_primaries')->insert([
                    'player_id' => $player->id,
                    'category_id' => $primary,
                ]);
            }

            foreach ($secondaries as $secondary) {
                DB::table('player_secondaries')->insert([
                    'player_id' => $player->id,
                    'category_id' => $secondary,
                ]);
            }
        }

        $chaosDwarfPlayers = [
            [
                'name' => 'Hobgoblin Lineman',
                'plural_name' => 'Hobgoblin Linemen',
                'ma' => '6',
                'st' => '3',
                'ag' => '3',
                'pa' => '4',
                'av' => '8',
                'limit' => 16,
                'cost' => 40000,
                'big' => false,
                'line' => true,
                'team_id' => 4,
                'skills' => [],
                'traits' => [],
                'primaries' => [2],
                'secondaries' => [1, 5],
            ],
            [
                'name' => 'Chaos Dwarf Blocker',
                'plural_name' => 'Chaos Dwarf Blockers',
                'ma' => '4',
                'st' => '3',
                'ag' => '4',
                'pa' => '6',
                'av' => '10',
                'limit' => 6,
                'cost' => 70000,
                'big' => false,
                'line' => false,
                'team_id' => 4,
                'skills' => [13, 25, 64],
                'traits' => [],
                'primaries' => [2, 5],
                'secondaries' => [1, 3],
            ],
            [
                'name' => 'Bull Centaur Blitzer',
                'plural_name' => 'Bull Centaur Blitzers',
                'ma' => '6',
                'st' => '4',
                'ag' => '4',
                'pa' => '6',
                'av' => '10',
                'limit' => 2,
                'cost' => 130000,
                'big' => false,
                'line' => false,
                'team_id' => 4,
                'skills' => [11, 12, 64],
                'traits' => [],
                'primaries' => [2, 5],
                'secondaries' => [1],
            ],
            [
                'name' => 'Enslaved Minotaur',
                'plural_name' => 'Enslaved Minotaur',
                'ma' => '5',
                'st' => '5',
                'ag' => '4',
                'pa' => '0',
                'av' => '9',
                'limit' => 1,
                'cost' => 150000,
                'big' => true,
                'line' => false,
                'team_id' => 4,
                'skills' => [19, 32, 58, 64],
                'traits' => [1, 23],
                'primaries' => [5],
                'secondaries' => [1, 2, 3],
            ],
        ];
        foreach ($chaosDwarfPlayers as $chaosDwarfPlayer) {

            $skills = $chaosDwarfPlayer['skills'];
            $traits = $chaosDwarfPlayer['traits'];
            $primaries = $chaosDwarfPlayer['primaries'];
            $secondaries = $chaosDwarfPlayer['secondaries'];
            unset(
                $chaosDwarfPlayer['skills'],
                $chaosDwarfPlayer['traits'],
                $chaosDwarfPlayer['primaries'],
                $chaosDwarfPlayer['secondaries']
            );

            $player = \App\Models\Player::updateOrCreate($chaosDwarfPlayer);


            foreach ($skills as $skill) {
                DB::table('player_player_skills')->insert([
                    'player_id' => $player->id,
                    'player_skill_id' => $skill,
                ]);
            }

            foreach ($traits as $trait) {
                DB::table('player_player_traits')->insert([
                    'player_id' => $player->id,
                    'player_trait_id' => $trait,
                ]);
            }

            foreach ($primaries as $primary) {
                DB::table('player_primaries')->insert([
                    'player_id' => $player->id,
                    'category_id' => $primary,
                ]);
            }

            foreach ($secondaries as $secondary) {
                DB::table('player_secondaries')->insert([
                    'player_id' => $player->id,
                    'category_id' => $secondary,
                ]);
            }
        }

        $chaosRenegadePlayers = [
            [
                'name' => 'Renegade Human Lineman',
                'plural_name' => 'Renegade Human Linemen',
                'ma' => '6',
                'st' => '3',
                'ag' => '3',
                'pa' => '4',
                'av' => '9',
                'limit' => 12,
                'cost' => 50000,
                'big' => false,
                'line' => true,
                'team_id' => 5,
                'skills' => [],
                'traits' => [],
                'primaries' => [2, 3],
                'secondaries' => [1, 5],
            ],
            [
                'name' => 'Renegade Dark Elf',
                'plural_name' => 'Renegade Dark Elf',
                'ma' => '6',
                'st' => '3',
                'ag' => '3',
                'pa' => '3',
                'av' => '9',
                'limit' => 1,
                'cost' => 75000,
                'big' => false,
                'line' => false,
                'team_id' => 5,
                'skills' => [],
                'traits' => [3],
                'primaries' => [1, 2, 3],
                'secondaries' => [4, 5],
            ],
            [
                'name' => 'Renegade Goblin',
                'plural_name' => 'Renegade Goblin',
                'ma' => '6',
                'st' => '2',
                'ag' => '3',
                'pa' => '4',
                'av' => '8',
                'limit' => 1,
                'cost' => 40000,
                'big' => false,
                'line' => false,
                'team_id' => 5,
                'skills' => [5],
                'traits' => [3, 32, 35],
                'primaries' => [1, 3],
                'secondaries' => [2, 4],
            ],
            [
                'name' => 'Renegade Human Thrower',
                'plural_name' => 'Renegade Human Thrower',
                'ma' => '6',
                'st' => '3',
                'ag' => '3',
                'pa' => '3',
                'av' => '9',
                'limit' => 1,
                'cost' => 75000,
                'big' => false,
                'line' => false,
                'team_id' => 5,
                'skills' => [8, 48],
                'traits' => [3],
                'primaries' => [2, 3, 4],
                'secondaries' => [1, 5],
            ],
            [
                'name' => 'Renegade Orc',
                'plural_name' => 'Renegade Orc',
                'ma' => '5',
                'st' => '3',
                'ag' => '3',
                'pa' => '5',
                'av' => '10',
                'limit' => 1,
                'cost' => 50000,
                'big' => false,
                'line' => false,
                'team_id' => 5,
                'skills' => [],
                'traits' => [3],
                'primaries' => [2, 3],
                'secondaries' => [1, 5],
            ],
            [
                'name' => 'Renegade Skaven',
                'plural_name' => 'Renegade Skaven',
                'ma' => '7',
                'st' => '3',
                'ag' => '3',
                'pa' => '4',
                'av' => '8',
                'limit' => 1,
                'cost' => 50000,
                'big' => false,
                'line' => false,
                'team_id' => 5,
                'skills' => [],
                'traits' => [3],
                'primaries' => [2, 3],
                'secondaries' => [1, 5],
            ],
            [
                'name' => 'Renegade Minotaur',
                'plural_name' => 'Renegade Minotaur',
                'ma' => '5',
                'st' => '5',
                'ag' => '4',
                'pa' => '0',
                'av' => '9',
                'limit' => 1,
                'cost' => 150000,
                'big' => true,
                'line' => false,
                'team_id' => 5,
                'skills' => [19, 32, 58, 64],
                'traits' => [23, 43],
                'primaries' => [5],
                'secondaries' => [1, 2, 3],
            ],
            [
                'name' => 'Renegade Ogre',
                'plural_name' => 'Renegade Ogre',
                'ma' => '5',
                'st' => '5',
                'ag' => '4',
                'pa' => '5',
                'av' => '10',
                'limit' => 1,
                'cost' => 140000,
                'big' => true,
                'line' => false,
                'team_id' => 5,
                'skills' => [58, 64],
                'traits' => [15, 23, 40],
                'primaries' => [5],
                'secondaries' => [1, 2, 3],
            ],
            [
                'name' => 'Renegade Rat Ogre',
                'plural_name' => 'Renegade Rat Ogre',
                'ma' => '6',
                'st' => '5',
                'ag' => '4',
                'pa' => '0',
                'av' => '9',
                'limit' => 1,
                'cost' => 150000,
                'big' => true,
                'line' => false,
                'team_id' => 5,
                'skills' => [19, 35, 58],
                'traits' => [1, 23],
                'primaries' => [5],
                'secondaries' => [1, 2, 3],
            ],
            [
                'name' => 'Renegade Troll',
                'plural_name' => 'Renegade Troll',
                'ma' => '4',
                'st' => '5',
                'ag' => '5',
                'pa' => '5',
                'av' => '10',
                'limit' => 1,
                'cost' => 115000,
                'big' => true,
                'line' => false,
                'team_id' => 5,
                'skills' => [58],
                'traits' => [9, 23, 29, 30, 31, 40],
                'primaries' => [5],
                'secondaries' => [1, 2, 3],
            ],
        ];
        foreach ($chaosRenegadePlayers as $chaosRenegadePlayer) {

            $skills = $chaosRenegadePlayer['skills'];
            $traits = $chaosRenegadePlayer['traits'];
            $primaries = $chaosRenegadePlayer['primaries'];
            $secondaries = $chaosRenegadePlayer['secondaries'];
            unset(
                $chaosRenegadePlayer['skills'],
                $chaosRenegadePlayer['traits'],
                $chaosRenegadePlayer['primaries'],
                $chaosRenegadePlayer['secondaries'],
            );

            $player = \App\Models\Player::updateOrCreate($chaosRenegadePlayer);


            foreach ($skills as $skill) {
                DB::table('player_player_skills')->insert([
                    'player_id' => $player->id,
                    'player_skill_id' => $skill,
                ]);
            }

            foreach ($traits as $trait) {
                DB::table('player_player_traits')->insert([
                    'player_id' => $player->id,
                    'player_trait_id' => $trait,
                ]);
            }

            foreach ($primaries as $primary) {
                DB::table('player_primaries')->insert([
                    'player_id' => $player->id,
                    'category_id' => $primary,
                ]);
            }

            foreach ($secondaries as $secondary) {
                DB::table('player_secondaries')->insert([
                    'player_id' => $player->id,
                    'category_id' => $secondary,
                ]);
            }
        }

        $darkElfPlayers = [
            [
                'name' => 'Dark Elf Lineman',
                'plural_name' => 'Dark Elf Lineman',
                'ma' => '6',
                'st' => '3',
                'ag' => '2',
                'pa' => '4',
                'av' => '9',
                'limit' => 12,
                'cost' => 70000,
                'big' => false,
                'line' => true,
                'team_id' => 6,
                'skills' => [],
                'traits' => [],
                'primaries' => [1, 2],
                'secondaries' => [5],
            ],
            [
                'name' => 'Runner',
                'plural_name' => 'Runners',
                'ma' => '7',
                'st' => '3',
                'ag' => '2',
                'pa' => '3',
                'av' => '8',
                'limit' => 2,
                'cost' => 80000,
                'big' => false,
                'line' => false,
                'team_id' => 6,
                'skills' => [42],
                'traits' => [],
                'primaries' => [1, 2, 4],
                'secondaries' => [5],
            ],
            [
                'name' => 'Blitzer',
                'plural_name' => 'Blitzers',
                'ma' => '7',
                'st' => '3',
                'ag' => '2',
                'pa' => '4',
                'av' => '9',
                'limit' => 4,
                'cost' => 100000,
                'big' => false,
                'line' => false,
                'team_id' => 6,
                'skills' => [13],
                'traits' => [],
                'primaries' => [1, 2],
                'secondaries' => [4, 5],
            ],
            [
                'name' => 'Assassin',
                'plural_name' => 'Assassins',
                'ma' => '7',
                'st' => '3',
                'ag' => '2',
                'pa' => '5',
                'av' => '8',
                'limit' => 2,
                'cost' => 85000,
                'big' => false,
                'line' => false,
                'team_id' => 6,
                'skills' => [22],
                'traits' => [34],
                'primaries' => [1, 2],
                'secondaries' => [4, 5],
            ],
            [
                'name' => 'Witch Elf',
                'plural_name' => 'Witch Elves',
                'ma' => '7',
                'st' => '3',
                'ag' => '2',
                'pa' => '5',
                'av' => '8',
                'limit' => 2,
                'cost' => 110000,
                'big' => false,
                'line' => false,
                'team_id' => 6,
                'skills' => [5, 6, 19],
                'traits' => [],
                'primaries' => [1, 2],
                'secondaries' => [4, 5],
            ],
        ];
        foreach ($darkElfPlayers as $darkElfPlayer) {

            $skills = $darkElfPlayer['skills'];
            $traits = $darkElfPlayer['traits'];
            $primaries = $darkElfPlayer['primaries'];
            $secondaries = $darkElfPlayer['secondaries'];
            unset(
                $darkElfPlayer['skills'],
                $darkElfPlayer['traits'],
                $darkElfPlayer['primaries'],
                $darkElfPlayer['secondaries'],
            );

            $player = \App\Models\Player::updateOrCreate($darkElfPlayer);


            foreach ($skills as $skill) {
                DB::table('player_player_skills')->insert([
                    'player_id' => $player->id,
                    'player_skill_id' => $skill,
                ]);
            }

            foreach ($traits as $trait) {
                DB::table('player_player_traits')->insert([
                    'player_id' => $player->id,
                    'player_trait_id' => $trait,
                ]);
            }

            foreach ($primaries as $primary) {
                DB::table('player_primaries')->insert([
                    'player_id' => $player->id,
                    'category_id' => $primary,
                ]);
            }

            foreach ($secondaries as $secondary) {
                DB::table('player_secondaries')->insert([
                    'player_id' => $player->id,
                    'category_id' => $secondary,
                ]);
            }
        }

        $dwarfPlayers = [
            [
                'name' => 'Dwarf Blocker Lineman',
                'plural_name' => 'Dwarf Blocker Linemen',
                'ma' => '4',
                'st' => '3',
                'ag' => '4',
                'pa' => '5',
                'av' => '10',
                'limit' => 12,
                'cost' => 70000,
                'big' => false,
                'line' => true,
                'team_id' => 7,
                'skills' => [13, 25, 64],
                'traits' => [],
                'primaries' => [2, 5],
                'secondaries' => [1],
            ],
            [
                'name' => 'Runner',
                'plural_name' => 'Runners',
                'ma' => '6',
                'st' => '3',
                'ag' => '3',
                'pa' => '4',
                'av' => '9',
                'limit' => 2,
                'cost' => 85000,
                'big' => false,
                'line' => false,
                'team_id' => 7,
                'skills' => [24, 64],
                'traits' => [],
                'primaries' => [2, 4],
                'secondaries' => [1, 5],
            ],
            [
                'name' => 'Blitzer',
                'plural_name' => 'Blitzers',
                'ma' => '5',
                'st' => '3',
                'ag' => '3',
                'pa' => '4',
                'av' => '10',
                'limit' => 2,
                'cost' => 80000,
                'big' => false,
                'line' => false,
                'team_id' => 7,
                'skills' => [13, 64],
                'traits' => [],
                'primaries' => [2, 5],
                'secondaries' => [1, 4],
            ],
            [
                'name' => 'Troll Slayer',
                'plural_name' => 'Troll Slayers',
                'ma' => '5',
                'st' => '3',
                'ag' => '4',
                'pa' => '0',
                'av' => '9',
                'limit' => 2,
                'cost' => 95000,
                'big' => false,
                'line' => false,
                'team_id' => 7,
                'skills' => [13, 14, 19, 64],
                'traits' => [],
                'primaries' => [2, 5],
                'secondaries' => [1],
            ],
            [
                'name' => 'Deathroller',
                'plural_name' => 'Deathroller',
                'ma' => '4',
                'st' => '7',
                'ag' => '5',
                'pa' => '0',
                'av' => '11',
                'limit' => 1,
                'cost' => 170000,
                'big' => true,
                'line' => false,
                'team_id' => 7,
                'skills' => [17, 53, 56, 58, 62],
                'traits' => [24, 26, 33],
                'primaries' => [5],
                'secondaries' => [1, 2],
            ],
        ];
        foreach ($dwarfPlayers as $dwarfPlayer) {

            $skills = $dwarfPlayer['skills'];
            $traits = $dwarfPlayer['traits'];
            $primaries = $dwarfPlayer['primaries'];
            $secondaries = $dwarfPlayer['secondaries'];
            unset(
                $dwarfPlayer['skills'],
                $dwarfPlayer['traits'],
                $dwarfPlayer['primaries'],
                $dwarfPlayer['secondaries'],
            );

            $player = \App\Models\Player::updateOrCreate($dwarfPlayer);


            foreach ($skills as $skill) {
                DB::table('player_player_skills')->insert([
                    'player_id' => $player->id,
                    'player_skill_id' => $skill,
                ]);
            }

            foreach ($traits as $trait) {
                DB::table('player_player_traits')->insert([
                    'player_id' => $player->id,
                    'player_trait_id' => $trait,
                ]);
            }

            foreach ($primaries as $primary) {
                DB::table('player_primaries')->insert([
                    'player_id' => $player->id,
                    'category_id' => $primary,
                ]);
            }

            foreach ($secondaries as $secondary) {
                DB::table('player_secondaries')->insert([
                    'player_id' => $player->id,
                    'category_id' => $secondary,
                ]);
            }
        }

        $elvenUnionPlayers = [
            [
                'name' => 'Lineman',
                'plural_name' => 'Linemen',
                'ma' => '6',
                'st' => '3',
                'ag' => '2',
                'pa' => '4',
                'av' => '8',
                'limit' => 12,
                'cost' => 60000,
                'big' => false,
                'line' => true,
                'team_id' => 8,
                'skills' => [],
                'traits' => [],
                'primaries' => [1, 2],
                'secondaries' => [5],
            ],
            [
                'name' => 'Blitzer',
                'plural_name' => 'Blitzers',
                'ma' => '7',
                'st' => '3',
                'ag' => '2',
                'pa' => '3',
                'av' => '9',
                'limit' => 2,
                'cost' => 115000,
                'big' => false,
                'line' => false,
                'team_id' => 8,
                'skills' => [9, 13],
                'traits' => [],
                'primaries' => [1, 2],
                'secondaries' => [4, 5],
            ],
            [
                'name' => 'Catcher',
                'plural_name' => 'Catchers',
                'ma' => '8',
                'st' => '3',
                'ag' => '2',
                'pa' => '4',
                'av' => '8',
                'limit' => 4,
                'cost' => 100000,
                'big' => false,
                'line' => false,
                'team_id' => 8,
                'skills' => [1, 46],
                'traits' => [],
                'primaries' => [1, 2],
                'secondaries' => [5],
            ],
            [
                'name' => 'Thrower',
                'plural_name' => 'Throwers',
                'ma' => '6',
                'st' => '3',
                'ag' => '2',
                'pa' => '2',
                'av' => '8',
                'limit' => 2,
                'cost' => 75000,
                'big' => false,
                'line' => false,
                'team_id' => 8,
                'skills' => [48],
                'traits' => [],
                'primaries' => [1, 2, 4],
                'secondaries' => [5],
            ],
        ];
        foreach ($elvenUnionPlayers as $elvenUnionPlayer) {

            $skills = $elvenUnionPlayer['skills'];
            $traits = $elvenUnionPlayer['traits'];
            $primaries = $elvenUnionPlayer['primaries'];
            $secondaries = $elvenUnionPlayer['secondaries'];
            unset(
                $elvenUnionPlayer['skills'],
                $elvenUnionPlayer['traits'],
                $elvenUnionPlayer['primaries'],
                $elvenUnionPlayer['secondaries'],
            );

            $player = \App\Models\Player::updateOrCreate($elvenUnionPlayer);


            foreach ($skills as $skill) {
                DB::table('player_player_skills')->insert([
                    'player_id' => $player->id,
                    'player_skill_id' => $skill,
                ]);
            }

            foreach ($traits as $trait) {
                DB::table('player_player_traits')->insert([
                    'player_id' => $player->id,
                    'player_trait_id' => $trait,
                ]);
            }

            foreach ($primaries as $primary) {
                DB::table('player_primaries')->insert([
                    'player_id' => $player->id,
                    'category_id' => $primary,
                ]);
            }

            foreach ($secondaries as $secondary) {
                DB::table('player_secondaries')->insert([
                    'player_id' => $player->id,
                    'category_id' => $secondary,
                ]);
            }
        }

        $gnomePlayers = [
            [
                'name' => 'Gnome Lineman',
                'plural_name' => 'Gnome Linemen',
                'ma' => '5',
                'st' => '2',
                'ag' => '3',
                'pa' => '4',
                'av' => '7',
                'limit' => 16,
                'cost' => 40000,
                'big' => false,
                'line' => true,
                'team_id' => 9,
                'skills' => [6, 26],
                'traits' => [32, 35],
                'primaries' => [1],
                'secondaries' => [2, 5],
            ],
            [
                'name' => 'Gnome Beastmaster',
                'plural_name' => 'Gnome Beastmasters',
                'ma' => '5',
                'st' => '2',
                'ag' => '3',
                'pa' => '4',
                'av' => '8',
                'limit' => 2,
                'cost' => 55000,
                'big' => false,
                'line' => false,
                'team_id' => 9,
                'skills' => [6, 26, 55],
                'traits' => [35],
                'primaries' => [1],
                'secondaries' => [2, 5],
            ],
            [
                'name' => 'Gnome Illusionist',
                'plural_name' => 'Gnome Illusionists',
                'ma' => '5',
                'st' => '2',
                'ag' => '3',
                'pa' => '3',
                'av' => '7',
                'limit' => 2,
                'cost' => 50000,
                'big' => false,
                'line' => false,
                'team_id' => 9,
                'skills' => [6, 26],
                'traits' => [35, 42],
                'primaries' => [1, 4],
                'secondaries' => [2],
            ],
            [
                'name' => 'Woodland Fox',
                'plural_name' => 'Woodland Foxes',
                'ma' => '7',
                'st' => '2',
                'ag' => '2',
                'pa' => '0',
                'av' => '6',
                'limit' => 2,
                'cost' => 50000,
                'big' => false,
                'line' => false,
                'team_id' => 9,
                'skills' => [5, 9],
                'traits' => [25, 35],
                'primaries' => [],
                'secondaries' => [1],
            ],
            [
                'name' => 'Altern Forest Treeman',
                'plural_name' => 'Altern Forest Treemen',
                'ma' => '2',
                'st' => '6',
                'ag' => '5',
                'pa' => '5',
                'av' => '11',
                'limit' => 2,
                'cost' => 120000,
                'big' => true,
                'line' => false,
                'team_id' => 9,
                'skills' => [58, 62, 63, 64],
                'traits' => [38, 40, 41],
                'primaries' => [5],
                'secondaries' => [1, 2, 4],
            ],
        ];
        foreach ($gnomePlayers as $gnomePlayer) {

            $skills = $gnomePlayer['skills'];
            $traits = $gnomePlayer['traits'];
            $primaries = $gnomePlayer['primaries'];
            $secondaries = $gnomePlayer['secondaries'];
            unset(
                $gnomePlayer['skills'],
                $gnomePlayer['traits'],
                $gnomePlayer['primaries'],
                $gnomePlayer['secondaries'],
            );

            $player = \App\Models\Player::updateOrCreate($gnomePlayer);


            foreach ($skills as $skill) {
                DB::table('player_player_skills')->insert([
                    'player_id' => $player->id,
                    'player_skill_id' => $skill,
                ]);
            }

            foreach ($traits as $trait) {
                DB::table('player_player_traits')->insert([
                    'player_id' => $player->id,
                    'player_trait_id' => $trait,
                ]);
            }

            foreach ($primaries as $primary) {
                DB::table('player_primaries')->insert([
                    'player_id' => $player->id,
                    'category_id' => $primary,
                ]);
            }

            foreach ($secondaries as $secondary) {
                DB::table('player_secondaries')->insert([
                    'player_id' => $player->id,
                    'category_id' => $secondary,
                ]);
            }
        }

        $goblinPlayers = [
            [
                'name' => 'Goblin Lineman',
                'plural_name' => 'Goblin Linemen',
                'ma' => '6',
                'st' => '2',
                'ag' => '3',
                'pa' => '4',
                'av' => '8',
                'limit' => 16,
                'cost' => 40000,
                'big' => false,
                'line' => true,
                'team_id' => 10,
                'skills' => [5],
                'traits' => [32, 35],
                'primaries' => [1],
                'secondaries' => [2, 4, 5],
            ],
            [
                'name' => 'Bomma',
                'plural_name' => 'Bomma',
                'ma' => '6',
                'st' => '2',
                'ag' => '3',
                'pa' => '4',
                'av' => '8',
                'limit' => 1,
                'cost' => 45000,
                'big' => false,
                'line' => false,
                'team_id' => 10,
                'skills' => [5],
                'traits' => [14, 33, 35],
                'primaries' => [1],
                'secondaries' => [2, 4, 5],
            ],
            [
                'name' => 'Doom Diver',
                'plural_name' => 'Doom Diver',
                'ma' => '6',
                'st' => '2',
                'ag' => '3',
                'pa' => '6',
                'av' => '8',
                'limit' => 1,
                'cost' => 60000,
                'big' => false,
                'line' => false,
                'team_id' => 10,
                'skills' => [],
                'traits' => [32, 35, 37],
                'primaries' => [1],
                'secondaries' => [2, 5],
            ],
            [
                'name' => 'Fanatic',
                'plural_name' => 'Fanatic',
                'ma' => '3',
                'st' => '7',
                'ag' => '3',
                'pa' => '0',
                'av' => '8',
                'limit' => 1,
                'cost' => 70000,
                'big' => false,
                'line' => false,
                'team_id' => 10,
                'skills' => [],
                'traits' => [10, 26, 33, 35],
                'primaries' => [5],
                'secondaries' => [1, 2],
            ],
            [
                'name' => 'Looney',
                'plural_name' => 'Looney',
                'ma' => '6',
                'st' => '2',
                'ag' => '3',
                'pa' => '0',
                'av' => '8',
                'limit' => 1,
                'cost' => 40000,
                'big' => false,
                'line' => false,
                'team_id' => 10,
                'skills' => [],
                'traits' => [13, 33, 35],
                'primaries' => [1],
                'secondaries' => [2, 5],
            ],
            [
                'name' => '\'ooligan',
                'plural_name' => '\'ooligan',
                'ma' => '6',
                'st' => '2',
                'ag' => '3',
                'pa' => '6',
                'av' => '8',
                'limit' => 1,
                'cost' => 65000,
                'big' => false,
                'line' => false,
                'team_id' => 10,
                'skills' => [5, 16, 29],
                'traits' => [32, 35],
                'primaries' => [1],
                'secondaries' => [2, 4, 5],
            ],
            [
                'name' => 'Pogoer',
                'plural_name' => 'Pogoer',
                'ma' => '7',
                'st' => '2',
                'ag' => '3',
                'pa' => '5',
                'av' => '8',
                'limit' => 1,
                'cost' => 75000,
                'big' => false,
                'line' => false,
                'team_id' => 10,
                'skills' => [5],
                'traits' => [28, 35],
                'primaries' => [1],
                'secondaries' => [2, 4, 5],
            ],
            [
                'name' => 'Trained Troll',
                'plural_name' => 'Trained Trolls',
                'ma' => '4',
                'st' => '5',
                'ag' => '5',
                'pa' => '5',
                'av' => '10',
                'limit' => 2,
                'cost' => 115000,
                'big' => true,
                'line' => false,
                'team_id' => 10,
                'skills' => [58],
                'traits' => [9, 22, 29, 30, 31, 40],
                'primaries' => [5],
                'secondaries' => [1, 2, 4],
            ],
        ];
        foreach ($goblinPlayers as $goblinPlayer) {

            $skills = $goblinPlayer['skills'];
            $traits = $goblinPlayer['traits'];
            $primaries = $goblinPlayer['primaries'];
            $secondaries = $goblinPlayer['secondaries'];
            unset(
                $goblinPlayer['skills'],
                $goblinPlayer['traits'],
                $goblinPlayer['primaries'],
                $goblinPlayer['secondaries']
            );

            $player = \App\Models\Player::updateOrCreate($goblinPlayer);


            foreach ($skills as $skill) {
                DB::table('player_player_skills')->insert([
                    'player_id' => $player->id,
                    'player_skill_id' => $skill,
                ]);
            }

            foreach ($traits as $trait) {
                DB::table('player_player_traits')->insert([
                    'player_id' => $player->id,
                    'player_trait_id' => $trait,
                ]);
            }

            foreach ($primaries as $primary) {
                DB::table('player_primaries')->insert([
                    'player_id' => $player->id,
                    'category_id' => $primary,
                ]);
            }

            foreach ($secondaries as $secondary) {
                DB::table('player_secondaries')->insert([
                    'player_id' => $player->id,
                    'category_id' => $secondary,
                ]);
            }
        }

        $halflingPlayers = [
            [
                'name' => 'Halfing Hopeful Lineman',
                'plural_name' => 'Halfing Hopeful Linemen',
                'ma' => '5',
                'st' => '2',
                'ag' => '3',
                'pa' => '4',
                'av' => '7',
                'limit' => 16,
                'cost' => 30000,
                'big' => false,
                'line' => true,
                'team_id' => 11,
                'skills' => [5],
                'traits' => [32, 35],
                'primaries' => [1],
                'secondaries' => [2, 5],
            ],
            [
                'name' => 'Halfling Hefty',
                'plural_name' => 'Halfling Heftys',
                'ma' => '5',
                'st' => '2',
                'ag' => '3',
                'pa' => '3',
                'av' => '8',
                'limit' => 2,
                'cost' => 50000,
                'big' => false,
                'line' => false,
                'team_id' => 11,
                'skills' => [5, 18],
                'traits' => [35],
                'primaries' => [1, 4],
                'secondaries' => [2, 5],
            ],
            [
                'name' => 'Halfling Catcher',
                'plural_name' => 'Halfling Catchers',
                'ma' => '5',
                'st' => '2',
                'ag' => '3',
                'pa' => '5',
                'av' => '7',
                'limit' => 2,
                'cost' => 55000,
                'big' => false,
                'line' => false,
                'team_id' => 11,
                'skills' => [1, 5, 11],
                'traits' => [32, 35],
                'primaries' => [1],
                'secondaries' => [2, 5],
            ],
            [
                'name' => 'Altern Forest Treeman',
                'plural_name' => 'Altern Forest Treemen',
                'ma' => '2',
                'st' => '6',
                'ag' => '5',
                'pa' => '5',
                'av' => '11',
                'limit' => 2,
                'cost' => 120000,
                'big' => true,
                'line' => false,
                'team_id' => 11,
                'skills' => [58, 62, 63, 64],
                'traits' => [38, 40, 41],
                'primaries' => [5],
                'secondaries' => [1, 2, 4],
            ],
        ];
        foreach ($halflingPlayers as $halflingPlayer) {

            $skills = $halflingPlayer['skills'];
            $traits = $halflingPlayer['traits'];
            $primaries = $halflingPlayer['primaries'];
            $secondaries = $halflingPlayer['secondaries'];
            unset(
                $halflingPlayer['skills'],
                $halflingPlayer['traits'],
                $halflingPlayer['primaries'],
                $halflingPlayer['secondaries']
            );

            $player = \App\Models\Player::updateOrCreate($halflingPlayer);


            foreach ($skills as $skill) {
                DB::table('player_player_skills')->insert([
                    'player_id' => $player->id,
                    'player_skill_id' => $skill,
                ]);
            }

            foreach ($traits as $trait) {
                DB::table('player_player_traits')->insert([
                    'player_id' => $player->id,
                    'player_trait_id' => $trait,
                ]);
            }

            foreach ($primaries as $primary) {
                DB::table('player_primaries')->insert([
                    'player_id' => $player->id,
                    'category_id' => $primary,
                ]);
            }

            foreach ($secondaries as $secondary) {
                DB::table('player_secondaries')->insert([
                    'player_id' => $player->id,
                    'category_id' => $secondary,
                ]);
            }
        }

        $highElfPlayers = [
            [
                'name' => 'Lineman',
                'plural_name' => 'Linemen',
                'ma' => '6',
                'st' => '3',
                'ag' => '2',
                'pa' => '4',
                'av' => '9',
                'limit' => 16,
                'cost' => 70000,
                'big' => false,
                'line' => true,
                'team_id' => 12,
                'skills' => [],
                'traits' => [],
                'primaries' => [1, 2],
                'secondaries' => [4, 5],
            ],
            [
                'name' => 'Blitzer',
                'plural_name' => 'Blitzers',
                'ma' => '7',
                'st' => '3',
                'ag' => '2',
                'pa' => '4',
                'av' => '9',
                'limit' => 2,
                'cost' => 100000,
                'big' => false,
                'line' => false,
                'team_id' => 12,
                'skills' => [13],
                'traits' => [],
                'primaries' => [1, 2],
                'secondaries' => [4, 5],
            ],
            [
                'name' => 'Catcher',
                'plural_name' => 'Catchers',
                'ma' => '8',
                'st' => '3',
                'ag' => '2',
                'pa' => '5',
                'av' => '8',
                'limit' => 4,
                'cost' => 90000,
                'big' => false,
                'line' => false,
                'team_id' => 12,
                'skills' => [1],
                'traits' => [],
                'primaries' => [1, 2],
                'secondaries' => [5],
            ],
            [
                'name' => 'Thrower',
                'plural_name' => 'Throwers',
                'ma' => '6',
                'st' => '3',
                'ag' => '2',
                'pa' => '2',
                'av' => '9',
                'limit' => 2,
                'cost' => 100000,
                'big' => false,
                'line' => false,
                'team_id' => 12,
                'skills' => [41, 48, 50],
                'traits' => [],
                'primaries' => [1, 2, 4],
                'secondaries' => [5],
            ],
        ];
        foreach ($highElfPlayers as $highElfPlayer) {

            $skills = $highElfPlayer['skills'];
            $traits = $highElfPlayer['traits'];
            $primaries = $highElfPlayer['primaries'];
            $secondaries = $highElfPlayer['secondaries'];
            unset(
                $highElfPlayer['skills'],
                $highElfPlayer['traits'],
                $highElfPlayer['primaries'],
                $highElfPlayer['secondaries']
            );

            $player = \App\Models\Player::updateOrCreate($highElfPlayer);


            foreach ($skills as $skill) {
                DB::table('player_player_skills')->insert([
                    'player_id' => $player->id,
                    'player_skill_id' => $skill,
                ]);
            }

            foreach ($traits as $trait) {
                DB::table('player_player_traits')->insert([
                    'player_id' => $player->id,
                    'player_trait_id' => $trait,
                ]);
            }

            foreach ($primaries as $primary) {
                DB::table('player_primaries')->insert([
                    'player_id' => $player->id,
                    'category_id' => $primary,
                ]);
            }

            foreach ($secondaries as $secondary) {
                DB::table('player_secondaries')->insert([
                    'player_id' => $player->id,
                    'category_id' => $secondary,
                ]);
            }
        }

        $humanPlayers = [
            [
                'name' => 'Lineman',
                'plural_name' => 'Linemen',
                'ma' => '6',
                'st' => '3',
                'ag' => '3',
                'pa' => '4',
                'av' => '9',
                'limit' => 16,
                'cost' => 50000,
                'big' => false,
                'line' => true,
                'team_id' => 13,
                'skills' => [],
                'traits' => [],
                'primaries' => [2],
                'secondaries' => [1, 5],
            ],
            [
                'name' => 'Blitzer',
                'plural_name' => 'Blitzers',
                'ma' => '7',
                'st' => '3',
                'ag' => '3',
                'pa' => '4',
                'av' => '9',
                'limit' => 4,
                'cost' => 85000,
                'big' => false,
                'line' => false,
                'team_id' => 13,
                'skills' => [13],
                'traits' => [],
                'primaries' => [2, 5],
                'secondaries' => [1, 4],
            ],
            [
                'name' => 'Catcher',
                'plural_name' => 'Catchers',
                'ma' => '8',
                'st' => '2',
                'ag' => '3',
                'pa' => '5',
                'av' => '8',
                'limit' => 4,
                'cost' => 65000,
                'big' => false,
                'line' => false,
                'team_id' => 13,
                'skills' => [1, 5],
                'traits' => [],
                'primaries' => [1, 2],
                'secondaries' => [4, 5],
            ],
            [
                'name' => 'Halfing Hopeful',
                'plural_name' => 'Halfing Hopefuls',
                'ma' => '5',
                'st' => '2',
                'ag' => '3',
                'pa' => '4',
                'av' => '7',
                'limit' => 3,
                'cost' => 30000,
                'big' => false,
                'line' => false,
                'team_id' => 13,
                'skills' => [5],
                'traits' => [32, 35],
                'primaries' => [1],
                'secondaries' => [2, 5],
            ],
            [
                'name' => 'Thrower',
                'plural_name' => 'Throwers',
                'ma' => '6',
                'st' => '3',
                'ag' => '3',
                'pa' => '2',
                'av' => '9',
                'limit' => 2,
                'cost' => 80000,
                'big' => false,
                'line' => false,
                'team_id' => 13,
                'skills' => [24, 48],
                'traits' => [],
                'primaries' => [2, 4],
                'secondaries' => [1, 5],
            ],
            [
                'name' => 'Ogre',
                'plural_name' => 'Ogre',
                'ma' => '5',
                'st' => '5',
                'ag' => '4',
                'pa' => '5',
                'av' => '10',
                'limit' => 1,
                'cost' => 140000,
                'big' => true,
                'line' => false,
                'team_id' => 13,
                'skills' => [58, 64],
                'traits' => [15, 23, 40],
                'primaries' => [5],
                'secondaries' => [1, 2],
            ],
        ];
        foreach ($humanPlayers as $humanPlayer) {

            $skills = $humanPlayer['skills'];
            $traits = $humanPlayer['traits'];
            $primaries = $humanPlayer['primaries'];
            $secondaries = $humanPlayer['secondaries'];
            unset(
                $humanPlayer['skills'],
                $humanPlayer['traits'],
                $humanPlayer['primaries'],
                $humanPlayer['secondaries']
            );

            $player = \App\Models\Player::updateOrCreate($humanPlayer);


            foreach ($skills as $skill) {
                DB::table('player_player_skills')->insert([
                    'player_id' => $player->id,
                    'player_skill_id' => $skill,
                ]);
            }

            foreach ($traits as $trait) {
                DB::table('player_player_traits')->insert([
                    'player_id' => $player->id,
                    'player_trait_id' => $trait,
                ]);
            }

            foreach ($primaries as $primary) {
                DB::table('player_primaries')->insert([
                    'player_id' => $player->id,
                    'category_id' => $primary,
                ]);
            }

            foreach ($secondaries as $secondary) {
                DB::table('player_secondaries')->insert([
                    'player_id' => $player->id,
                    'category_id' => $secondary,
                ]);
            }
        }

        $nobilityPlayers = [
            [
                'name' => 'Imperial Retainer Lineman',
                'plural_name' => 'Imperial Retainer Linemen',
                'ma' => '6',
                'st' => '3',
                'ag' => '4',
                'pa' => '4',
                'av' => '8',
                'limit' => 12,
                'cost' => 45000,
                'big' => false,
                'line' => true,
                'team_id' => 14,
                'skills' => [18],
                'traits' => [],
                'primaries' => [2],
                'secondaries' => [1, 5],
            ],
            [
                'name' => 'Bodyguard',
                'plural_name' => 'Bodyguards',
                'ma' => '6',
                'st' => '3',
                'ag' => '3',
                'pa' => '5',
                'av' => '9',
                'limit' => 4,
                'cost' => 90000,
                'big' => false,
                'line' => false,
                'team_id' => 14,
                'skills' => [26, 62],
                'traits' => [],
                'primaries' => [2, 5],
                'secondaries' => [1],
            ],
            [
                'name' => 'Imperial Thrower',
                'plural_name' => 'Imperial Throwers',
                'ma' => '6',
                'st' => '3',
                'ag' => '3',
                'pa' => '3',
                'av' => '9',
                'limit' => 2,
                'cost' => 75000,
                'big' => false,
                'line' => false,
                'team_id' => 14,
                'skills' => [48, 49],
                'traits' => [],
                'primaries' => [2, 4],
                'secondaries' => [1, 5],
            ],
            [
                'name' => 'Noble Blitzer',
                'plural_name' => 'Noble Blitzers',
                'ma' => '7',
                'st' => '3',
                'ag' => '3',
                'pa' => '4',
                'av' => '9',
                'limit' => 2,
                'cost' => 105000,
                'big' => false,
                'line' => false,
                'team_id' => 14,
                'skills' => [1, 13],
                'traits' => [],
                'primaries' => [1, 2],
                'secondaries' => [4, 5],
            ],
            [
                'name' => 'Ogre',
                'plural_name' => 'Ogre',
                'ma' => '5',
                'st' => '5',
                'ag' => '4',
                'pa' => '5',
                'av' => '10',
                'limit' => 1,
                'cost' => 140000,
                'big' => true,
                'line' => false,
                'team_id' => 14,
                'skills' => [58, 64],
                'traits' => [15, 23, 40],
                'primaries' => [5],
                'secondaries' => [1, 2],
            ],
        ];
        foreach ($nobilityPlayers as $nobilityPlayer) {

            $skills = $nobilityPlayer['skills'];
            $traits = $nobilityPlayer['traits'];
            $primaries = $nobilityPlayer['primaries'];
            $secondaries = $nobilityPlayer['secondaries'];
            unset(
                $nobilityPlayer['skills'],
                $nobilityPlayer['traits'],
                $nobilityPlayer['primaries'],
                $nobilityPlayer['secondaries']
            );

            $player = \App\Models\Player::updateOrCreate($nobilityPlayer);


            foreach ($skills as $skill) {
                DB::table('player_player_skills')->insert([
                    'player_id' => $player->id,
                    'player_skill_id' => $skill,
                ]);
            }

            foreach ($traits as $trait) {
                DB::table('player_player_traits')->insert([
                    'player_id' => $player->id,
                    'player_trait_id' => $trait,
                ]);
            }

            foreach ($primaries as $primary) {
                DB::table('player_primaries')->insert([
                    'player_id' => $player->id,
                    'category_id' => $primary,
                ]);
            }

            foreach ($secondaries as $secondary) {
                DB::table('player_secondaries')->insert([
                    'player_id' => $player->id,
                    'category_id' => $secondary,
                ]);
            }
        }

        $khornePlayers = [
            [
                'name' => 'Bloodborn Marauder Lineman',
                'plural_name' => 'Bloodborn Marauder Linemen',
                'ma' => '6',
                'st' => '3',
                'ag' => '3',
                'pa' => '4',
                'av' => '8',
                'limit' => 16,
                'cost' => 50000,
                'big' => false,
                'line' => true,
                'team_id' => 15,
                'skills' => [19],
                'traits' => [],
                'primaries' => [2, 3],
                'secondaries' => [1, 5],
            ],
            [
                'name' => 'Bloodseeker',
                'plural_name' => 'Bloodseekers',
                'ma' => '5',
                'st' => '4',
                'ag' => '4',
                'pa' => '6',
                'av' => '10',
                'limit' => 4,
                'cost' => 110000,
                'big' => false,
                'line' => false,
                'team_id' => 15,
                'skills' => [19],
                'traits' => [],
                'primaries' => [2, 3, 5],
                'secondaries' => [1],
            ],
            [
                'name' => 'Khorngor',
                'plural_name' => 'Khorngors',
                'ma' => '6',
                'st' => '3',
                'ag' => '3',
                'pa' => '4',
                'av' => '9',
                'limit' => 4,
                'cost' => 70000,
                'big' => false,
                'line' => false,
                'team_id' => 15,
                'skills' => [32, 56],
                'traits' => [],
                'primaries' => [2, 3, 5],
                'secondaries' => [1, 4],
            ],
            [
                'name' => 'Bloodspawn',
                'plural_name' => 'Bloodspawn',
                'ma' => '5',
                'st' => '5',
                'ag' => '4',
                'pa' => '0',
                'av' => '9',
                'limit' => 1,
                'cost' => 160000,
                'big' => true,
                'line' => false,
                'team_id' => 15,
                'skills' => [19, 28, 58],
                'traits' => [23, 43],
                'primaries' => [3, 5],
                'secondaries' => [1, 2],
            ],
        ];
        foreach ($khornePlayers as $khornePlayer) {

            $skills = $khornePlayer['skills'];
            $traits = $khornePlayer['traits'];
            $primaries = $khornePlayer['primaries'];
            $secondaries = $khornePlayer['secondaries'];
            unset(
                $khornePlayer['skills'],
                $khornePlayer['traits'],
                $khornePlayer['primaries'],
                $khornePlayer['secondaries']
            );

            $player = \App\Models\Player::updateOrCreate($khornePlayer);


            foreach ($skills as $skill) {
                DB::table('player_player_skills')->insert([
                    'player_id' => $player->id,
                    'player_skill_id' => $skill,
                ]);
            }

            foreach ($traits as $trait) {
                DB::table('player_player_traits')->insert([
                    'player_id' => $player->id,
                    'player_trait_id' => $trait,
                ]);
            }

            foreach ($primaries as $primary) {
                DB::table('player_primaries')->insert([
                    'player_id' => $player->id,
                    'category_id' => $primary,
                ]);
            }

            foreach ($secondaries as $secondary) {
                DB::table('player_secondaries')->insert([
                    'player_id' => $player->id,
                    'category_id' => $secondary,
                ]);
            }
        }

        $lizardmanPlayers = [
            [
                'name' => 'Skink Runner Lineman',
                'plural_name' => 'Skink Runner Linemen',
                'ma' => '8',
                'st' => '2',
                'ag' => '3',
                'pa' => '4',
                'av' => '8',
                'limit' => 12,
                'cost' => 60000,
                'big' => false,
                'line' => true,
                'team_id' => 16,
                'skills' => [5],
                'traits' => [35],
                'primaries' => [1],
                'secondaries' => [2, 4, 5],
            ],
            [
                'name' => 'Chameleon Skink',
                'plural_name' => 'Chameleon Skinks',
                'ma' => '7',
                'st' => '2',
                'ag' => '3',
                'pa' => '3',
                'av' => '8',
                'limit' => 2,
                'cost' => 70000,
                'big' => false,
                'line' => false,
                'team_id' => 16,
                'skills' => [5, 22, 47],
                'traits' => [35],
                'primaries' => [1],
                'secondaries' => [2, 4, 5],
            ],
            [
                'name' => 'Saurus Blocker',
                'plural_name' => 'Saurus Blockers',
                'ma' => '6',
                'st' => '4',
                'ag' => '5',
                'pa' => '6',
                'av' => '10',
                'limit' => 6,
                'cost' => 85000,
                'big' => false,
                'line' => false,
                'team_id' => 16,
                'skills' => [],
                'traits' => [],
                'primaries' => [2, 5],
                'secondaries' => [1],
            ],
            [
                'name' => 'Kroxigor',
                'plural_name' => 'Kroxigor',
                'ma' => '6',
                'st' => '5',
                'ag' => '5',
                'pa' => '0',
                'av' => '10',
                'limit' => 1,
                'cost' => 140000,
                'big' => true,
                'line' => false,
                'team_id' => 16,
                'skills' => [35, 58, 64],
                'traits' => [15, 23],
                'primaries' => [5],
                'secondaries' => [1, 2],
            ],
        ];
        foreach ($lizardmanPlayers as $lizardmanPlayer) {

            $skills = $lizardmanPlayer['skills'];
            $traits = $lizardmanPlayer['traits'];
            $primaries = $lizardmanPlayer['primaries'];
            $secondaries = $lizardmanPlayer['secondaries'];
            unset(
                $lizardmanPlayer['skills'],
                $lizardmanPlayer['traits'],
                $lizardmanPlayer['primaries'],
                $lizardmanPlayer['secondaries']
            );

            $player = \App\Models\Player::updateOrCreate($lizardmanPlayer);


            foreach ($skills as $skill) {
                DB::table('player_player_skills')->insert([
                    'player_id' => $player->id,
                    'player_skill_id' => $skill,
                ]);
            }

            foreach ($traits as $trait) {
                DB::table('player_player_traits')->insert([
                    'player_id' => $player->id,
                    'player_trait_id' => $trait,
                ]);
            }

            foreach ($primaries as $primary) {
                DB::table('player_primaries')->insert([
                    'player_id' => $player->id,
                    'category_id' => $primary,
                ]);
            }

            foreach ($secondaries as $secondary) {
                DB::table('player_secondaries')->insert([
                    'player_id' => $player->id,
                    'category_id' => $secondary,
                ]);
            }
        }

        $necromanticPlayers = [
            [
                'name' => 'Zombie Lineman',
                'plural_name' => 'Zombie Linemen',
                'ma' => '4',
                'st' => '3',
                'ag' => '4',
                'pa' => '0',
                'av' => '9',
                'limit' => 16,
                'cost' => 40000,
                'big' => false,
                'line' => true,
                'team_id' => 17,
                'skills' => [],
                'traits' => [31],
                'primaries' => [2],
                'secondaries' => [1, 5],
            ],
            [
                'name' => 'Ghoul Runner',
                'plural_name' => 'Ghoul Runners',
                'ma' => '7',
                'st' => '3',
                'ag' => '3',
                'pa' => '4',
                'av' => '8',
                'limit' => 2,
                'cost' => 75000,
                'big' => false,
                'line' => false,
                'team_id' => 17,
                'skills' => [5],
                'traits' => [],
                'primaries' => [1, 2],
                'secondaries' => [4, 5],
            ],
            [
                'name' => 'Flesh Golem',
                'plural_name' => 'Flesh Golems',
                'ma' => '4',
                'st' => '4',
                'ag' => '4',
                'pa' => '0',
                'av' => '10',
                'limit' => 2,
                'cost' => 115000,
                'big' => false,
                'line' => false,
                'team_id' => 17,
                'skills' => [62, 64],
                'traits' => [31],
                'primaries' => [2, 5],
                'secondaries' => [1],
            ],
            [
                'name' => 'Werewolf',
                'plural_name' => 'Werewolves',
                'ma' => '8',
                'st' => '3',
                'ag' => '3',
                'pa' => '4',
                'av' => '9',
                'limit' => 2,
                'cost' => 125000,
                'big' => false,
                'line' => false,
                'team_id' => 17,
                'skills' => [19, 28],
                'traits' => [31],
                'primaries' => [1, 2],
                'secondaries' => [4, 5],
            ],
            [
                'name' => 'Wraith',
                'plural_name' => 'Wraiths',
                'ma' => '6',
                'st' => '3',
                'ag' => '3',
                'pa' => '0',
                'av' => '9',
                'limit' => 2,
                'cost' => 95000,
                'big' => false,
                'line' => false,
                'team_id' => 17,
                'skills' => [9, 13, 31],
                'traits' => [26, 31],
                'primaries' => [2, 5],
                'secondaries' => [1],
            ],
        ];
        foreach ($necromanticPlayers as $necromanticPlayer) {

            $skills = $necromanticPlayer['skills'];
            $traits = $necromanticPlayer['traits'];
            $primaries = $necromanticPlayer['primaries'];
            $secondaries = $necromanticPlayer['secondaries'];
            unset(
                $necromanticPlayer['skills'],
                $necromanticPlayer['traits'],
                $necromanticPlayer['primaries'],
                $necromanticPlayer['secondaries']
            );

            $player = \App\Models\Player::updateOrCreate($necromanticPlayer);


            foreach ($skills as $skill) {
                DB::table('player_player_skills')->insert([
                    'player_id' => $player->id,
                    'player_skill_id' => $skill,
                ]);
            }

            foreach ($traits as $trait) {
                DB::table('player_player_traits')->insert([
                    'player_id' => $player->id,
                    'player_trait_id' => $trait,
                ]);
            }

            foreach ($primaries as $primary) {
                DB::table('player_primaries')->insert([
                    'player_id' => $player->id,
                    'category_id' => $primary,
                ]);
            }

            foreach ($secondaries as $secondary) {
                DB::table('player_secondaries')->insert([
                    'player_id' => $player->id,
                    'category_id' => $secondary,
                ]);
            }
        }

        $norsePlayers = [
            [
                'name' => 'Norse Raider Lineman',
                'plural_name' => 'Norse Raider Linemen',
                'ma' => '6',
                'st' => '3',
                'ag' => '3',
                'pa' => '4',
                'av' => '8',
                'limit' => 12,
                'cost' => 50000,
                'big' => false,
                'line' => true,
                'team_id' => 18,
                'skills' => [13, 64],
                'traits' => [44],
                'primaries' => [2],
                'secondaries' => [1, 4, 5],
            ],
            [
                'name' => 'Beer Boar',
                'plural_name' => 'Beer Boars',
                'ma' => '5',
                'st' => '1',
                'ag' => '3',
                'pa' => '0',
                'av' => '6',
                'limit' => 2,
                'cost' => 20000,
                'big' => false,
                'line' => false,
                'team_id' => 18,
                'skills' => [5],
                'traits' => [26, 35, 39, 45],
                'primaries' => [],
                'secondaries' => [1],
            ],
            [
                'name' => 'Norse Berserker',
                'plural_name' => 'Norse Berserkers',
                'ma' => '6',
                'st' => '3',
                'ag' => '3',
                'pa' => '5',
                'av' => '8',
                'limit' => 2,
                'cost' => 90000,
                'big' => false,
                'line' => false,
                'team_id' => 18,
                'skills' => [6, 13, 19],
                'traits' => [],
                'primaries' => [2, 5],
                'secondaries' => [1, 4],
            ],
            [
                'name' => 'Valkyrie',
                'plural_name' => 'Valkyries',
                'ma' => '7',
                'st' => '3',
                'ag' => '3',
                'pa' => '3',
                'av' => '8',
                'limit' => 2,
                'cost' => 95000,
                'big' => false,
                'line' => false,
                'team_id' => 18,
                'skills' => [1, 14, 23, 48],
                'traits' => [],
                'primaries' => [1, 2, 4],
                'secondaries' => [5],
            ],
            [
                'name' => 'Ulfwerener',
                'plural_name' => 'Ulfwereners',
                'ma' => '6',
                'st' => '4',
                'ag' => '4',
                'pa' => '0',
                'av' => '9',
                'limit' => 2,
                'cost' => 105000,
                'big' => false,
                'line' => false,
                'team_id' => 18,
                'skills' => [19],
                'traits' => [],
                'primaries' => [2, 5],
                'secondaries' => [1],
            ],
            [
                'name' => 'Yhetee',
                'plural_name' => 'Yhetee',
                'ma' => '5',
                'st' => '5',
                'ag' => '4',
                'pa' => '0',
                'av' => '9',
                'limit' => 1,
                'cost' => 140000,
                'big' => true,
                'line' => false,
                'team_id' => 18,
                'skills' => [19, 28, 29],
                'traits' => [23, 43],
                'primaries' => [5],
                'secondaries' => [1, 2],
            ],
        ];
        foreach ($norsePlayers as $norsePlayer) {

            $skills = $norsePlayer['skills'];
            $traits = $norsePlayer['traits'];
            $primaries = $norsePlayer['primaries'];
            $secondaries = $norsePlayer['secondaries'];

            unset(
                $norsePlayer['skills'],
                $norsePlayer['traits'],
                $norsePlayer['primaries'],
                $norsePlayer['secondaries'],
            );

            $player = \App\Models\Player::updateOrCreate($norsePlayer);


            foreach ($skills as $skill) {
                DB::table('player_player_skills')->insert([
                    'player_id' => $player->id,
                    'player_skill_id' => $skill,
                ]);
            }

            foreach ($traits as $trait) {
                DB::table('player_player_traits')->insert([
                    'player_id' => $player->id,
                    'player_trait_id' => $trait,
                ]);
            }

            foreach ($primaries as $primary) {
                DB::table('player_primaries')->insert([
                    'player_id' => $player->id,
                    'category_id' => $primary,
                ]);
            }

            foreach ($secondaries as $secondary) {
                DB::table('player_secondaries')->insert([
                    'player_id' => $player->id,
                    'category_id' => $secondary,
                ]);
            }
        }

        $nurglePlayers = [
            [
                'name' => 'Rotter Lineman',
                'plural_name' => 'Rotter Linemen',
                'ma' => '5',
                'st' => '3',
                'ag' => '4',
                'pa' => '6',
                'av' => '9',
                'limit' => 12,
                'cost' => 35000,
                'big' => false,
                'line' => true,
                'team_id' => 19,
                'skills' => [],
                'traits' => [17, 27],
                'primaries' => [2, 3],
                'secondaries' => [1, 5],
            ],
            [
                'name' => 'Bloater',
                'plural_name' => 'Bloaters',
                'ma' => '4',
                'st' => '4',
                'ag' => '4',
                'pa' => '6',
                'av' => '10',
                'limit' => 4,
                'cost' => 115000,
                'big' => false,
                'line' => false,
                'team_id' => 19,
                'skills' => [29, 31],
                'traits' => [27, 31],
                'primaries' => [2, 3, 5],
                'secondaries' => [1],
            ],
            [
                'name' => 'Pestigor',
                'plural_name' => 'Pestigors',
                'ma' => '6',
                'st' => '3',
                'ag' => '3',
                'pa' => '4',
                'av' => '9',
                'limit' => 4,
                'cost' => 75000,
                'big' => false,
                'line' => false,
                'team_id' => 19,
                'skills' => [32],
                'traits' => [27, 31],
                'primaries' => [2, 3, 5],
                'secondaries' => [1, 4],
            ],
            [
                'name' => 'Rotspawn',
                'plural_name' => 'Rotspawn',
                'ma' => '4',
                'st' => '5',
                'ag' => '5',
                'pa' => '0',
                'av' => '10',
                'limit' => 1,
                'cost' => 140000,
                'big' => true,
                'line' => false,
                'team_id' => 19,
                'skills' => [29, 31, 36, 58],
                'traits' => [23, 27, 30, 31],
                'primaries' => [5],
                'secondaries' => [1, 2, 3],
            ],
        ];
        foreach ($nurglePlayers as $nurglePlayer) {

            $skills = $nurglePlayer['skills'];
            $traits = $nurglePlayer['traits'];
            $primaries = $nurglePlayer['primaries'];
            $secondaries = $nurglePlayer['secondaries'];

            unset(
                $nurglePlayer['skills'],
                $nurglePlayer['traits'],
                $nurglePlayer['primaries'],
                $nurglePlayer['secondaries'],
            );

            $player = \App\Models\Player::updateOrCreate($nurglePlayer);


            foreach ($skills as $skill) {
                DB::table('player_player_skills')->insert([
                    'player_id' => $player->id,
                    'player_skill_id' => $skill,
                ]);
            }

            foreach ($traits as $trait) {
                DB::table('player_player_traits')->insert([
                    'player_id' => $player->id,
                    'player_trait_id' => $trait,
                ]);
            }

            foreach ($primaries as $primary) {
                DB::table('player_primaries')->insert([
                    'player_id' => $player->id,
                    'category_id' => $primary,
                ]);
            }

            foreach ($secondaries as $secondary) {
                DB::table('player_secondaries')->insert([
                    'player_id' => $player->id,
                    'category_id' => $secondary,
                ]);
            }
        }

        $ogrePlayers = [
            [
                'name' => 'Gnoblar Lineman',
                'plural_name' => 'Gnoblar Linemen',
                'ma' => '5',
                'st' => '1',
                'ag' => '3',
                'pa' => '5',
                'av' => '6',
                'limit' => 16,
                'cost' => 15000,
                'big' => false,
                'line' => true,
                'team_id' => 20,
                'skills' => [5, 9],
                'traits' => [32, 35, 39],
                'primaries' => [1],
                'secondaries' => [2],
            ],
            [
                'name' => 'Ogre Blocker',
                'plural_name' => 'Ogre Blockers',
                'ma' => '5',
                'st' => '5',
                'ag' => '4',
                'pa' => '5',
                'av' => '10',
                'limit' => 5,
                'cost' => 140000,
                'big' => false,
                'line' => false,
                'team_id' => 20,
                'skills' => [58, 64],
                'traits' => [15, 40],
                'primaries' => [5],
                'secondaries' => [1, 2, 4],
            ],
            [
                'name' => 'Ogre Runt Punter',
                'plural_name' => 'Ogre Runt Punter',
                'ma' => '5',
                'st' => '5',
                'ag' => '4',
                'pa' => '4',
                'av' => '10',
                'limit' => 1,
                'cost' => 145000,
                'big' => false,
                'line' => false,
                'team_id' => 20,
                'skills' => [58, 64],
                'traits' => [15, 20],
                'primaries' => [4, 5],
                'secondaries' => [1, 2],
            ],
        ];
        foreach ($ogrePlayers as $ogrePlayer) {

            $skills = $ogrePlayer['skills'];
            $traits = $ogrePlayer['traits'];
            $primaries = $ogrePlayer['primaries'];
            $secondaries = $ogrePlayer['secondaries'];

            unset(
                $ogrePlayer['skills'],
                $ogrePlayer['traits'],
                $ogrePlayer['primaries'],
                $ogrePlayer['secondaries'],
            );

            $player = \App\Models\Player::updateOrCreate($ogrePlayer);


            foreach ($skills as $skill) {
                DB::table('player_player_skills')->insert([
                    'player_id' => $player->id,
                    'player_skill_id' => $skill,
                ]);
            }

            foreach ($traits as $trait) {
                DB::table('player_player_traits')->insert([
                    'player_id' => $player->id,
                    'player_trait_id' => $trait,
                ]);
            }

            foreach ($primaries as $primary) {
                DB::table('player_primaries')->insert([
                    'player_id' => $player->id,
                    'category_id' => $primary,
                ]);
            }

            foreach ($secondaries as $secondary) {
                DB::table('player_secondaries')->insert([
                    'player_id' => $player->id,
                    'category_id' => $secondary,
                ]);
            }
        }

        $oldWorldPlayers = [
            [
                'name' => 'Old World Human Lineman',
                'plural_name' => 'Old World Human Linemen',
                'ma' => '6',
                'st' => '3',
                'ag' => '3',
                'pa' => '4',
                'av' => '9',
                'limit' => 12,
                'cost' => 50000,
                'big' => false,
                'line' => true,
                'team_id' => 21,
                'skills' => [],
                'traits' => [],
                'primaries' => [2],
                'secondaries' => [1, 5],
            ],
            [
                'name' => 'Old World Human Blitzer',
                'plural_name' => 'Old World Human Blitzer',
                'ma' => '7',
                'st' => '3',
                'ag' => '3',
                'pa' => '4',
                'av' => '9',
                'limit' => 1,
                'cost' => 90000,
                'big' => false,
                'line' => false,
                'team_id' => 21,
                'skills' => [13],
                'traits' => [4],
                'primaries' => [2, 5],
                'secondaries' => [1],
            ],
            [
                'name' => 'Old World Human Catcher',
                'plural_name' => 'Old World Human Catcher',
                'ma' => '8',
                'st' => '2',
                'ag' => '3',
                'pa' => '5',
                'av' => '8',
                'limit' => 1,
                'cost' => 65000,
                'big' => false,
                'line' => false,
                'team_id' => 21,
                'skills' => [1, 5],
                'traits' => [4],
                'primaries' => [1, 2],
                'secondaries' => [5],
            ],
            [
                'name' => 'Old World Halfing Hopeful',
                'plural_name' => 'Old World Halfing Hopefuls',
                'ma' => '5',
                'st' => '2',
                'ag' => '3',
                'pa' => '4',
                'av' => '7',
                'limit' => 2,
                'cost' => 30000,
                'big' => false,
                'line' => false,
                'team_id' => 21,
                'skills' => [5],
                'traits' => [5, 32, 35],
                'primaries' => [1],
                'secondaries' => [2, 5],
            ],
            [
                'name' => 'Old World Human Thrower',
                'plural_name' => 'Old World Human Thrower',
                'ma' => '6',
                'st' => '3',
                'ag' => '3',
                'pa' => '3',
                'av' => '9',
                'limit' => 1,
                'cost' => 80000,
                'big' => false,
                'line' => false,
                'team_id' => 21,
                'skills' => [24, 48],
                'traits' => [4],
                'primaries' => [2, 4],
                'secondaries' => [1, 5],
            ],
            [
                'name' => 'Old World Dwarf Blocker',
                'plural_name' => 'Old World Dwarf Blockers',
                'ma' => '4',
                'st' => '3',
                'ag' => '4',
                'pa' => '5',
                'av' => '10',
                'limit' => 2,
                'cost' => 75000,
                'big' => false,
                'line' => false,
                'team_id' => 21,
                'skills' => [51, 52, 64],
                'traits' => [22],
                'primaries' => [2, 5],
                'secondaries' => [1],
            ],
            [
                'name' => 'Old World Dwarf Runner',
                'plural_name' => 'Old World Dwarf Runner',
                'ma' => '6',
                'st' => '3',
                'ag' => '3',
                'pa' => '4',
                'av' => '9',
                'limit' => 1,
                'cost' => 85000,
                'big' => false,
                'line' => false,
                'team_id' => 21,
                'skills' => [24, 64],
                'traits' => [22],
                'primaries' => [2, 4],
                'secondaries' => [1, 5],
            ],
            [
                'name' => 'Old World Dwarf Blitzer',
                'plural_name' => 'Old World Dwarf Blitzer',
                'ma' => '5',
                'st' => '3',
                'ag' => '3',
                'pa' => '4',
                'av' => '10',
                'limit' => 1,
                'cost' => 80000,
                'big' => false,
                'line' => false,
                'team_id' => 21,
                'skills' => [13, 64],
                'traits' => [22],
                'primaries' => [2, 5],
                'secondaries' => [1],
            ],
            [
                'name' => 'Old World Dwarf Troll Slayer',
                'plural_name' => 'Old World Dwarf Troll Slayer',
                'ma' => '5',
                'st' => '3',
                'ag' => '4',
                'pa' => '0',
                'av' => '9',
                'limit' => 1,
                'cost' => 95000,
                'big' => false,
                'line' => false,
                'team_id' => 21,
                'skills' => [13, 14, 19, 64],
                'traits' => [22],
                'primaries' => [2, 5],
                'secondaries' => [1],
            ],
            [
                'name' => 'Altern Forest Treeman',
                'plural_name' => 'Altern Forest Treeman',
                'ma' => '2',
                'st' => '6',
                'ag' => '5',
                'pa' => '5',
                'av' => '11',
                'limit' => 1,
                'cost' => 120000,
                'big' => true,
                'line' => false,
                'team_id' => 21,
                'skills' => [58, 62, 63, 64],
                'traits' => [23, 38, 40, 41],
                'primaries' => [5],
                'secondaries' => [1, 2, 4],
            ],
            [
                'name' => 'Ogre',
                'plural_name' => 'Ogre',
                'ma' => '5',
                'st' => '5',
                'ag' => '4',
                'pa' => '5',
                'av' => '10',
                'limit' => 1,
                'cost' => 140000,
                'big' => true,
                'line' => false,
                'team_id' => 21,
                'skills' => [58, 64],
                'traits' => [15, 23, 40],
                'primaries' => [5],
                'secondaries' => [1, 2],
            ],
        ];
        foreach ($oldWorldPlayers as $oldWorldPlayer) {

            $skills = $oldWorldPlayer['skills'];
            $traits = $oldWorldPlayer['traits'];
            $primaries = $oldWorldPlayer['primaries'];
            $secondaries = $oldWorldPlayer['secondaries'];

            unset(
                $oldWorldPlayer['skills'],
                $oldWorldPlayer['traits'],
                $oldWorldPlayer['primaries'],
                $oldWorldPlayer['secondaries'],
            );

            $player = \App\Models\Player::updateOrCreate($oldWorldPlayer);


            foreach ($skills as $skill) {
                DB::table('player_player_skills')->insert([
                    'player_id' => $player->id,
                    'player_skill_id' => $skill,
                ]);
            }

            foreach ($traits as $trait) {
                DB::table('player_player_traits')->insert([
                    'player_id' => $player->id,
                    'player_trait_id' => $trait,
                ]);
            }

            foreach ($primaries as $primary) {
                DB::table('player_primaries')->insert([
                    'player_id' => $player->id,
                    'category_id' => $primary,
                ]);
            }

            foreach ($secondaries as $secondary) {
                DB::table('player_secondaries')->insert([
                    'player_id' => $player->id,
                    'category_id' => $secondary,
                ]);
            }
        }

        $orcPlayers = [
            [
                'name' => 'Orc Lineman',
                'plural_name' => 'Orc Linemen',
                'ma' => '5',
                'st' => '3',
                'ag' => '3',
                'pa' => '4',
                'av' => '10',
                'limit' => 16,
                'cost' => 50000,
                'big' => false,
                'line' => true,
                'team_id' => 22,
                'skills' => [],
                'traits' => [7],
                'primaries' => [2],
                'secondaries' => [1, 5],
            ],
            [
                'name' => 'Big Un Blocker',
                'plural_name' => 'Big Un Blockers',
                'ma' => '5',
                'st' => '4',
                'ag' => '4',
                'pa' => '0',
                'av' => '10',
                'limit' => 4,
                'cost' => 90000,
                'big' => false,
                'line' => false,
                'team_id' => 22,
                'skills' => [],
                'traits' => [6],
                'primaries' => [2, 5],
                'secondaries' => [1],
            ],
            [
                'name' => 'Blitzer',
                'plural_name' => 'Blitzers',
                'ma' => '6',
                'st' => '3',
                'ag' => '3',
                'pa' => '4',
                'av' => '10',
                'limit' => 4,
                'cost' => 80000,
                'big' => false,
                'line' => false,
                'team_id' => 22,
                'skills' => [13],
                'traits' => [3],
                'primaries' => [2, 5],
                'secondaries' => [1, 4],
            ],
            [
                'name' => 'Thrower',
                'plural_name' => 'Throwers',
                'ma' => '5',
                'st' => '3',
                'ag' => '3',
                'pa' => '3',
                'av' => '9',
                'limit' => 2,
                'cost' => 65000,
                'big' => false,
                'line' => false,
                'team_id' => 22,
                'skills' => [24, 48],
                'traits' => [3],
                'primaries' => [2, 4],
                'secondaries' => [1, 5],
            ],
            [
                'name' => 'Goblin',
                'plural_name' => 'Goblins',
                'ma' => '6',
                'st' => '2',
                'ag' => '3',
                'pa' => '4',
                'av' => '8',
                'limit' => 4,
                'cost' => 40000,
                'big' => false,
                'line' => false,
                'team_id' => 22,
                'skills' => [5],
                'traits' => [32, 35],
                'primaries' => [1],
                'secondaries' => [2, 5],
            ],
            [
                'name' => 'Untrained Troll',
                'plural_name' => 'Untrained Troll',
                'ma' => '4',
                'st' => '5',
                'ag' => '5',
                'pa' => '5',
                'av' => '10',
                'limit' => 1,
                'cost' => 115000,
                'big' => true,
                'line' => false,
                'team_id' => 22,
                'skills' => [58],
                'traits' => [9, 23, 29, 30, 31, 40],
                'primaries' => [5],
                'secondaries' => [1, 2, 4],
            ],
        ];
        foreach ($orcPlayers as $orcPlayer) {

            $skills = $orcPlayer['skills'];
            $traits = $orcPlayer['traits'];
            $primaries = $orcPlayer['primaries'];
            $secondaries = $orcPlayer['secondaries'];

            unset(
                $orcPlayer['skills'],
                $orcPlayer['traits'],
                $orcPlayer['primaries'],
                $orcPlayer['secondaries'],
            );

            $player = \App\Models\Player::updateOrCreate($orcPlayer);


            foreach ($skills as $skill) {
                DB::table('player_player_skills')->insert([
                    'player_id' => $player->id,
                    'player_skill_id' => $skill,
                ]);
            }

            foreach ($traits as $trait) {
                DB::table('player_player_traits')->insert([
                    'player_id' => $player->id,
                    'player_trait_id' => $trait,
                ]);
            }

            foreach ($primaries as $primary) {
                DB::table('player_primaries')->insert([
                    'player_id' => $player->id,
                    'category_id' => $primary,
                ]);
            }

            foreach ($secondaries as $secondary) {
                DB::table('player_secondaries')->insert([
                    'player_id' => $player->id,
                    'category_id' => $secondary,
                ]);
            }
        }

        $shamblingUndeadPlayers = [
            [
                'name' => 'Skeleton Lineman',
                'plural_name' => 'Skeleton Linemen',
                'ma' => '5',
                'st' => '3',
                'ag' => '4',
                'pa' => '6',
                'av' => '8',
                'limit' => 12,
                'cost' => 40000,
                'big' => false,
                'line' => true,
                'team_id' => 23,
                'skills' => [64],
                'traits' => [31],
                'primaries' => [2],
                'secondaries' => [1, 5],
            ],
            [
                'name' => 'Zombie Lineman',
                'plural_name' => 'Zombie Linemen',
                'ma' => '4',
                'st' => '3',
                'ag' => '4',
                'pa' => '0',
                'av' => '9',
                'limit' => 12,
                'cost' => 40000,
                'big' => false,
                'line' => true,
                'team_id' => 23,
                'skills' => [],
                'traits' => [31],
                'primaries' => [2],
                'secondaries' => [1, 5],
            ],
            [
                'name' => 'Ghoul Runner',
                'plural_name' => 'Ghoul Runners',
                'ma' => '7',
                'st' => '3',
                'ag' => '3',
                'pa' => '4',
                'av' => '8',
                'limit' => 4,
                'cost' => 75000,
                'big' => false,
                'line' => false,
                'team_id' => 23,
                'skills' => [5],
                'traits' => [],
                'primaries' => [1, 2],
                'secondaries' => [4, 5],
            ],
            [
                'name' => 'Wight Blitzer',
                'plural_name' => 'Wight Blitzers',
                'ma' => '6',
                'st' => '3',
                'ag' => '3',
                'pa' => '5',
                'av' => '9',
                'limit' => 2,
                'cost' => 90000,
                'big' => false,
                'line' => false,
                'team_id' => 23,
                'skills' => [13],
                'traits' => [31],
                'primaries' => [2, 5],
                'secondaries' => [1, 4],
            ],
            [
                'name' => 'Mummy',
                'plural_name' => 'Mummies',
                'ma' => '3',
                'st' => '5',
                'ag' => '5',
                'pa' => '0',
                'av' => '10',
                'limit' => 2,
                'cost' => 125000,
                'big' => false,
                'line' => false,
                'team_id' => 23,
                'skills' => [58],
                'traits' => [31],
                'primaries' => [5],
                'secondaries' => [1, 2],
            ],
        ];
        foreach ($shamblingUndeadPlayers as $shamblingUndeadPlayer) {

            $skills = $shamblingUndeadPlayer['skills'];
            $traits = $shamblingUndeadPlayer['traits'];
            $primaries = $shamblingUndeadPlayer['primaries'];
            $secondaries = $shamblingUndeadPlayer['secondaries'];

            unset(
                $shamblingUndeadPlayer['skills'],
                $shamblingUndeadPlayer['traits'],
                $shamblingUndeadPlayer['primaries'],
                $shamblingUndeadPlayer['secondaries'],
            );

            $player = \App\Models\Player::updateOrCreate($shamblingUndeadPlayer);


            foreach ($skills as $skill) {
                DB::table('player_player_skills')->insert([
                    'player_id' => $player->id,
                    'player_skill_id' => $skill,
                ]);
            }

            foreach ($traits as $trait) {
                DB::table('player_player_traits')->insert([
                    'player_id' => $player->id,
                    'player_trait_id' => $trait,
                ]);
            }

            foreach ($primaries as $primary) {
                DB::table('player_primaries')->insert([
                    'player_id' => $player->id,
                    'category_id' => $primary,
                ]);
            }

            foreach ($secondaries as $secondary) {
                DB::table('player_secondaries')->insert([
                    'player_id' => $player->id,
                    'category_id' => $secondary,
                ]);
            }
        }

        $skavenPlayers = [
            [
                'name' => 'Skaven Clanrat Lineman',
                'plural_name' => 'Skaven Clanrat Linemen',
                'ma' => '7',
                'st' => '3',
                'ag' => '3',
                'pa' => '4',
                'av' => '8',
                'limit' => 16,
                'cost' => 50000,
                'big' => false,
                'line' => true,
                'team_id' => 24,
                'skills' => [],
                'traits' => [],
                'primaries' => [2],
                'secondaries' => [1, 3, 5],
            ],
            [
                'name' => 'Blitzer',
                'plural_name' => 'Blitzers',
                'ma' => '7',
                'st' => '3',
                'ag' => '3',
                'pa' => '5',
                'av' => '9',
                'limit' => 2,
                'cost' => 90000,
                'big' => false,
                'line' => false,
                'team_id' => 24,
                'skills' => [13],
                'traits' => [],
                'primaries' => [2, 5],
                'secondaries' => [1, 3, 4],
            ],
            [
                'name' => 'Gutter Runner',
                'plural_name' => 'Gutter Runners',
                'ma' => '9',
                'st' => '2',
                'ag' => '2',
                'pa' => '4',
                'av' => '8',
                'limit' => 4,
                'cost' => 85000,
                'big' => false,
                'line' => false,
                'team_id' => 24,
                'skills' => [5],
                'traits' => [],
                'primaries' => [1, 2],
                'secondaries' => [3, 4, 5],
            ],
            [
                'name' => 'Thrower',
                'plural_name' => 'Throwers',
                'ma' => '7',
                'st' => '3',
                'ag' => '3',
                'pa' => '2',
                'av' => '8',
                'limit' => 2,
                'cost' => 85000,
                'big' => false,
                'line' => false,
                'team_id' => 24,
                'skills' => [24, 48],
                'traits' => [],
                'primaries' => [2, 4],
                'secondaries' => [1, 3, 5],
            ],
            [
                'name' => 'Rat Ogre',
                'plural_name' => 'Rat Ogre',
                'ma' => '6',
                'st' => '5',
                'ag' => '4',
                'pa' => '0',
                'av' => '9',
                'limit' => 1,
                'cost' => 150000,
                'big' => true,
                'line' => false,
                'team_id' => 24,
                'skills' => [19, 35, 58],
                'traits' => [1, 23],
                'primaries' => [5],
                'secondaries' => [1, 2, 3],
            ],
        ];
        foreach ($skavenPlayers as $skavenPlayer) {

            $skills = $skavenPlayer['skills'];
            $traits = $skavenPlayer['traits'];
            $primaries = $skavenPlayer['primaries'];
            $secondaries = $skavenPlayer['secondaries'];

            unset(
                $skavenPlayer['skills'],
                $skavenPlayer['traits'],
                $skavenPlayer['primaries'],
                $skavenPlayer['secondaries'],
            );

            $player = \App\Models\Player::updateOrCreate($skavenPlayer);


            foreach ($skills as $skill) {
                DB::table('player_player_skills')->insert([
                    'player_id' => $player->id,
                    'player_skill_id' => $skill,
                ]);
            }

            foreach ($traits as $trait) {
                DB::table('player_player_traits')->insert([
                    'player_id' => $player->id,
                    'player_trait_id' => $trait,
                ]);
            }

            foreach ($primaries as $primary) {
                DB::table('player_primaries')->insert([
                    'player_id' => $player->id,
                    'category_id' => $primary,
                ]);
            }

            foreach ($secondaries as $secondary) {
                DB::table('player_secondaries')->insert([
                    'player_id' => $player->id,
                    'category_id' => $secondary,
                ]);
            }
        }

        $snotlingPlayers = [
            [
                'name' => 'Snotling Lineman',
                'plural_name' => 'Snotling Linemen',
                'ma' => '5',
                'st' => '1',
                'ag' => '3',
                'pa' => '5',
                'av' => '6',
                'limit' => 16,
                'cost' => 15000,
                'big' => false,
                'line' => true,
                'team_id' => 25,
                'skills' => [5, 9],
                'traits' => [32, 35, 36, 39],
                'primaries' => [1],
                'secondaries' => [2],
            ],
            [
                'name' => 'Fungus Flinga',
                'plural_name' => 'Fungus Flingas',
                'ma' => '5',
                'st' => '1',
                'ag' => '3',
                'pa' => '4',
                'av' => '6',
                'limit' => 2,
                'cost' => 30000,
                'big' => false,
                'line' => false,
                'team_id' => 25,
                'skills' => [5, 9],
                'traits' => [14, 32, 33, 35],
                'primaries' => [1, 4],
                'secondaries' => [2],
            ],
            [
                'name' => 'Fun-hoppa',
                'plural_name' => 'Fun-hoppas',
                'ma' => '6',
                'st' => '1',
                'ag' => '3',
                'pa' => '5',
                'av' => '6',
                'limit' => 2,
                'cost' => 20000,
                'big' => false,
                'line' => false,
                'team_id' => 25,
                'skills' => [5, 9],
                'traits' => [28, 32, 35],
                'primaries' => [1],
                'secondaries' => [2],
            ],
            [
                'name' => 'Stilty Runna',
                'plural_name' => 'Stilty Runnas',
                'ma' => '6',
                'st' => '1',
                'ag' => '3',
                'pa' => '5',
                'av' => '6',
                'limit' => 2,
                'cost' => 20000,
                'big' => false,
                'line' => false,
                'team_id' => 25,
                'skills' => [5, 9, 11],
                'traits' => [32, 35],
                'primaries' => [1],
                'secondaries' => [2],
            ],
            [
                'name' => 'Pump Wagon',
                'plural_name' => 'Pump Wagons',
                'ma' => '4',
                'st' => '5',
                'ag' => '5',
                'pa' => '0',
                'av' => '9',
                'limit' => 2,
                'cost' => 105000,
                'big' => true,
                'line' => false,
                'team_id' => 25,
                'skills' => [16, 56, 58, 62],
                'traits' => [30, 33],
                'primaries' => [5],
                'secondaries' => [1, 2],
            ],
            [
                'name' => 'Trained Troll',
                'plural_name' => 'Trained Trolls',
                'ma' => '4',
                'st' => '5',
                'ag' => '5',
                'pa' => '5',
                'av' => '10',
                'limit' => 2,
                'cost' => 115000,
                'big' => true,
                'line' => false,
                'team_id' => 25,
                'skills' => [58],
                'traits' => [9, 22, 29, 30, 31, 40],
                'primaries' => [5],
                'secondaries' => [1, 2, 4],
            ],
        ];
        foreach ($snotlingPlayers as $snotlingPlayer) {

            $skills = $snotlingPlayer['skills'];
            $traits = $snotlingPlayer['traits'];
            $primaries = $snotlingPlayer['primaries'];
            $secondaries = $snotlingPlayer['secondaries'];

            unset(
                $snotlingPlayer['skills'],
                $snotlingPlayer['traits'],
                $snotlingPlayer['primaries'],
                $snotlingPlayer['secondaries'],
            );

            $player = \App\Models\Player::updateOrCreate($snotlingPlayer);


            foreach ($skills as $skill) {
                DB::table('player_player_skills')->insert([
                    'player_id' => $player->id,
                    'player_skill_id' => $skill,
                ]);
            }

            foreach ($traits as $trait) {
                DB::table('player_player_traits')->insert([
                    'player_id' => $player->id,
                    'player_trait_id' => $trait,
                ]);
            }

            foreach ($primaries as $primary) {
                DB::table('player_primaries')->insert([
                    'player_id' => $player->id,
                    'category_id' => $primary,
                ]);
            }

            foreach ($secondaries as $secondary) {
                DB::table('player_secondaries')->insert([
                    'player_id' => $player->id,
                    'category_id' => $secondary,
                ]);
            }
        }

        $tombKingPlayers = [
            [
                'name' => 'Skeleton Lineman',
                'plural_name' => 'Skeleton Linemen',
                'ma' => '5',
                'st' => '3',
                'ag' => '4',
                'pa' => '6',
                'av' => '8',
                'limit' => 16,
                'cost' => 40000,
                'big' => false,
                'line' => true,
                'team_id' => 26,
                'skills' => [64],
                'traits' => [31],
                'primaries' => [2],
                'secondaries' => [1, 5],
            ],
            [
                'name' => 'Anointed Blitzer',
                'plural_name' => 'Anointed Blitzers',
                'ma' => '6',
                'st' => '3',
                'ag' => '4',
                'pa' => '6',
                'av' => '9',
                'limit' => 2,
                'cost' => 90000,
                'big' => false,
                'line' => false,
                'team_id' => 26,
                'skills' => [13, 64],
                'traits' => [31],
                'primaries' => [2, 5],
                'secondaries' => [1, 4],
            ],
            [
                'name' => 'Anointed Thrower',
                'plural_name' => 'Anointed Throwers',
                'ma' => '6',
                'st' => '3',
                'ag' => '4',
                'pa' => '3',
                'av' => '8',
                'limit' => 2,
                'cost' => 70000,
                'big' => false,
                'line' => false,
                'team_id' => 26,
                'skills' => [24, 48, 64],
                'traits' => [31],
                'primaries' => [2, 4],
                'secondaries' => [1],
            ],
            [
                'name' => 'Tomb Guardian',
                'plural_name' => 'Tomb Guardians',
                'ma' => '4',
                'st' => '5',
                'ag' => '5',
                'pa' => '0',
                'av' => '10',
                'limit' => 4,
                'cost' => 100000,
                'big' => false,
                'line' => false,
                'team_id' => 26,
                'skills' => [],
                'traits' => [17, 31],
                'primaries' => [5],
                'secondaries' => [1, 2],
            ],
        ];
        foreach ($tombKingPlayers as $tombKingPlayer) {

            $skills = $tombKingPlayer['skills'];
            $traits = $tombKingPlayer['traits'];
            $primaries = $tombKingPlayer['primaries'];
            $secondaries = $tombKingPlayer['secondaries'];

            unset(
                $tombKingPlayer['skills'],
                $tombKingPlayer['traits'],
                $tombKingPlayer['primaries'],
                $tombKingPlayer['secondaries'],
            );

            $player = \App\Models\Player::updateOrCreate($tombKingPlayer);


            foreach ($skills as $skill) {
                DB::table('player_player_skills')->insert([
                    'player_id' => $player->id,
                    'player_skill_id' => $skill,
                ]);
            }

            foreach ($traits as $trait) {
                DB::table('player_player_traits')->insert([
                    'player_id' => $player->id,
                    'player_trait_id' => $trait,
                ]);
            }

            foreach ($primaries as $primary) {
                DB::table('player_primaries')->insert([
                    'player_id' => $player->id,
                    'category_id' => $primary,
                ]);
            }

            foreach ($secondaries as $secondary) {
                DB::table('player_secondaries')->insert([
                    'player_id' => $player->id,
                    'category_id' => $secondary,
                ]);
            }
        }

        $underworldDenizenPlayers = [
            [
                'name' => 'Underworld Goblin Lineman',
                'plural_name' => 'Underworld Goblin Linemen',
                'ma' => '6',
                'st' => '2',
                'ag' => '3',
                'pa' => '4',
                'av' => '8',
                'limit' => 12,
                'cost' => 40000,
                'big' => false,
                'line' => true,
                'team_id' => 27,
                'skills' => [5],
                'traits' => [32, 35],
                'primaries' => [1, 3],
                'secondaries' => [2, 5],
            ],
            [
                'name' => 'Underworld Snotling',
                'plural_name' => 'Underworld Snotlings',
                'ma' => '5',
                'st' => '1',
                'ag' => '3',
                'pa' => '5',
                'av' => '6',
                'limit' => 6,
                'cost' => 15000,
                'big' => false,
                'line' => false,
                'team_id' => 27,
                'skills' => [5, 9],
                'traits' => [32, 35, 36, 39],
                'primaries' => [1, 3],
                'secondaries' => [2],
            ],
            [
                'name' => 'Skaven Clanrat',
                'plural_name' => 'Skaven Clanrats',
                'ma' => '7',
                'st' => '3',
                'ag' => '3',
                'pa' => '4',
                'av' => '8',
                'limit' => 3,
                'cost' => 50000,
                'big' => false,
                'line' => false,
                'team_id' => 27,
                'skills' => [],
                'traits' => [8],
                'primaries' => [2, 3],
                'secondaries' => [1, 5],
            ],
            [
                'name' => 'Skaven Blitzer',
                'plural_name' => 'Skaven Blitzer',
                'ma' => '7',
                'st' => '3',
                'ag' => '3',
                'pa' => '5',
                'av' => '9',
                'limit' => 1,
                'cost' => 90000,
                'big' => false,
                'line' => false,
                'team_id' => 27,
                'skills' => [13],
                'traits' => [8],
                'primaries' => [2, 3, 5],
                'secondaries' => [1, 4],
            ],
            [
                'name' => 'Gutter Runner',
                'plural_name' => 'Gutter Runner',
                'ma' => '9',
                'st' => '2',
                'ag' => '2',
                'pa' => '4',
                'av' => '8',
                'limit' => 1,
                'cost' => 85000,
                'big' => false,
                'line' => false,
                'team_id' => 27,
                'skills' => [5],
                'traits' => [8],
                'primaries' => [1, 2, 3],
                'secondaries' => [4, 5],
            ],
            [
                'name' => 'Skaven Thrower',
                'plural_name' => 'Skaven Thrower',
                'ma' => '7',
                'st' => '3',
                'ag' => '3',
                'pa' => '2',
                'av' => '8',
                'limit' => 1,
                'cost' => 85000,
                'big' => false,
                'line' => false,
                'team_id' => 27,
                'skills' => [24, 48],
                'traits' => [8],
                'primaries' => [2, 3, 4],
                'secondaries' => [1, 5],
            ],
            [
                'name' => 'Mutant Rat Ogre',
                'plural_name' => 'Mutant Rat Ogre',
                'ma' => '6',
                'st' => '5',
                'ag' => '4',
                'pa' => '0',
                'av' => '9',
                'limit' => 1,
                'cost' => 150000,
                'big' => true,
                'line' => false,
                'team_id' => 27,
                'skills' => [19, 35, 58],
                'traits' => [1, 23],
                'primaries' => [3, 5],
                'secondaries' => [1, 2],
            ],
            [
                'name' => 'Underworld Troll',
                'plural_name' => 'Underworld Troll',
                'ma' => '4',
                'st' => '5',
                'ag' => '5',
                'pa' => '5',
                'av' => '10',
                'limit' => 1,
                'cost' => 115000,
                'big' => true,
                'line' => false,
                'team_id' => 27,
                'skills' => [58],
                'traits' => [9, 23, 29, 30, 31, 40],
                'primaries' => [3, 5],
                'secondaries' => [1, 2, 4],
            ],
        ];
        foreach ($underworldDenizenPlayers as $underworldDenizenPlayer) {

            $skills = $underworldDenizenPlayer['skills'];
            $traits = $underworldDenizenPlayer['traits'];
            $primaries = $underworldDenizenPlayer['primaries'];
            $secondaries = $underworldDenizenPlayer['secondaries'];

            unset(
                $underworldDenizenPlayer['skills'],
                $underworldDenizenPlayer['traits'],
                $underworldDenizenPlayer['primaries'],
                $underworldDenizenPlayer['secondaries']
            );

            $player = \App\Models\Player::updateOrCreate($underworldDenizenPlayer);


            foreach ($skills as $skill) {
                DB::table('player_player_skills')->insert([
                    'player_id' => $player->id,
                    'player_skill_id' => $skill,
                ]);
            }

            foreach ($traits as $trait) {
                DB::table('player_player_traits')->insert([
                    'player_id' => $player->id,
                    'player_trait_id' => $trait,
                ]);
            }

            foreach ($primaries as $primary) {
                DB::table('player_primaries')->insert([
                    'player_id' => $player->id,
                    'category_id' => $primary,
                ]);
            }

            foreach ($secondaries as $secondary) {
                DB::table('player_secondaries')->insert([
                    'player_id' => $player->id,
                    'category_id' => $secondary,
                ]);
            }
        }

        $vampirePlayers = [
            [
                'name' => 'Thrall Lineman',
                'plural_name' => 'Thrall Linemen',
                'ma' => '6',
                'st' => '3',
                'ag' => '3',
                'pa' => '4',
                'av' => '8',
                'limit' => 16,
                'cost' => 40000,
                'big' => false,
                'line' => true,
                'team_id' => 28,
                'skills' => [],
                'traits' => [],
                'primaries' => [2],
                'secondaries' => [1, 5],
            ],
            [
                'name' => 'Vampire Blitzer',
                'plural_name' => 'Vampire Blitzers',
                'ma' => '6',
                'st' => '4',
                'ag' => '2',
                'pa' => '5',
                'av' => '9',
                'limit' => 2,
                'cost' => 110000,
                'big' => false,
                'line' => false,
                'team_id' => 28,
                'skills' => [56],
                'traits' => [13, 19, 31],
                'primaries' => [1, 2, 5],
                'secondaries' => [],
            ],
            [
                'name' => 'Vampire Runner',
                'plural_name' => 'Vampire Runners',
                'ma' => '8',
                'st' => '3',
                'ag' => '2',
                'pa' => '4',
                'av' => '8',
                'limit' => 2,
                'cost' => 100000,
                'big' => false,
                'line' => false,
                'team_id' => 28,
                'skills' => [],
                'traits' => [12, 19, 31],
                'primaries' => [1, 2],
                'secondaries' => [4, 5],
            ],
            [
                'name' => 'Vampire Thrower',
                'plural_name' => 'Vampire Throwers',
                'ma' => '6',
                'st' => '4',
                'ag' => '2',
                'pa' => '2',
                'av' => '9',
                'limit' => 2,
                'cost' => 110000,
                'big' => false,
                'line' => false,
                'team_id' => 28,
                'skills' => [48],
                'traits' => [12, 19, 31],
                'primaries' => [1, 2, 4],
                'secondaries' => [5],
            ],
            [
                'name' => 'Vargheist',
                'plural_name' => 'Vargheist',
                'ma' => '5',
                'st' => '5',
                'ag' => '4',
                'pa' => '0',
                'av' => '10',
                'limit' => 1,
                'cost' => 150000,
                'big' => true,
                'line' => false,
                'team_id' => 28,
                'skills' => [19, 28],
                'traits' => [13, 23, 31],
                'primaries' => [5],
                'secondaries' => [1, 2],
            ],
        ];
        foreach ($vampirePlayers as $vampirePlayer) {
            $skills = $vampirePlayer['skills'];
            $traits = $vampirePlayer['traits'];
            $primaries = $vampirePlayer['primaries'];
            $secondaries = $vampirePlayer['secondaries'];

            unset(
                $vampirePlayer['skills'],
                $vampirePlayer['traits'],
                $vampirePlayer['primaries'],
                $vampirePlayer['secondaries']
            );

            $player =  \App\Models\Player::updateOrCreate($vampirePlayer);

            foreach ($skills as $skill) {
                DB::table('player_player_skills')->insert([
                    'player_id' => $player->id,
                    'player_skill_id' => $skill,
                ]);
            }

            foreach ($traits as $trait) {
                DB::table('player_player_traits')->insert([
                    'player_id' => $player->id,
                    'player_trait_id' => $trait,
                ]);
            }

            foreach ($primaries as $primary) {
                DB::table('player_primaries')->insert([
                    'player_id' => $player->id,
                    'category_id' => $primary,
                ]);
            }

            foreach ($secondaries as $secondary) {
                DB::table('player_secondaries')->insert([
                    'player_id' => $player->id,
                    'category_id' => $secondary,
                ]);
            }
        };

        $woodElfPlayers = [
            [
                'name' => 'Wood Elf Lineman',
                'plural_name' => 'Wood Elf Linemen',
                'ma' => '7',
                'st' => '3',
                'ag' => '2',
                'pa' => '4',
                'av' => '8',
                'limit' => 12,
                'cost' => 70000,
                'big' => false,
                'line' => true,
                'team_id' => 29,
                'skills' => [],
                'traits' => [],
                'primaries' => [1, 2],
                'secondaries' => [5],
            ],
            [
                'name' => 'Catcher',
                'plural_name' => 'Catchers',
                'ma' => '8',
                'st' => '2',
                'ag' => '2',
                'pa' => '4',
                'av' => '8',
                'limit' => 4,
                'cost' => 95000,
                'big' => false,
                'line' => false,
                'team_id' => 29,
                'skills' => [1, 5],
                'traits' => [],
                'primaries' => [1, 2],
                'secondaries' => [4, 5],
            ],
            [
                'name' => 'Thrower',
                'plural_name' => 'Throwers',
                'ma' => '7',
                'st' => '3',
                'ag' => '3',
                'pa' => '2',
                'av' => '8',
                'limit' => 2,
                'cost' => 95000,
                'big' => false,
                'line' => false,
                'team_id' => 29,
                'skills' => [48],
                'traits' => [],
                'primaries' => [1, 2, 4],
                'secondaries' => [5],
            ],
            [
                'name' => 'Wardancer',
                'plural_name' => 'Wardancers',
                'ma' => '8',
                'st' => '3',
                'ag' => '2',
                'pa' => '2',
                'av' => '8',
                'limit' => 2,
                'cost' => 125000,
                'big' => false,
                'line' => false,
                'team_id' => 29,
                'skills' => [5, 7, 13],
                'traits' => [],
                'primaries' => [1, 2],
                'secondaries' => [4, 5],
            ],
            [
                'name' => 'Loren Forest Treeman',
                'plural_name' => 'Loren Forest Treeman',
                'ma' => '2',
                'st' => '6',
                'ag' => '5',
                'pa' => '5',
                'av' => '11',
                'limit' => 1,
                'cost' => 120000,
                'big' => true,
                'line' => false,
                'team_id' => 29,
                'skills' => [58, 62, 63, 64],
                'traits' => [23, 38, 40],
                'primaries' => [5],
                'secondaries' => [1, 2],
            ],
        ];
        foreach ($woodElfPlayers as $woodElfPlayer) {

            $skills = $woodElfPlayer['skills'];
            $traits = $woodElfPlayer['traits'];
            $primaries = $woodElfPlayer['primaries'];
            $secondaries = $woodElfPlayer['secondaries'];

            unset(
                $woodElfPlayer['skills'],
                $woodElfPlayer['traits'],
                $woodElfPlayer['primaries'],
                $woodElfPlayer['secondaries']
            );

            $player = \App\Models\Player::updateOrCreate($woodElfPlayer);


            foreach ($skills as $skill) {
                DB::table('player_player_skills')->insert([
                    'player_id' => $player->id,
                    'player_skill_id' => $skill,
                ]);
            }

            foreach ($traits as $trait) {
                DB::table('player_player_traits')->insert([
                    'player_id' => $player->id,
                    'player_trait_id' => $trait,
                ]);
            }

            foreach ($primaries as $primary) {
                DB::table('player_primaries')->insert([
                    'player_id' => $player->id,
                    'category_id' => $primary,
                ]);
            }

            foreach ($secondaries as $secondary) {
                DB::table('player_secondaries')->insert([
                    'player_id' => $player->id,
                    'category_id' => $secondary,
                ]);
            }
        }
    }
}
