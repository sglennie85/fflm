<?php

use App\Http\Controllers\Web\App\AppDashboardController;
use App\Http\Controllers\Web\App\Leagues\LeaguesListController;
use App\Http\Controllers\Web\App\References\ReferenceListController;
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
    Route::get('/dashboard', AppDashboardController::class)->name('app.dashboard');

    Route::prefix('reference')->group(function () {
        Route::get('/reference', ReferenceListController::class)->name('app.reference');
    });

    Route::prefix('leagues')->group(function () {
        Route::get('/leagues', LeaguesListController::class)->name('app.leagues.leagues');
    });
});
