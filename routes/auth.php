<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\ConfirmPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\ExternalLogin\{
    GithubLoginController,
    GoogleLoginController
};

Route::group(["middleware" => ["guest"]], function () {
    // login
    Route::get("login", [LoginController::class, "showLoginForm"])->name(
        "login"
    );
    Route::post("login", [LoginController::class, "login"]);

    // register
    Route::get("register", [
        RegisterController::class,
        "showRegistrationForm",
    ])->name("register");
    Route::post("register", [RegisterController::class, "register"]);
});

// not guest now
Route::post("logout", [LoginController::class, "logout"])->name("logout");

// reset password
Route::get("password/reset", [
    ForgotPasswordController::class,
    "showLinkRequestForm",
])->name("password.request");
Route::post("password/email", [
    ForgotPasswordController::class,
    "sendResetLinkEmail",
])->name("password.email");
Route::get("password/reset/{token}", [
    ResetPasswordController::class,
    "showResetForm",
])->name("password.reset");
Route::post("password/reset", [ResetPasswordController::class, "reset"])->name(
    "password.update"
);

// confirm password
Route::get("password/confirm", [
    ConfirmPasswordController::class,
    "showConfirmForm",
])->name("password.confirm");
Route::post("password/confirm", [ConfirmPasswordController::class, "confirm"]);

Route::prefix("/ext-login")
    ->name("ext-login.")
    ->middleware("guest")
    ->group(function () {
        Route::controller(GoogleLoginController::class)
            ->name("google.")
            ->prefix("/google")
            ->group(function () {
                Route::get("", "redirect")->name("redirect");
                Route::get("/callback", "callback")->name("callback");
            });

        Route::controller(GithubLoginController::class)
            ->name("github.")
            ->prefix("/github")
            ->group(function () {
                Route::get("", "redirect")->name("redirect");
                Route::get("/callback", "callback")->name("callback");
            });
    });
