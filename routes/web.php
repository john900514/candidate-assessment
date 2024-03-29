<?php

use Illuminate\Support\Facades\Route;

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
Route::group([
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
    ),
    'namespace'  => 'App\Actions',
], function () { // custom admin routes
    Route::post('/free-trial', 'Leads\ProcessFreeTrialAction');
});

Route::group([
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
    ),
    'namespace'  => 'App\Http\Controllers',
], function () { // custom admin routes
    Route::get('/', 'Mainsite\HomeController@index');
    Route::get('/offers', 'Mainsite\OffersController@index');
    Route::get('/locations', 'Mainsite\LocationsController@index');
    Route::get('/clubs/{club_id}', 'Mainsite\LocationsController@show');
    Route::get('/programs', 'Mainsite\ProgramsController@index');
    Route::get('/free-trial', 'Mainsite\OffersController@free_trial');
});
