@extends('layouts.clientLayout.app')

@section('title', 'Car details')

@section('content')

<section class="car-card">
  <div class="main-wrapper pb-4">
    <div class="section-header d-flex justify-content-between">
      <h2 class="car-title">
      	{{$carDetails->name}}
      </h2>
      <div class="car-price">
      	<span>{{($carDetails->price) * $cours_cur}}</span><span class="currency">{{' '.$curr}}</span>
      </div>
    </div>
    <nav class="mb-5" aria-label="breadcrumb">
		 	<ol class="breadcrumb">
		   	<li class="breadcrumb-item"><a href="{{ URL('/') }}">Home</a></li>
		   	<li class="breadcrumb-item active" aria-current="page">@lang('car_details.title')</li>
		 	</ol>
		</nav>
    <div class="row pt-4">
      <div class="col-sm-6 d-flex flex-column justify-content-between">
        <div class="car-properties row">
          <span class="col property"><img src="/images/icon-car-seat.png" class="icon mr-2">{{$carDetails->seats}}</span>
          <span class="col property"><img src="/images/icon-gas-station.png" class="icon mr-2">{{$carDetails->engine->name}}</span>
          <span class="col property"><img src="/images/icon-car.png" class="icon mr-2">{{$carDetails->doors}}</span>
          <span class="col property"><img src="/images/icon-gearshift.png" class="icon mr-2">{{$carDetails->transmission_types}}</span>
          <span class="col property"><img src="/images/icon-certificate-shape.png" class="icon mr-2">{{$carDetails->year}}</span>
        </div>

        <div class="car-properties row">
          <span class="col property"><img src="/images/icon-car.png" class="icon mr-2"> {{ $bodyTypes[$carDetails->body_type] }}</span>
          <span class="col property"><img src="/images/icon-gas-station.png" class="icon mr-2">{{$carDetails->mileage}}</span>
        </div>
        <div class="car-description d-flex flex-column justify-content-between">
          <div class="tabs">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item">
                <a aria-controls="aboutCar" aria-selected="true" class="nav-link active" data-toggle="tab" href="#aboutCar" id="aboutCar-tab" role="tab">@lang('car_details.tab1')</a>
              </li>
              <li class="nav-item">
                <a aria-controls="descriptionCar" aria-selected="false" class="nav-link" data-toggle="tab" href="#descriptionCar" id="descriptionCar-tab" role="tab">@lang('car_details.tab2')</a>
              </li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="aboutCar" role="tabpanel" aria-labelledby="aboutCar-tab"><p>{{$carDetails->about[App::getLocale()]}}</p>
              </div>
              <div class="tab-pane" id="descriptionCar" role="tabpanel" aria-labelledby="descriptionCar-tab">{{$carDetails->descriptions[App::getLocale()]}}
              </div>
            </div>
          </div>
        </div>
        <div class="alternate-car">
          <p class="mb-0">{{$carDetails->name}}</p>
          <span class="alt-price ">{{($carDetails->price) * $cours_cur}} <span class="currency {{' '.$curr}}">{{' '.$curr}}</span></span>
        </div>
        <button class="btn btn-red btn-large border-0 align-self-start ml-0 mt-3 px-4 text-white" data-toggle="modal" data-target="#contactModal">@lang('car_details.buy')</button>
      </div>
      <div class="col-sm-6">
        <div class="slider angles">
          <ul id="lightSlider">
            @if((($carImagesGallery)->isEmpty()))
              <li data-thumb="{{ asset('/images/default-gallery-small.jpeg') }}" class="active">
                <img alt="Image 1 Title" src="{{ asset('/images/default-gallery-large.jpeg') }}" class="img-fluid">
              </li>
            @else
            @foreach($carImagesGallery as $carImage)
            <li data-thumb="{{Storage::exists('/files/images/carsGallery/small/'.$carImage->filename) ?
             asset('files/images/carsGallery/small/'.$carImage->filename) :
              asset('/images/default-gallery-small.jpeg')}}" class="active">
              <a href="#" class="show-modal" data-toggle="modal" data-target="#car-img">
                <img alt="Image 1 Title" src="{{ Storage::exists('/files/images/carsGallery/large/'.$carImage->filename) ?
                      asset('files/images/carsGallery/large/'.$carImage->filename) :
                      asset('/images/default-gallery-large.jpeg') }}" class="img-fluid">
              </a>

              

            </li>
            @endforeach
            @endif
            <li></li>
          </ul>
          {{-- <ol id="sliderIndicators" class="indicators"></ol> --}}
        </div>
      </div>
    </div>
  </div>
  {{-- modal --}}
  <div class="modal fade" id="car-img" tabindex="-1" role="dialog" aria-labelledby="car-imageLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

          <img src="{{ Storage::exists('/files/images/carsGallery/medium/'.$carImage->filename) ?
                asset('files/images/carsGallery/medium/'.$carImage->filename) :
                 asset('/images/default-gallery-medium.jpeg') }}" class="img-thumb" alt="car-thumb">
      </div>
    </div>
  </div>
</section>

<div class="arrow-down-rev arrow-white">

  @include('client.common.gallery')

</div>

@endsection
