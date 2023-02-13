<?php

use App\Http\Controllers\PostAPI;
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

Route::get("posts", [PostAPI::class, "index"]);
Route::post("posts", [PostAPI::class, "store"]);
Route::get("posts/{id}", [PostAPI::class, "show"]);
Route::put("posts/{id}", [PostAPI::class, "update"]);
Route::delete("posts/{id}", [PostAPI::class, "destroy"]);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
