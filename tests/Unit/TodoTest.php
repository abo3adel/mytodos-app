<?php

use App\Models\Tag;
use App\Models\Todo;

test('todo has user defined tag', function () {
    $user_tag = $this->faker->word;
    $todo = Todo::factory()->has(Tag::factory())->create(compact('user_tag'));

    expect($todo)
        ->tags->toHaveCount(1)
        ->user_tag->toBe($user_tag);
});
