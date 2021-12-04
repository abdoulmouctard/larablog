<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostCommentRequest;
use App\Http\Requests\UpdatePostCommentRequest;
use App\Models\PostComment;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PostCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $postComments = PostComment::query()->paginate();
        return view("post-comments.index", compact("postComments"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view("post-comments.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StorePostCommentRequest $request
     * @return RedirectResponse
     */
    public function store(StorePostCommentRequest $request)
    {
        // TODO: créer la resource
        return redirect()->route("post-comments.show");
    }

    /**
     * Display the specified resource.
     *
     * @param PostComment $postComment
     * @return View
     */
    public function show(PostComment $postComment): View
    {
        return view("post-comments.show");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param PostComment $postComment
     * @return View
     */
    public function edit(PostComment $postComment): View
    {
        return view("post-comments.edit");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdatePostCommentRequest $request
     * @param PostComment $postComment
     * @return RedirectResponse
     */
    public function update(UpdatePostCommentRequest $request, PostComment $postComment): RedirectResponse
    {
        // TODO: met à jour la resource
        return redirect()->route("post-comments.show");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param PostComment $postComment
     * @return RedirectResponse
     */
    public function destroy(PostComment $postComment): RedirectResponse
    {
        // TODO: supprimer la resource la resource
        return redirect()->route("post-comments.index");
    }
}
