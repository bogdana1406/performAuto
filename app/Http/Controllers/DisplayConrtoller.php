<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisplayConrtoller extends Controller
{
    public function home(){
        return view('client.home');
    }
}
