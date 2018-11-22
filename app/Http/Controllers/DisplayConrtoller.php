<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Car;
use App\CarsImage;
use Illuminate\Http\Request;

class DisplayConrtoller extends Controller
{
    public function home(){

        $cars = Car::orderBy('id', 'desc')->get();
        $carBrands = Brand::has('car')->get();
        $countAllCars = $cars->count();


        foreach ($carBrands as $carBrand) {
            $arrayBrandsCount[$carBrand->name] = $carBrand->car()->count();
        }



        return view('client.home')->with(compact('carDetails', 'cars', 'carBrands', 'countAllCars', 'arrayBrandsCount'));
    }

    public function advantages(){

        return view('client.advantages');
    }

    public function about(){

        return view('client.about');
    }

    public function car($id){


        $carDetails = Car::find($id);
        if(!$carDetails){
            return redirect()->route('home');
        }
        $cars = Car::orderBy('id', 'desc')->get();
        $countAllCars = $cars->count();
        $carBrands = Brand::has('car')->get();
        foreach ($carBrands as $carBrand) {
            $arrayBrandsCount[$carBrand->name] = $carBrand->car()->count();
        }

        $carImagesGallery = CarsImage::where(['car_id'=>$id])->get();

       //dd($carImagesGallery);
        return view('client.car')->with(compact('carDetails', 'cars', 'carBrands', 'countAllCars', 'arrayBrandsCount', 'carImagesGallery'));
    }

    public function cars(){

        $carBrands = Brand::has('car')->get();
        $cars = Car::orderBy('id', 'desc')->get();
        $countAllCars = $cars->count();


        foreach ($carBrands as $carBrand) {
            $arrayBrandsCount[$carBrand->name] = $carBrand->car()->count();
        }
        //dd($arrayBrandsCount, $cars);

        //dd($car1, $cars, $all_cars, $carBrands);
        return view('client.cars-gallery')->with(compact('cars', 'carBrands', 'countAllCars', 'arrayBrandsCount'));
    }

    public function p3(){

        return view('client.page3');
    }
}

