<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;
use App\Models\Post;
use Hash;

class AdminController extends Controller
{
    public function index(){
        return view('admin.admin_index');
    }

    public function login(){
        return view('admin.main_admin');
    }
    public function signin(Request $request)
    {
        $FormFields = $request->validate(
            [
                'password' => 'required',
                'email' => 'required|email'
            ]
        );
        $admin = Admin::where('email', $FormFields['email'])->first();
        if (!$admin || ($admin && !Hash::check($FormFields['password'], $admin->password))) {
            return redirect()->back()->with('login_filed',true);
        }
        $request->session()->put('admin',$admin);

        return redirect()->Route('index_admin');
    }
    public function logout(Request $request){
        $request->session()->forget('admin');
        return redirect()->route('main');
    }
    public function users(){
        $users=User::all();
        return view('admin.users',['users'=>$users]);
    }
    public function status_change(Request $request,User $user){

        $user->update(['status'=>$request->get('status')]);

        return redirect()->back();
    }
    public function posts(){
        $posts=post::all();
        return view('admin.posts',['posts'=>$posts]);
    }
    public function posts_status_change(Request $request,Post $post){
        $post->update(['status'=>$request->get('status')]);
        return redirect()->back();
    }
    public function post_delete(Post $post){
        $post->delete();

        return redirect()->back();
    }
    public function user_delete(User $user){
        $user->delete();
        return redirect()->back();

    }
    //
}
