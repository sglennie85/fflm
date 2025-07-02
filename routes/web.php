<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Route::domain(config('app_domain'))->group(function () {
//    Route::prefix('')->group(base_path('routes/web/app.php'));
//    Route::prefix('_admin')->group(base_path('routes/web/admin.php'));
//});

Route::prefix('')->group(base_path('routes/web/app.php'));
Route::prefix('_admin')->group(base_path('routes/web/admin.php'));
