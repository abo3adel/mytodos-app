<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\TagController;
use App\Http\Controllers\Api\TodoController;
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

Auth::routes();

Route::get("/", function () {
    return view("welcome");
});

Route::get("/home", [App\Http\Controllers\HomeController::class, "index"])
    ->name("home")
    ->middleware("auth");

Route::resource("todo", TodoController::class);
Route::resource("category", CategoryController::class);
Route::resource("tag", TagController::class);

Route::apiResource(
    "/api/todos",
    App\Http\Controllers\Api\TodoController::class
)->middleware("auth");
