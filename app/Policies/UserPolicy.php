<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Tymon\JWTAuth\JWTAuth;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * @var \Tymon\JWTAuth\Contracts\JWTSubject|\App\User
     */
    private $authUser;

    public function __construct()
    {
        $this->authUser = app(JWTAuth::class)->user();
    }

    /**
     * Determine whether the user can perform admin capabilities.
     *
     * @return bool
     */
    public function admin()
    {
        return $this->authUser->getAttribute('admin');
    }

    /**
     * Determine whether the user can delete the user.
     *
     * @param User      $user
     * @param \App\User $targetUser
     *
     * @return bool
     */
    public function delete(User $user, User $targetUser)
    {
    }

    /**
     * Determine whether the user can restore the user.
     *
     * @param User      $user
     * @param \App\User $targetUser
     *
     * @return bool
     */
    public function restore(User $user, User $targetUser)
    {
    }

    /**
     * Determine whether the user can permanently delete the user.
     *
     * @param User      $user
     * @param \App\User $targetUser
     *
     * @return bool
     */
    public function forceDelete(User $user, User $targetUser)
    {
    }
}
