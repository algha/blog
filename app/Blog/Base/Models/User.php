<?php

namespace App\Blog\Base\Models;

use App\User as SystemUser;

class User extends SystemUser
{

    public function posts()
    {
        return $this->hasMany(Posts::class);
    }

}
