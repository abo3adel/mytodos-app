<?php

namespace Tests\Unit;

use App\Models\Category;
use App\Models\Todo;
use App\Models\User;

test("user has todos", function () {
    $user = User::factory()
        ->has(Todo::factory()->count(5))
        ->create();

    expect($user->todos)
        ->not()
        ->toBeNull()
        ->toBeObject()
        ->toHaveCount(5);
});

test("user have cateigories", function () {
    $user = User::factory()
        ->has(Category::factory()->count(2))
        ->create();

    expect($user->categories)
        ->not()
        ->toBeNull()
        ->toBeObject()
        ->toHaveCount(2);
});
