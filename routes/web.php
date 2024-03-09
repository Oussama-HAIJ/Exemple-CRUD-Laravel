<?php

use App\Http\Controllers\ContactController;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::resource('contacts',ContactController::class);
Route::get('contacts/search ', [ContactController::class, 'search'])->name('contacts.search');

Route::get('/', function () {
    return view('base');
});
