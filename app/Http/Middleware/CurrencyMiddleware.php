<?php

namespace App\Http\Middleware;

use Closure;
use App;
use Request;

class CurrencyMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public static $mainCurrency = 'eur';
    public static $currencies = ['eur', 'usd', 'btc'];

    /**
     * @return null
     */
    public static function getCurrency()
    {
        $uri = Request::path();

        $segmentURI = explode('/', $uri);

        if (!empty($segmentURI[1]) && in_array($segmentURI[1], self::$currencies)) {

            if ($segmentURI[1] != self::$mainCurrency) {
                return $segmentURI[1];
            } else {

                return self::$mainCurrency;
            }
        }
    }

    public function handle($request, Closure $next)
    {

        return $next($request);
    }
}
