<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

class OrderPolicy
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

    public function show(User $user, Order $order)
    {
        return true;
    }

    public function edit(User $user, Order $order)
    {
        return true;
    }

    public function update(User $user, Order $order)
    {
        return true;
    }

    public function destroy(User $user, Order $order)
    {
        return true;
    }
}
