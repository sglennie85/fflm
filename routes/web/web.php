<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', App\Http\Controllers\DashboardController::class)->name('web.dashboard');
    Route::get('/players', App\Http\Controllers\PlayersListController::class)->name('web.players');
    Route::get( '/stars', \App\Http\Controllers\StarPlayersListController::class)->name('web.stars');
    Route::get('/skills', App\Http\Controllers\SkillsListController::class)->name('web.skills');
    Route::get('/teams', App\Http\Controllers\TeamsListController::class)->name('web.teams');
    Route::get('/rules', App\Http\Controllers\TeamRulesTraitsController::class)->name('web.team_rules');
    Route::get('/traits', App\Http\Controllers\TraitsListController::class)->name('web.traits');
});
