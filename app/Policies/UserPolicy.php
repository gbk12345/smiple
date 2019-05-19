<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    //只有自己才能编辑自己
    public function update(User $currentUser,User $user )
    {
        return $currentUser->id === $user->id;
    }
}
