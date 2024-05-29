<?php

namespace App\Policies\V1;

use App\Models\Ticket;
use App\Models\User;
use App\Permissions\V1\Abilities;
use function Symfony\Component\Translation\t;

class UserPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function store (User $user, User $model): bool
    {
        return $user->tokenCan(Abilities::CreateUser);
    }

    public function replace (User $user, User $model): bool
    {
       return $user->tokenCan(Abilities::ReplaceUser);
    }

    public function update (User $user, User $model): bool
    {
       return $user->tokenCan(Abilities::UpdateUser);
    }

    public function delete (User $user, User $model): bool
    {
        return $user->tokenCan(Abilities::DeleteUser);
    }
}
