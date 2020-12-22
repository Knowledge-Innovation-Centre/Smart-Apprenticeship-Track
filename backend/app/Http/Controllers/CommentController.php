<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\User;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class CommentController extends BaseController
{
    use ValidatesRequests;

    public function getComments(Request $request) {
        $commentableId = $request->commentable_id;
        $commentableType = $request->commentable_type;

        return Comment::where('commentable_type', $commentableType)->where('commentable_id', $commentableId)->get();
    }

    public function saveComment(Request $request) {
        $commentableId = $request->commentable_id;
        $commentableType = $request->commentable_type;
        $username = $request->username;
        $comment = $request->comment;

        //dump($commentableType, $commentableId, $username, $comment);

        $commenter = User::where('username', $username)->first();

        Comment::create([
            'commenter_id' => $commenter->id,
            'commenter_type' => 'App\User',
            'guest_name' => $commenter->username,
            'commentable_type' => $commentableType,
            'commentable_id' => $commentableId,
            'comment' => $comment,
        ]);

        return Comment::where('commentable_type', $commentableType)->where('commentable_id', $commentableId)->get();
    }

    public function deleteComment(Request $request) {
        $id = $request->id;

        Comment::destroy($id);

        return 'true';
    }
}
