<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\SdbeginnerController;
use App\Http\Controllers\SdadvController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PlatformController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\WelcomeController;
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
Route::get('/welcome', [WelcomController::class, 'index'])->name('welcom'); 
Route::get('/sdbeginner', [SdbeginnerController::class, 'index'])->name('sdbeginner');
Route::get('/sdadv', [SdadvController::class, 'index'])->name('sdadv');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/level', [LevelController::class, 'index'])->name('level');
Route::get('/platform', [PlatformController::class, 'index'])->name('platform');
Route::get('/program', [ProgramController::class, 'index'])->name('program');
Route::get('/contact', [ContactusController::class, 'index'])->name('contact');