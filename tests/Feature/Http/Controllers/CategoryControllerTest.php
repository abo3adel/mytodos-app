<?php

namespace Tests\Feature\Http\Controllers;

use App\Http\Controllers\Api\CategoryController;
use App\Http\Requests\CategorrStoreRequest;
use App\Http\Requests\CategoryUpdateRequest;
use App\Models\Category;
use App\Models\Todo;
use App\Models\User;

it("index behaves as expected", function () {
    $categories = Category::factory()
        ->times(3)
        ->create();

    $response = $this->get(route("category.index"));

    $response->assertOK();
    $response->assertJsonStructure([]);
});

// it('uses form request validation on store')
//     ->assertActionUsesFormRequest(
//         CategoryController::class,
//         'store',
//         CategoryStoreRequest::class
//     );

it("saves on store", function () {
    $user = User::factory()->create();
    $title = $this->faker->sentence(4);

    $response = $this->post(route("category.store"), [
        "user_id" => $user->id,
        "title" => $title,
    ]);

    $categories = Category::query()
        ->where("user_id", $user->id)
        ->where("title", $title)
        ->get();
    expect($categories)->toHaveCount(1);
    $category = $categories->first();

    $response->assertCreated();
    $response->assertJsonStructure([]);
});

it("category show behaves as expected", function () {
    $category = Category::factory()
        ->has(Todo::factory()->count(5))
        ->create();

    $response = $this->getJson(route("category.show", $category->slug));

    $response->assertOK();
    $response->assertJsonStructure([]);

    expect($response->getContent())
        ->json()
        ->data->id->toBeNull()
        ->data->user_id->toBeNull()
        ->data->slug->toBe($category->slug)
        ->data->todos->toBeArray()
        ->data->todos->data->toHaveCount(5);
        // ->dd();
});

it("uses form request validation on update")->assertActionUsesFormRequest(
    CategoryController::class,
    "update",
    CategoryUpdateRequest::class
);

it("update behaves as expected", function () {
    $category = Category::factory()->create();
    $user = User::factory()->create();
    $title = $this->faker->sentence(4);

    $response = $this->put(route("category.update", $category), [
        "user_id" => $user->id,
        "title" => $title,
    ]);

    $category->refresh();

    $response->assertOK();
    $response->assertJsonStructure([]);

    expect($category->user_id)->toBe($user->id);
    expect($category->title)->toBe($title);
});

it("deletes and responds with on destroy", function () {
    $category = Category::factory()->create();

    $response = $this->delete(route("category.destroy", $category));

    $response->assertNoContent();

    $this->assertModelMissing($category);
});
