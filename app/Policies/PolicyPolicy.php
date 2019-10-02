<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\User;
use App\Policy;

class PolicyPolicy
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

    public function before($user, $ability)
    {
        if ($user->isAdmin() || $user->isHeadManager()) {
            return true;
        }
    }

    public function show(User $user, Policy $policy)
    {
        return $user->id == $policy->created_by;
    }

    public function edit(User $user, Policy $policy)
    {
        return $user->id == $policy->created_by;
    }

    public function update(User $user, Policy $policy)
    {
        return $user->id == $policy->created_by;
    }

    public function destroy(User $user, Policy $policy)
    {
        return $user->id == $policy->created_by;
    }

    public function export(User $user, Policy $policy)
    {
        return $user->id == $policy->created_by;
    }

    public function notify(User $user, Policy $policy)
    {
        return $user->id == $policy->created_by;
    }

    public function exclude(User $user, Policy $policy)
    {
        return $user->id == $policy->created_by;
    }
}
