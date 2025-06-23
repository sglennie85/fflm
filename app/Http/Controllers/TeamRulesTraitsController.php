<?php

namespace App\Http\Controllers;

use App\Models\Region;
use App\Models\TeamRule;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Inertia\Inertia;

class TeamRulesTraitsController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __invoke()
    {
        $regions = Region::all();
        $teamRules = TeamRule::with('descriptions')->get();

        return Inertia::render('Web/Reference/TeamRules',
            [
                'regions' => $regions,
                'teamRules' => $teamRules,
            ]
        );
    }
}
