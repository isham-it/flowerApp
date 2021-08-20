<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FlowerController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\ApiFlowerController;

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

/*
    Create a route every time you need :
        - To access a page / view
        - To perfom an action (saving in DB; looking for something)
*/

Route::get('/flowers', [FlowerController::class, 'index']);

// Show the form to create flowers
Route::get('/new-flower', [FlowerController::class, 'create']);
Route::post('/new-flower', [FlowerController::class, 'store']);

// Show the form to update a  flower
Route::get('/update/flower/{id}', [FlowerController::class, 'edit'])->name('update.flower');
Route::post('/update/flower/{id}', [FlowerController::class, 'update']);

Route::get('/delete/flower/{id}', [FlowerController::class, 'destroy'])->name('delete.flower');;

// CREATE THE ROUTE TO DISPLAY ONE SPECIFIC FLOWER
Route::get('/flower/{id}', [FlowerController::class, 'show'])->name('details.flower');


Route::get('/movies', [MovieController::class, 'index']);


Route::get('/api/get-movies', [ApiController::class, 'getMovies']);
Route::get('/api/get-movie/title={title}', [ApiController::class, 'getMovie']);

Route::get('/api/get-flowers', [ApiFlowerController::class, 'getFlowers']);
Route::get('/api/get-flower/{amount}', [ApiFlowerController::class, 'getFlower']);


