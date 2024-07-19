<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\CommentController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::middleware('token')->group(function () {

    Route::get('test', function(){

        return '1234';
    });
    // Blog Routes
    Route::apiResource('blogs', BlogController::class);

    // Post Routes within a Blog
    Route::apiResource('blogs.posts', PostController::class)->shallow();

    // Like and Comment Routes for Posts
    Route::post('posts/{post}/like', [LikeController::class, 'store']);
    Route::post('posts/{post}/comment', [CommentController::class, 'store']);
});