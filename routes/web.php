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

//index page
Route::get('/home', [FlowerController::class, 'home']);

// Show the form to create flowers
Route::get('/new-flower', [FlowerController::class, 'create']);
Route::post('/new-flower', [FlowerController::class, 'store']);


// Show the form to update a  flower
Route::get('/update/flower/{id}', [FlowerController::class, 'edit'])->name('update.flower');
Route::post('/update/flower/{id}', [FlowerController::class, 'update']);

Route::get('/delete/flower/{id}', [FlowerController::class, 'destroy'])->name('delete.flower');


// CREATE THE ROUTE TO DISPLAY ONE SPECIFIC FLOWER
Route::get('/flower/{id}', [FlowerController::class, 'show'])->name('details.flower');


Route::get('/movies', [MovieController::class, 'index']);


Route::get('/api/get-movies', [ApiController::class, 'getMovies']);
Route::get('/api/get-movie/title={title}', [ApiController::class, 'getMovie']);

//create the route for API get flower
Route::get('/api/get-flowers', [ApiFlowerController::class, 'getFlowers']);
Route::get('/api/get-flower/{amount}', [ApiFlowerController::class, 'getAmountFlower']);
Route::get('/api/get-flowers/{id}', [ApiFlowerController::class, 'getIdFlower']);
Route::get('/api/get-type/{type}', [ApiFlowerController::class, 'getTypeFlower']);

// Display the form
Route::get('/ajax-form', [MovieController::class, 'ajaxForm'])->name('show.ajax.form');
// When we submit the form MOVIE
Route::post('/ajax-answer', [MovieController::class, 'ajaxAnswer'])->name('submit.ajax.form');


// Display the form FLOWER
Route::get('/ajax-flower', [FlowerController::class, 'ajaxFlowerForm']);

// When we submit the form
Route::post('/ajax-flower', [FlowerController::class, 'ajaxFlowerAnswer'])->name('submit.ajax.form');


//route USER
// Display the form
Route::get('/user-form', [UserController::class, 'ajaxForm']);
// When we submit the form
Route::post('/user-answer', [UserController::class, 'ajaxAnswer'])->name('submit.ajax.form');

