<?php

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('books', function() {
    return response(Book::all(), 200);
});

Route::get('/books/{id}', function ($id) {

    $book = Book::find($id);
    if($book){
        return response(Book::find($id), 200);
    }
    return response()->json([
        'success' => false,
        'message' => 'No book found with this id'
    ], 404);
    
});

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
