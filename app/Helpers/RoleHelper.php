<?php

use App\Models\Role;
use Illuminate\Support\Facades\Auth;

class RoleHelper
{
    public static function roleExists()
    {
        $role = Role::where('user_id', Auth::user()->id)->first();
        if ($role instanceof Role) {
            return true;
        }
        return false;
    }

    public static function getRoles()
    {
        $role = Role::where('user_id', Auth::user()->id);
        return $role;
    }
}
