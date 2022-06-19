<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Auth;
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

// Auth::routes();

Route::get("/", function () {
    return view("welcome");
});

Route::middleware("auth")->group(function () {
    Route::get("/home", [
        App\Http\Controllers\HomeController::class,
        "index",
    ])->name("home");

    Route::resource("categories", CategoryController::class)->only('index');
});

Route::prefix("api")
    ->name('api.')
    ->middleware("auth")
    ->group(function () {
        Route::apiResource(
            "todos",
            App\Http\Controllers\Api\TodoController::class
        );

        Route::apiResource(
            "category",
            App\Http\Controllers\Api\CategoryController::class
        );
        Route::apiResource(
            "tag",
            App\Http\Controllers\Api\TagController::class
        );
    });
