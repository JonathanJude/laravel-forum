<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;


class CommentsController extends Controller
{
    public function postComment(Request $request)
    {
        $this->validate($request, [
            'comment' => 'required',
            'topic_id' => 'required',
        ]);

        $comment = Comment::create([
            'user_id' => auth()->id(),
            'topic_id' => request('topic_id'),
            'comment' => request('comment'),
        ]);

        $url = '/topic/' . request('topic_id');

        return redirect($url)->with('flash', 'Comment successfully posted!');
    }
}
