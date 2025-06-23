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

require_once __DIR__ . '/web/web.php';
//require_once __DIR__ . '/portal/web.php';
//require_once __DIR__ . '/app/web.php';

//Route::get('/', function () {
//    return Inertia::render('Welcome', [
//        'canLogin' => Route::has('login'),
//        'canRegister' => Route::has('register'),
//        'laravelVersion' => Application::VERSION,
//        'phpVersion' => PHP_VERSION,
//    ]);
//});
//
//Route::middleware([
//    'auth:sanctum',
//    config('jetstream.auth_session'),
//    'verified',
//])->group(function () {
//    Route::get('/dashboard', function () {
//        $users = \App\Models\User::paginate(50);
//        return Inertia::render('Dashboard',[
//            'userData' => $users
//        ]);
//    })->name('dashboard');
//    Route::get('/users', function () {
//        $users = \App\Models\User::paginate(50);
//        return Inertia::render('App/Users',[
//            'userData' => $users
//        ]);
//    })->name('users');
//});
