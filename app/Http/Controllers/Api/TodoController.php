<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\TodoCollection;
use App\Http\Resources\TodoResource;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Todo;
use Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TodoController extends Controller
{
    const VALIDATION_RULES = [
        "body" => "required|string|max:255",
        "category_slug" => "required|string|exists:categories,slug",
        "done" => "sometimes|nullable|boolean",
        'user_tag' => 'sometimes|nullable|string|max:10',
        'tag' => 'sometimes|nullable|integer|min:1|max:3|exists:tags,id',
    ];

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
    public function store(Request $request)
    {
        $req = (object) $request->validate(self::VALIDATION_RULES);

        $category = Category::where("slug", $req->category_slug)->first([
            "id",
            "user_id",
        ]);

        abort_unless(
            Auth::id() === $category->user_id,
            Response::HTTP_UNAUTHORIZED
        );

        $todo = Todo::create([
            "body" => $req->body,
            "category_id" => $category->id,
            'user_tag' => $req->user_tag,
        ]);

        // save default website tags
        if (isset($req->tag)) {
            $tag = $todo->tags()->save(Tag::find($req->tag));
            return (new TodoResource($todo))->addTag($tag);
        }

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
    public function update(Request $request, Todo $todo)
    {
        $req = (object) $request->validate(self::VALIDATION_RULES);

        $category = Category::where("slug", $req->category_slug)->first([
            "user_id",
        ]);

        abort_unless(
            Auth::id() === $category->user_id,
            Response::HTTP_UNAUTHORIZED
        );

        $todo->update([
            "body" => $req->body,
            "done" => $req->done,
        ]);

        return response()->noContent();
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
