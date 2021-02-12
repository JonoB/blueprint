<?php namespace App\Repositories;

use App\Models\User;

abstract class BaseRepository
{
    /**
     * Return current active user id
     *
     * @return int|bool
     */
    public function getActiveUserId()
    {
        // first check if user is "logged in" through api
        if ($apiUserId = config('api_user_id'))
        {
            return $apiUserId;
        }

        // Next check if user is logged in through sentry
        if ($user = $this->getActiveUser())
        {
            return $user->id;
        }

        return false;
    }
    /**
     * Return active user model
     *
     * @return mixed
     */
    public function getActiveUser()
    {
        return User::getUser();
    }
}
