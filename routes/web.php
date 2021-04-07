<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

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
    return view('welcome');
});

require __DIR__.'/auth.php';

Route::resource('campaign', CampaignController::class)->middleware(['auth']);

Route::resource('album', AlbumController::class)->middleware(['auth']);

Route::resource('profile', ProfileController::class)->middleware(['auth']);

Route::get('/gallery', function (){
    return View::make('gallery.index');
})->middleware(['auth']);

Route::get('/settings', function (){
    return View::make('settings');
})->middleware(['auth']);

Route::get('/ranking', function (){
    return View::make('ranking.index');
})->middleware(['auth']);
