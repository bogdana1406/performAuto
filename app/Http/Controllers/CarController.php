<?php

namespace App\Http\Controllers;

use App\CarsImage;
use App\Enums\BodyTypes;
use App\Http\Requests\UploadRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Requests\RequestValidateCar;
use Auth;
use Session;
use App\Brand;
use App\Engine;
use App\Car;
use Illuminate\Support\Facades\Input;
use Image;


class CarController extends Controller
{
    public function showAddCar()
    {
        $brands = Brand::pluck('name', 'id');
        $engines = Engine::pluck('name', 'id');
        $bodyTypes = BodyTypes::getLabels();
        return view('admin.cars.add_car')->with(['brands'=>$brands, 'engines'=>$engines, 'bodyTypes'=>$bodyTypes]);
    }

    public function addCar(RequestValidateCar $request)
    {
        $data = $request->except('_token');
        $small_h = ($data['small_h'] && ($data['small_h']>0)) ? (int)$data['small_h']:450;
        $small_w = ($data['small_w'] && ($data['small_w']>0)) ? (int)$data['small_w']:800;
        $medium_h = ($data['medium_h'] && ($data['medium_h']>0)) ? (int)$data['medium_h']:900;
        $medium_w = ($data['medium_w'] && ($data['medium_w']>0)) ? (int)$data['medium_w']:1600;


        if($request->hasFile('image')){
            $image_tmp = Input::file('image');
            if($image_tmp->isValid()){
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = rand(111, 999999).".".$extension;
                $large_image_path = 'files/images/backend_images/large/'.$filename;
                $small_image_path = 'files/images/backend_images/small/'.$filename;
                $medium_image_path = 'files/images/backend_images/medium/'.$filename;

                Image::make($image_tmp)->save($large_image_path);
                Image::make($image_tmp)->resize($small_w, $small_h)->save($small_image_path);
                Image::make($image_tmp)->resize($medium_w, $medium_h)->save($medium_image_path);

                $data['image'] = $filename;
            }
        }
        $car = Car::create($data);

        if($car){
                return redirect('/admin/view-cars')->with('flash_massage_success', 'Car has been added successfully');
            }else{
                return redirect()->back()->with('flash_massage_error', 'Something was wrong');
                }
            }


        public function showEditCar($id)
        {
            $brands = Brand::pluck('name', 'id');
            $engines = Engine::pluck('name', 'id');
            $carDetails = Car::where(['id'=>$id])->first();
            $bodyTypes = BodyTypes::getLabels();
            return view('admin.cars.edit_car')->with(['carDetails'=>$carDetails,'brands'=>$brands, 'engines'=>$engines, 'bodyTypes'=>$bodyTypes]);
        }

        public function editCar(RequestValidateCar $request, $id = null)
        {
            $data = $request->all();
            $car = Car::find($id);
            $old_image = $car->image;

            $medium_h = ($data['medium_h'] && ($data['medium_h']>0)) ? (int)$data['medium_h']:900;
            $medium_w = ($data['medium_w'] && ($data['medium_w']>0)) ? (int)$data['medium_w']:1600;
            $small_h = ($data['small_h'] && ($data['small_h']>0)) ? (int)$data['small_h']:450;
            $small_w = ($data['small_w'] && ($data['small_w']>0)) ? (int)$data['small_w']:800;


//            if($old_image){
//                $existsMedium = Storage::disk('public')->exists('images/backend_images/cars/medium/'.$old_image);
//                if($existsMedium){
//                    $medium_w = Image::make('images/backend_images/cars/medium/'.$old_image)->width();
//                    //dd($medium_w, Image::make('images/backend_images/cars/medium/'.$old_image));
//                    $medium_h = Image::make('images/backend_images/cars/medium/'.$old_image)->height();
//                }else {
//                    $medium_h = ($data['medium_h'] && ($data['medium_h']>0)) ? (int)$data['medium_h']:600;
//                    $medium_w = ($data['medium_w'] && ($data['medium_w']>0)) ? (int)$data['medium_w']:600;
//                }
//            } else {
//            $medium_h = ($data['medium_h'] && ($data['medium_h']>0)) ? (int)$data['medium_h']:600;
//            $medium_w = ($data['medium_w'] && ($data['medium_w']>0)) ? (int)$data['medium_w']:600;
//            }
//            if($old_image){
//                $existsSmall = Storage::disk('public')->exists('images/backend_images/cars/small/'.$old_image);
//                if($existsSmall){
//                    $small_w = Image::make('images/backend_images/cars/small/'.$old_image)->width();
//                    //dd($medium_w, Image::make('images/backend_images/cars/medium/'.$old_image));
//                    $small_h = Image::make('images/backend_images/cars/small/'.$old_image)->height();
//                }else {
//                    $small_h = ($data['small_h'] && ($data['small_h']>0)) ? (int)$data['small_h']:300;
//                    $small_w = ($data['small_w'] && ($data['small_w']>0)) ? (int)$data['small_w']:300;
//                }
//            } else {
//                $small_h = ($data['small_h'] && ($data['small_h']>0)) ? (int)$data['small_h']:300;
//                $small_w = ($data['small_w'] && ($data['small_w']>0)) ? (int)$data['small_w']:300;
//            }




            if($request->hasFile('image')){
                if($old_image){
                    $existsMedium = Storage::exists('files/images/backend_images/medium/'.$old_image);
                    if($existsMedium){
                            Storage::delete('files/images/backend_images/medium/'.$old_image);
                    }
                }
                if($old_image){
                    $existsSmall = Storage::exists('files/images/backend_images/small/'.$old_image);
                    if($existsSmall){
                        Storage::delete('files/images/backend_images/small/'.$old_image);
                    }
                }
                if($old_image){
                    $existsLarge = Storage::exists('files/images/backend_images/large/'.$old_image);
                    if($existsLarge){
                        Storage::delete('files/images/backend_images/large/'.$old_image);
                    }
                }
                $image_tmp = Input::file('image');
                if($image_tmp->isValid()){
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111, 99999).".".$extension;
                    //dd($filename);
                    $large_image_path = 'files/images/backend_images/large/'.$filename;
                    $medium_image_path = 'files/images/backend_images/medium/'.$filename;
                    $small_image_path = 'files/images/backend_images/small/'.$filename;

                    Image::make($image_tmp)->save($large_image_path);
                    Image::make($image_tmp)->resize($medium_w,$medium_h)->save($medium_image_path);
                    Image::make($image_tmp)->resize($small_w,$small_h)->save($small_image_path);

                    $data['image'] = $filename;
                }
            }

