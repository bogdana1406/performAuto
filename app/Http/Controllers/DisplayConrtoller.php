<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;

class DisplayConrtoller extends Controller
{
    public function home(){

        return view('client.home');
    }

    public function advantages(){

        return view('client.advantages');
    }

    public function about(){

        return view('client.about');
    }

    public function car($id){

        $cars = Car::orderBy('id', 'desc')->get();

        $carDetails = Car::find($id);
       // dd($carDetails->id);
        return view('client.car')->with(compact('cars', 'carDetails'));
    }

    public function cars(){

        $cars = Car::orderBy('id', 'desc')->get();
        //dd($cars);
        return view('client.cars-gallery')->with(compact('cars'));
    }

    public function p3(){

        return view('client.page3');
    }
}

