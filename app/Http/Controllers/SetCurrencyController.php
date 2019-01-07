<?php
namespace App\Http\Controllers;

use App\Http\Middleware\CurrencyMiddleware;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;

class SetCurrencyController extends Controller
{

    public function setCurr($curr){
        $referer = Redirect::back()->getTargetUrl();
        $parse_url = parse_url($referer, PHP_URL_PATH);

        $segments = explode('/', $parse_url);


        if (in_array($segments[2], CurrencyMiddleware::$currencies)) {

            unset($segments[2]);
        }

        array_splice($segments, 2, 0, $curr);

        $url = Request::root().implode("/", $segments);

        if(parse_url($referer, PHP_URL_QUERY)){
            $url = $url.'?'. parse_url($referer, PHP_URL_QUERY);
        }
        return redirect($url);
    }
}
