<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\User;

class PostPolicy
{
    public function manage(User $user): bool
    {
        return $user->is_admin ?? false;
    }
}
