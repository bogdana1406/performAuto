<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Car;
use App\CarsImage;
use App\Enums\BodyTypes;
use App\Review;
use Illuminate\Http\Request;

class DisplayConrtoller extends Controller
{
    public function getHeaderParams(){
        $cars = Car::orderBy('id', 'desc')->get();
        $carBrands = Brand::has('car')->get();
        $countAllCars = $cars->count();
        $arrayBrandsCount = [];
        $activBrand = \request()->brand??'all';

        foreach ($carBrands as $carBrand) {
            $arrayBrandsCount[$carBrand->name] = $carBrand->car()->count();
        }
        return [
            'carBrands'=>$carBrands,
            'arrayBrandsCount'=>$arrayBrandsCount,
            'countAllCars'=>$countAllCars,
            'activBrand'=>$activBrand
        ];
    }

    public function home(){

        $cars = Car::orderBy('id', 'desc')->get();
        $reviews = Review::orderBy('id', 'desc')->get();
        $carFilterBrands = Brand::has('car')->pluck('name', 'id');
        $carFilterModels = array_unique(Car::pluck('model')->toArray());
        $carFilterYears = array_unique(Car::pluck('year')->toArray());
        $carFilterPrice = Car::pluck('price')->toArray();
        $carFilterPriceMin = $carFilterPrice ? min($carFilterPrice) : 0;
        $carFilterPriceMax = $carFilterPrice ? max($carFilterPrice) : 100000;

        return view('client.home')->with(compact('carDetails', 'cars',
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
        //dd(($carImagesGallery)->isEmpty());
        return view('client.car')->with(compact('carDetails', 'cars',
            'carBrands', 'countAllCars', 'arrayBrandsCount', 'carImagesGallery'));
    }

    public function cars(Request $request){

        $activBrand = $request->brand??'all';
        $carBrands = Brand::has('car')->get();
        $cars = Car::orderBy('id', 'desc')->get();
        $countAllCars = $cars->count();
        $arrayBrandsCount = [];

        foreach ($carBrands as $carBrand) {
            $arrayBrandsCount[$carBrand->name] = $carBrand->car()->count();
        }

        return view('client.cars-gallery')->with(compact('cars', 'carBrands', 'countAllCars', 'arrayBrandsCount', 'activBrand'));
    }


    public function showResultFilter(Request $request, Car $car){

        $arrayBrandsCount = [];
        $data = $request->all();
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

        list($priceBarMin, $priceBarMax) = explode(",", $priceString);

        if($request->has('priceBar')&&($data['priceBar']!="")){
            $car->where('price', '>=' , (int)$priceBarMin)->where('price', '<=' , (int)$priceBarMax)->get();
        }

        $cars = $car->get();

        $carBrands = $data['brand_id'] ? Brand::whereId($data['brand_id'])->get() : Brand::has('car')->get();
        $countAllCars = $cars->count();

        return view('client.cars-gallery')->with(compact('cars', 'carBrands', 'countAllCars', 'arrayBrandsCount'));

    }
}

