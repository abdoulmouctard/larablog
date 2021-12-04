<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostCommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::apiResources([
    "posts" => PostController::class,
    "users" => UserController::class,
    "categories" => CategoryController::class,
]);

Route::apiResource("post-comments", PostCommentController::class)
    ->parameters(["post-comments" => "postComment"]);
