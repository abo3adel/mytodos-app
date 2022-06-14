<?php

use App\Models\Category;
use App\Models\User;

it("it has categories list", function () {
    $user = User::factory()->has(Category::factory()->count(3))->create();

    $response = actingAs($user)
        ->get("/home")
        ->assertOk()
        ->assertViewIs("home")
        ->assertSee('Categories')
        ->assertSee($user->categories->first()->title);
});
