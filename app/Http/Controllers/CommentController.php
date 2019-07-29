<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use Auth;
use Session;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    public function index(Request $request){
        $this->validate($request, [
            'post_id'=> 'exists:posts,id',
            'comment' => 'required|max:255'

        ]);
        $comment = new Comment;
        $comment->comment=$request->comment;
        $comment->user_id= Auth::user()->id;
         $comment->post_id=$request->post_id;
         $comment->save();

         Session::flash('success', 'Comment successfully added');
         return redirect()->back();

    }
}
