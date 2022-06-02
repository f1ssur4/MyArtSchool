<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtController;
use \App\Http\Controllers\InstructorController;
use \App\Http\Controllers\SchoolController;
use \App\Http\Controllers\RequestController;

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
})->name('/');

Route::name('arts.')->group(function () {
    Route::get('/arts', [ArtController::class, 'index'])->name('index');
});

Route::name('schools.')->group(function () {
    Route::get('/schools', [SchoolController::class, 'index'])->name('index');
});

Route::name('instructors.')->group(function () {
    Route::get('/instructors', [InstructorController::class, 'index'])->name('index');
});

Route::name('request')->group(function () {
    Route::match(['get', 'post'], '/request', [RequestController::class, 'request']);
});


