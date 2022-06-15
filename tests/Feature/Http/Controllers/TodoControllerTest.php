<?php

namespace Tests\Feature\Http\Controllers;

use App\Http\Controllers\Api\TodoController;
use App\Http\Requests\TodoStoreRequest;
use App\Http\Requests\TodoUpdateRequest;
use App\Models\Category;
use App\Models\Todo;
use App\Models\User;

it("index behaves as expected", function () {
    $todos = Todo::factory()
        ->times(3)
        ->create();

    $response = $this->get(route("todo.index"));

    $response->assertOK();
    $response->assertJsonStructure([]);
});

it("todo has errors if user not logged in", function () {
    $res = $this->postJson(route("todos.store"), [])->assertStatus(401);
});

it("todo has errors if store data not supplied", function () {
    $category = Category::factory()->create();
    $body = $this->faker->word;

    actingAs()
        ->postJson(route("todos.store"), [])
        ->assertStatus(422);
});

it("todo saves on store", function () {
    $user = User::factory()->create();
    $category = Category::factory()->create();
    $body = $this->faker->word;

    $response = actingAs($user)->postJson(route("todos.store"), [
        // 'user_id' => $user->id,
        "category_slug" => $category->slug,
        "body" => $body,
    ])
        ->assertCreated()
        ->assertJsonStructure([]);

    $todos = Todo::query()
        ->where("category_id", $category->id)
        // ->where("body", $body)
        ->get();
    expect($todos)
        ->toHaveCount(1)
        ->first()
        ->body->toBe($body);
    // $todo = $todos->first();
});

it("show behaves as expected", function () {
    $todo = Todo::factory()->create();

    $response = $this->get(route("todo.show", $todo));

    $response->assertOK();
    $response->assertJsonStructure([]);
});

it("uses form request validation on update")->assertActionUsesFormRequest(
    TodoController::class,
    "update",
    TodoUpdateRequest::class
);

it("update behaves as expected", function () {
    $todo = Todo::factory()->create();
    $user = User::factory()->create();
    $category = Category::factory()->create();
    $body = $this->faker->word;

    $response = $this->put(route("todo.update", $todo), [
        // 'user_id' => $user->id,
        "category_id" => $category->id,
        "body" => $body,
    ]);

    $todo->refresh();

    $response->assertOK();
    $response->assertJsonStructure([]);

    // expect($todo->user_id)->toBe($user->id);
    expect($todo->category_id)->toBe($category->id);
    expect($todo->body)->toBe($body);
});

it("deletes and responds with on destroy", function () {
    $todo = Todo::factory()->create();

    $response = $this->delete(route("todo.destroy", $todo));

    $response->assertNoContent();

    $this->assertModelMissing($todo);
});
