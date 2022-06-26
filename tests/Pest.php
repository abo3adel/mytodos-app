<?php

use App\Models\Category;
use App\Models\Todo;
use App\Models\User;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

uses(
    TestCase::class,
    AdditionalAssertions::class,
    RefreshDatabase::class,
    WithFaker::class
)->in(__DIR__);

function actingAs(Authenticatable $user = null, string $driver = null)
{
    $user = $user ?: User::factory()->create();

    return test()->actingAs($user, $driver);
}

function userWithTodos(?User $user = null, int $todos_count = 1, int $categories_count = 1): array
{
    $user = $user ?? User::factory()->create();
    $cats = Category::factory()->count($categories_count)->for($user)->create();
    // $cat = $user->categories()->save(Category::factory()->make());
    $todos = Todo::factory()->count($todos_count)->create([
        'category_id' => $cats->first()->id,
    ]);

    $cat = $categories_count === 1 ? $cats->first() : $cats;

    return [$user, $cat, $todos];
}