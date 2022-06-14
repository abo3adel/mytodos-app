<?php

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
)->in('Feature', 'Unit');

function actingAs(Authenticatable $user = null, string $driver = null)
{
    $user = $user ?: User::factory()->create();

    return test()->actingAs($user, $driver);
}