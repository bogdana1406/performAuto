@extends('layouts.clientLayout.app')

@section('title', 'Car details')

@section('content')

<section class="car-card">
  <div class="main-wrapper">
    <div class="section-header d-flex justify-content-between">
      <h2 class="car-title">
      	@lang('car_details.car_name')
      </h2>
      <div class="car-price">
      	<span>19 500,00</span><span class="currency">&euro;</span>
      </div>
    </div>
    <nav aria-label="breadcrumb">
		 	<ol class="breadcrumb">
		   	<li class="breadcrumb-item"><a href="{{ URL('/') }}">Home</a></li>
		   	<li class="breadcrumb-item active" aria-current="page">@lang('car_details.title')</li>
		 	</ol>
		</nav>
    <div class="row">
      <div class="col-sm-6 d-flex flex-column justify-content-between">
        <div class="car-properties row">
          <span class="col property"><img src="/images/icon-car-seat.png" class="icon mr-2">{{$carDetails->seats}}</span>
          <span class="col property"><img src="/images/icon-gas-station.png" class="icon mr-2">@lang('car_details.fuel')</span>
          <span class="col property"><img src="/images/icon-car.png" class="icon mr-2">5/5</span>
          <span class="col property"><img src="/images/icon-gearshift.png" class="icon mr-2">4A OD</span>
          <span class="col property"><img src="/images/icon-certificate-shape.png" class="icon mr-2">2014</span>
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
              <div class="tab-pane" id="descriptionCar" role="tabpanel" aria-labelledby="descriptionCar-tab">ack Bison body kit. De auto bevindt zich in zeer goede staat zowel binnen als buiten. Carrosserie is zonder krassen en interieur was altijd netjes gehouden en goed verzorgd. Wagen werd ook maniakaal onderh
              </div>
            </div>
          </div>
        </div>
        <div class="alternate-car">
            <p class="mb-0">@lang('car_details.alternate_car_name')</p>
            <span class="alt-price">11 500.00 <span class="currency">&euro;</span></span>
          </div>
          <a class="btn btn-red btn-large border-0 align-self-start ml-0 mt-3 px-4 py-2 text-white">@lang('car_details.buy')</a>
      </div>
      <div class="col-sm-6">
        <div class="slider">
          <ul id="lightSlider">
            <li data-thumb="{{ asset('/images/mers-s1.png') }}" class="active">
              <img alt="Image 1 Title" src="{{ asset('/images/mers_big.jpg') }}" class="img-fluid">
            </li>
            <li data-thumb="{{ asset('/images/mers-s2.png') }}">
              <img alt="Image 1 Title" src="{{ asset('/images/mers_big2.jpg') }}" class="img-fluid">
            </li>
            <li data-thumb="{{ asset('/images/mers-s3.png') }}">
              <img alt="Image 1 Title" src="{{ asset('/images/mers_big3.jpg') }}" class="img-fluid">
            </li>
            <li data-thumb="{{ asset('/images/mers-s1.png') }}">
              <img alt="Image 1 Title" src="{{ asset('/images/mers_big.jpg') }}" class="img-fluid">
            </li>
            <li data-thumb="{{ asset('/images/mers-s2.png') }}">
              <img alt="Image 1 Title" src="{{ asset('/images/mers_big2.jpg') }}" class="img-fluid">
            </li>
            <li data-thumb="{{ asset('/images/mers-s3.png') }}">
              <img alt="Image 1 Title" src="{{ asset('/images/mers_big3.jpg') }}" class="img-fluid">
            </li>
            <li></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="arrow-down-rev arrow-white">

  @include('client.common.gallery')

</div>

@endsection
