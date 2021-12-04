<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $categories = Category::query()->paginate();
        return view("categories.index", compact("categories"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view("categories.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreCategoryRequest $request
     * @return RedirectResponse
     */
    public function store(StoreCategoryRequest $request)
    {
        // TODO: créer la resource
        return redirect()->route("categories.show");
    }

    /**
     * Display the specified resource.
     *
     * @param Category $category
     * @return View
     */
    public function show(Category $category): View
    {
        return view("categories.show", compact("category"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Category $category
     * @return View
     */
    public function edit(Category $category):View
    {
        return view("categories.edit", compact("category"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateCategoryRequest $request
     * @param Category $category
     * @return RedirectResponse
     */
    public function update(UpdateCategoryRequest $request, Category $category): RedirectResponse
    {
        // TODO: met à jour la resource
        return redirect()->route("categories.show");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Category $category
     * @return RedirectResponse
     */
    public function destroy(Category $category):RedirectResponse
    {
        // TODO: supprimer la resource la resource
        return redirect()->route("categories.index");
    }
}
