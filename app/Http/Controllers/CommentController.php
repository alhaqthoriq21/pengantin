<?php

namespace App\Http\Controllers;

use App\Helper\Constants;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function getData(Request $request){
        $comment = Comment::paginate(10);
        $page = $request->page != null ? $request->page : 1;
        return view('dashboard.comment.comment', compact('comment','page'));
    }

    public function show($commentId)
    {
        $comment = Comment::find($commentId);
        $comment->comment_status_desc = Constants::commentStatusDesc($comment->status);
        return view('dashboard.comment.detailComment', compact('comment'));
    }
}