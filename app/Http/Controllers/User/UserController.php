<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;

class UserController extends Controller
{
    //
    public function user_show(User $user)
    {
        $user_id=$user['id'] ?? 1;
        $posts=post::where('user_id',$user)->get();

        return view('user.single_user', ['user' => $user,'posts'=>$posts]);
    }
    public function manage(User $user){
        $posts=post::where('user_id',$user['id'])->get();
        $i=0;
        return view('user.manage',['posts'=>$posts,'user'=>$user,'i'=>0]);
    }
}
