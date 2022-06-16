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

it("only category owner can add todo to it", function () {
    $user = User::factory()
        ->has(Category::factory())
        ->create();
    $category = Category::latest()->first();
    $body = $this->faker->word;

    $response = actingAs()
        ->postJson(route("todos.store"), [
            // 'user_id' => $user->id,
            "category_slug" => $category->slug,
            "body" => $body,
        ])
        ->assertUnAuthorized();
});

it("todo saves on store", function () {
    $user = User::factory()
        ->has(Category::factory())
        ->create();
    $category = Category::latest()->first();
    $body = $this->faker->word;
    $tag = $this->faker->word;

    $response = actingAs($user)
        ->postJson(route("todos.store"), [
            // 'user_id' => $user->id,
            "category_slug" => $category->slug,
            "body" => $body,
            "user_tag" => $tag,
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
        ->body->toBe($body)
        ->first()
        ->user_tag->toBe($tag);
    // $todo = $todos->first();
});

it("show behaves as expected", function () {
    $todo = Todo::factory()->create();

    $response = $this->get(route("todo.show", $todo));

    $response->assertOK();
    $response->assertJsonStructure([]);
});

it("todo will not update for un logged in user", function () {
    $this->putJson(
        route("todos.update", Todo::factory()->create()),
        []
    )->assertStatus(401);
});

it("only todo owner can update it", function () {
    $user = User::factory()
        ->has(Category::factory())
        ->create();
    $category = Category::latest()->first();
    $todo = $category->todos()->save(Todo::factory()->make());

    $response = actingAs()
        ->putJson(route("todo.update", $todo), [
            // 'user_id' => $user->id,
            "category_slug" => $category->slug,
            "body" => $this->faker->word,
            "done" => $this->faker->boolean,
        ])
        ->assertUnAuthorized();
});

it("update todo behaves as expected", function () {
    $user = User::factory()
        ->has(Category::factory())
        ->create();
    $category = Category::latest()->first();
    $todo = $category->todos()->save(Todo::factory()->make());
    $body = $this->faker->word;
    $done = $this->faker->boolean;

    $response = actingAs($user)
        ->putJson(route("todo.update", $todo), [
            // 'user_id' => $user->id,
            "category_slug" => $category->slug,
            "body" => $body,
            "done" => $done,
        ])
        ->assertNoContent();

    $todo->refresh();

    expect($todo)
        ->category_id->toBe($category->id)
        ->body->toBe($body)
        ->done->toBe($done);
});

it("deletes and responds with on destroy", function () {
    $todo = Todo::factory()->create();

    $response = $this->delete(route("todo.destroy", $todo));

    $response->assertNoContent();

    $this->assertModelMissing($todo);
});
