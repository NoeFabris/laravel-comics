<?php

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
    $comics = config('comics');

    return view('home', ['comics' => $comics]);
})->name('homepage');


Route::get('/product/{id}', function ($id) {
    $comics = config('comics');

    if (!is_numeric($id) || $id < 0 || $id > count($comics) - 1) {
        abort(404);
    }

    $selectedComic = $comics[$id];

    // FILTRARE IL FUMETTO GIUSTO
    // $comic = FUMETTO GIUSTO
    return view('product', ['comic' => $selectedComic]);
})->name('product');