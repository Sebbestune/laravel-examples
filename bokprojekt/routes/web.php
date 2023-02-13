<?php

use Illuminate\Support\Facades\Route;
use App\Models\Book;

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

Route::get('/books', function () {
    return view('books',[
        "books" => Book::all()
    ]);
});

Route::get('/books/{id}/', function ($id) {
    return "<h1>Hello ". $id . "</h1>";
});

Route::get('/books/{id}/reviews', function ($id) {
    return "<h1>Hello ". $id . "</h1>";
});

Route::get('/books/{id}/reviews/{reviewid}', function ($id, $reviewid) {
    return "<h1>Book ". $id . "</h1>" . "<p>Review n.o. "  . $reviewid . "</p>";
});