<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use mysql_xdevapi\Table;

class TeamSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $regions = [
            [
                'name' => 'Badlands Brawl',
                'description' => 'The Badlands Brawl is home to a great many Greenskin and Ogre teams. Unsurprisingly, Blood Bowl in the Badlands is a brutal, violent and extremely dishonest affair, but these are virtues that make it ever popular with the fans!',
            ],
            [
                'name' => 'Elven Kingdoms League',
                'description' => 'One of the oldest leagues in the known world, the Elven Kingdoms League prides itself on upholding the traditions of classically- correct Blood Bowl. Many find it dull but, in terms of elegance and expertise, it is second to none.',
            ],
            [
                'name' => 'Halfling Thimble Cup',
                'description' => 'Traditionally, Halflings have been associated more closely with the culinary arts than the world of professional sport. In recent years this has changed greatly, and the Thimble Cup has become a mainstay on the Blood Bowl calendar.',
            ],
            [
                'name' => 'Lustrian Superleague',
                'description' => 'The Lustrian Superleague is the oldest competition in the world, and home to many of the sport’s most ancient teams. For millennia it was closed to all except Lizardmen teams, but in recent years has opened its ranks to welcome other races.',
            ],
            [
                'name' => 'Old World Classic',
                'description' => 'Since the collapse of the NAF, Blood Bowl in the Old World has struggled. But in recent years the sport’s fortunes have improved, largely thanks to the founding of the Old World Classic, a competition that draws together many minor leagues.',
            ],
            [
                'name' => 'Sylvanian Spotlight',
                'description' => 'For many decades the Sylvanian Spotlight was the only place most Undead teams could hope to compete. In recent years, the development of sun protection magic has changed this, allowing the athletically inclined Undead to play at anytime, anywhere!',
            ],
            [
                'name' => 'Underworld Challenge',
                'description' => 'A secretive league that, until only recently, many pundits refused to believe even existed! The Underworld Challenge hosts many strange and diverse teams, the likes of which are rarely seen in daylight. For a horrifying spectacle, it is second to none!',
            ],
            [
                'name' => 'Worlds Edge Superleague',
                'description' => 'Played on high peaks under clear skies, the Superleague is the pride of the Dwarfen realm. Games last many hours as rules are carefully checked and checked again, ensuring that the purity of Roze-El’s sacred work is maintained. Interestingly, in Dwarfish ‘venerable’ and ‘dull’ are spelled the same.',
            ],
        ];

        foreach ($regions as $insert) {
            \App\Models\Region::updateOrInsert($insert);
        }

        $rules = [
            [
                'name' => 'Bribery and Corruption',
            ],
            [
                'name' => 'Favoured of Chaos Undivided',
            ],
            [
                'name' => 'Favoured of Khorne',
            ],
            [
                'name' => 'Favoured of Nurgle',
            ],
            [
                'name' => 'Favoured of Slaanesh',
            ],
            [
                'name' => 'Favoured of Tzeentch',
            ],
            [
                'name' => 'Low Cost Linesman',
            ],
            [
                'name' => 'Masters of Undeath',
            ],
            [
                'name' => 'Vampire Lord',
            ],
        ];

        foreach ($rules as $insert) {
            \App\Models\TeamRule::updateOrInsert($insert);
        }

        $ruleDescriptions = [
            // Bribery and Corruption
            [
                'rule_id' => 1,
                'order' => 0,
                'indentation' => 0,
                'text' => 'Many teams are legendarily unscrupulous. Such teams excel in violence and dirty play. What’s more, they’re not afraid to exert their influence on officials, either by extortion or blackmail, encouraging them to turn a blind eye to even the most illegal of illegal procedures!',
                'narrative' => true,
            ],
            [
                'rule_id' => 1,
                'order' => 1,
                'indentation' => 0,
                'text' => 'It takes a strong-willed referee indeed to risk making an enemy of a team so renowned for reacting… poorly towards any official that would rebuke its behaviour:',
                'narrative' => false,
            ],
            [
                'rule_id' => 1,
                'order' => 2,
                'indentation' => 1,
                'text' => 'Once per game, when rolling on the Argue the Call table, you may re-roll a roll of a natural 1',
                'narrative' => false,
            ],
            [
                'rule_id' => 1,
                'order' => 3,
                'indentation' => 0,
                'text' => 'In addition, a team with this special rule can purchase certain Inducements for a reduced price, as noted in the description of that Inducement.',
                'narrative' => false,
            ],
            [
                'rule_id' => 2,
                'order' => 0,
                'indentation' => 0,
                'text' => "This team can purchase Inducements that require the 'Favoured of Chaos Undivided' special rule",
                'narrative' => false,
            ],
            [
                'rule_id' => 3,
                'order' => 0,
                'indentation' => 0,
                'text' => "This team can purchase Inducements that require the 'Favoured of Khorne' special rule",
                'narrative' => false,
            ],
            [
                'rule_id' => 4,
                'order' => 0,
                'indentation' => 0,
                'text' => "This team can purchase Inducements that require the 'Favoured of Nurgle' special rule",
                'narrative' => false,
            ],
            [
                'rule_id' => 5,
                'order' => 0,
                'indentation' => 0,
                'text' => "This team can purchase Inducements that require the 'Favoured of Slaanesh' special rule",
                'narrative' => false,
            ],
            [
                'rule_id' => 6,
                'order' => 0,
                'indentation' => 0,
                'text' => "This team can purchase Inducements that require the 'Favoured of Tzeentch' special rule",
                'narrative' => false,
            ],
            [
                'rule_id' => 7,
                'order' => 0,
                'indentation' => 0,
                'text' => "Some teams field Linemen of great skill and ability. Other teams do not and will happily take on the most useless of players to fill out their ranks. Readily available, easily replaceable and usually willing to work for pennies, such players fill gaps in the rosters, but rarely do much more!",
                'narrative' => true,
            ],
            [
                'rule_id' => 7,
                'order' => 1,
                'indentation' => 0,
                'text' => "Teams with this special rule are not very particular about the Linemen they hire. To make up for this, they don’t usually bother to pay:",
                'narrative' => false,
            ],
            [
                'rule_id' => 7,
                'order' => 2,
                'indentation' => 1,
                'text' => "In league play (but not in exhibition play), when calculating the Current Value of any permanently hired Lineman players on a team with this special rule, the Hiring Fee of that player is not included",
                'narrative' => false,
            ],
            [
                'rule_id' => 8,
                'order' => 0,
                'indentation' => 0,
                'text' => "Teams with this special rule all fall into the broader category of ‘Undead’. Usually created from the animated corpses of freshly-deceased players brought back to the game by athletically-inclined necromancers, such teams don’t always operate quite like their more vital counterparts!",
                'narrative' => true,
            ],
            [
                'rule_id' => 8,
                'order' => 1,
                'indentation' => 0,
                'text' => "The Head Coach of this team is replaced by a Necromancer. Once per game, they can ‘Raise the Dead’:",
                'narrative' => false,
            ],
            [
                'rule_id' => 8,
                'order' => 2,
                'indentation' => 1,
                'text' => "If a player on the opposing team with a Strength characteristic of 4 or less and that does not have the Regeneration or Stunty traits suffers a Casualty result of 15-16, DEAD, and if they cannot be saved by an apothecary, a new rookie Zombie Lineman player can be placed immediately in the Reserves box of this team’s dugout. Note that this may cause the team to have more than 16 players for the remainder of the game",
                'narrative' => false,
            ],
            [
                'rule_id' => 8,
                'order' => 3,
                'indentation' => 1,
                'text' => " During Step 4 of the post-game sequence, this player may be permanently hired for free if the team has fewer than 16 players on its Team Draft list, otherwise it will be lost. The player’s full value still counts towards the Team Value.",
                'narrative' => false,
            ],
            [
                'rule_id' => 8,
                'order' => 4,
                'indentation' => 0,
                'text' => "Additionally, just like the Head Coach of any other team, a Necromancer can Argue the Call when one of their players is Sent-off for committing a Foul, as long as they haven’t been sent off themselves.",
                'narrative' => false,
            ],
            [
                'rule_id' => 9,
                'order' => 0,
                'indentation' => 0,
                'text' => 'The Head Coach of this team is replaced by a Vampire Lord. Once per game, during the post-game sequence, they can \'Summon a Thrall\':',
                'narrative' => false,
            ],
            [
                'rule_id' => 9,
                'order' => 1,
                'indentation' => 1,
                'text' => 'If a player on the opposing team with a Strength characteristic of 4 or less and that did not have the Regeneration or Stunty traits suffered a Casualty result of 15 or 16, DEAD during the game, and if they could not be saved by an apothecary, during Step 4 of the post-game sequence a single new rookie Thrall Lineman may be hired permanently for free if the team has fewer than 16 players on its draft list, otherwise it will be lost. The Thrall Lineman\'s full value still counts towards the Team Value.',
                'narrative' => false,
            ],
            [
                'rule_id' => 9,
                'order' => 2,
                'indentation' => 0,
                'text' => 'Additionally, just like the Head Coach of any other team, a Vampire Lord can Argue the Call when one of their players is Sent-off for committing a Foul, as long as they haven\'t been Sent-off themselves.',
                'narrative' => false,
            ],
        ];

        foreach ($ruleDescriptions as $insert) {
            \App\Models\RuleDescription::updateOrInsert($insert);
        }

        $teams = [
            [
                'name' => 'Amazon',
                'plural_name' => 'Amazons',
                'tier' => 1,
                'apothecary' => true,
                'reroll_limit' => 8,
                'reroll_cost' => 60000,
                'is_norse' => false,
                'is_chaos' => false,
                'big_choices' => false,
                'regions' => [4],
                'rules' => [],
            ],
            [
                'name' => 'Black Orc',
                'plural_name' => 'Black Orcs',
                'tier' => 2,
                'apothecary' => true,
                'reroll_limit' => 8,
                'reroll_cost' => 60000,
                'is_norse' => false,
                'is_chaos' => false,
                'big_choices' => false,
                'regions' => [1],
                'rules' => [1],
            ],
            [
                'name' => 'Chaos Chosen',
                'plural_name' => 'Chaos Chosen',
                'tier' => 2,
                'apothecary' => true,
                'reroll_limit' => 8,
                'reroll_cost' => 60000,
                'is_norse' => false,
                'is_chaos' => true,
                'big_choices' => true,
                'regions' => [],
                'rules' => [2, 3, 4, 5, 6],
            ],
            [
                'name' => 'Chaos Dwarf',
                'plural_name' => 'Chaos Dwarves',
                'tier' => 1,
                'apothecary' => true,
                'reroll_limit' => 8,
                'reroll_cost' => 70000,
                'is_norse' => false,
                'is_chaos' => true,
                'big_choices' => false,
                'regions' => [1, 8],
                'rules' => [2, 3, 4, 5, 6],
            ],
            [
                'name' => 'Chaos Renegade',
                'plural_name' => 'Chaos Renegades',
                'tier' => 2,
                'apothecary' => true,
                'reroll_limit' => 8,
                'reroll_cost' => 70000,
                'is_norse' => false,
                'is_chaos' => true,
                'big_choices' => true,
                'regions' => [],
                'rules' => [2, 3, 4, 5, 6],
            ],
            [
                'name' => 'Dark Elf',
                'plural_name' => 'Dark Elves',
                'tier' => 1,
                'apothecary' => true,
                'reroll_limit' => 8,
                'reroll_cost' => 50000,
                'is_norse' => false,
                'is_chaos' => false,
                'big_choices' => false,
                'regions' => [2],
                'rules' => [],
            ],
            [
                'name' => 'Dwarf',
                'plural_name' => 'Dwarves',
                'tier' => 1,
                'apothecary' => true,
                'reroll_limit' => 8,
                'reroll_cost' => 50000,
                'is_norse' => false,
                'is_chaos' => false,
                'big_choices' => false,
                'regions' => [1, 8],
                'rules' => [],
            ],
            [
                'name' => 'Elven Union',
                'plural_name' => 'Elven Union',
                'tier' => 2,
                'apothecary' => true,
                'reroll_limit' => 8,
                'reroll_cost' => 50000,
                'is_norse' => false,
                'is_chaos' => false,
                'big_choices' => false,
                'regions' => [2],
                'rules' => [],
            ],
            [
                'name' => 'Gnome',
                'plural_name' => 'Gnomes',
                'tier' => 3,
                'apothecary' => true,
                'reroll_limit' => 8,
                'reroll_cost' => 60000,
                'is_norse' => false,
                'is_chaos' => false,
                'big_choices' => false,
                'regions' => [3, 5],
                'rules' => [],
            ],
            [
                'name' => 'Goblin',
                'plural_name' => 'Goblins',
                'tier' => 3,
                'apothecary' => true,
                'reroll_limit' => 8,
                'reroll_cost' => 60000,
                'is_norse' => false,
                'is_chaos' => false,
                'big_choices' => false,
                'regions' => [1, 7],
                'rules' => [1],
            ],
            [
                'name' => 'Halfling',
                'plural_name' => 'Halflings',
                'tier' => 3,
                'apothecary' => true,
                'reroll_limit' => 8,
                'reroll_cost' => 60000,
                'is_norse' => false,
                'is_chaos' => false,
                'big_choices' => false,
                'regions' => [3, 5],
                'rules' => [],
            ],
            [
                'name' => 'High Elf',
                'plural_name' => 'High Elves',
                'tier' => 2,
                'apothecary' => true,
                'reroll_limit' => 8,
                'reroll_cost' => 50000,
                'is_norse' => false,
                'is_chaos' => false,
                'big_choices' => false,
                'regions' => [2],
                'rules' => [],
            ],
            [
                'name' => 'Human',
                'plural_name' => 'Humans',
                'tier' => 1,
                'apothecary' => true,
                'reroll_limit' => 8,
                'reroll_cost' => 50000,
                'is_norse' => false,
                'is_chaos' => false,
                'big_choices' => false,
                'regions' => [5],
                'rules' => [],
            ],
            [
                'name' => 'Imperial Nobility',
                'plural_name' => 'Imperial Nobility',
                'tier' => 2,
                'apothecary' => true,
                'reroll_limit' => 8,
                'reroll_cost' => 70000,
                'is_norse' => false,
                'is_chaos' => false,
                'big_choices' => false,
                'regions' => [5],
                'rules' => [],
            ],
            [
                'name' => 'Khorne',
                'plural_name' => 'Khorne',
                'tier' => 2,
                'apothecary' => true,
                'reroll_limit' => 8,
                'reroll_cost' => 60000,
                'is_norse' => false,
                'is_chaos' => false,
                'big_choices' => false,
                'regions' => [],
                'rules' => [3],
            ],
            [
                'name' => 'Lizardmen',
                'plural_name' => 'Lizardmen',
                'tier' => 1,
                'apothecary' => true,
                'reroll_limit' => 8,
                'reroll_cost' => 70000,
                'is_norse' => false,
                'is_chaos' => false,
                'big_choices' => false,
                'regions' => [4],
                'rules' => [],
            ],
            [
                'name' => 'Necromantic Horror',
                'plural_name' => 'Necromantic Horrors',
                'tier' => 2,
                'apothecary' => false,
                'reroll_limit' => 8,
                'reroll_cost' => 70000,
                'is_norse' => false,
                'is_chaos' => false,
                'big_choices' => false,
                'regions' => [6],
                'rules' => [8],
            ],
            [
                'name' => 'Norse',
                'plural_name' => 'Norse',
                'tier' => 1,
                'apothecary' => true,
                'reroll_limit' => 8,
                'reroll_cost' => 60000,
                'is_norse' => true,
                'is_chaos' => false,
                'big_choices' => false,
                'regions' => [5],
                'rules' => [2, 3],
            ],
            [
                'name' => 'Nurgle',
                'plural_name' => 'Nurgle',
                'tier' => 2,
                'apothecary' => false,
                'reroll_limit' => 8,
                'reroll_cost' => 70000,
                'is_norse' => false,
                'is_chaos' => false,
                'big_choices' => false,
                'regions' => [],
                'rules' => [4],
            ],
            [
                'name' => 'Ogre',
                'plural_name' => 'Ogres',
                'tier' => 3,
                'apothecary' => true,
                'reroll_limit' => 8,
                'reroll_cost' => 70000,
                'is_norse' => false,
                'is_chaos' => false,
                'big_choices' => false,
                'regions' => [1, 5],
                'rules' => [7],
            ],
            [
                'name' => 'Old World Alliance',
                'plural_name' => 'Old World Alliance',
                'tier' => 1,
                'apothecary' => true,
                'reroll_limit' => 8,
                'reroll_cost' => 70000,
                'is_norse' => false,
                'is_chaos' => false,
                'big_choices' => true,
                'regions' => [5],
                'rules' => [],
            ],
            [
                'name' => 'Orc',
                'plural_name' => 'Orcs',
                'tier' => 1,
                'apothecary' => true,
                'reroll_limit' => 8,
                'reroll_cost' => 60000,
                'is_norse' => false,
                'is_chaos' => false,
                'big_choices' => false,
                'regions' => [1],
                'rules' => [],
            ],
            [
                'name' => 'Shambling Undead',
                'plural_name' => 'Shambling Undead',
                'tier' => 1,
                'apothecary' => false,
                'reroll_limit' => 8,
                'reroll_cost' => 70000,
                'is_norse' => false,
                'is_chaos' => false,
                'big_choices' => false,
                'regions' => [6],
                'rules' => [8],
            ],
            [
                'name' => 'Skaven',
                'plural_name' => 'Skaven',
                'tier' => 1,
                'apothecary' => true,
                'reroll_limit' => 8,
                'reroll_cost' => 50000,
                'is_norse' => false,
                'is_chaos' => false,
                'big_choices' => false,
                'regions' => [7],
                'rules' => [],
            ],
            [
                'name' => 'Snotling',
                'plural_name' => 'Snotlings',
                'tier' => 3,
                'apothecary' => true,
                'reroll_limit' => 8,
                'reroll_cost' => 60000,
                'is_norse' => false,
                'is_chaos' => false,
                'big_choices' => false,
                'regions' => [7],
                'rules' => [1, 7],
            ],
            [
                'name' => 'Tomb Kings',
                'plural_name' => 'Tomb Kings',
                'tier' => 2,
                'apothecary' => false,
                'reroll_limit' => 8,
                'reroll_cost' => 70000,
                'is_norse' => false,
                'is_chaos' => false,
                'big_choices' => false,
                'regions' => [6],
                'rules' => [],
            ],
            [
                'name' => 'Underworld Denizens',
                'plural_name' => 'Underworld Denizens',
                'tier' => 2,
                'apothecary' => true,
                'reroll_limit' => 8,
                'reroll_cost' => 70000,
                'is_norse' => false,
                'is_chaos' => false,
                'big_choices' => true,
                'regions' => [7],
                'rules' => [8],
            ],
            [
                'name' => 'Vampire',
                'plural_name' => 'Vampires',
                'tier' => 2,
                'apothecary' => true,
                'reroll_limit' => 8,
                'reroll_cost' => 60000,
                'is_norse' => false,
                'is_chaos' => false,
                'big_choices' => false,
                'regions' => [6],
                'rules' => [9],
            ],
            [
                'name' => 'Wood Elf',
                'plural_name' => 'Wood Elves',
                'tier' => 1,
                'apothecary' => true,
                'reroll_limit' => 8,
                'reroll_cost' => 50000,
                'is_norse' => false,
                'is_chaos' => false,
                'big_choices' => false,
                'regions' => [2],
                'rules' => [],
            ],
        ];

        foreach ($teams as $teamData) {
            $regions = $teamData['regions'];
            $rules = $teamData['rules'];
            unset($teamData['regions'], $teamData['rules']);


            $team = \App\Models\Team::updateOrInsert($teamData);
            $teamId = $team->first()->id;

            foreach ($regions as $region) {
                DB::table('team_regions')->insert([
                    'region_id' => $region,
                    'team_id' => $teamId,
                ]);
            }

            foreach ($rules as $rule) {
                DB::table('team_team_rules')->insert([
                    'team_rule_id' => $rule,
                    'team_id' => $teamId,
                ]);
            }
        };
    }
}
