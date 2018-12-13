<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/admin', 'AdminController@login');
Route::post('/logout', 'AdminController@logout');
Route::match(['get', 'post'], '/admin', 'AdminController@login');

Auth::routes();

Route::group(['middleware' => ['auth'], 'prefix' => 'admin'], function(){
    Route::get('/dashboard', 'AdminController@dashboard');
    Route::get('/settings', 'AdminController@settings');
    Route::get('/check-pwd', 'AdminController@checkPassword');
    Route::match(['get', 'post'], '/update-pwd', 'AdminController@updatePassword');


    //brands Route (Admin)

    Route::get('/add-brand', 'BrandController@showAddBrand');
    Route::post('/add-brand', 'BrandController@addBrand');
    Route::get('/edit-brand/{id}', 'BrandController@showEditBrand');
    Route::post('/edit-brand/{id}', 'BrandController@editBrand');
    Route::match(['get', 'post'], '/delete-brand/{id}', 'BrandController@deleteBrand');
    Route::get('/view-brands', 'BrandController@viewBrands');

    //engines Route (Admin)

    Route::get('/add-engine', 'EngineController@showAddEngine');
    Route::post('/add-engine', 'EngineController@addEngine');
    Route::get('/edit-engine/{id}', 'EngineController@showEditEngine');
    Route::post('/edit-engine/{id}', 'EngineController@editEngine');
    Route::match(['get', 'post'], '/delete-engine/{id}', 'EngineController@deleteEngine');
    Route::get('/view-engines', 'EngineController@viewEngines');

    //reviews Route (Admin)

    Route::get('/add-review', 'ReviewController@showAddReview');
    Route::post('/add-review', 'ReviewController@addReview');
    Route::get('/view-reviews', 'ReviewController@viewReview');
    Route::get('/edit-review/{id}', 'ReviewController@showEditReview');
    Route::post('/edit-review/{id}', 'ReviewController@editReview');
    Route::get('/delete-review-image/{id}', 'ReviewController@deleteReviewPhoto');
    Route::get('/delete-review/{id}', 'ReviewController@deleteReview');

    //cars Route (Admin)

    Route::post('/add-car', 'CarController@addCar');
    Route::get('/add-car', 'CarController@showAddCar');
    Route::get('/edit-car/{id}', 'CarController@showEditCar');
    Route::post('/edit-car/{id}', 'CarController@editCar');
    Route::get('/view-cars', 'CarController@viewCars');
    Route::get('/delete-car-image/{id}', 'CarController@deleteCarImage');
    //Route::match(['get', 'post'], '/delete-car/{id}', 'CarController@deleteCar');
    Route::get('/delete-car/{id}', 'CarController@deleteCar');

    //carsSearch Route (Admin)
    Route::get('/search-cars', 'SearchController@showFilter');
    Route::post('/search-cars', 'SearchController@showResultFilter');


    //Images upload Route
    //Route::get('/upload-car-images/{id}', 'CarsImageController@uploadForm');
    //Route::post('/upload-car-images/{id}', 'CarsImageController@uploadSubmit');


    Route::get('/upload-car-images-form', 'CarsImageController@uploadImagesForm');
    Route::post('/upload-car-images-form', 'CarsImageController@uploadFormSubmit');


    Route::get('/view-images-table', 'CarsImageController@showImagesTable');
    Route::get('/delete-car-image-record/{id}', 'CarsImageController@deleteCarsImageRecord');
});


Route::get('/', function () {
    return redirect('/'. App\Http\Middleware\LocaleMiddleware::$mainLanguage);
});

Route::get('setlocale/{lang}', 'SetLocaleController@setLang')->name('setlocale');


Route::group(['prefix' => App\Http\Middleware\LocaleMiddleware::getLocale()], function(){

    Route::get('/', 'DisplayConrtoller@home')->name('home');

    Route::get('home', 'DisplayConrtoller@home')->name('home');

    Route::get('advantages', 'DisplayConrtoller@advantages')->name('advantages');

    Route::get('about', 'DisplayConrtoller@about')->name('about');

    Route::get('car/{id}', 'DisplayConrtoller@car')->name('car');

    Route::get('cars', 'DisplayConrtoller@cars')->name('cars');

    Route::post('filter-cars', 'DisplayConrtoller@showResultFilter')->name('carsFilter');
});



