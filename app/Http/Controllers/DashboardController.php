<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\PlayerSkill;
use App\Models\PlayerTrait;
use App\Models\Team;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Inertia\Inertia;

class DashboardController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __invoke()
    {
        $players = Player::all()->count();
        $teams = Team::all()->count();
        $skills = PlayerSkill::where('reference', '>', 0)->count();
        $traits = PlayerTrait::where('reference', '>', 0)->count();

        return Inertia::render('Dashboard',
            [
                'players' => $players,
                'teams' => $teams,
                'skills' => $skills,
                'traits' => $traits,
            ]
        );
    }
}
