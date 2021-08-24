<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FlowerController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\UserController;

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

// Movies
Route::get('/movies', [MovieController::class, 'index']);

// Flower API
Route::get('/api/get-flowers', [ApiController::class, 'getFlowers']);
Route::get('/api/get-flowers/qty/{amount}', [ApiController::class, 'getFlowersAmount']);
Route::get('/api/get-flower/id/{id}', [ApiController::class, 'getFlower']);
Route::get('/api/get-flower/type/{type}', [ApiController::class, 'getFlowerType']);

// Display the form
Route::get('/ajax-form', [MovieController::class, 'ajaxForm'])->name('show.ajax.form');
// When we submit the form
Route::post('/ajax-answer', [MovieController::class, 'ajaxAnswer'])->name('submit.ajax.form');

// User register form :
Route::get('/register', [UserController::class, 'create'])->name('register.form');
// Submit register form
Route::post('/register', [UserController::class, 'store'])->name('register.insert');


// User login form :
Route::get('/login', [UserController::class, 'show_Login']);
// Submit login form
Route::post('/login', [UserController::class, 'login']);

//MIDDLEWARE
Route::get('/profile', function () {
    //
})->middleware('auth');
