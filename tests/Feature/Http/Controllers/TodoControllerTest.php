<?php

namespace Tests\Feature\Http\Controllers;

use App\Http\Controllers\Api\TodoController;
use App\Http\Requests\TodoStoreRequest;
use App\Http\Requests\TodoUpdateRequest;
use App\Models\Category;
use App\Models\Todo;
use App\Models\User;

it('index behaves as expected', function () {
    $todos = Todo::factory()->times(3)->create();

    $response = $this->get(route('todo.index'));

    $response->assertOK();
    $response->assertJsonStructure([]);
});

it('uses form request validation on store')
    ->assertActionUsesFormRequest(
        TodoController::class,
        'store',
        TodoStoreRequest::class
    );

it('saves on store', function () {
    $user = User::factory()->create();
    $category = Category::factory()->create();
    $body = $this->faker->word;

    $response = $this->post(route('todo.store'), [
        'user_id' => $user->id,
        'category_id' => $category->id,
        'body' => $body,
    ]);

    $todos = Todo::query()
        ->where('user_id', $user->id)
        ->where('category_id', $category->id)
        ->where('body', $body)
        ->get();
    expect($todos)->toHaveCount(1);
    $todo = $todos->first();

    $response->assertCreated();
    $response->assertJsonStructure([]);
});

it('show behaves as expected', function () {
    $todo = Todo::factory()->create();

    $response = $this->get(route('todo.show', $todo));

    $response->assertOK();
    $response->assertJsonStructure([]);
});

it('uses form request validation on update')
    ->assertActionUsesFormRequest(
        TodoController::class,
        'update',
        TodoUpdateRequest::class
    );

it('update behaves as expected', function () {
    $todo = Todo::factory()->create();
    $user = User::factory()->create();
    $category = Category::factory()->create();
    $body = $this->faker->word;

    $response = $this->put(route('todo.update', $todo), [
        'user_id' => $user->id,
        'category_id' => $category->id,
        'body' => $body,
    ]);

    $todo->refresh();

    $response->assertOK();
    $response->assertJsonStructure([]);

    expect($todo->user_id)->toBe($user->id);
    expect($todo->category_id)->toBe($category->id);
    expect($todo->body)->toBe($body);
});

it('deletes and responds with on destroy', function () {
    $todo = Todo::factory()->create();

    $response = $this->delete(route('todo.destroy', $todo));

    $response->assertNoContent();

    $this->assertModelMissing($todo);
});
