<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SkillSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $skillCategories = [
            [
                'name' => 'Agility'
            ],
            [
                'name' => 'General'
            ],
            [
                'name' => 'Mutations'
            ],
            [
                'name' => 'Passing'
            ],
            [
                'name' => 'Strength'
            ],
        ];

        foreach ($skillCategories as $category) {
            \App\Models\SkillCategory::updateOrInsert($category);
        }

        $agilitySkills = [
            [
                'name' => 'Catch',
                'skill_category_id' => 1,
                'reference' => 2,
            ],
            [
                'name' => 'Defensive',
                'skill_category_id' => 1,
                'reference' => 2,
            ],
            [
                'name' => 'Diving Catch',
                'skill_category_id' => 1,
                'reference' => 2,
            ],
            [
                'name' => 'Diving Tackle',
                'skill_category_id' => 1,
                'reference' => 2,
            ],
            [
                'name' => 'Dodge',
                'skill_category_id' => 1,
                'reference' => 2,
            ],
            [
                'name' => 'Jump Up',
                'skill_category_id' => 1,
                'reference' => 2,
            ],
            [
                'name' => 'Leap',
                'skill_category_id' => 1,
                'reference' => 2,
            ],
            [
                'name' => 'Safe Pair of Hands',
                'skill_category_id' => 1,
                'reference' => 2,
            ],
            [
                'name' => 'Sidestep',
                'skill_category_id' => 1,
                'reference' => 2,
            ],
            [
                'name' => 'Sneaky Git',
                'skill_category_id' => 1,
                'reference' => 2,
            ],
            [
                'name' => 'Sprint',
                'skill_category_id' => 1,
                'reference' => 2,
            ],
            [
                'name' => 'Sure Feet',
                'skill_category_id' => 1,
                'reference' => 2,
            ],
        ];

        foreach ($agilitySkills as $aSkill) {
            \App\Models\PlayerSkill::updateOrInsert($aSkill);
        }

        $agilityDescriptions = [
            // Catch
            [
                'skill_id' => 1,
                'indentation' => 0,
                'order' => 0,
                'text' => 'This player may re-roll a failed Agility test when attempting to catch the ball.',
            ],
            // Defensive
            [
                'skill_id' => 2,
                'indentation' => 0,
                'order' => 0,
                'text' => 'During your opponent’s team turn (but not during your own team turn), any opposition players being Marked by this player cannot use the Guard skill.',
            ],
            // Diving Catch
            [
                'skill_id' => 3,
                'indentation' => 0,
                'order' => 0,
                'text' => 'This player may attempt to catch the ball if a pass, throw-in or kick-off causes it to land in a square within their Tackle Zone after scattering or deviating. This Skill does not allow this player to attempt to catch the ball if it bounces into a square within their Tackle Zone.',
            ],
            [
                'skill_id' => 3,
                'indentation' => 0,
                'order' => 1,
                'text' => 'Additionally, this player may apply a +1 modifier to any attempt to catch an accurate pass if they occupy the target square.',
            ],
            // Diving Tackle
            [
                'skill_id' => 4,
                'indentation' => 0,
                'order' => 0,
                'text' => 'Should an active opposition player that is attempting to Dodge, Jump or Leap in order to vacate a square in which they are being Marked by this player pass their Agility test, you may declare that this player will use this Skill. Your opponent must immediately subtract 2 from the result of the Agility test. This player is then Placed Prone in the square vacated by the opposition player.',
            ],
            [
                'skill_id' => 4,
                'indentation' => 0,
                'order' => 1,
                'text' => 'If the opposition player was being Marked by more than one player with this Skill, only one player may use it.',
            ],
            // Dodge
            [
                'skill_id' => 5,
                'indentation' => 0,
                'order' => 0,
                'text' => 'Once per team turn, during their activation, this player may re-roll a failed Agility test when attempting to Dodge.',
            ],
            [
                'skill_id' => 5,
                'indentation' => 0,
                'order' => 1,
                'text' => 'Additionally, this player may choose to use this Skill when they are the target of a Block action and a Stumble result is applied against them.',
            ],
            // Jump Up
            [
                'skill_id' => 6,
                'indentation' => 0,
                'order' => 0,
                'text' => 'If this player is Prone they may stand up for free.',
            ],
            [
                'skill_id' => 6,
                'indentation' => 0,
                'order' => 1,
                'text' => 'Additionally, if this player is Prone when activated, they may attempt to Jump Up and perform a Block action. This player makes an Agility test, applying a +1 modifier. If this test is passed, they stand up and may perform a Block action. If the test is failed, they remain Prone and their activation ends.',
            ],
            [
                'skill_id' => 6,
                'indentation' => 0,
                'order' => 2,
                'text' => 'This Skill may still be used if the player is Prone or has lost their Tackle Zone.',
            ],
            // Leap
            [
                'skill_id' => 7,
                'indentation' => 0,
                'order' => 0,
                'text' => 'During their movement, instead of jumping over a single square that is occupied by a Prone or Stunned player, a player with this Skill may choose to Leap over any single adjacent square, including unoccupied squares and squares occupied by Standing players.',
            ],
            [
                'skill_id' => 7,
                'indentation' => 0,
                'order' => 1,
                'text' => 'Additionally, this player may reduce any negative modifier applied to the Agility test when they attempt to Jump over a Prone or Stunned player, or to Leap over an empty square or a square occupied by a Standing player by 1, to a minimum of -1.',
            ],
            [
                'skill_id' => 7,
                'indentation' => 0,
                'order' => 2,
                'text' => 'A player with this Skill cannot also have the Pogo Stick trait.',
            ],
            // Safe Pair of Hands
            [
                'skill_id' => 8,
                'indentation' => 0,
                'order' => 0,
                'text' => 'If this player is Knocked Down or Placed Prone (but not if they Fall Over) whilst in possession of the ball, the ball does not bounce. Instead, you may place the ball in an unoccupied square adjacent to the one this player occupies when they become Prone.',
            ],
            [
                'skill_id' => 8,
                'indentation' => 0,
                'order' => 1,
                'text' => 'This Skill may still be used if the player is Prone.',
            ],
            // Sidestep
            [
                'skill_id' => 9,
                'indentation' => 0,
                'order' => 0,
                'text' => 'If this player is pushed back for any reason, they are not moved into a square chosen by the opposing coach. Instead, you may choose any unoccupied square adjacent to this player. This player is pushed back into that square instead. If there are no unoccupied squares adjacent to this player, this Skill cannot be used.',
            ],
            // Sneaky Git
            [
                'skill_id' => 10,
                'indentation' => 0,
                'order' => 0,
                'text' => 'When this player performs a Foul action, they are not Sent-off for committing a Foul should they roll a natural double on the Armour roll.',
            ],
            // Sprint
            [
                'skill_id' => 11,
                'indentation' => 0,
                'order' => 0,
                'text' => 'When this player performs any action that includes movement, they may attempt to Rush three times, rather than the usual two.',
            ],
            // Sure Feet
            [
                'skill_id' => 12,
                'indentation' => 0,
                'order' => 0,
                'text' => 'Once per team turn, during their activation, this player may re-roll the D6 when attempting to Rush.',
            ],
        ];

        foreach ($agilityDescriptions as $aDescription) {
            \App\Models\SkillDescription::updateOrInsert($aDescription);
        }

        $generalSkills = [
            [
                'name' => 'Block',
                'skill_category_id' => 2,
                'reference' => 2,
            ],
            [
                'name' => 'Dauntless',
                'skill_category_id' => 2,
                'reference' => 2,
            ],
            [
                'name' => 'Dirty Player (+X)',
                'skill_category_id' => 2,
                'reference' => 1,
            ],
            [
                'name' => 'Dirty Player (+1)',
                'skill_category_id' => 2,
                'reference' => 0,
            ],
            [
                'name' => 'Dirty Player (+2)',
                'skill_category_id' => 2,
                'reference' => 0,
            ],
            [
                'name' => 'Fend',
                'skill_category_id' => 2,
                'reference' => 2,
            ],
            [
                'name' => 'Frenzy',
                'skill_category_id' => 2,
                'reference' => 2,
            ],
            [
                'name' => 'Kick',
                'skill_category_id' => 2,
                'reference' => 2,
            ],
            [
                'name' => 'Pro',
                'skill_category_id' => 2,
                'reference' => 2,
            ],
            [
                'name' => 'Shadowing',
                'skill_category_id' => 2,
                'reference' => 2,
            ],
            [
                'name' => 'Strip Ball',
                'skill_category_id' => 2,
                'reference' => 2,
            ],
            [
                'name' => 'Sure Hands',
                'skill_category_id' => 2,
                'reference' => 2,
            ],
            [
                'name' => 'Tackle',
                'skill_category_id' => 2,
                'reference' => 2,
            ],
            [
                'name' => 'Wrestle',
                'skill_category_id' => 2,
                'reference' => 2,
            ],
        ];

        foreach ($generalSkills as $gSkill) {
            \App\Models\PlayerSkill::updateOrInsert($gSkill);
        }

        $generalDescriptions = [
            // Block
            [
                'skill_id' => 13,
                'indentation' => 0,
                'order' => 0,
                'text' => 'When a Both Down result is applied during a Block action, this player may choose to ignore it and not be Knocked Down.',
            ],
            // Dauntless
            [
                'skill_id' => 14,
                'indentation' => 0,
                'order' => 0,
                'text' => 'When this player performs a Block action (on its own or as part of a Blitz action), if the nominated target has a higher Strength characteristic than this player before counting offensive or defensive assists but after applying any other modifiers, roll a D6 and add this player’s Strength characteristic to the result. If the total is higher than the target’s Strength characteristic, this player increases their Strength characteristic to be equal to that of the target of the Block action, before counting offensive or defensive assists, for the duration of this Block action.',
            ],
            [
                'skill_id' => 14,
                'indentation' => 0,
                'order' => 1,
                'text' => 'If this player has another Skill that allows them to perform more than one Block action, such as Frenzy, they must make a Dauntless roll before each separate Block action is performed.',
            ],
            // Dirty Player (+X)
            [
                'skill_id' => 15,
                'indentation' => 0,
                'order' => 0,
                'text' => 'When this player commits a Foul action, either the Armour roll or Injury roll made against the victim may be modified by the amount shown in brackets. This modifier may be applied after the roll has been made.',
            ],
            // Dirty Player (+1)
            [
                'skill_id' => 16,
                'indentation' => 0,
                'order' => 0,
                'text' => 'When this player commits a Foul action, either the Armour roll or Injury roll made against the victim may be modified by +1. This modifier may be applied after the roll has been made.',
            ],
            // Dirty Player (+2)
            [
                'skill_id' => 17,
                'indentation' => 0,
                'order' => 0,
                'text' => 'When this player commits a Foul action, either the Armour roll or Injury roll made against the victim may be modified by +2. This modifier may be applied after the roll has been made.',
            ],
            // Fend
            [
                'skill_id' => 18,
                'indentation' => 0,
                'order' => 0,
                'text' => 'If this player is pushed back as the result of any block dice result being applied against them, they may choose to prevent the player that pushed them back from following-up. However, the player that pushed them back may continue to move as part of a Blitz action if they have Movement Allowance remaining or by Rushing.',
            ],
            [
                'skill_id' => 18,
                'indentation' => 0,
                'order' => 1,
                'text' => 'This Skill cannot be used when this player is chain-pushed, against a player with the Ball & Chain trait or against a player with the Juggernaut skill that performed the Block action as part of a Blitz.',
            ],
            // Frenzy
            [
                'skill_id' => 19,
                'indentation' => 0,
                'order' => 0,
                'text' => 'Every time this player performs a Block action (on its own or as part of a Blitz action), they must follow-up if the target is pushed back and if they are able. If the target is still Standing after being pushed back, and if this player was able to follow-up, this player must then perform a second Block action against the same target, again following-up if the target is pushed back.',
            ],
            [
                'skill_id' => 19,
                'indentation' => 0,
                'order' => 1,
                'text' => 'If this player is performing a Blitz action, performing a second Block action will also cost them one square of their Movement Allowance. If this player has no Movement Allowance left to perform a second Block action, they must Rush to do so. If they cannot Rush, they cannot perform a second Block action.',
            ],
            [
                'skill_id' => 19,
                'indentation' => 0,
                'order' => 2,
                'text' => 'Note that if an opposition player in possession of the ball is pushed back into your End Zone and is still Standing, a touchdown will be scored, ending the drive. In this case, the second Block action is not performed.',
            ],
            [
                'skill_id' => 19,
                'indentation' => 0,
                'order' => 3,
                'text' => 'A player with this Skill cannot also have the Grab skill.',
            ],
            // Kick
            [
                'skill_id' => 20,
                'indentation' => 0,
                'order' => 0,
                'text' => 'If this player is nominated to be the kicking player during a kick-off, you may choose to halve the result of the D6 to determine the number of squares that the ball deviates, rounding any fractions down.',
            ],
            // Pro
            [
                'skill_id' => 21,
                'indentation' => 0,
                'order' => 0,
                'text' => 'During their activation, this player may attempt to re-roll one dice. This dice may have been rolled either as a single dice roll, as part of a multiple dice roll or as part of a dice pool, but cannot be a dice that was rolled as part of an Armour, Injury or Casualty roll. Roll a D6:',
            ],
            [
                'skill_id' => 21,
                'indentation' => 1,
                'order' => 1,
                'text' => 'On a roll of 3+, the dice can be re-rolled.',
            ],
            [
                'skill_id' => 21,
                'indentation' => 1,
                'order' => 2,
                'text' => 'On a roll of 1 or 2, the dice cannot be re-rolled.',
            ],
            [
                'skill_id' => 21,
                'indentation' => 0,
                'order' => 3,
                'text' => 'Once this player has attempted to use this Skill, they may not use a re-roll from any other source to re-roll this one dice.',
            ],
            // Shadowing
            [
                'skill_id' => 22,
                'indentation' => 0,
                'order' => 0,
                'text' => 'This player can use this Skill when an opposition player they are Marking voluntarily moves out of a square within this player’s Tackle Zone. Roll a D6, adding the MA of this player to the roll and then subtracting the MA of the opposition player. If the result is 6 or higher, or if the roll is a natural 6, this player may immediately move into the square vacated by the opposition player (this player does not need to Dodge to make this move). If, however, the result is 5 or lower, or if the roll is a natural 1, this Skill has no further effect.',
            ],
            [
                'skill_id' => 22,
                'indentation' => 0,
                'order' => 1,
                'text' => 'A player may use this Skill any number of times per turn, during either team’s turn. If an opposition player is being Marked by more than one player with this Skill, only one player may use it.',
            ],
            // Strip Ball
            [
                'skill_id' => 23,
                'indentation' => 0,
                'order' => 0,
                'text' => 'When this player targets an opposition player that is in possession of the ball with a Block action (on its own or as part of a Blitz action), choosing to apply a Push Back result will cause that player to drop the ball in the square they are pushed back into. The ball will bounce from the square the player is pushed back into, as if they had been Knocked Down.',
            ],
            // Sure Hands
            [
                'skill_id' => 24,
                'indentation' => 0,
                'order' => 0,
                'text' => 'This player may re-roll any failed attempt to pick up the ball. In addition, the Strip Ball skill cannot be used against a player with this Skill.',
            ],
            // Tackle
            [
                'skill_id' => 25,
                'indentation' => 0,
                'order' => 0,
                'text' => 'When an active opposition player attempts to Dodge from a square in which they were being Marked by one or more players on your team with this Skill, that player cannot use the Dodge skill.',
            ],
            [
                'skill_id' => 25,
                'indentation' => 0,
                'order' => 1,
                'text' => 'Additionally, when an opposition player is targeted by a Block action performed by a player with this Skill, that player cannot use the Dodge skill if a Stumble result is applied against them.',
            ],
            // Wrestle
            [
                'skill_id' => 26,
                'indentation' => 0,
                'order' => 0,
                'text' => 'This player may use this Skill when a Both Down result is applied, either when they perform a Block action or when they are the target of a Block action. Instead of applying the Both Down result as normal, and regardless of any other Skills either player may possess, both players are Placed Prone.',
            ],
        ];

        foreach ($generalDescriptions as $gDescription) {
            \App\Models\SkillDescription::updateOrInsert($gDescription);
        }

        $mutationSkills = [
            [
                'name' => 'Big Hand',
                'skill_category_id' => 3,
                'reference' => 2,
            ],
            [
                'name' => 'Claws',
                'skill_category_id' => 3,
                'reference' => 2,
            ],
            [
                'name' => 'Disturbing Presence',
                'skill_category_id' => 3,
                'reference' => 2,
            ],
            [
                'name' => 'Extra Arms',
                'skill_category_id' => 3,
                'reference' => 2,
            ],
            [
                'name' => 'Foul Appearance*',
                'skill_category_id' => 3,
                'reference' => 2,
            ],
            [
                'name' => 'Horns',
                'skill_category_id' => 3,
                'reference' => 2,
            ],
            [
                'name' => 'Iron Hard Skin',
                'skill_category_id' => 3,
                'reference' => 2,
            ],
            [
                'name' => 'Monstrous Mouth',
                'skill_category_id' => 3,
                'reference' => 2,
            ],
            [
                'name' => 'Prehensile Tail',
                'skill_category_id' => 3,
                'reference' => 2,
            ],
            [
                'name' => 'Tentacles',
                'skill_category_id' => 3,
                'reference' => 2,
            ],
            [
                'name' => 'Two Heads',
                'skill_category_id' => 3,
                'reference' => 2,
            ],
            [
                'name' => 'Very Long Legs',
                'skill_category_id' => 3,
                'reference' => 2,
            ],
        ];

        foreach ($mutationSkills as $mSkill) {
            \App\Models\PlayerSkill::updateOrInsert($mSkill);
        }

        $mutationDescriptions = [
            // Big Hand
            [
                'skill_id' => 27,
                'indentation' => 0,
                'order' => 0,
                'text' => 'This player may ignore any modifier(s) for being Marked or for Pouring Rain weather conditions when they attempt to pick up the ball.',
            ],
            // Claws
            [
                'skill_id' => 28,
                'indentation' => 0,
                'order' => 0,
                'text' => 'When you make an Armour roll against an opposition player that was Knocked Down as the result of a Block action performed by this player, a roll of 8+ before applying any modifiers will break their armour, regardless of their actual Armour Value.',
            ],
            // Disturbing Presence*
            [
                'skill_id' => 29,
                'indentation' => 0,
                'order' => 0,
                'text' => 'When an opposition player performs either a Pass action, a Throw Team-mate action or a Throw Bomb Special action, or attempts to either interfere with a pass or to catch the ball, they must apply a -1 modifier to the test for each player on your team with this Skill that is within three squares of them, even if the player with this Skill is Prone, Stunned or has lost their Tackle Zone.',
            ],
            // Extra Arms
            [
                'skill_id' => 30,
                'indentation' => 0,
                'order' => 0,
                'text' => 'This player may apply a +1 modifier when they attempt to pick up or catch the ball, or when they attempt to interfere with a pass.',
            ],
            // Foul Appearance*
            [
                'skill_id' => 31,
                'indentation' => 0,
                'order' => 0,
                'text' => 'When an opposition player declares a Block action targeting this player (on its own or as part of a Blitz action), or any Special action that targets this player, their coach must first roll a D6, even if this player has lost their Tackle Zone. On a roll of 1, the player cannot perform the declared action and the action is wasted.',
            ],
            [
                'skill_id' => 31,
                'indentation' => 0,
                'order' => 1,
                'text' => 'This Skill may still be used if the player is Prone, Stunned, or has lost their Tackle Zone.',
            ],
            // Horns
            [
                'skill_id' => 32,
                'indentation' => 0,
                'order' => 0,
                'text' => 'When this player performs a Block action as part of a Blitz action (but not on its own), you may apply a +1 modifier to this player’s Strength characteristic. This modifier is applied before counting assists, before applying any other Strength modifiers and before using any other Skills or Traits.',
            ],
            // Iron Hard Skin
            [
                'skill_id' => 33,
                'indentation' => 0,
                'order' => 0,
                'text' => 'The Claws skill cannot be used when making an Armour roll against this player.',
            ],
            [
                'skill_id' => 33,
                'indentation' => 0,
                'order' => 1,
                'text' => 'This Skill may still be used if the player is Prone, Stunned, or has lost their Tackle Zone.',
            ],
            // Monstrous Mouth
            [
                'skill_id' => 34,
                'indentation' => 0,
                'order' => 0,
                'text' => 'This player may re-roll any failed attempt to catch the ball. In addition, the Strip Ball skill cannot be used against this player.',
            ],
            // Prehensile Tail
            [
                'skill_id' => 35,
                'indentation' => 0,
                'order' => 0,
                'text' => 'When an active opposition player attempts to Dodge, Jump or Leap in order to vacate a square in which they are being Marked by this player, there is an additional -1 modifier applied to the active player’s Agility test.',
            ],
            [
                'skill_id' => 35,
                'indentation' => 0,
                'order' => 1,
                'text' => 'If the opposition player is being Marked by more than one player with this Mutation, only one player may use it.',
            ],
            // Tentacles
            [
                'skill_id' => 36,
                'indentation' => 0,
                'order' => 0,
                'text' => 'This player can use this Skill when an opposition player they are Marking voluntarily moves out of a square within this player’s Tackle Zone. Roll a D6, adding the ST of this player to the roll and then subtracting the ST of the opposition player.',
            ],
            [
                'skill_id' => 36,
                'indentation' => 0,
                'order' => 1,
                'text' => 'If the result is 6 or higher, or if the roll is a natural 6, the opposition player is held firmly in place and their movement comes to an end. If, however, the result is 5 or lower, or if the roll is a natural 1, this Skill has no further effect.',
            ],
            [
                'skill_id' => 36,
                'indentation' => 0,
                'order' => 2,
                'text' => 'A player may use this Skill any number of times per turn, during either team’s turn. If an opposition player is being Marked by more than one player with this Skill, only one player may use it.',
            ],
            // Two Heads
            [
                'skill_id' => 37,
                'indentation' => 0,
                'order' => 0,
                'text' => 'This player may apply a +1 modifier to the Agility test when they attempt to Dodge.',
            ],
            // Very Long Legs
            [
                'skill_id' => 38,
                'indentation' => 0,
                'order' => 0,
                'text' => 'This player may reduce any negative modifier applied to the Agility test when they attempt to Jump over a Prone or Stunned player by 1, to a minimum of -1.',
            ],
            [
                'skill_id' => 38,
                'indentation' => 0,
                'order' => 1,
                'text' => 'Additionally, this player may apply a +2 modifier to any attempts to interfere with a pass they make.',
            ],
            [
                'skill_id' => 38,
                'indentation' => 0,
                'order' => 2,
                'text' => 'Finally, this player ignores the Cloud Burster skill.',
            ],
        ];

        foreach ($mutationDescriptions as $mDescription) {
            \App\Models\SkillDescription::updateOrInsert($mDescription);
        }

        $passingSkills = [
            [
                'name' => 'Accurate',
                'skill_category_id' => 4,
                'reference' => 2,
            ],
            [
                'name' => 'Cannoneer',
                'skill_category_id' => 4,
                'reference' => 2,
            ],
            [
                'name' => 'Cloud Burster',
                'skill_category_id' => 4,
                'reference' => 2,
            ],
            [
                'name' => 'Dump-Off',
                'skill_category_id' => 4,
                'reference' => 2,
            ],
            [
                'name' => 'Fumblerooskie',
                'skill_category_id' => 4,
                'reference' => 2,
            ],
            [
                'name' => 'Hail Mary Pass',
                'skill_category_id' => 4,
                'reference' => 2,
            ],
            [
                'name' => 'Leader',
                'skill_category_id' => 4,
                'reference' => 2,
            ],
            [
                'name' => 'Nerves of Steel',
                'skill_category_id' => 4,
                'reference' => 2,
            ],
            [
                'name' => 'On the Ball',
                'skill_category_id' => 4,
                'reference' => 2,
            ],
            [
                'name' => 'Pass',
                'skill_category_id' => 4,
                'reference' => 2,
            ],
            [
                'name' => 'Running Pass',
                'skill_category_id' => 4,
                'reference' => 2,
            ],
            [
                'name' => 'Safe Pass',
                'skill_category_id' => 4,
                'reference' => 2,
            ],
        ];

        foreach ($passingSkills as $pSkill) {
            \App\Models\PlayerSkill::updateOrInsert($pSkill);
        };

        $passingDescriptions = [
            // Accurate
            [
                'skill_id' => 39,
                'indentation' => 0,
                'order' => 0,
                'text' => 'When this player performs a Quick Pass action or a Short Pass action, you may apply an additional +1 modifier to the Passing Ability test.',
            ],
            // Cannoneer
            [
                'skill_id' => 40,
                'indentation' => 0,
                'order' => 0,
                'text' => 'When this player performs a Long Pass action or a Long Bomb Pass action, you may apply an additional +1 modifier to the Passing Ability test.',
            ],
            // Cloud Burster
            [
                'skill_id' => 41,
                'indentation' => 0,
                'order' => 0,
                'text' => 'When this player performs a Long Pass action or a Long Bomb Pass action, you may choose to make the opposing coach re-roll a successful attempt to interfere with the pass.',
            ],
            // Dump-Off
            [
                'skill_id' => 42,
                'indentation' => 0,
                'order' => 0,
                'text' => 'If this player is nominated as the target of a Block action (or a Special action granted by a Skill or Trait that can be performed instead of a Block action) and if they are in possession of the ball, they may immediately perform a Quick Pass action, interrupting the activation of the opposition player performing the Block action (or Special action) to do so. This Quick Pass action cannot cause a Turnover, but otherwise all of the normal rules for passing the ball apply. Once the Quick Pass action is resolved, the active player performs the Block action and their team turn continues.',
            ],
            // Fumblerooskie
            [
                'skill_id' => 43,
                'indentation' => 0,
                'order' => 0,
                'text' => 'When this player performs a Move or Blitz action whilst in possession of the ball, they may choose to ‘drop’ the ball. The ball may be placed in any square the player vacates during their movement and does not bounce. No Turnover is caused.',
            ],
            // Hail Mary Pass
            [
                'skill_id' => 44,
                'indentation' => 0,
                'order' => 0,
                'text' => 'When this player performs a Pass action (or a Throw Bomb action), the target square can be anywhere on the pitch and the range ruler does not need to be used. A Hail Mary pass is never accurate, regardless of the result of the Passing Ability test it will always be inaccurate at best. A Passing Ability test is made and can be re-rolled as normal in order to determine if the Hail Mary pass is wildly inaccurate or is fumbled. A Hail Mary pass cannot be interfered with. This Skill may not be used in a Blizzard.',
            ],
            // Leader
            [
                'skill_id' => 45,
                'indentation' => 0,
                'order' => 0,
                'text' => 'A team which has one or more players with this Skill gains a single extra team re-roll, called a Leader re-roll. However, the Leader re-roll can only be used if there is at least one player with this Skill on the pitch (even if the player with this Skill is Prone, Stunned or has lost their Tackle Zone). If all players with this Skill are removed from play before the Leader re-roll is used, it is lost. The Leader re-roll can be carried over into extra time if it is not used, but the team does not receive a new one at the start of extra time. Unlike standard Team Re-rolls, the Leader Re-roll cannot be lost due to a Halfling Master Chef. Otherwise, the Leader re-roll is treated just like a normal team re-roll.',
            ],
            // Nerves of Steel
            [
                'skill_id' => 46,
                'indentation' => 0,
                'order' => 0,
                'text' => 'This player may ignore any modifier(s) for being Marked when they attempt to perform a Pass action, attempt to catch the ball or attempt to interfere with a pass.',
            ],
            // On the Ball
            [
                'skill_id' => 47,
                'indentation' => 0,
                'order' => 0,
                'text' => 'This player may move up to three squares (regardless of their MA), following all of the normal movement rules, when the opposing coach declares that one of their players is going to perform a Pass action. This move is made after the range has been measured and the target square declared, but before the active player makes a Passing Ability test. Making this move interrupts the activation of the opposition player performing the Pass action. A player may use this Skill when an opposition player uses the Dump-off skill, but should this player Fall Over whilst moving, a Turnover is caused.',
            ],
            [
                'skill_id' => 47,
                'indentation' => 0,
                'order' => 1,
                'text' => 'Additionally, during each Start of Drive sequence, after Step 2 but before Step 3, one Open player with this Skill on the receiving team may move up to three squares (regardless of their MA). This Skill may not be used if a touchback is caused when the kick deviates and does not allow the player to cross into their opponent’s half of the pitch.',
            ],
            // Pass
            [
                'skill_id' => 48,
                'indentation' => 0,
                'order' => 0,
                'text' => 'This player may re-roll a failed Passing Ability test when performing a Pass action.',
            ],
            // Running Pass
            [
                'skill_id' => 49,
                'indentation' => 0,
                'order' => 0,
                'text' => 'If this player performs a Quick Pass action, their activation does not have to end once the pass is resolved. If you wish and if this player has not used their full Movement Allowance, they may continue to move after resolving the pass.',
            ],
            // Safe Pass
            [
                'skill_id' => 50,
                'indentation' => 0,
                'order' => 0,
                'text' => 'Should this player fumble a Pass action, the ball is not dropped, does not bounce from the square this player occupies, and no Turnover is caused. Instead, this player retains possession of the ball and their activation ends.',
            ],
        ];

        foreach ($passingDescriptions as $pDescription) {
            \App\Models\SkillDescription::updateOrInsert($pDescription);
        }

        $strengthSkills = [
            [
                'name' => 'Arm Bar',
                'skill_category_id' => 5,
                'reference' => 2,
            ],
            [
                'name' => 'Brawler',
                'skill_category_id' => 5,
                'reference' => 2,
            ],
            [
                'name' => 'Break Tackle',
                'skill_category_id' => 5,
                'reference' => 2,
            ],
            [
                'name' => 'Grab',
                'skill_category_id' => 5,
                'reference' => 2,
            ],
            [
                'name' => 'Guard',
                'skill_category_id' => 5,
                'reference' => 2,
            ],
            [
                'name' => 'Juggernaut',
                'skill_category_id' => 5,
                'reference' => 2,
            ],
            [
                'name' => 'Mighty Blow (+X)',
                'skill_category_id' => 5,
                'reference' => 1,
            ],
            [
                'name' => 'Mighty Blow (+1)',
                'skill_category_id' => 5,
                'reference' => 0,
            ],
            [
                'name' => 'Mighty Blow (+2)',
                'skill_category_id' => 5,
                'reference' => 0,
            ],
            [
                'name' => 'Multiple Block',
                'skill_category_id' => 5,
                'reference' => 2,
            ],
            [
                'name' => 'Pile Driver',
                'skill_category_id' => 5,
                'reference' => 2,
            ],
            [
                'name' => 'Stand Firm',
                'skill_category_id' => 5,
                'reference' => 2,
            ],
            [
                'name' => 'Strong Arm',
                'skill_category_id' => 5,
                'reference' => 2,
            ],
            [
                'name' => 'Thick Skull',
                'skill_category_id' => 5,
                'reference' => 2,
            ],
        ];

        foreach ($strengthSkills as $sSkill) {
            \App\Models\PlayerSkill::updateOrInsert($sSkill);
        };

        $strengthDescriptions = [
            // Arm Bar
            [
                'skill_id' => 51,
                'indentation' => 0,
                'order' => 0,
                'text' => 'If an opposition player Falls Over as the result of failing their Agility test when attempting to Dodge, Jump or Leap out of a square in which they were being Marked by this player, you may apply a +1 modifier to either the Armour roll or Injury roll. This modifier may be applied after the roll has been made and may be applied even if this player is now Prone.',
            ],
            [
                'skill_id' => 51,
                'indentation' => 0,
                'order' => 1,
                'text' => 'If the opposition player was being Marked by more than one player with this Skill, only one player may use it.',
            ],
            // Brawler
            [
                'skill_id' => 52,
                'indentation' => 0,
                'order' => 0,
                'text' => 'When this player performs a Block action on its own (but not as part of a Blitz action), this player may re-roll a single Both Down result.',
            ],
            // Break Tackle
            [
                'skill_id' => 53,
                'indentation' => 0,
                'order' => 0,
                'text' => 'Once during their activation, after making an Agility test in order to Dodge, this player may modify the dice roll by +1 if their Strength characteristic is 4 or less, or by +2 if their Strength characteristic is 5 or more.',
            ],
            // Grab
            [
                'skill_id' => 54,
                'indentation' => 0,
                'order' => 0,
                'text' => 'When this player performs a Block action (on its own or as part of a Blitz action), using this Skill prevents the target of the Block action from using the Side Step skill.',
            ],
            [
                'skill_id' => 54,
                'indentation' => 0,
                'order' => 1,
                'text' => 'Additionally, when this player performs a Block Action on its own (but not as part of a Blitz action), if the target is pushed back, this player may choose any unoccupied square adjacent to the target to push that player into. If there are no unoccupied squares, this Skill cannot be used.',
            ],
            [
                'skill_id' => 54,
                'indentation' => 0,
                'order' => 2,
                'text' => 'A player with this Skill cannot also have the Frenzy skill.',
            ],
            // Guard
            [
                'skill_id' => 55,
                'indentation' => 0,
                'order' => 0,
                'text' => 'This player can offer both offensive and defensive assists regardless of how many opposition players are Marking them.',
            ],
            // Juggernaut
            [
                'skill_id' => 56,
                'indentation' => 0,
                'order' => 0,
                'text' => 'When this player performs a Block action as part of a Blitz action (but not on its own), they may choose to treat a Both Down result as a Push Back result. In addition, when this player performs a Block action as part of a Blitz action, the target of the Block action may not use the Fend, Stand Firm or Wrestle skills.',
            ],
            // Mighty Blow (+X)
            [
                'skill_id' => 57,
                'indentation' => 0,
                'order' => 0,
                'text' => 'When an opposition player is Knocked Down as the result of a Block action performed by this player (on its own or as part of a Blitz action), you may modify either the Armour roll or Injury roll by the amount shown in brackets. This modifier may be applied after the roll has been made.',
            ],
            [
                'skill_id' => 57,
                'indentation' => 0,
                'order' => 1,
                'text' => 'This Skill cannot be used with the Stab or Chainsaw traits.',
            ],
            // Mighty Blow (+1)
            [
                'skill_id' => 58,
                'indentation' => 0,
                'order' => 0,
                'text' => 'When an opposition player is Knocked Down as the result of a Block action performed by this player (on its own or as part of a Blitz action), you may modify either the Armour roll or Injury roll by +1. This modifier may be applied after the roll has been made.',
            ],
            [
                'skill_id' => 58,
                'indentation' => 0,
                'order' => 1,
                'text' => 'This Skill cannot be used with the Stab or Chainsaw traits.',
            ],
            // Mighty Blow (+2)
            [
                'skill_id' => 59,
                'indentation' => 0,
                'order' => 0,
                'text' => 'When an opposition player is Knocked Down as the result of a Block action performed by this player (on its own or as part of a Blitz action), you may modify either the Armour roll or Injury roll by +2. This modifier may be applied after the roll has been made.',
            ],
            [
                'skill_id' => 59,
                'indentation' => 0,
                'order' => 1,
                'text' => 'This Skill cannot be used with the Stab or Chainsaw traits.',
            ],
            // Multiple Block
            [
                'skill_id' => 60,
                'indentation' => 0,
                'order' => 0,
                'text' => 'When this player performs a Block action on its own (but not as part of a Blitz action), they may choose to perform two Block actions, each targeting a different player they are Marking. However, doing so will reduce this player’s Strength characteristic by 2 for the duration of this activation. Both Block actions are performed simultaneously, meaning both are resolved in full even if one or both result in a Turnover. The dice rolls for each Block action should be kept separate to avoid confusion. This player cannot follow-up when using this Skill.',
            ],
            [
                'skill_id' => 60,
                'indentation' => 0,
                'order' => 1,
                'text' => 'Note that choosing to use this Skill means this player will be unable to use the Frenzy skill during the same.',
            ],
            // Pile Driver
            [
                'skill_id' => 61,
                'indentation' => 0,
                'order' => 0,
                'text' => 'When an opposition player is Knocked Down by this player as the result of a Block action (on its own or as part of a Blitz action), this player may immediately commit a free Foul action against the Knocked Down player. To use this Skill, this player must be Standing after the block dice result has been selected and applied, and must occupy a square adjacent to the Knocked Down player. After using this Skill, this player is Placed Prone and their activation ends immediately.',
            ],
            // Stand Firm
            [
                'skill_id' => 62,
                'indentation' => 0,
                'order' => 0,
                'text' => 'A player with this skill may choose to not be pushed back as the result of a block. He may choose to ignore being pushed by ‘Pushed’ results, and to have ‘Knock-down’ results knock the player down in the square where he started. If a player is pushed back into a player using Stand Firm then neither player moves.',
            ],
            // Strong Arm
            [
                'skill_id' => 63,
                'indentation' => 0,
                'order' => 0,
                'text' => 'This player may apply a +1 modifier to any Passing Ability test rolls they make when performing a Throw Team-mate action.',
            ],
            [
                'skill_id' => 63,
                'indentation' => 0,
                'order' => 1,
                'text' => 'A player that does not have the Throw Team-mate trait cannot have this Skill.',
            ],
            // Thick Skull
            [
                'skill_id' => 64,
                'indentation' => 0,
                'order' => 0,
                'text' => 'When an Injury roll is made against this player (even if this player is Prone, Stunned or has lost their Tackle Zone), they can only be KO’d on a roll of 9, and will treat a roll of 8 as a Stunned result. If this player also has the Stunty trait, they can only be KO’d on a roll of 8, and will treat a roll of 7 as a Stunned result. All other results are unaffected',
            ],
        ];

        foreach ($strengthDescriptions as $sDescription) {
            \App\Models\SkillDescription::updateOrInsert($sDescription);
        }
    }
}
