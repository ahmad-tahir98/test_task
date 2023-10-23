<?php

namespace App\Policies;

use App\Models\User;

class CommentPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function create(User $user)
    {
        if(Auth::user() && Auth::user()->id == $user->id){
            return true;
        }

        return false;
    }
}
