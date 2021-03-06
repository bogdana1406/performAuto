<?php
/**
 * Created by PhpStorm.
 * User: bogdana
 * Date: 20.11.18
 * Time: 9:39
 */
namespace App\Http\Middleware;

use Closure;
use App;
use Request;


class LocaleMiddleware
{


    public static $mainLanguage = 'en';
    public static $languages = ['en', 'fr', 'nl'];


    public static function getLocale()
    {

        $uri = Request::path();

        $segmentsURI = explode('/',$uri);


        if (!empty($segmentsURI[0]) && in_array($segmentsURI[0], self::$languages)) {

            return $segmentsURI[0];

        } else {
            return  self::$mainLanguage;
        }
    }

    public function handle($request, Closure $next)
    {
        $locale = self::getLocale();
        if($locale) {
            App::setLocale($locale);
        }

        return $next($request);
    }

}
