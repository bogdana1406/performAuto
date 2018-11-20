@extends('layouts.clientLayout.app')

@section('title', 'Home')

@section('content')
	<div class="hero d-flex align-items-end">
		<div class="hero-title mx-auto text-center">
			<h2>@lang('home.hero-title')</h2>
			<span>@lang('home.search-title')</span>
		</div>
	</div>
	
	<div class="search-dark arrow-down arrow-black">

		<div class="triangles-down">
			@include('client.includes.main-search')
		</div>

	</div>

	<section class="home-features">
		<div class="main-wrapper">

			@include('client.includes.counter')
	
		</div>
		<h2 class="features-title mt-5 divider">@lang('home.features-title')</h2>
		<p class="features-slogan mx-auto my-4">@lang('home.features-slogan')</p>
		<span>&laquo;@lang('home.features-quote')&raquo;</span>
	</section>

	<div class="arrow-up arrow-white">

		@include('client.common.gallery')
		
	</div>

	@include('client.includes.video')

	<section class="reviews arrow-down arrow-down-rev arrow-white">

		@include('client.common.reviews')
		
	</section>
	
@endsection
