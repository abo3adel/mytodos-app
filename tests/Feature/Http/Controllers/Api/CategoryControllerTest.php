<?php

namespace Tests\Feature\Http\Controllers;

use App\Http\Controllers\Api\CategoryController;
use App\Http\Requests\CategorrStoreRequest;
use App\Http\Requests\CategoryUpdateRequest;
use App\Models\Category;
use App\Models\Todo;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Str;

use function Pest\Laravel\withoutExceptionHandling;

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

it("will not save category while not logged in")
    ->postJson("/api/category/", [])
    ->assertStatus(401);

it("will not save categoy with invalid data", function () {})
    ->actingAs(User::factory()->create())
    ->postJson("/api/category/", [
        "title" => "",
    ])
    ->assertStatus(422);

it("saves category on store", function () {
    $user = User::factory()->create();
    $title = $this->faker->sentence(4);

    $response = actingAs($user)
        ->post(route("api.category.store"), [
            "title" => $title,
        ])
        ->assertRedirect(route("home"))
        ->assertSessionHas("slug");

    $categories = Category::where("user_id", $user->id)
        ->where("title", $title)
        ->get();
    expect($categories)->toHaveCount(1);
});

it("category show behaves as expected", function () {
    $category = Category::factory()
        ->has(Todo::factory()->count(5))
        ->create();

    $response = actingAs()->getJson(
        route("api.category.show", $category->slug)
    );

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

it("only category owner can update it", function () {
    [$user, $category] = userWithTodos();
    $title = $this->faker->sentence(4);

    $response = actingAs()
        ->put(route("api.category.update", $category), [
            "title" => $title,
        ])
        ->assertUnAuthorized();
});

it("update category behaves as expected", function () {
    [$user, $category] = userWithTodos();
    $title = $this->faker->sentence(4);

    $response = actingAs($user)
        ->put(route("api.category.update", $category), [
            "user_id" => $user->id,
            "title" => $title,
        ])
        ->assertRedirect(route("home"))
        ->assertSessionHas("slug");

    $category->refresh();

    expect($category->user_id)->toBe($user->id);
    expect($category->title)->toBe($title);
});

test("only category owner can delete it", function () {
    [$user, $category] = userWithTodos();

    actingAs()
        ->delete(route("api.category.destroy", $category))
        ->assertUnAuthorized();

    $this->assertModelExists($category);
});

it("deletes category and responds with on destroy", function () {
    [$user, $category] = userWithTodos();

    actingAs($user)
        ->delete(route("api.category.destroy", $category))
        ->assertStatus(302)
        ->assertSessionHas('success');

    $this->assertModelMissing($category);
});
