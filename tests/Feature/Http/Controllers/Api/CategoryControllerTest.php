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

    $response = actingAs()->get(route("api.category.index"));

    $response->assertOK();
    $response->assertJsonStructure([]);
});

// it('uses form request validation on store')
//     ->assertActionUsesFormRequest(
//         CategoryController::class,
//         'store',
//         CategoryStoreRequest::class
//     );

it("saves category on store", function () {
    $user = User::factory()->create();
    $title = $this->faker->sentence(4);

    $response = actingAs()->post(route("api.category.store"), [
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

    $response = actingAs()->getJson(route("api.category.show", $category->slug));

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

it("update category behaves as expected", function () {
    [$user, $category] = userWithTodos();
    $title = $this->faker->sentence(4);

    $response = actingAs($user)->put(route("api.category.update", $category), [
        "user_id" => $user->id,
        "title" => $title,
    ]);

    $category->refresh();

    $response->assertOK();
    $response->assertJsonStructure([]);

    expect($category->user_id)->toBe($user->id);
    expect($category->title)->toBe($title);
});

it("deletes category and responds with on destroy", function () {
    [$user, $category] = userWithTodos();

    $response = actingAs()->delete(route("api.category.destroy", $category));

    $response->assertNoContent();

    $this->assertModelMissing($category);
});
