<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StarSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $starPlayers = [
            [
                'name' => 'Akhorne the Squirrel',
                'ma' => '7',
                'st' => '1',
                'ag' => '2',
                'pa' => '0',
                'av' => '6',
                'cost' => 80000,
                'skills' => [5, 6, 9, 14, 19, 28],
                'traits' => [23, 26, 35, 39],
                'special' => 'Blind Rage',
                'description' => 'Akhorne may choose to re-roll the D6 when rolling for the Dauntless skill.',
            ],
            [
                'name' => 'Barik Farblast',
                'ma' => '6',
                'st' => '3',
                'ag' => '4',
                'pa' => '3',
                'av' => '9',
                'cost' => 80000,
                'skills' => [24, 40, 44, 48, 64],
                'traits' => [23, 33],
                'special' => 'Blast It!',
                'description' => 'Once per game, when Barik makes a Hail Mary Pass, he may re-roll any scatter results for determining where the ball lanes, and any friendly player attempting to catch the ball gains an additional +1 modifier to the roll.',
            ],
            [
                'name' => 'Bilerot Vomitflesh',
                'ma' => '4',
                'st' => '5',
                'ag' => '4',
                'pa' => '6',
                'av' => '10',
                'cost' => 180000,
                'skills' => [16, 29, 31],
                'traits' => [23],
                'special' => 'Putrid Regurgitation',
                'description' => 'Once per game, Bilerot may use the Projectile Vomit Special Action. This may still be used even if Bilerot has already performed a Block action this turn.',
            ],
            [
                'name' => 'The Black Gobbo',
                'ma' => '6',
                'st' => '2',
                'ag' => '3',
                'pa' => '3',
                'av' => '9',
                'cost' => 225000,
                'skills' => [5, 9, 10, 29],
                'traits' => [14, 22, 34, 35],
                'special' => 'Sneakiest of the Lot',
                'description' => 'If your team includes the Black Gobbo, you may commit two Foul actions per team turn, provided one of your Foul actions is committed by the Black Gobbo himself.'
            ],
            [
                'name' => 'Boa Kon\'ssstriktr',
                'ma' => '6',
                'st' => '3',
                'ag' => '3',
                'pa' => '4',
                'av' => '9',
                'cost' => 200000,
                'skills' => [5, 8, 9, 35],
                'traits' => [19, 23],
                'special' => 'Look into my Eyes',
                'description' => 'Once per game, if Boa starts his activation marking an opposition player with the ball, he may roll a D6. On a 1, nothing happens. On a 2+ the opposition player loses possession of the ball, Boa immediately gains possession of the ball and Boa’s activation immediately ends.',
            ],
            [
                'name' => 'Bomber Dribblesnot',
                'ma' => '6',
                'st' => '2',
                'ag' => '3',
                'pa' => '3',
                'av' => '8',
                'cost' => 50000,
                'skills' => [5, 39],
                'traits' => [14, 23, 32, 33, 35],
                'special' => 'Kaboom!',
                'description' => 'Once per game, if an opposition player catches a Bomb thrown by Bomber, you can choose to have it explode immediately rather than rolling to see if the player can throw it again.',
            ],
            [
                'name' => 'Bryce ‘The Slice’ Cambuel',
                'ma' => '5',
                'st' => '3',
                'ag' => '4',
                'pa' => '0',
                'av' => '9',
                'cost' => 130000,
                'skills' => [62, 64],
                'traits' => [16, 23, 31, 33, ],
                'special' => 'Ghostly Flames',
                'description' => 'Once per half, when Bryce makes the Chainsaw Attack Special action as part of a Blitz action, he may add +4 to the Armour roll against an opponent rather +3.',
            ],
            [
                'name' => '‘Captain’ Karina Von Riesz',
                'ma' => '7',
                'st' => '4',
                'ag' => '2',
                'pa' => '4',
                'av' => '9',
                'cost' => 230000,
                'skills' => [5, 6],
                'traits' => [12, 19, 23, 31],
                'special' => 'Tasty Morsel',
                'description' => 'Once per game, when Karina fails a Bloodlust roll, she may choose to bite an opposition player with a ST of 3 or lower as if they were a Thrall Lineman team-mate. Karina may note bite Star Players with this special rule.',
            ],
            [
                'name' => 'Count Luthor von Drakenborg',
                'ma' => '6',
                'st' => '5',
                'ag' => '2',
                'pa' => '3',
                'av' => '10',
                'cost' => 340000,
                'skills' => [9, 13],
                'traits' => [19, 23, 31],
                'special' => 'Star of the Show',
                'description' => 'Once per game, when Count Luthor scores a touchdown, his controlling coach may gain one team re-roll. If this re-roll has not been used by the end of the next drive, it is lost.',
            ],
            [
                'name' => 'Cindy Piewhistle',
                'ma' => '5',
                'st' => '2',
                'ag' => '3',
                'pa' => '3',
                'av' => '7',
                'cost' => 50000,
                'skills' => [5, 39, ],
                'traits' => [14, 23, 33, 35],
                'special' => 'All You Can Eat',
                'description' => 'Once per game, Cindy may perform two Throw Bomb Special actions rather than one, though she must commit to doing so before making the first action. If she does, immediately after performing the second Throw Bomb Special action roll a D6. On a 1-3 Cindy is immediately Sent Off.',
            ],
            [
                'name' => 'Deeproot Strongbranch',
                'ma' => '2',
                'st' => '7',
                'ag' => '5',
                'pa' => '4',
                'av' => '11',
                'cost' => 280000,
                'skills' => [13, 59, 62, 63, 64],
                'traits' => [23, 40, 41],
                'special' => 'Reliable',
                'description' => 'If Deeproot fumbles a Throw Team-mate action, the player that was to be thrown will bounce as normal but will automatically land safely.',
            ],
            [
                'name' => 'Dribl',
                'ma' => '8',
                'st' => '2',
                'ag' => '3',
                'pa' => '4',
                'av' => '8',
                'cost' => 190000,
                'skills' => [5, 9, 10, 16],
                'traits' => [23, 35],
                'special' => 'A Sneaky Pair',
                'description' => 'Dribl & Drull must be hired as a pair and count as two Star Players. Additionally, whenever Dribl or Drull perform either a Stab or Foul action against an opposition player marked by both Dribl & Drull, they may apply a +1 modifier to the injury roll.',
            ],
            [
                'name' => 'Drull',
                'ma' => '8',
                'st' => '2',
                'ag' => '3',
                'pa' => '4',
                'av' => '8',
                'cost' => 190000,
                'skills' => [5, 9],
                'traits' => [23, 34, 35],
                'special' => 'A Sneaky Pair',
                'description' => 'Dribl & Drull must be hired as a pair and count as two Star Players. Additionally, whenever Dribl or Drull perform either a Stab or Foul action against an opposition player marked by both Dribl & Drull, they may apply a +1 modifier to the injury roll.',
            ],
            [
                'name' => 'Eldril Sidewinder',
                'ma' => '8',
                'st' => '3',
                'ag' => '2',
                'pa' => '5',
                'av' => '8',
                'cost' => 230000,
                'skills' => [1, 5, 46, 47],
                'traits' => [19, 23],
                'special' => 'Mesmerizing Gaze',
                'description' => 'Once per game, Eldril may re-roll a failed Agility test when attempting to use the Hypnotic Gaze trait.',
            ],
            [
                'name' => 'Estelle La Veneaux',
                'ma' => '6',
                'st' => '3',
                'ag' => '3',
                'pa' => '4',
                'av' => '8',
                'cost' => 190000,
                'skills' => [5, 9, 29, 55],
                'traits' => [23],
                'special' => 'Baleful Hex',
                'description' => 'One per game, at the beginning of Estelle’s activation, choose an opposition player within five squares and roll a D6. On a 2+ the chosen player loses their Tackle Zone and cannot be activated until the end of the opposition’s next team turn.',
            ],
            [
                'name' => 'Frank ‘n’ Stein',
                'ma' => '4',
                'st' => '5',
                'ag' => '4',
                'pa' => '0',
                'av' => '10',
                'cost' => 250000,
                'skills' => [53, 58, 62, 64],
                'traits' => [23, 31],
                'special' => 'Brutal Block',
                'description' => 'Once per game, when Frank ‘n’ Stein makes an Injury roll against an opponents a result of a Block action, he may choose to add an additional +1 modifier to the Injury roll. This modifier may be applied after the roll has been made.',
            ],
            [
                'name' => 'Fungus the Loon',
                'ma' => '4',
                'st' => '7',
                'ag' => '3',
                'pa' => '0',
                'av' => '8',
                'cost' => 80000,
                'skills' => [58],
                'traits' => [10, 23, 26, 33, 35],
                'special' => 'Whirling Dervish',
                'description' => 'Once per activation, Fungus may re-roll the D6 when determining which direction he moves in.',
            ],
//            [
//                'name' => '',
//                'ma' => '6',
//                'st' => '3',
//                'ag' => '3',
//                'pa' => '4',
//                'av' => '8',
//                'cost' => 0,
//                'skills' => [],
//                'traits' => [],
//                'special' => '',
//                'description' => '',
//            ],
        ];
        foreach ($starPlayers as $starPlayer) {
            $skills = $starPlayer['skills'];
            $traits = $starPlayer['traits'];
            unset($starPlayer['skills'], $starPlayer['traits'] );

            $player = \App\Models\StarPlayer::updateOrCreate($starPlayer);

            foreach ($skills as $skill) {
                DB::table('star_player_skills')->insert([
                    'player_id' => $player->id,
                    'player_skill_id' => $skill,
                ]);
            }

            foreach ($traits as $trait) {
                DB::table('star_player_traits')->insert([
                    'player_id' => $player->id,
                    'player_trait_id' => $trait,
                ]);
            }
        }
    }
}
