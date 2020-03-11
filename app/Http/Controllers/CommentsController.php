<?php

namespace App\Http\Controllers;
use Auth;
use App\Summary;
use App\Comments;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function postIndex($id=null) {
       $obj=new Comments;
       $obj->body=$_POST['body'];
       $obj->summary_id=$id;
       $obj->user_id=Auth::guest() ? 0 : Auth::user()->id;
       $obj->save();
       return redirect()->back();
    }
}
