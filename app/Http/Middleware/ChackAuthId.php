<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Post;
class ChackAuthId
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $postId=$request->route('post');
        $post=Post::find($postId);
        if(Auth::check() && $post && Auth::user()->id!=$post->user_id){
            return $next($request);
        }
        return redirect('/');
    }
}
