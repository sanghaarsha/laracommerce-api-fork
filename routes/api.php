<?php

use App\Http\Controllers\API\LandingPageController;
// use App\Http\Controllers\API\RegionController;
// use App\Models\User;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/', [LandingPageController::class, 'index'])->name('landing-page');

// glob — Find pathnames matching a pattern
// returns: array with matching paths
$routes = glob(__DIR__.'/api/*.php');

// dynamically include file in 'routes/api/*.php'
foreach ($routes as $route) {
    require $route;
}
