<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\Status;

class StatusPolicy
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

    //destroy credentical
    public function destroy(User $user, Status $status)
    {
        return $user->id === $status->user_id;
    }

}
/*
php artisan make:migration create_fans_table --create="fans"
php artisan make:migration create_fans_table --create='fans'
 */
