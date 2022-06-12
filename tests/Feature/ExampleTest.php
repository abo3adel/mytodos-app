<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Pest\Laravel\get;

uses(RefreshDatabase::class);

it('it is true', function() {
    expect(true)->toBe(true);
    $this->get('/')->assertStatus(200);
});