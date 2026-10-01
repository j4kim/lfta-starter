<?php

namespace App\Policies;

use App\Models\User;

class AdminPolicy
{
    public function viewAny(User $user)
    {
        return $user->is_admin;
    }
}
