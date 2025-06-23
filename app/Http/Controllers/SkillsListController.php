<?php

namespace App\Http\Controllers;

use App\Models\PlayerSkill;
use App\Models\SkillCategory;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Inertia\Inertia;

class SkillsListController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __invoke()
    {
        $categories = SkillCategory::with(['skills' => function ($query) {
            $query->where('reference', '>', 0)->with('descriptions');
        }])->get();

        return Inertia::render('Web/Reference/PlayerSkills',
            [
                'categories' => $categories,
            ]
        );
    }
}
