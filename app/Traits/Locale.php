<?php

namespace App\Traits;
/**
 * Created by PhpStorm.
 * User: bogdana
 * Date: 19.11.18
 * Time: 9:33
 */

trait Locale {

    public static function getLocalisation()
    {
        return request()->header('locale');
    }
}