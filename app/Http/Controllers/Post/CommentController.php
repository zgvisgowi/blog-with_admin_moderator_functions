<?php

namespace App\Http\Controllers\post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\comment;

class CommentController extends Controller
{
    public function comment(Request $request){
        $FormFields=$request->validate([
            'comment'=>'required|min:2|max:100',
            'post_id'=>''
        ]);
        $FormFields['user_id']=auth()->id();
        comment::create($FormFields);
        return redirect()->back();
    }
    public function edit(){

    }
    public function update(){

    }
    public function delete(comment $comment){
        $comment->delete();
        return redirect()->back();
    }
    //
}
