<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Post;
class PostPolicy
{
    /**
     * Create a new policy instance.
     */
    public function check(User $user,Post $post){
        return $user->id===$post->user_id;
    }
    public function __construct()
    {
        //
    }
}
