<?php

namespace App\Commands\User;

use App\Models\User;

class UpdateUserCommand extends AbstractUserCommand
{
    public ?User $user;


    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function getUser(): ?User
    {
        return parent::getUser();
    }

}
