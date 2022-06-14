<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\TodoStoreRequest;
use App\Http\Requests\TodoUpdateRequest;
use App\Http\Resources\TodoCollection;
use App\Http\Resources\TodoResource;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \App\Http\Resources\TodoCollection
     */
    public function index(Request $request)
    {
        $todos = Todo::all();

        return new TodoCollection($todos);
    }

    /**
     * @param \App\Http\Requests\TodoStoreRequest $request
     * @return \App\Http\Resources\TodoResource
     */
    public function store(TodoStoreRequest $request)
    {
        $todo = Todo::create($request->validated());

        return new TodoResource($todo);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Todo $todo
     * @return \App\Http\Resources\TodoResource
     */
    public function show(Request $request, Todo $todo)
    {
        return new TodoResource($todo);
    }

    /**
     * @param \App\Http\Requests\TodoUpdateRequest $request
     * @param \App\Models\Todo $todo
     * @return \App\Http\Resources\TodoResource
     */
    public function update(TodoUpdateRequest $request, Todo $todo)
    {
        $todo->update($request->validated());

        return new TodoResource($todo);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Todo $todo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Todo $todo)
    {
        $todo->delete();

        return response()->noContent();
    }
}
