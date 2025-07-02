<?php

namespace App\Http\Controllers\Web\App\References;

use App\Models\PlayerTrait;
use App\Models\SkillCategory;
use App\Models\StarPlayer;
use App\Models\Team;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Inertia\Inertia;

class ReferenceListController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __invoke()
    {
        $teams = Team::with([
            'regions'=> function ($query) {
                $query->orderBy('name', 'asc');
            },
            'rules'=> function ($query) {
                $query->orderBy('name', 'asc');
            },
            'players' => function ($query) {
                $query->orderBy('line', 'desc')
                    ->orderBy('big', 'asc')
                    ->orderBy('plural_name');
            },
            'players.skills' => function ($query) {
                $query->orderBy('name', 'asc');
            },
            'players.traits' => function ($query) {
                $query->orderBy('name', 'asc');
            },
            'players.primaries', 'players.secondaries'
        ])->get();

        $skills = SkillCategory::with(['skills' => function ($query) {
            $query->where('reference', '>', 0)->with('descriptions');
        }])->orderBy('name')->get();

        $traits = PlayerTrait::with(['descriptions'])
            ->where('reference', '>=', 1)
            ->orderBy('name')
            ->get();

        $starPlayers = StarPlayer::with([
            'skills' => function ($query) {
                $query->orderBy('name', 'asc');
            },
            'traits'=> function ($query) {
                $query->orderBy('name', 'asc');
            },
            'regions',
            'rules',
            'pairedPlayers',
            'pairedPlayers.skills' => fn($query) => $query->orderBy('name', 'asc'),
            'pairedPlayers.traits' => fn($query) => $query->orderBy('name', 'asc'),
        ])->where('display', 1)
            ->orderBy('name', 'asc')
            ->get();

        $starPlayers->transform(function ($player) {
            $combined = $player->regions->concat($player->rules)->sortBy('name')->values();
            $player->combinedRegionsRules = $combined;
            return $player;
        });

        return Inertia::render('Web/App/References/Reference', [
            'teams' => $teams,
            'skillCategories' => $skills,
            'traits' => $traits,
            'starPlayers' => $starPlayers,
        ]);
    }
}
