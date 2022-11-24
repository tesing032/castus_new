<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;


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

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/', [BlogController::class, 'show']);


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

//Route::get('{slug}', [PagesController::class, 'show']);
Route::get('/contact',  [ContactController::class, 'contact']);
Route::post('/contactpost', [ContactController::class,'contactPost'])->name('contactpost');
//Route::post('/contact', ['as'=>'contact.store','uses'=>'ContactController@contactPost']);
Route::get('{slug}', [PagesController::class, 'show']);




Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return 'DONE'; //Return anything
});