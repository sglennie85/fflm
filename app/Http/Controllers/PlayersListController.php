<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\PlayerTrait;
use App\Models\Team;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Inertia\Inertia;

class PlayersListController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __invoke()
    {
        $teams = Team::with([
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

        return Inertia::render('Web/Reference/Players', [
            'teams' => $teams,
        ]);
    }
}
