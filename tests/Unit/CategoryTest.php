<?php

use App\Models\Category;
use App\Models\Tag;
use App\Models\Todo;

test("category can load todos with tags", function () {
    $cat = Category::factory()->create();
    $todos = $cat->todos()->save(
        Todo::factory()
            ->make()
    );

    $todo = Todo::find(1);
    $todo->tags()->saveMany(Tag::factory()->count(5)->make());
    

    $cat->loadMissing("todos.tags");

    expect($cat)
        // ->toHaveProperty("todos")
        ->todos->toHaveCount(1)
        // ->todos->dd()
        ->todos->first()->tags->toHaveCount(5);
});