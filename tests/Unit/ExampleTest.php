<?php

// namespace Tests\Unit;

use Tests\TestCase;

uses(TestCase::class);

it('it is true', function(string $email) {
    expect(true)->toBe(true);
    expect($email)->not->toBeEmpty()->toBeString()->toContain('@');
})->with([
    'enunomaduro@gmail.com',
    'other@example.com',
    'wadsasd@example.come'
]);