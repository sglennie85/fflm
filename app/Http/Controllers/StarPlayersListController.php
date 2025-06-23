<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\PlayerTrait;
use App\Models\StarPlayer;
use App\Models\Team;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Inertia\Inertia;

class StarPlayersListController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __invoke()
    {
        $starPlayers = StarPlayer::with([
            'skills' => function ($query) {
                $query->orderBy('name', 'asc');
            },
            'traits'=> function ($query) {
                $query->orderBy('name', 'asc');
            },
        ])->get();

        return Inertia::render('Web/StarPlayers', [
            'starPlayers' => $starPlayers,
        ]);
    }
}
