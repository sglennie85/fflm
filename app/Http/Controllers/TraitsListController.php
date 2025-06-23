<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\PlayerTrait;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Inertia\Inertia;

class TraitsListController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __invoke()
    {
        $traits = PlayerTrait::with(['descriptions'])->where('reference', '>=', 1)->orderBy('name')->get();
        return Inertia::render('Web/PlayerTraits',
            [
                'traits' => $traits,
            ]
        );
    }
}
