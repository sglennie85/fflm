<?php

namespace App\Models\User;

use App\Models\User;
use Parental\HasParent;

class AdminUser extends User
{
    use HasParent;
}
