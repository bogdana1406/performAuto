<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Car;
use App\CarsImage;
use App\Review;
use Illuminate\Http\Request;

class DisplayConrtoller extends Controller
{
    public function home(){

        $cars = Car::orderBy('id', 'desc')->get();
        $carBrands = Brand::has('car')->get();
        $countAllCars = $cars->count();
        $arrayBrandsCount = [];

        $reviews = Review::orderBy('id', 'desc')->get();

        foreach ($carBrands as $carBrand) {
            $arrayBrandsCount[$carBrand->name] = $carBrand->car()->count();
        }

        $carFilterBrands = Brand::has('car')->pluck('name', 'id');

        $carFilterModels = array_unique(Car::pluck('model')->toArray());

        $carFilterYears = array_unique(Car::pluck('year')->toArray());

        $carFilterPrice = Car::pluck('price')->toArray();

        $carFilterPriceMin = $carFilterPrice ? min($carFilterPrice) : 0;

        $carFilterPriceMax = $carFilterPrice ? max($carFilterPrice) : 100000;
        //$carFilterPriceMax = max(Car::pluck('price')->toArray());

        //dd(max(Car::pluck('price')->toArray()));

        return view('client.home')->with(compact('carDetails', 'cars', 'carBrands', 'countAllCars', 'arrayBrandsCount',
            'carFilterBrands', 'carFilterModels', 'carFilterYears', 'carFilterPriceMin', 'carFilterPriceMax', 'reviews'));
    }

    public function advantages(){

        $reviews = Review::orderBy('id', 'desc')->get();
        return view('client.advantages')->with(compact('reviews'));
    }

    public function about(){

        $reviews = Review::orderBy('id', 'desc')->get();
        return view('client.about')->with(compact('reviews'));
    }

    public function car($id){

        $arrayBrandsCount = [];
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
        $arrayBrandsCount = [];


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

    public function showResultFilter(Request $request, Car $car)
    {


        $arrayBrandsCount = [];

        $data = $request->all();

//dd($data);

        $priceString = $request->input('priceBar');

        $car = $car->newQuery();


        if($request->has('brand_id') && ($data['brand_id']!="0")){
            $car->where('brand_id', $request->input('brand_id'))->get();
        }



        if($request->has('model') && ($data['model']!="0")){
            $car->where('model', $request->input('model'))->get();
        }


        if($request->has('year') && ($data['year']!="0")){
            $car->where('year', $request->input('year'))->get();
        }

//        list($priceMin,$priceMax) = explode(",", $priceString);
//
//        if($request->has('priceBar')&&($data['priceBar']!="")){
//            $car->where('price', '>=', $priceMin)->get();
//        }
//
//        if($request->has('priceBar')&&($data['priceBar']!="")){
//            $car->where('price', '<=', $priceMax)->get();
//        }

        $cars = $car->get();
//
        $carBrands = $data['brand_id'] ? Brand::whereId($data['brand_id'])->get() : Brand::has('car')->get();


        $countAllCars = $cars->count();


//        foreach ($carBrands as $carBrand) {
//            $arrayBrandsCount[$carBrand->name] = $cars->whereIn('brand_id',$carBrand->id)->count();
//        }

       //dd($cars->toArray());
        //dd($cars);

        return view('client.cars-gallery')->with(compact('cars', 'carBrands', 'countAllCars', 'arrayBrandsCount'));

    }
}

