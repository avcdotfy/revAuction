<?php

namespace App\Helpers;

use App\Models\Document;

class CaptchaHelper
{

    public static  function generateCaptchForAdmin()
    {
        $captcha_number = random_int(11111, 99999);
        session(['admin_captcha_number' => $captcha_number]);
        return session('admin_captcha_number');
    }
    public static function isAdminCaptchaValid($number)
    {
        if ($number != session('admin_captcha_number')) {
            return false;
        }
        return true;
    }

    public static  function generateCaptch()
    {
        $captcha_number = random_int(11111, 99999);
        session(['captcha_number' => $captcha_number]);
        return  session('captcha_number');
    }
    public static function isCaptchaValid($number)
    {
        if ($number != session('captcha_number')) {
            return false;
        }
        return true;
    }
}
