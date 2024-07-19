<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;


class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Post $post)
    {

        try{
        $validated = $request->validate([
            'content' => 'required|string',
        ]);
        $comment = new Comment($validated);
        $post->comments()->save($comment);
        return $comment;

    } catch (ValidationException $e) {
        return response()->json([
            'status' => 'error',
            'message' => 'Validation errors',
            'errors' => $e->errors(),
        ], 422);
    }
    }
    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
