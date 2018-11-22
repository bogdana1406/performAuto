<?php

namespace App\Http\Controllers;

use App\CarsImage;
use App\Http\Requests\RequestUpload;
use App\Http\Requests\RequestUploadForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Auth;
use Session;
use App\Car;
use Illuminate\Support\Facades\Input;
use Image;


class CarsImageController extends Controller
{
    public function uploadForm($id=null)
    {
        $carDetails = Car::where(['id'=>$id])->first;
        return view('admin.images.upload_Form')->with(['carDetails'=>$carDetails]);
    }

    public function uploadSubmit(RequestUpload $request, $id=null)
    {

        $car = Car::where(['id'=>$id])->first();
        $data = [];

        if($request->hasFile('images'))
            $files = $request->file('images');
        foreach ($files as $file){
            foreach ($request->images as $image) {
                $extension = $file->getClientOriginalExtension();
                $filename = rand(111, 99999).".".$extension;

                $filepath = $image->storeAs('files/images/cars'.$car->id, $filename);
                $data[] = [
                    'car_id' => $car->id,
                    'filename' => $filepath
                ];
            }
            // dd($data);
            CarsImage::insert($data);
            return redirect('/admin/view-images-table/');
        }

    }

    public function showImagesTable()
    {
        $carsImages = CarsImage::all();
        return view('admin.images.view_images_table')->with(compact('carsImages'));
    }

    public function deleteCarsImageRecord($id = null)
    {
        if (!empty($id)) {

            $imageRecord = CarsImage::where(['id' => $id])->value('filename');
//            dd($imageRecord);

            $existsMedium = Storage::exists('files/images/carsGallery/medium/'.$imageRecord);
            if($existsMedium){
                Storage::delete('files/images/carsGallery/medium/'.$imageRecord);
            }
            $existsLarge = Storage::exists('files/images/carsGallery/large/'.$imageRecord);
            if($existsLarge){
                Storage::delete('files/images/carsGallery/large/'.$imageRecord);
            }
            $existsSmall = Storage::exists('files/images/carsGallery/small/'.$imageRecord);
            if($existsSmall){
                Storage::delete('files/images/carsGallery/small/'.$imageRecord);
            }
            //Storage::delete($imageRecord);

            CarsImage::where(['id' => $id])->delete();

            return redirect()->back()->with('flash_massage_success', 'Car Image has been delete successfully');
        }

    }



    public function uploadImagesForm()
    {
        $carDetails = Car::pluck('name', 'id');
        //dd($carDetails);
        return view('admin.images.upload_Form')->with(['carDetails'=>$carDetails]);
    }

    public function uploadFormSubmit(RequestUploadForm $request)
    {

            $data = $request->all();
            //dd($data);
            $dataCarImage = [];

            if($request->hasFile('images'))
                $image_tmps = Input::file('images');
        //dd($image_tmps);
                //$files = $request->file('images');
          // dd($files, $image_tmp);
            foreach ($image_tmps as $image_tmp){
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111, 99999)."_car_".$data['car_id'].".".$extension;
                    //dd($filename);
                    $large_image_path = 'files/images/carsGallery/large/'.$filename;
                    $small_image_path = 'files/images/carsGallery/small/'.$filename;
                    $medium_image_path = 'files/images/carsGallery/medium/'.$filename;

                Image::make($image_tmp)->save($medium_image_path);
                Image::make($image_tmp)->resize(80, 80)->save($small_image_path);
                Image::make($image_tmp)->resize(460, 460)->save($large_image_path);

                $dataCarImage[] =[
                        'car_id' =>$data['car_id'],
                        'filename'=>$filename
                    ];

                } //dd($dataCarImage);

                CarsImage::insert($dataCarImage);
                return redirect('/admin/view-images-table/');
            //}





//        $data = $request->all();
//        //$carsImage = new CarsImage;
//        //$carsImage->car_id = $data['car_id'];
//        //dd($data['car_id']);
//
//
//        foreach($request->images as $image){
//            $filename = $image->store('images');
//            CarsImage::create([
//                'car_id' =>$data['car_id'],
//                'filename'=>$filename
//            ]);
//        }
//
//        return 'Upload successful';
    }
}


