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
            'login_id' => Auth::user()->user_type,
            'login_date_time' => Carbon::now()->toDateTimeString(),
            'logout_date_time' => Carbon::now()->toDateTimeString(),
            'public_ip' => request()->ip(),
            'user_id' => Auth::user()->id,
            'company_id' => CompanyHelper::getCompanyFromHost()->id
        ]);
        return $l;
    }
}
