<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Bb;
use Illuminate\Auth\Access\HandlesAuthorization;

class BbPolicy
{
    use HandlesAuthorization;
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function update(User $user, Bb $bb)
    {
        return $bb->User->id === $user->id;
    }

    public function destroy(User $user, Bb $bb)
    {
        return $this->update($user, $bb);
    }
}
