<?php


namespace App\Repositories\Concretes;

use App\Http\Resources\UserResource;
use App\Repositories\Abstracts\AbstractUserRepository;
use Illuminate\Support\Collection;

class UserRepository implements AbstractUserRepository
{

    public function getUsersNearby($user)
    {

        return  new UserResource($user);
    }

    public function getUserDetails($user_id)
    {
        $data = $this->model::findOrFail($user_id);
    }


}