            $car->update($data);

            return redirect('/admin/view-cars')->with('flash_massage_success', 'Car Update Successfully');
        }

        public function viewCars()
        {
            $bodyTypes = BodyTypes::getLabels();
            $cars = Car::all();
            return view('admin.cars.view_cars')->with(compact('cars', 'bodyTypes'));
        }

        public function deleteCarImage($id = null)
        {

            $car = Car::find($id);
            $filename = $car->image;
            $existsLarge = Storage::exists('files/images/backend_images/large/'.$filename);
            if($existsLarge){
               Storage::delete('files/images/backend_images/large/'.$filename);
            }
            $existsMedium = Storage::exists('files/images/backend_images/medium/'.$filename);
            if($existsMedium){
                Storage::delete('files/images/backend_images/medium/'.$filename);
            }
            $existsSmall = Storage::exists('files/images/backend_images/small/'.$filename);
            if($existsSmall){
                Storage::delete('files/images/backend_images/small/'.$filename);
            }

            //die;

         $car->update(['image'=>null]);
          return redirect()->back()->with('flash_massage_success', 'Car Image has been delete successfully');
        }

        public function deleteCar($id = null)
        {

             $car = Car::find($id);

             $filename = $car->image;
             $existsLarge = Storage::exists('files/images/backend_images/large/'.$filename);
             if($existsLarge){
                Storage::delete('files/images/backend_images/large/'.$filename);
             }
             $existsMedium = Storage::exists('files/images/backend_images/medium/'.$filename);
             if($existsMedium){
                Storage::delete('files/images/backend_images/medium/'.$filename);
             }
             $existsSmall = Storage::exists('files/images/backend_images/small/'.$filename);
             if($existsSmall){
                Storage::delete('files/images/backend_images/small/'.$filename);
             }

                if($car) {
                    $carsImageRecords = $car->carsImage()->pluck('filename')->toArray();

                    foreach($carsImageRecords as $carsImageRecord){
                    $existsLarge = Storage::exists('files/images/carsGallery/large/'.$carsImageRecord);
                    if($existsLarge){
                    Storage::delete('files/images/carsGallery/large/'.$carsImageRecord);
                        }
                    }
                    foreach($carsImageRecords as $carsImageRecord){
                        $existsMedium = Storage::exists('files/images/carsGallery/medium/'.$carsImageRecord);
                        if($existsMedium){
                            Storage::delete('files/images/carsGallery/medium/'.$carsImageRecord);
                        }
                    }

                    foreach($carsImageRecords as $carsImageRecord){
                        $existsSmall = Storage::exists('files/images/carsGallery/small/'.$carsImageRecord);
                        if($existsSmall){
                            Storage::delete('files/images/carsGallery/small/'.$carsImageRecord);
                        }
                    }
                        $car->carsImage()->delete();
                        $car->delete();

                }

                return redirect()->back()->with('flash_massage_success', 'Car has been delete successfully');
             }





}


