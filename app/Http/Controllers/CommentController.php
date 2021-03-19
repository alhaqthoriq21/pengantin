<?php

namespace App\Http\Controllers;

use App\Helper\Constants;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function getData(){
        $comment = Comment::paginate(10);
        return view('dashboard.comment.comment', compact('comment'));
    }

    public function show($commentId)
    {
        $comment = Comment::find($commentId);
        $comment->comment_status_desc = Constants::commentStatusDesc($comment->status);
        return view('dashboard.comment.detailComment', compact('comment'));
    }
}