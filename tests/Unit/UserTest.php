<?php

namespace Tests\Unit;

use App\Models\Category;
use App\Models\Todo;
use App\Models\User;

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

test("user has todos", function () {
    $user = User::factory()
        ->has(Category::factory())
        ->create();

    expect($user->categories)->toHaveCount(1);

    Todo::factory()
        ->count(5)
        ->create([
            "category_id" => $user->categories->first()->id,
        ]);

    expect($user->todos)
        ->not()
        ->toBeNull()
        ->toBeObject()
        ->toHaveCount(5);
});

test("user factory can create todos", function () {
    [$user] = userWithTodos(null, 3);

    expect($user)
        ->name->toBe($user->name)
        ->categories->toHaveCount(1)
        ->todos->toHaveCount(3);
});
