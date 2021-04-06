<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

require __DIR__.'/auth.php';

Route::resource('campaign', CampaignController::class)->middleware(['auth']);

Route::resource('album', AlbumController::class)->middleware(['auth']);

Route::resource('profile', ProfileController::class)->middleware(['auth']);

Route::get('/gallery', function (){
    return view('gallery.index');
});
