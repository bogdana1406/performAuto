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
    public static $languages = ['en', 'fr'];

    public static function getLocale()
    {
        $uri = Request::path();


        $segmentsURI = explode('/',$uri);



        if (!empty($segmentsURI[0]) && in_array($segmentsURI[0], self::$languages)) {

            if ($segmentsURI[0] != self::$mainLanguage) return $segmentsURI[0];

      }
// else {
//            return  self::$mainLanguage;
//        }
        return null;
    }


    public function handle($request, Closure $next)
    {
        $locale = self::getLocale();

        if($locale) App::setLocale($locale);

        else App::setLocale(self::$mainLanguage);

        return $next($request);
    }

}
