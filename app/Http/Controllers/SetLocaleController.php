<?php
namespace App\Http\Controllers;

use App\Http\Middleware\LocaleMiddleware;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;

class SetLocaleController extends Controller
{

    public function setLang($lang){
        $referer = Redirect::back()->getTargetUrl();
        $parse_url = parse_url($referer, PHP_URL_PATH);

        $segments = explode('/', $parse_url);

        if (in_array($segments[1], LocaleMiddleware::$languages)) {

            unset($segments[1]);
        }

        array_splice($segments, 1, 0, $lang);

        $url = Request::root().implode("/", $segments);

        if(parse_url($referer, PHP_URL_QUERY)){
            $url = $url.'?'. parse_url($referer, PHP_URL_QUERY);
        }
        return redirect($url);
    }
}
