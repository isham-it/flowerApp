<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\FlowerController;

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

// route available at localhost/ and display 'welcome' view
Route::get('/', function () {
    // same thing as require_once 'welcome.blade.php';
    return 'hello the world';
});

Route::get('/flowers', function () {
    // Flowers list : need to create link to see details
    /*
    Example of using route's name :
    $url = route('movie.details', [2]);
    return $url;
    */
    return 'Hellloooooo, this is just a test.';
});

// Now, I acces route like this : localhost:8000/id/3
Route::get('/flower/{id}', function ($id) {
    return 'flower with id : ' . $id;
})->name('flower.details');





/******* ROUTES LINKED TO CONTROLLERS *******/
Route::get('flowers', [FlowerController::class, 'index']);

// Show a specific flower :
Route::get('flower-detail/{id}', [FlowerController::class, 'show']);

// Show the form :
    Route::get('create-flower', [FlowerController::class, 'create']);
    
    // Save data (using post method):
    Route::post('create-flower', [FlowerController::class, 'store']);
    
    
    // Update a specific flower :
    Route::get('update/{id}', [FlowerController::class, 'update']);