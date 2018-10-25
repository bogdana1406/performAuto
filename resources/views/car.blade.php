@extends('layouts.app')

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
        <div class="car-properties d-flex">
          <span class="icon-seats"></span>
          <span class="icon-gas"></span>
          <span class="icon-car"></span>
          <span class="icon-gearshift"></span>
          <span class="icon-certificate"></span>
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
              <div class="tab-pane active" id="aboutCar" role="tabpanel" aria-labelledby="aboutCar-tab"><p>Hierbij bieden wij deze exclusieve Full option Mercedes-Benz W221 320CDI Long version met Japanse Wald Black Bison body kit. De auto bevindt zich in zeer goede staat zowel binnen als buiten. Carrosserie is zonder krassen en interieur was altijd netjes gehouden en goed verzorgd. Wagen werd ook maniakaal onderhouden.</p> Voor meer info of een afspraak bel of sms naar: +32 494 15 96 75
          
              </div>
              <div class="tab-pane" id="descriptionCar" role="tabpanel" aria-labelledby="descriptionCar-tab">ack Bison body kit. De auto bevindt zich in zeer goede staat zowel binnen als buiten. Carrosserie is zonder krassen en interieur was altijd netjes gehouden en goed verzorgd. Wagen werd ook maniakaal onderh
              </div>
            </div>
          </div>
        <div class="alternate-car">
          <p class="mb-0">@lang('car_details.alternate_car_name')</p>
          <span class="alt-price">11 500.00 <span class="currency">&euro;</span></span>
        </div>
      </div>
    </div>
      <div class="col-sm-6">
        <div class="slider">
          <ul id="lightSlider">
            <li data-thumb="{{ asset('/img/mers-s1.png') }}">
              <img alt="Image 1 Title" src="{{ asset('/img/mers_big.jpg') }}" class="img-fluid">
            </li>
            <li data-thumb="{{ asset('/img/mers-s2.png') }}">
              <img alt="Image 1 Title" src="{{ asset('/img/mers_big2.jpg') }}" class="img-fluid">
            </li>
            <li data-thumb="{{ asset('/img/mers-s3.png') }}">
              <img alt="Image 1 Title" src="{{ asset('/img/mers_big3.jpg') }}" class="img-fluid">
            </li>
            <li data-thumb="{{ asset('/img/mers-s1.png') }}">
              <img alt="Image 1 Title" src="{{ asset('/img/mers_big.jpg') }}" class="img-fluid">
            </li>
            <li data-thumb="{{ asset('/img/mers-s2.png') }}">
              <img alt="Image 1 Title" src="{{ asset('/img/mers_big2.jpg') }}" class="img-fluid">
            </li>
            <li data-thumb="{{ asset('/img/mers-s3.png') }}">
              <img alt="Image 1 Title" src="{{ asset('/img/mers_big3.jpg') }}" class="img-fluid">
            </li>
            <li></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="arrow-down-rev arrow-white">

  @include('common.gallery')

</div>

@endsection
