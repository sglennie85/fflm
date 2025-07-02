<?php

namespace App\Http\Controllers\Web\App\Leagues;

use App\Models\League;
use App\Models\Team;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class LeaguesListController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __invoke()
    {
        $accountId = Auth::user()->account_id;
        $active = League::where('account_id', $accountId)->where('active', true)->get();
        $inactive = League::where('account_id', $accountId)->where('active', false)->get();

        return Inertia::render('Web/App/Leagues/Leagues', [
            'active' => $active,
            'inactive' => $inactive,
        ]);
    }
}
