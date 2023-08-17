<?php

namespace App\Helpers;

use App\Models\LoginTrail;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class LoginTrailHelper
{

    public static function saveLoginInfo()
    {
        $l = LoginTrail::create([
            'login_date_time' => Carbon::now()->toDateTimeString(),
            'public_ip' => request()->ip(),
            'user_id' => Auth::user()->id,
            'company_id' => CompanyHelper::getCompanyFromHost() ? CompanyHelper::getCompanyFromHost()->id : 1
        ]);
        session(['loginTrailId' =>  $l->id]);
        return $l;
}


    public static function saveLogoutInfo()
    {
        $l = LoginTrail::find(session('loginTrailId'));

        if ($l) {
            $l->update(['logout_date_time' => Carbon::now()->toDateTimeString()]);
        }
    }
}
