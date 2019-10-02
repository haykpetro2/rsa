<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\User;
use App\Client;

class ClientPolicy
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

    public function view(User $user, Client $client)
    {
        return $user->id == $client->created_by;
    }
}
