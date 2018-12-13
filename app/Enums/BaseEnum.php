<?php
/**
 * Created by PhpStorm.
 * User: bogdana
 * Date: 30.11.18
 * Time: 15:16
 */

namespace App\Enums;


class BaseEnum
{
    public static $labels = [];

    public static function getLabels() :array
    {
        return static::$labels;
    }

    public static function getLabel($key, $defaultValue = '')
    {
        return isset(static::$labels[$key]) ? static::$labels[$key] : $defaultValue;
    }
}