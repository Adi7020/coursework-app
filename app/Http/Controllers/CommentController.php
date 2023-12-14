<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    

    public function index($postId)
    {
        //
        
        // $post = Post::with('comments.user.tags')->findOrFail($postId);
        // $comments = $post->comments;
        // return view('Comments.index', ['post' => $post,'comments' => $comments]);

        $post = Post::findOrFail($postId);
        $comments = $post->comments;

        return view('Comments.index', compact('comments', 'post'));
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
    public function store(Request $request)
    {
        $request->validate([
            'comment' => 'required|string',
            
        ]);

        // Create a new comment
        $comment = new Comment([
            'comment' => $request->input('comment'),
        ]);

        // Save the comment
        $comment->save();

        // Redirect or respond as needed
        return response()->json(['message'=>'Comment Added successfully']);
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $comment = Comment::findOrFail($id); 
        return view('Comments.edit', compact('comment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $validateData = $request->validate([
            'comment' => 'required|max:250',
        ]);
        $comment = Comment::findOrFail($id);

        $comment->update([
            'comment'=> request()->input('comment')
        ]);

        $comments = Comment::all();
        return view('Comments.index',['comments' => $comments]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
