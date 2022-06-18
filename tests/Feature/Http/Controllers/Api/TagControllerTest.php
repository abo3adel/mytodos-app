<?php

namespace Tests\Feature\Http\Controllers\Api;

use App\Http\Controllers\Api\TagController;
use App\Http\Requests\TagControllerStoreRequest;
use App\Http\Requests\TagControllerUpdateRequest;
use App\Models\Tag;

it('index behaves as expected', function () {
    $tags = Tag::factory()->times(3)->create();

    $response = actingAs()->get(route('api.tag.index'));

    $response->assertOK();
    $response->assertJsonStructure([]);
});

// it('uses form request validation on store')
//     ->assertActionUsesFormRequest(
//         TagController::class,
//         'store',
//         TagControllerStoreRequest::class
//     );

it('saves on store', function () {
    $title = $this->faker->sentence(4);

    $response = actingAs()->post(route('api.tag.store'), [
        'title' => $title,
    ]);

    $tags = Tag::query()
        ->where('title', $title)
        ->get();
    expect($tags)->toHaveCount(1);
    $tag = $tags->first();

    $response->assertCreated();
    $response->assertJsonStructure([]);
});

it('show behaves as expected', function () {
    $tag = Tag::factory()->create();

    $response = actingAs()->get(route('api.tag.show', $tag));

    $response->assertOK();
    $response->assertJsonStructure([]);
});

// it('uses form request validation on update')
//     ->assertActionUsesFormRequest(
//         TagController::class,
//         'update',
//         TagControllerUpdateRequest::class
//     );

it('update behaves as expected', function () {
    $tag = Tag::factory()->create();
    $title = $this->faker->sentence(4);

    $response = actingAs()->put(route('api.tag.update', $tag), [
        'title' => $title,
    ]);

    $tag->refresh();

    $response->assertOK();
    $response->assertJsonStructure([]);

    expect($tag->title)->toBe($title);
});

it('deletes tag and responds with on destroy', function () {
    $tag = Tag::factory()->create();

    $response = actingAs()->delete(route('api.tag.destroy', $tag));

    $response->assertNoContent();

    $this->assertModelMissing($tag);
});
