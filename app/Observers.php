<?php

namespace App\Models\Observers;

use App\User;

class UserObserver
{
    /**
     * Hook into group deleting event.
     *
     * @param User $user
     * @return void
     */
    public function deleting(User $user)
    {
        $user->Image()->detach();
    }
}