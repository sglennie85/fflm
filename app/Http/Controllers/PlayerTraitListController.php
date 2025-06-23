<?php

namespace App\Http\Controllers;

use App\Models\PlayerTrait;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Inertia\Inertia;

class PlayerTraitListController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __invoke()
    {
        $playerTraits = PlayerTrait::all();

        return Inertia::render('Web/PlayerTraits',
            [
                'playerTraits' => $playerTraits,
            ]
        );
    }
}
