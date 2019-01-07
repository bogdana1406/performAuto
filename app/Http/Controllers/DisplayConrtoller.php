<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Car;
use App\CarsImage;
use App\Enums\BodyTypes;
use App\Http\Middleware\CurrencyMiddleware;
use App\Review;
use Illuminate\Http\Request;

class DisplayConrtoller extends Controller
{

        private function getCourse() {
        $currency = CurrencyMiddleware::getCurrency();
        $curr = mb_strtoupper($currency);
        $data = file_get_contents('https://min-api.cryptocompare.com/data/price?fsym=EUR&tsyms='.$curr);
        $courses = json_decode($data, true);
        $course = $courses[$curr];
        return $course;
    }


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

        $cours_cur = $this->getCourse();
        $cars = Car::orderBy('id', 'desc')->get();
        $reviews = Review::orderBy('id', 'desc')->get();
        $carFilterBrands = Brand::get();
        $carFilterModels = array_unique(Car::pluck('model')->toArray());
        $carFilterYears = array_unique(Car::pluck('year')->toArray());
        $carFilterPrice = Car::pluck('price')->toArray();
        $carFilterPriceMin = $carFilterPrice ? min($carFilterPrice) : 0;
        $carFilterPriceMax = $carFilterPrice ? max($carFilterPrice) : 100000;

        return view('client.home')->with(compact('carDetails', 'cars',
            'carFilterBrands', 'carFilterModels', 'carFilterYears', 'carFilterPriceMin', 'carFilterPriceMax', 'reviews', 'cours_cur'));
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

        $cours_cur = $this->getCourse();
        $bodyTypes = BodyTypes::getLabels();
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

        return view('client.car')->with(compact('carDetails', 'cars',
            'carBrands', 'countAllCars', 'arrayBrandsCount', 'carImagesGallery', 'bodyTypes', 'cours_cur'));
    }

    public function cars(Request $request){
        $cours_cur = $this->getCourse();
        $activBrand = $request->brand??'all';
        $carBrands = Brand::has('car')->get();
        $cars = Car::orderBy('id', 'desc')->get();
        $countAllCars = $cars->count();
        $arrayBrandsCount = [];

        foreach ($carBrands as $carBrand) {
            $arrayBrandsCount[$carBrand->name] = $carBrand->car()->count();
        }

        return view('client.cars-gallery')->with(compact('cars', 'carBrands',
            'countAllCars', 'arrayBrandsCount', 'activBrand', 'cours_cur'));
    }


    public function showResultFilter(Request $request, Car $car){

        $cours_cur = $this->getCourse();
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


        if($request->has('priceBar')&&($data['priceBar']!="")){
            list($priceBarMin, $priceBarMax) = explode(",", $priceString);
            $car->where('price', '>=' , ((int)$priceBarMin)/$cours_cur)
                ->where('price', '<=' , ((int)$priceBarMax)/$cours_cur)->get();
        }

        $cars = $car->get();
        $carBrands = isset($data['brand_id']) ? Brand::whereId($data['brand_id'])->get() : Brand::has('car')->get();
        $countAllCars = $cars->count();

        return view('client.cars-gallery')->with(compact('cars', 'carBrands', 'countAllCars', 'arrayBrandsCount', 'cours_cur'));

    }


    public function showModelFilter(Request $request)
    {
        $data = $request->all();

        switch ($data['name']) {
            case 'brand_id':
                $cars = Car::where(['brand_id' => $data['value']])->select('model', 'year')->get();
                $result['models'] = array_unique($cars->pluck('model')->toArray());
                $result['year'] = array_unique($cars->pluck('year')->toArray());
                break;
            case 'model':
                $result['models'] = [];
                $result['year'] = Car::where(['model' => $data['value']])->pluck('year');
                break;
            default:
                $result['models'] = array_unique(Car::pluck('model')->toArray());
                $result['year'] = array_unique(Car::pluck('year')->toArray());


        }

        return json_encode($result);
    }

}

