<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\comment;
class PostController extends Controller
{
    public function show(Post $post){
        $comments=comment::where('post_id',$post['id'])->get();
        return view('posts.single_post',['post'=>$post,'comments'=>$comments]);
    }
    public function Create(){
    return view('posts.post_create');
    }
    public function store(Request $request){

        $formfields=$request->validate([
            'title'=>['required','min:4','max:40',],
            'content'=>['required','min:10','max:2000'],
            'description'=>['required','min:10','max:240'],
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $formfields['user_id']=auth()->id();
        if($request->hasFile('image')) {
            $formfields['image'] =$request->file('image')->store('post_images','public');
        }

        post::create($formfields);

        return redirect('/');
    }
    public function edit(Post $post){
        $this->authorize('check',$post);
        return view('posts.update_post',['post'=>$post]);
    }
    public function update(Request $request,post $post)
    {
        if (auth()->id() == $post->user_id){
            $formfields = $request->validate([
                'content' => ['required', 'min:10', 'max:2000'],
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);
        $post->update($formfields);
        return redirect('/');
        }
        else{
            return redirect('/');
        }
    }
    public function delete(Post $post){
        if(auth()->id()==$post->user_id){
            $post->delete();
            return redirect('/');
        }
        else{
            return redirect()->back()->with('it is not your post');
        }

    }
}
