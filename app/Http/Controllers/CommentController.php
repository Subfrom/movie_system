<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'comment' => 'required',
            'score' => 'required',
        ]);

        Comment::create([
            'user_id' => auth()->user()->id,
            'movie_id' => $request->movie_id,
            'comment_text' => $request->comment,
            'comment_score' => $request->score
        ]);

        return redirect()->back();
    }
}
