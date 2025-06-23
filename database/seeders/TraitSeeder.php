<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TraitSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $playerTraits = [
            [
                'name' => 'Animal Savagery*',
                'reference' => 2,
            ],
            [
                'name' => 'Animosity (X)*',
                'reference' => 1,
            ],
            [
                'name' => 'Animosity (All Team-mates)*',
                'reference' => 0,
            ],
            [
                'name' => 'Animosity (All Dwarf and Halfling Team-mates)*',
                'reference' => 0,
            ],
            [
                'name' => 'Animosity (All Dwarf and Human Team-mates)*',
                'reference' => 0,
            ],
            [
                'name' => 'Animosity (Big Un Blockers)*',
                'reference' => 0,
            ],
            [
                'name' => 'Animosity (Orc Linemen)*',
                'reference' => 0,
            ],
            [
                'name' => 'Animosity (Underworld Goblin Linemen)*',
                'reference' => 0,
            ],
            [
                'name' => 'Always Hungry*',
                'reference' => 2,
            ],
            [
                'name' => 'Ball & Chain*',
                'reference' => 2,
            ],
            [
                'name' => 'Bloodlust (X+)*',
                'reference' => 1,
            ],
            [
                'name' => 'Bloodlust (2+)*',
                'reference' => 0,
            ],
            [
                'name' => 'Bloodlust (3+)*',
                'reference' => 0,
            ],
            [
                'name' => 'Bombardier',
                'reference' => 2,
            ],
            [
                'name' => 'Bone Head*',
                'reference' => 2,
            ],
            [
                'name' => 'Chainsaw*',
                'reference' => 2,
            ],
            [
                'name' => 'Decay*',
                'reference' => 2,
            ],
            [
                'name' => 'Hit and Run',
                'reference' => 2,
            ],
            [
                'name' => 'Hypnotic Gaze',
                'reference' => 2,
            ],
            [
                'name' => 'Kick Team-mate',
                'reference' => 2,
            ],
            [
                'name' => 'Loner (X+)*',
                'reference' => 1,
            ],
            [
                'name' => 'Loner (3+)*',
                'reference' => 0,
            ],
            [
                'name' => 'Loner (4+)*',
                'reference' => 0,
            ],
            [
                'name' => 'Loner (5+)*',
                'reference' => 0,
            ],
            [
                'name' => 'My Ball*',
                'reference' => 2,
            ],
            [
                'name' => 'No Hands*',
                'reference' => 2,
            ],
            [
                'name' => 'Plague Ridden',
                'reference' => 2,
            ],
            [
                'name' => 'Pogo Stick',
                'reference' => 2,
            ],
            [
                'name' => 'Projectile Vomit',
                'reference' => 2,
            ],
            [
                'name' => 'Really Stupid*',
                'reference' => 2,
            ],
            [
                'name' => 'Regeneration',
                'reference' => 2,
            ],
            [
                'name' => 'Right Stuff*',
                'reference' => 2,
            ],
            [
                'name' => 'Secret Weapon*',
                'reference' => 2,
            ],
            [
                'name' => 'Stab',
                'reference' => 2,
            ],
            [
                'name' => 'Stunty*',
                'reference' => 2,
            ],
            [
                'name' => 'Swarming',
                'reference' => 2,
            ],
            [
                'name' => 'Swoop',
                'reference' => 2,
            ],
            [
                'name' => 'Take Root*',
                'reference' => 2,
            ],
            [
                'name' => 'Titchy*',
                'reference' => 2,
            ],
            [
                'name' => 'Throw Team-mate',
                'reference' => 2,
            ],
            [
                'name' => 'Timmm-ber!',
                'reference' => 2,
            ],
            [
                'name' => 'Trickster',
                'reference' => 2,
            ],
            [
                'name' => 'Unchannelled Fury*',
                'reference' => 2,
            ],
            [
                'name' => 'Drunkard*',
                'reference' => 2,
            ],
            [
                'name' => 'Pick-me-up',
                'reference' => 2,
            ],
        ];

        foreach ($playerTraits as $pTrait){
            \App\Models\PlayerTrait::updateOrInsert($pTrait);
        };

        $traitDescriptions = [
            // Animal Savagery*
            [
                'trait_id' => 1,
                'indentation' => 0,
                'order' => 0,
                'text' => 'When this player is activated, even if they are Prone or have lost their Tackle Zone, immediately after declaring the action they will perform but before performing the action, roll a D6, applying a +2 modifier to the dice roll if you declared the player would perform a Block or Blitz action (or a Special action granted by a Skill or Trait that can be performed instead of a Block action):',
            ],
            [
                'trait_id' => 1,
                'indentation' => 1,
                'order' => 1,
                'text' => 'On a roll of 1-3, this player lashes out at their team-mates:',
            ],
            [
                'trait_id' => 1,
                'indentation' => 2,
                'order' => 2,
                'text' => 'One Standing team-mate of your choice that is currently adjacent to this player is immediately Knocked Down by this player. This does not cause a Turnover unless the Knocked Down player was in possession of the ball. After making an Armour roll (and possible Injury roll) against the Knocked Down player, this player may continue their activation and complete their declared action if able. Note that, if this player has any applicable Skills, the coach of the opposing team may use them when making an Armour roll (and possible Injury roll) against the Knocked Down player.',
            ],
            [
                'trait_id' => 1,
                'indentation' => 2,
                'order' => 3,
                'text' => 'If this player is not currently adjacent to any Standing team-mates, this player’s activation ends immediately. Additionally, this player loses their Tackle Zone until they are next activated.',
            ],
            [
                'trait_id' => 1,
                'indentation' => 1,
                'order' => 4,
                'text' => 'On a roll of 4+, this player continues their activation as normal and completes their declared action.',
            ],
            [
                'trait_id' => 1,
                'indentation' => 0,
                'order' => 5,
                'text' => 'If you declared that this player would perform an action which can only be performed once per team turn and this player’s activation ended before the action could be completed, the action is considered to have been performed and no other player on your team may perform the same action this team turn.',
            ],
            // Animosity (X)*
            [
                'trait_id' => 2,
                'indentation' => 0,
                'order' => 0,
                'text' => 'This player is jealous of and dislikes certain other players on their team, as shown in brackets after the name of the Skill on this player’s profile. This may be defined by position or race. For example, a Skaven Thrower on an Underworld Denizens team has Animosity (Underworld Goblin Linemen), meaning they suffer Animosity towards any Underworld Goblin Linemen players on their team. Whereas a Skaven Renegade on a Chaos Renegade team has Animosity (all team-mates), meaning they suffer Animosity towards all of their team-mates equally.',
            ],
            [
                'trait_id' => 2,
                'indentation' => 0,
                'order' => 1,
                'text' => 'When this player wishes to perform a Hand-off action to a team-mate of the type listed, or attempts to perform a Pass action and the target square is occupied by a team-mate of the type listed, this player may refuse to do so. Roll a D6. On a roll of 1, this player refuses to perform the action and their activation comes to an end. Animosity does not extend to Mercenaries or Star Players.',
            ],
            // Animosity (All Team-mates)*
            [
                'trait_id' => 3,
                'indentation' => 0,
                'order' => 0,
                'text' => 'When this player wishes to perform a Hand-off action to a team-mate, or attempts to perform a Pass action and the target square is occupied by a team-mate, this player may refuse to do so. Roll a D6. On a roll of 1, this player refuses to perform the action and their activation comes to an end. Animosity does not extend to Mercenaries or Star Players.',
            ],
            // Animosity (All Dwarf and Halfling Team-mates)*
            [
                'trait_id' => 4,
                'indentation' => 0,
                'order' => 0,
                'text' => 'When this player wishes to perform a Hand-off action to a Dwarf or Halfling team-mate or attempts to perform a Pass action and the target square is occupied by a Dwarf or Halfling team-mate, this player may refuse to do so. Roll a D6. On a roll of 1, this player refuses to perform the action and their activation comes to an end. Animosity does not extend to Mercenaries or Star Players.',
            ],
            // Animosity (All Dwarf and Human Team-mates)*
            [
                'trait_id' => 5,
                'indentation' => 0,
                'order' => 0,
                'text' => 'When this player wishes to perform a Hand-off action to a Dwarf or Humanteam-mate or attempts to perform a Pass action and the target square is occupied by a Dwarf or Human team-mate, this player may refuse to do so. Roll a D6. On a roll of 1, this player refuses to perform the action and their activation comes to an end. Animosity does not extend to Mercenaries or Star Players.',
            ],
            // Animosity (Big Un Blockers)*
            [
                'trait_id' => 6,
                'indentation' => 0,
                'order' => 0,
                'text' => 'When this player wishes to perform a Hand-off action to a Big Un Blocker or attempts to perform a Pass action and the target square is occupied by a Big Un Blocker, this player may refuse to do so. Roll a D6. On a roll of 1, this player refuses to perform the action and their activation comes to an end. Animosity does not extend to Mercenaries or Star Players.',
            ],
            // Animosity (Orc Linemen)*
            [
                'trait_id' => 7,
                'indentation' => 0,
                'order' => 0,
                'text' => 'When this player wishes to perform a Hand-off action to an Orc Lineman or attempts to perform a Pass action and the target square is occupied by an Orc Lineman, this player may refuse to do so. Roll a D6. On a roll of 1, this player refuses to perform the action and their activation comes to an end. Animosity does not extend to Mercenaries or Star Players.',
            ],
            // Animosity (Underworld Goblin Linemen)*
            [
                'trait_id' => 8,
                'indentation' => 0,
                'order' => 0,
                'text' => 'When this player wishes to perform a Hand-off action to an Underworld Goblin Lineman or attempts to perform a Pass action and the target square is occupied by an Underworld Goblin Lineman, this player may refuse to do so. Roll a D6. On a roll of 1, this player refuses to perform the action and their activation comes to an end. Animosity does not extend to Mercenaries or Star Players.',
            ],
            // Always Hungry*
            [
                'trait_id' => 9,
                'indentation' => 0,
                'order' => 0,
                'text' => 'If this player wishes to perform a Throw Team-mate action, roll a D6 after they have finished moving, but before they throw their team-mate. On a roll of 2+, continue with the throw as normal. On a roll of 1, this player will attempt to eat their team-mate. Roll another D6:',
            ],
            [
                'trait_id' => 9,
                'indentation' => 1,
                'order' => 1,
                'text' => 'On a roll of 1, the team-mate has been eaten and is immediately removed from the Team Draft list. No apothecary can save them and no Regeneration attempts can be made. If the team-mate was in possession of the ball, it will bounce from the square this player occupies.',
            ],
            [
                'trait_id' => 9,
                'indentation' => 1,
                'order' => 2,
                'text' => 'On a roll of 2+, the team-mate squirms free and the Throw Team-mate action is automatically fumbled.',
            ],
            // Ball & Chain*
            [
                'trait_id' => 10,
                'text' => 'When this player is activated, the only action they may perform is a ‘Ball & Chain Move’ Special action. There is no limit to how many players with this Trait may perform this Special action each team turn.',
                'indentation' => 0,
                'order' => 0,
            ],
            [
                'trait_id' => 10,
                'text' => 'When this player performs this Special action:',
                'indentation' => 0,
                'order' => 1,
            ],
            [
                'trait_id' => 10,
                'text' => 'Place the Throw-in template over the player, facing towards either End Zone or either sideline as you wish.',
                'indentation' => 1,
                'order' => 2,
            ],
            [
                'trait_id' => 10,
                'text' => 'Roll a D6 and move the player one square in the direction indicated.',
                'indentation' => 1,
                'order' => 3,
            ],
            [
                'trait_id' => 10,
                'text' => 'A player with a Ball & Chain automatically passes any Agility tests they may be required to make in order to Dodge, regardless of any modifiers.',
                'indentation' => 1,
                'order' => 4,
            ],
            [
                'trait_id' => 10,
                'text' => 'If this movement takes the player off the pitch, they risk Injury by the Crowd.',
                'indentation' => 1,
                'order' => 5,
            ],
            [
                'trait_id' => 10,
                'text' => 'If this movement takes the player into a square in which the ball is placed, the player is considered to have moved involuntarily. Therefore, they may not attempt to pick the ball up and the ball will bounce.',
                'indentation' => 1,
                'order' => 6,
            ],
            [
                'trait_id' => 10,
                'text' => 'Repeat this process for each square the player moves.',
                'indentation' => 0,
                'order' => 7,
            ],
            [
                'trait_id' => 10,
                'text' => 'If this player would move into a square that is occupied by a Standing player from either team, they must perform a Block action against that player, following the normal rules, but with the following exceptions:',
                'indentation' => 0,
                'order' => 8,
            ],
            [
                'trait_id' => 10,
                'text' => 'A Ball & Chain player ignores the Foul Appearance skill.',
                'indentation' => 1,
                'order' => 9,
            ],
            [
                'trait_id' => 10,
                'text' => 'A Ball & Chain player must follow-up if they push-back another player.',
                'indentation' => 1,
                'order' => 10,
            ],
            [
                'trait_id' => 10,
                'text' => 'If this player moves into a square that is occupied by a Prone or Stunned player from either team, for any reason, that player is immediately pushed back and an Armour roll is made against them.',
                'indentation' => 0,
                'order' => 11,
            ],
            [
                'trait_id' => 10,
                'text' => 'This player may Rush. Declare that the player will Rush before placing the Throw-in template and rolling the D6 to determine direction:',
                'indentation' => 0,
                'order' => 12,
            ],
            [
                'trait_id' => 10,
                'text' => 'If this player Rushes into an unoccupied square, move them as normal and roll a D6:',
                'indentation' => 1,
                'order' => 13,
            ],
            [
                'trait_id' => 10,
                'text' => 'On a roll of 2+, this player moves without mishap.',
                'indentation' => 2,
                'order' => 14,
            ],
            [
                'trait_id' => 10,
                'text' => 'On a roll of 1 (before or after modification), the player Falls Over.',
                'indentation' => 2,
                'order' => 15,
            ],
            [
                'trait_id' => 10,
                'text' => 'If this player Rushes into a square that is occupied by a standing player from either team, roll a D6:',
                'indentation' => 1,
                'order' => 16,
            ],
            [
                'trait_id' => 10,
                'text' => 'On a roll of 2+, this player moves without mishap and will perform a Block action against the player occupying the square as described previously.',
                'indentation' => 2,
                'order' => 17,
            ],
            [
                'trait_id' => 10,
                'text' => 'On a roll of 1 (before or after modification), the player occupying the square is pushed back and this player will Fall Over after moving into the vacated square.',
                'indentation' => 2,
                'order' => 18,
            ],
            [
                'trait_id' => 10,
                'text' => 'If this player ever Falls Over, is Knocked Down or is Placed Prone, an Injury roll is immediately made against them (no Armour roll is required), treating a Stunned result as a KO’d result.',
                'indentation' => 0,
                'order' => 19,
            ],
            [
                'trait_id' => 10,
                'text' => 'A player with this Trait cannot also have the Diving Tackle, Frenzy, Grab, Leap, Multiple Block, On the Ball or Shadowing skills. This Trait must still be used if the player is Prone, Stunned, or has lost their Tackle Zone.',
                'indentation' => 0,
                'order' => 20,
            ],
            // Bloodlust (X+)*
            [
                'trait_id' => 11,
                'text' => 'To keep control of their wits, Vampires need a supply of fresh blood. Whenever a player with this Trait activates, even if they are Prone or have lost their Tackle Zone, after declaring their action, they must roll a D6, adding 1 to the roll if they declared a Block or Blitz action. If they roll equal to or higher than the number shown in brackets they may activate as normal.',
                'indentation' => 0,
                'order' => 0,
            ],
            [
                'trait_id' => 11,
                'text' => 'If the player rolls lower than the number shown in brackets, or rolls a natural 1, they may continue their activation as normal though they may changed their declared action to a Move action if they wish. If the player declare an action that can only be performed once per team turn (such as a Blitz action) this will still count as the one of that action for the team turn.',
                'indentation' => 0,
                'order' => 1,
            ],
            [
                'trait_id' => 11,
                'text' => 'At the end of their activation they may bite an adjacent Thrall Lineman team-mate (Standing, Prone or Stunned). If they bite a Thrall, immediately make an injury roll for the Thrall treating any Casualty result as Badly Hurt; this will not cause a Turnover unless the Thrall was holding the ball.',
                'indentation' => 0,
                'order' => 2,
            ],
            [
                'trait_id' => 11,
                'text' => 'If they do not bite a Thrall for any reason then a Turnover is caused, the player will lose their Tackle Zone until they are next activated, and will immediately drop the ball if they were holding it. If the player was in the opposing End Zone, no touchdown is scored. If a player who failed this roll wants to make a Pass action, Hand-off or score then they must bite a Thrall before they perform the action or score.',
                'indentation' => 0,
                'order' => 3,
            ],
            // Bloodlust (2+)*
            [
                'trait_id' => 12,
                'text' => 'Whenever a player with this Trait activates, even if they are Prone or have lost their Tackle Zone, after declaring their action, they must roll a D6, adding 1 to the roll if they declared a Block or Blitz action. If they roll a 2 or higher, they may activate as normal.',
                'indentation' => 0,
                'order' => 0,
            ],
            [
                'trait_id' => 12,
                'text' => 'If the player rolls lower than the number shown in brackets, or rolls a natural 1, they may continue their activation as normal though they may changed their declared action to a Move action if they wish. If the player declare an action that can only be performed once per team turn (such as a Blitz action) this will still count as the one of that action for the team turn.',
                'indentation' => 0,
                'order' => 1,
            ],
            [
                'trait_id' => 12,
                'text' => 'At the end of their activation they may bite an adjacent Thrall Lineman team-mate (Standing, Prone or Stunned). If they bite a Thrall, immediately make an injury roll for the Thrall treating any Casualty result as Badly Hurt; this will not cause a Turnover unless the Thrall was holding the ball.',
                'indentation' => 0,
                'order' => 2,
            ],
            [
                'trait_id' => 12,
                'text' => 'If they do not bite a Thrall for any reason then a Turnover is caused, the player will lose their Tackle Zone until they are next activated, and will immediately drop the ball if they were holding it. If the player was in the opposing End Zone, no touchdown is scored. If a player who failed this roll wants to make a Pass action, Hand-off or score then they must bite a Thrall before they perform the action or score.',
                'indentation' => 0,
                'order' => 3,
            ],
            // Bloodlust (3+)*
            [
                'trait_id' => 13,
                'text' => 'Whenever a player with this Trait activates, even if they are Prone or have lost their Tackle Zone, after declaring their action, they must roll a D6, adding 1 to the roll if they declared a Block or Blitz action. If they roll a 3 or higher, they may activate as normal.',
                'indentation' => 0,
                'order' => 0,
            ],
            [
                'trait_id' => 13,
                'text' => 'If the player rolls lower than the number shown in brackets, or rolls a natural 1, they may continue their activation as normal though they may changed their declared action to a Move action if they wish. If the player declare an action that can only be performed once per team turn (such as a Blitz action) this will still count as the one of that action for the team turn.',
                'indentation' => 0,
                'order' => 1,
            ],
            [
                'trait_id' => 13,
                'text' => 'At the end of their activation they may bite an adjacent Thrall Lineman team-mate (Standing, Prone or Stunned). If they bite a Thrall, immediately make an injury roll for the Thrall treating any Casualty result as Badly Hurt; this will not cause a Turnover unless the Thrall was holding the ball.',
                'indentation' => 0,
                'order' => 2,
            ],
            [
                'trait_id' => 13,
                'text' => 'If they do not bite a Thrall for any reason then a Turnover is caused, the player will lose their Tackle Zone until they are next activated, and will immediately drop the ball if they were holding it. If the player was in the opposing End Zone, no touchdown is scored. If a player who failed this roll wants to make a Pass action, Hand-off or score then they must bite a Thrall before they perform the action or score.',
                'indentation' => 0,
                'order' => 3,
            ],
            // Bombardier
            [
                'trait_id' => 14,
                'text' => 'When activated and if they are Standing, this player can perform a ‘Throw Bomb’ Special action. This Special action is neither a Pass action nor a Throw Team-mate action, so does not prevent another player performing one of those actions during the same team turn. However, only a single player with this Trait may perform this Special action each team turn.',
                'indentation' => 0,
                'order' => 0,
            ],
            [
                'trait_id' => 14,
                'text' => 'A Bomb can be thrown and caught, and the throw interfered with, just like a ball, using the rules for Pass actions, with the following exceptions:',
                'indentation' => 0,
                'order' => 1,
            ],
            [
                'trait_id' => 14,
                'text' => 'A player may not stand up or move before performing a Throw Bomb action.',
                'indentation' => 1,
                'order' => 2,
            ],
            [
                'trait_id' => 14,
                'text' => 'Bombs do not bounce and can come to rest on the ground in an occupied square. Should a player fail to catch a Bomb, it will come to rest on the ground in the square that player occupies.',
                'indentation' => 1,
                'order' => 3,
            ],
            [
                'trait_id' => 14,
                'text' => 'If a Bomb is fumbled, it will explode immediately in the square occupied by the player attempting to throw it.',
                'indentation' => 1,
                'order' => 4,
            ],
            [
                'trait_id' => 14,
                'text' => 'If a Bomb comes to rest on the ground in an empty square or is caught by an opposition player, no Turnover is caused.',
                'indentation' => 1,
                'order' => 5,
            ],
            [
                'trait_id' => 14,
                'text' => 'A player that is in possession of the ball can still catch a Bomb.',
                'indentation' => 1,
                'order' => 6,
            ],
            [
                'trait_id' => 14,
                'text' => 'Any Skills that can be used when performing a Pass action can also be used when performing a Throw Bomb Special action, with the exception of On the Ball.',
                'indentation' => 1,
                'order' => 7,
            ],
            [
                'trait_id' => 14,
                'text' => 'If a Bomb is caught by a player on either team, roll a D6:',
                'indentation' => 0,
                'order' => 8,
            ],
            [
                'trait_id' => 14,
                'text' => 'On a roll of 4+, the Bomb explodes immediately, as described below.',
                'indentation' => 1,
                'order' => 9,
            ],
            [
                'trait_id' => 14,
                'text' => 'On a roll of 1-3, that player must throw the Bomb again immediately. This throw takes place out of the normal sequence of play.',
                'indentation' => 1,
                'order' => 10,
            ],
            [
                'trait_id' => 14,
                'text' => 'Should a Bomb ever leave the pitch, it explodes in the crowd with no effect (on the game) before the crowd can throw it back.',
                'indentation' => 0,
                'order' => 11,
            ],
            [
                'trait_id' => 14,
                'text' => 'When a Bomb comes to rest on the ground, in either an unoccupied square, in a square occupied by a player that failed to catch the Bomb or in a square occupied by a Prone or Stunned player, it will explode immediately:',
                'indentation' => 0,
                'order' => 12,
            ],
            [
                'trait_id' => 14,
                'text' => 'If the Bomb explodes in an occupied square, that player is automatically hit by the explosion.',
                'indentation' => 1,
                'order' => 13,
            ],
            [
                'trait_id' => 14,
                'text' => 'Roll a D6 for each player (from either team) that occupies a square adjacent to the one in which the Bomb exploded:',
                'indentation' => 1,
                'order' => 14,
            ],
            [
                'trait_id' => 14,
                'text' => 'On a roll of 4+, the player has been hit by the explosion.',
                'indentation' => 2,
                'order' => 15,
            ],
            [
                'trait_id' => 14,
                'text' => 'On a roll of 1-3, the player manages to avoid the explosion.',
                'indentation' => 2,
                'order' => 16,
            ],
            [
                'trait_id' => 14,
                'text' => 'Any Standing players hit by the explosion are Knocked Down.',
                'indentation' => 1,
                'order' => 17,
            ],
            [
                'trait_id' => 14,
                'text' => 'An Armour roll (and possibly an Injury roll as well) is made against any player hit by the explosion, even if they were already Prone or Stunned.',
                'indentation' => 1,
                'order' => 18,
            ],
            [
                'trait_id' => 14,
                'text' => 'You may apply a +1 modifier to either the Armour roll or Injury roll. This modifier may be applied after the roll has been made.',
                'indentation' => 1,
                'order' => 19,
            ],
            // Bone-head
            [
                'trait_id' => 15,
                'text' => 'When this player is activated, even if they are Prone or have lost their Tackle Zone, immediately after declaring the action they will perform but before performing the action, roll a D6:',
                'indentation' => 0,
                'order' => 0,
            ],
            [
                'trait_id' => 15,
                'text' => 'On a roll of 1, this player forgets what they are doing and their activation ends immediately. Additionally, this player loses their Tackle Zone until they are next activated.',
                'indentation' => 1,
                'order' => 1,
            ],
            [
                'trait_id' => 15,
                'text' => 'On a roll of 2+, this player continues their activation as normal and completes their declared action.',
                'indentation' => 1,
                'order' => 2,
            ],
            [
                'trait_id' => 15,
                'text' => 'If you declared that this player would perform an action which can only be performed once per team turn and this player’s activation ended before the action could be completed, the action is considered to have been performed and no other player on your team may perform the same action this team turn.',
                'indentation' => 0,
                'order' => 3,
            ],
            // Chainsaw
            [
                'trait_id' => 16,
                'text' => 'Instead of performing a Block action (on its own or as part of a Blitz action), this player may perform a ‘Chainsaw Attack’ Special action. Exactly as described for a Block action, nominate a single Standing player to be the target of the Chainsaw Attack Special action. There is no limit to how many players with this Trait may perform this Special action each team turn. ',
                'indentation' => 0,
                'order' => 0,
            ],
            [
                'trait_id' => 16,
                'text' => 'To perform a Chainsaw Attack Special action, roll a D6:',
                'indentation' => 0,
                'order' => 1,
            ],
            [
                'trait_id' => 16,
                'text' => 'On a roll of 2+, the nominated target is hit by a Chainsaw!',
                'indentation' => 1,
                'order' => 2,
            ],
            [
                'trait_id' => 16,
                'text' => 'On a roll of 1, the Chainsaw will violently ‘kick-back’ and hit the player wielding it.',
                'indentation' => 1,
                'order' => 3,
            ],
            [
                'trait_id' => 16,
                'text' => 'In either case, an Armour roll is made against the player hit by the Chainsaw, adding +3 to the result.',
                'indentation' => 1,
                'order' => 4,
            ],
            [
                'trait_id' => 16,
                'text' => 'If the armour of the player hit is broken, they become Prone and an Injury roll is made against them. This Injury roll cannot be modified in any way.',
                'indentation' => 1,
                'order' => 5,
            ],
            [
                'trait_id' => 16,
                'text' => 'If the armour of the player hit is not broken, this Trait has no effect.',
                'indentation' => 1,
                'order' => 6,
            ],
            [
                'trait_id' => 16,
                'text' => 'This player can only use the Chainsaw once per turn (i.e., a Chainsaw cannot be used with Frenzy or Multiple Block) and if used as part of a Blitz action, this player cannot continue moving after using it.',
                'indentation' => 0,
                'order' => 7,
            ],
            [
                'trait_id' => 16,
                'text' => 'If this player Falls Over or is Knocked Down, the opposing coach may add +3 to the Armour roll made against the player.',
                'indentation' => 0,
                'order' => 8,
            ],
            [
                'trait_id' => 16,
                'text' => 'If an opposition player performs a Block action targeting this player and a Player Down! or a POW! result is applied, +3 is added to the Armour roll. If a Both Down result is applied, +3 is added to both Armour rolls. ',
                'indentation' => 0,
                'order' => 9,
            ],
            [
                'trait_id' => 16,
                'text' => 'Finally, this player may use their Chainsaw when they perform a Foul action. Roll a D6 for kick-back as described above. Once again, an Armour roll is made against the player hit by the Chainsaw, adding +3 to the score.',
                'indentation' => 0,
                'order' => 10,
            ],
            // Decay*
            [
                'trait_id' => 17,
                'text' => 'If this player suffers a Casualty result on the Injury table, there is a +1 modifier applied to all rolls made against this player on the Casualty table.',
                'indentation' => 0,
                'order' => 0,
            ],
            // Hit and Run
            [
                'trait_id' => 18,
                'text' => 'After a player with this Trait performs a Block action, they may immediately move one free square ignoring Tackle Zones so long as they are still Standing. They must ensure that after this free move, they are not Marked by or Marking any opposition players.',
                'indentation' => 0,
                'order' => 0,
            ],
            // Hypnotic Gaze
            [
                'trait_id' => 19,
                'text' => 'During their activation, this player may perform a ‘Hypnotic Gaze’ Special action. There is no limit to how many players with this Trait may perform this Special action each team turn.',
                'indentation' => 0,
                'order' => 0,
            ],
            [
                'trait_id' => 19,
                'text' => 'To perform a Hypnotic Gaze Special action, nominate a single Standing opposition player that has not lost their Tackle Zone and that this player is Marking. Then make an Agility test for this player, applying a -1 modifier for every player (other than the nominated player) that is Marking this player. If the test is passed, the nominated player loses their Tackle Zone until they are next activated.',
                'indentation' => 0,
                'order' => 1,
            ],
            [
                'trait_id' => 19,
                'text' => 'This player may move before performing this Special action, following all of the normal movement rules. However, once this Special action has been performed, this player may not move further and their activation comes to an end.',
                'indentation' => 0,
                'order' => 2,
            ],
            // Kick Team-mate
            [
                'trait_id' => 20,
                'text' => 'Once per team turn, in addition to another player performing either a Pass or a Throw Team-mate action, a single player with this Trait on the active team can perform a ‘Kick Team-mate’ Special action and attempt to kick a Standing team-mate with the Right Stuff trait that is in a square adjacent to them.',
                'indentation' => 0,
                'order' => 0,
            ],
            [
                'trait_id' => 20,
                'text' => 'To perform a Kick Team-mate Special action, follow the rules for Throw Team-mate actions.',
                'indentation' => 0,
                'order' => 1,
            ],
            [
                'trait_id' => 20,
                'text' => 'However, if the Kick Team-mate Special action is fumbled, the kicked player is automatically removed from play and an Injury roll is made against them, treating a Stunned result as a KO’d result (note that, if the player that performed this action also has the Mighty Blow (+X) skill, the coach of the opposing team may use that Skill on this Injury roll). If the kicked player was in possession of the ball when removed from play, the ball will bounce from the square they occupied.',
                'indentation' => 0,
                'order' => 2,
            ],
            // Loner (X+)*
            [
                'trait_id' => 21,
                'text' => 'If this player wishes to use a team re-roll, roll a D6. If you roll equal to or higher than the target number shown in brackets, this player may use the team re-roll as normal. Otherwise, the original result stands without being re-rolled but the team re-roll is lost just as if it had been used. This Trait must still be used if the player is Prone, Stunned, or has lost their Tackle Zone.',
                'indentation' => 0,
                'order' => 0,
            ],
            // Loner (3+)*
            [
                'trait_id' => 22,
                'text' => 'If this player wishes to use a team re-roll, roll a D6. If you roll 3 or higher than the target number shown in brackets, this player may use the team re-roll as normal. Otherwise, the original result stands without being re-rolled but the team re-roll is lost just as if it had been used. This Trait must still be used if the player is Prone, Stunned, or has lost their Tackle Zone.',
                'indentation' => 0,
                'order' => 0,
            ],
            // Loner (4+)*
            [
                'trait_id' => 23,
                'text' => 'If this player wishes to use a team re-roll, roll a D6. If you roll 4 or higher than the target number shown in brackets, this player may use the team re-roll as normal. Otherwise, the original result stands without being re-rolled but the team re-roll is lost just as if it had been used. This Trait must still be used if the player is Prone, Stunned, or has lost their Tackle Zone.',
                'indentation' => 0,
                'order' => 0,
            ],
            // Loner (5+)*
            [
                'trait_id' => 24,
                'text' => 'If this player wishes to use a team re-roll, roll a D6. If you roll 5 or higher than the target number shown in brackets, this player may use the team re-roll as normal. Otherwise, the original result stands without being re-rolled but the team re-roll is lost just as if it had been used. This Trait must still be used if the player is Prone, Stunned, or has lost their Tackle Zone.',
                'indentation' => 0,
                'order' => 0,
            ],
            // My Ball*
            [
                'trait_id' => 25,
                'indentation' => 0,
                'order' => 0,
                'text' => 'A player with this Trait may not willingly give up the ball when in possession of it, and so may not make Pass actions, Hand-off actions, or use any other Skill or Trait that would allow them to relinquish possession of the ball. The only way they can lose possession of the ball is by being Knocked Down, Placed Prone, Falling Over or by the effect of a skill, Trait, or special rule of an opposing model.',
            ],
            // No Hands*
            [
                'trait_id' => 26,
                'indentation' => 0,
                'order' => 0,
                'text' => 'This player is unable to take possession of the ball. They may not attempt to pick it up, to catch it, or attempt to interfere with a pass. Any attempt to do so will automatically fail, causing the ball to bounce. Should this player voluntarily move into a square in which the ball is placed, they cannot attempt to pick it up. The ball will bounce and a Turnover is caused as if this player had failed an attempt to pick up the ball.',
            ],
            // Plague Ridden
            [
                'trait_id' => 27,
                'indentation' => 0,
                'order' => 0,
                'text' => 'Once per game, if an opposition player with a Strength characteristic of 4 or less that does not have the Decay, Regeneration or Stunty traits suffers a Casualty result of 15-16, DEAD as the result of a Block action performed or a Foul action committed by a player with this Trait that belongs to your team, and if that player cannot be saved by an apothecary, you may choose to use this Trait. If you do, that player does not die; they have instead been infected with a virulent plague!',
            ],
            [
                'trait_id' => 27,
                'indentation' => 0,
                'order' => 1,
                'text' => 'If your team has the ‘Favoured of Nurgle’ special rule, a new ‘Rotter Lineman’ player, drawn from the Nurgle roster, can be placed immediately in the Reserves box of your team’s dugout (this may cause a team to have more than 16 players for the remainder of this game). During step 4 of the post-game sequence, this player may be permanently hired, exactly as you would a Journeyman player that had played for your team.',
            ],
            // Pogo Stick
            [
                'trait_id' => 28,
                'indentation' => 0,
                'order' => 0,
                'text' => 'During their movement, instead of jumping over a single square that is occupied by a Prone or Stunned player, a player with this Trait may choose to Leap over any single adjacent square, including unoccupied squares and squares occupied by Standing players.',
            ],
            [
                'trait_id' => 28,
                'indentation' => 0,
                'order' => 1,
                'text' => 'Additionally, when this player makes an Agility test to Jump over a Prone or Stunned player, or to Leap over an empty square or a square occupied by a Standing player, they may ignore any negative modifiers that would normally be applied for being Marked in the square they jumped or leaped from and/or for being Marked in the square they have jumped or leaped into.',
            ],
            [
                'trait_id' => 28,
                'indentation' => 0,
                'order' => 2,
                'text' => 'A player with this Trait cannot also have the Leap skill.',
            ],
            // Projectile Vomit
            [
                'trait_id' => 29,
                'indentation' => 0,
                'order' => 0,
                'text' => 'Instead of performing a Block action (on its own or as part of a Blitz action), this player may perform a ‘Projectile Vomit’ Special action. Exactly as described for a Block action, nominate a single Standing player to be the target of the Projectile Vomit Special action. There is no limit to how many players with this Trait may perform this Special action each team turn.',
            ],
            [
                'trait_id' => 29,
                'indentation' => 0,
                'order' => 1,
                'text' => 'To perform a Projectile Vomit Special action, roll a D6:',
            ],
            [
                'trait_id' => 29,
                'indentation' => 1,
                'order' => 2,
                'text' => 'On a roll of 2+, this player regurgitates acidic bile onto the nominated target.',
            ],
            [
                'trait_id' => 29,
                'indentation' => 1,
                'order' => 3,
                'text' => 'On a roll of 1, this player belches and snorts, before covering itself in acidic bile.',
            ],
            [
                'trait_id' => 29,
                'indentation' => 1,
                'order' => 4,
                'text' => 'In either case, an Armour roll is made against the player hit by the Projectile Vomit. This Armour roll cannot be modified in any way.',
            ],
            [
                'trait_id' => 29,
                'indentation' => 1,
                'order' => 5,
                'text' => 'If the armour of the player hit is broken, they become Prone and an Injury roll is made against them. This Injury roll cannot be modified in any way.',
            ],
            [
                'trait_id' => 29,
                'indentation' => 1,
                'order' => 6,
                'text' => 'If the armour of the player hit is not broken, this Trait has no effect.',
            ],
            [
                'trait_id' => 29,
                'indentation' => 0,
                'order' => 7,
                'text' => 'A player can only perform this Special action once per turn (i.e., Projectile Vomit cannot be used with Frenzy or Multiple Block).',
            ],
            // Really Stupid*
            [
                'trait_id' => 30,
                'indentation' => 0,
                'order' => 0,
                'text' => 'When this player is activated, even if they are Prone or have lost their Tackle Zone, immediately after declaring the action they will perform but before performing the action, roll a D6, applying a +2 modifier to the dice roll if this player is currently adjacent to one or more Standing team-mates that do not have this Trait:',
            ],
            [
                'trait_id' => 30,
                'indentation' => 1,
                'order' => 1,
                'text' => 'On a roll of 1-3, this player forgets what they are doing and their activation ends immediately. Additionally, this player loses their Tackle Zone until they are next activated.',
            ],
            [
                'trait_id' => 30,
                'indentation' => 1,
                'order' => 2,
                'text' => 'On a roll of 4+, this player continues their activation as normal and completes their declared action.',
            ],
            [
                'trait_id' => 30,
                'indentation' => 0,
                'order' => 3,
                'text' => 'Note that if you declared that this player would perform an action which can only be performed once per team turn and this player’s activation ended before the action could be completed, the action is considered to have been performed and no other player on your team may perform the same action this team turn.',
            ],
            // Regeneration
            [
                'trait_id' => 31,
                'indentation' => 0,
                'order' => 0,
                'text' => 'After a Casualty roll has been made against this player, roll a D6. On a roll of 4+, the Casualty roll is discarded without effect and the player is placed in the Reserves box rather than the Casualty box of their team dugout. On a roll of 1-3, however, the result of the Casualty roll is applied as normal. This Trait may still be used if the player is Prone, Stunned, or has lost their Tackle Zone.',
            ],
            // Right Stuff*
            [
                'trait_id' => 32,
                'indentation' => 0,
                'order' => 0,
                'text' => 'If this player also has a Strength characteristic of 3 or less, they can be thrown by a team-mate with the Throw Team-mate skill. This Trait may still be used if the player is Prone, Stunned, or has lost their Tackle Zone.',
            ],
            // Secret Weapon*
            [
                'trait_id' => 33,
                'indentation' => 0,
                'order' => 0,
                'text' => 'When a drive in which this player took part ends, even if this player was not on the pitch at the end of the drive, this player will be Sent-off for committing a Foul.',
            ],
            // Stab
            [
                'trait_id' => 34,
                'indentation' => 0,
                'order' => 0,
                'text' => 'Instead of performing a Block action (on its own or as part of a Blitz action), this player may perform a ‘Stab’ Special action. Exactly as described for a Block action, nominate a single Standing player to be the target of the Stab Special action. There is no limit to how many players with this Trait may perform this Special action each team turn.',
            ],
            [
                'trait_id' => 34,
                'indentation' => 0,
                'order' => 1,
                'text' => 'To perform a Stab Special action, make an unmodified Armour roll against the target:',
            ],
            [
                'trait_id' => 34,
                'indentation' => 1,
                'order' => 2,
                'text' => 'If the Armour of the player hit is broken, they become Prone and an Injury roll is made against them. This Injury roll cannot be modified in any way.',
            ],
            [
                'trait_id' => 34,
                'indentation' => 1,
                'order' => 3,
                'text' => 'If the Armour of the player hit is not broken, this Trait has no effect.',
            ],
            [
                'trait_id' => 34,
                'indentation' => 1,
                'order' => 4,
                'text' => 'If Stab is used as part of a Blitz action, the player cannot continue moving after using it.',
            ],
            // Stunty*
            [
                'trait_id' => 35,
                'indentation' => 0,
                'order' => 0,
                'text' => 'When this player makes an Agility test in order to Dodge, they ignore any -1 modifiers for being Marked in the square they have moved into, unless they also have either the Bombardier trait, the Chainsaw trait or the Swoop trait.',
            ],
            [
                'trait_id' => 35,
                'indentation' => 0,
                'order' => 1,
                'text' => 'However, when an opposition player attempts to interfere with a Pass action performed by this player, that player may apply a +1 modifier to their Agility test.',
            ],
            [
                'trait_id' => 35,
                'indentation' => 0,
                'order' => 2,
                'text' => 'Finally, players with this Trait are more prone to injury. Therefore, when an Injury roll is made against this player, roll 2D6 and consult the Stunty Injury table. This Trait must still be used if the player is Prone, Stunned, or has lost their Tackle Zone.',
            ],
            // Swarming
            [
                'trait_id' => 36,
                'indentation' => 0,
                'order' => 0,
                'text' => 'During each Start of Drive sequence, after Step 2 but before Step 3, you may remove D3 players with this Trait from the Reserves box of your dugout and set them up on the pitch, allowing you to set up more than the usual 11 players. These extra players may not be placed on the Line of Scrimmage or in a Wide Zone. Swarming players must be set up in their team’s half.',
            ],
            [
                'trait_id' => 36,
                'indentation' => 0,
                'order' => 1,
                'text' => 'When using Swarming, a coach may not set up more players with the Swarming trait onto the pitch than the number of friendly players with the Swarming trait that were already set up. So, if a team had 2 players with the Swarming trait already set up on the pitch, and then rolled for 3 more players to enter the pitch via Swarming, only a maximum of 2 more Swarming players could be set up on the pitch.',
            ],
            // Swoop
            [
                'trait_id' => 37,
                'indentation' => 0,
                'order' => 0,
                'text' => 'If this player is thrown by a team-mate, they do not scatter before landing as they normally would. Instead, you may place the Throw-in template over the player, facing towards either End Zone or either sideline as you wish. The player then moves from the target square D3 squares in a direction determined by rolling a D6 and referring to the Throw-in template.',
            ],
            // Take Root*
            [
                'trait_id' => 38,
                'indentation' => 0,
                'order' => 0,
                'text' => 'When this player is activated, even if they are Prone or have lost their Tackle Zone, immediately after declaring the action they will perform but before performing the action, roll a D6:',
            ],
            [
                'trait_id' => 38,
                'indentation' => 1,
                'order' => 1,
                'text' => 'On a roll of 1, this player becomes Rooted:',
            ],
            [
                'trait_id' => 38,
                'indentation' => 2,
                'order' => 2,
                'text' => 'A Rooted player cannot move from the square they currently occupy for any reason, voluntarily or otherwise, until the end of this drive, or until they are Knocked Down or Placed Prone.',
            ],
            [
                'trait_id' => 38,
                'indentation' => 2,
                'order' => 3,
                'text' => 'A Rooted player may perform any action available to them provided they can do so without moving.',
            ],
            [
                'trait_id' => 38,
                'indentation' => 1,
                'order' => 4,
                'text' => 'On a roll of 2+, this player continues their activation as normal.',
            ],
            [
                'trait_id' => 38,
                'indentation' => 0,
                'order' => 5,
                'text' => 'If you declared that this player would perform any action that includes movement (Pass, Hand-off, Blitz or Foul) prior to them becoming Rooted, they may complete the action if possible. If they cannot, the action is considered to have been performed and no other player on your team may perform the same action this team turn.',
            ],
            // Titchy*
            [
                'trait_id' => 39,
                'indentation' => 0,
                'order' => 0,
                'text' => 'This player may apply a +1 modifier to any Agility tests they make in order to Dodge.',
            ],
            [
                'trait_id' => 39,
                'indentation' => 0,
                'order' => 1,
                'text' => 'However, if an opposition player dodges into a square within the Tackle Zone of this player, this player does not count as Marking the moving player for the purposes of calculating Agility test modifiers.',
            ],
            // Throw Team-mate
            [
                'trait_id' => 40,
                'indentation' => 0,
                'order' => 0,
                'text' => 'If this player also has a Strength characteristic of 5 or more, they may perform a Throw Team-mate action, allowing them to throw a teammate with the Right Stuff trait.',
            ],
            // Timmm-ber!
            [
                'trait_id' => 41,
                'indentation' => 0,
                'order' => 0,
                'text' => 'If this player has a Movement Allowance of 2 or less, apply a +1 modifier to the dice roll when they attempt to stand up for each Open, Standing team-mate they are currently adjacent to. A natural 1 is always a failure, no matter how many teammates are helping.',
            ],
            [
                'trait_id' => 41,
                'indentation' => 0,
                'order' => 1,
                'text' => 'This Trait may still be used if the player is Prone or has lost their Tackle Zone.',
            ],
            // Trickster*
            [
                'trait_id' => 42,
                'indentation' => 0,
                'order' => 0,
                'text' => 'When this player is about to be hit by a Block action or a Special action that replaces a Block action (with the exception of Block action caused by the Ball & Chain Move Special action), before determining how many dice are rolled, they may be removed from the pitch and placed in any other unoccupied square adjacent to the player performing the Block action. The Block action then takes place as normal.',
            ],
            [
                'trait_id' => 42,
                'indentation' => 0,
                'order' => 1,
                'text' => 'If the player using this Trait is holding the ball and places themselves in the opposition End Zone, the Block action will still be fully resolved before any touchdown is resolved.',
            ],
            // Unchannelled Fury*
            [
                'trait_id' => 43,
                'indentation' => 0,
                'order' => 0,
                'text' => 'When this player is activated, even if they are Prone or have lost their Tackle Zone, immediately after declaring the action they will perform but before performing the action, roll a D6, applying a +2 modifier to the dice roll if you declared the player would perform a Block or Blitz action (or a Special action granted by a Skill or Trait that can be performed instead of a Block action):',
            ],
            [
                'trait_id' => 43,
                'indentation' => 1,
                'order' => 1,
                'text' => 'On a roll of 1-3, this player rages incoherently at others but achieves little else. Their activation ends immediately.',
            ],
            [
                'trait_id' => 43,
                'indentation' => 1,
                'order' => 2,
                'text' => 'On a roll of 4+, this player continues their activation as normal and completes their declared action.',
            ],
            [
                'trait_id' => 43,
                'indentation' => 0,
                'order' => 3,
                'text' => 'If you declared that this player would perform an action which can only be performed once per team turn and this player’s activation ended before the action could be completed, the action is considered to have been performed and no other player on your team may perform the same action this team turn.',
            ],
            [
                'trait_id' => 44,
                'indentation' => 0,
                'order' => 0,
                'text' => 'This player suffers a -1 penalty to the dice roll when attempting to Rush.'
            ],
            [
                'trait_id' => 45,
                'indentation' => 0,
                'order' => 0,
                'text' => 'At the end of the opposition team\'s turn, roll a D6 for each Prone, non-Stunned team-mate within three squares of a Standing player with this Trait. On a 5+, the Prone player may immediately stand up.'
            ],
];
        foreach ($traitDescriptions as $traitDescription){
            \App\Models\TraitDescription::updateOrInsert($traitDescription);
        };
    }
}
