<?php

use App\Models\User;
use Laravel\Socialite\Contracts\Factory as Socialite;
use Laravel\Socialite\Two\GithubProvider;
use Laravel\Socialite\Two\GoogleProvider;
use Tests\MockSocialiteTrait;

use function Pest\Laravel\get;

uses(MockSocialiteTrait::class);

test("can register user if not registerd", function ($provider, $contract) {
    $user = User::factory()->make();

    $stub = $this->mockSocialite($contract, $user);
    $this->app->instance(Socialite::class, $stub);


    get(route("ext-login.$provider.callback"));

    $this->assertDatabaseHas("users", [
        "email" => $user->email,
        'name' => $user->name,
    ]);
})->with([
    ['google', GoogleProvider::class],
    ['github', GithubProvider::class],
]);

test("will login user if already registerd", function () {
    $user = User::factory()->create();

    $stub = $this->mockSocialite(GoogleProvider::class, $user);
    $this->app->instance(Socialite::class, $stub);


    get(route("ext-login.google.callback"));

    expect(User::count())->toBe(1);
    expect(Auth::user())->name->toBe($user->name);
})->with([
    ['google', GoogleProvider::class],
    ['github', GithubProvider::class],
]);
