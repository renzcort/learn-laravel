<?php

namespace App\Policies\Api;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\Api\PostApi;

class PostapiPolicy
{
    use HandlesAuthorization;

    public function update(User $user, PostApi $postapi)
    {
      return $user->ownsPostApi($postapi);
    }

    // delete
    public function delete(User $user, PostApi $postapi)
    {
      return $user->ownsPostApi($postapi);
    }
}
