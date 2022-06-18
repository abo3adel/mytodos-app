<?php

it("only loggen in can access categories")
    ->get("/categories")
    ->assertStatus(302);

it("has index for categories", function () {
    [$user, $cats] = userWithTodos(categories_count: 5);

    expect($cats)->toHaveCount(5);
    $this->assertDatabaseHas("categories", [
        "id" => $cats->first()->id,
    ]);

    actingAs($user)
        ->get(route("categories.index"))
        ->assertOk()
        ->assertViewIs("category.index");
});
