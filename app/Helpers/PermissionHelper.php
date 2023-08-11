<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class PermissionHelper
{

    public static function hasPermission()
    {
        foreach (Auth::user()->role->permissions as $key => $p) {

            if (Route::currentRouteName() == $p->route_name) {

                return true;
            }
        }
        return false;
    }
    public static function hasSpecifiPermission($routeName)
    {
        // dd($routeName);
        // dd(Auth::user()->role->permissions()->where('route_name' , $routeName)->get());
        foreach (Auth::user()->role->permissions as $key => $p) {

            if ($routeName == $p->route_name) {
                return true;
            }
        }
        return false;
    }

    public static function hasGroupPermission($groupId)
    {
        foreach (Auth::user()->role->permissions as $key => $p) {

            if ($groupId == $p->group->id) {
                return true;
            }
        }
        return false;
    }
}
