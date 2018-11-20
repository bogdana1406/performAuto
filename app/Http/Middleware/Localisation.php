<?php

namespace App\Http\Middleware;

use Closure;
use App\Traits\Locale;

class Localisation
{
    use Locale;

    public function handle($request, Closure $next)
    {
        $lang = $request->segment(1);
        if ($lang) {
            \App::setLocale($lang);
        }

        return $next($request);
    }
}
