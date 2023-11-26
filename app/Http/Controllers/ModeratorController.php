<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
class ModeratorController extends Controller
{
    public function index(){
        return view('user.moderator.index');
    }
    public function users(){
        $users=User::all();
        return view('user.moderator.users',['users'=>$users]);
    }
    public function posts(){
        $posts=Post::all();
        return view('user.moderator.posts',['posts'=>$posts]);
    }
    public function change_user_status(Request $request,User $user){

        $user->update(['status'=>$request->get('status')]);

        return redirect()->back();
    }
    public function change_post_status(Request $request,Post $post){
        $post->update(['status'=>$request->get('status')]);
        return redirect()->back();
    }
    //
}
