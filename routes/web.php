<?php

use Illuminate\Support\Facades\Auth;
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
Route::get('/index', function () {
    return view('index')->name('nmec.index');
});
Route::get('/user', function (){
    return view('layouts.user');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/index', [App\Http\Controllers\Nmec::class, 'index'])->name('index');
Route::get('/mission-and-vision', [App\Http\Controllers\MissionAndVirsionController::class, 'index'])->name('mission-and-vision');
Route::get('/museum-history', [App\Http\Controllers\MuseumHistoryController::class, 'index'])->name('museum-history');
Route::get('/board-of-directors', [App\Http\Controllers\BoardOfDirectorsController::class, 'index'])->name('board-of-directors');
Route::get('/eco-friendly', [App\Http\Controllers\EcoFrendilyController::class, 'index'])->name('eco-friendly');
Route::get('/how-to-get-here', [App\Http\Controllers\HowToGetHereController::class, 'index'])->name('how-to-get-here');
Route::get('/special-needs', [App\Http\Controllers\SpecialNeedsController::class, 'index'])->name('special-needs');
Route::get('/education-center', [App\Http\Controllers\EducationCenterController::class, 'index'])->name('education-center');
Route::get('/training-center', [App\Http\Controllers\TrainingCenterController::class, 'index'])->name('training-center');
Route::get('/islamic', [App\Http\Controllers\IslamicController::class, 'index'])->name('islamic');
Route::get('/multiple', [App\Http\Controllers\MultipleController::class, 'index'])->name('multiple');
Route::get('/mummies', [App\Http\Controllers\MummiesController::class, 'index'])->name('mummies');


