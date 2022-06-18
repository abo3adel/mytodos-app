<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryControllerStoreRequest;
use App\Http\Requests\CategoryUpdateRequest;
use App\Http\Requests\CategoryStoreRequest;
use App\Http\Resources\CategoryCollection;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CategoryController extends Controller
{
    const VALIDATION_RULES = [
        "title" => ["required", "min:2", "string", "max:100"],
    ];

    /**
     * @param \Illuminate\Http\Request $request
     * @return \App\Http\Resources\CategoryCollection
     */
    public function index(Request $request)
    {
        $categories = Category::all();

        return new CategoryCollection($categories);
    }

    /**
     * @param \App\Http\Requests\CategoryControllerStoreRequest $request
     * @return \App\Http\Resources\CategoryResource
     */
    public function store(Request $request)
    {
        $req = $request->validate(self::VALIDATION_RULES);

        $category = Category::create([
            "user_id" => Auth::id(),
            "title" => $req["title"],
        ]);

        return redirect()
            ->route("home")
            ->with("slug", $category->slug);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Category $category
     * @return \App\Http\Resources\CategoryResource
     */
    public function show(Request $request, Category $category)
    {
        $category->loadMissing("todos.tags");

        return new CategoryResource($category);
    }

    /**
     * @param \App\Http\Requests\CategoryUpdateRequest $request
     * @param \App\Models\Category $category
     * @return \App\Http\Resources\CategoryResource
     */
    public function update(Request $request, Category $category)
    {
        $req = $request->validate(self::VALIDATION_RULES);

        abort_unless(Auth::id() === $category->user_id, 401);

        $updated = $category->update($req);

        return redirect()
            ->route("home")
            ->with("slug", $category->slug);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Category $category)
    {
        $category->delete();

        return response()->noContent();
    }
}
