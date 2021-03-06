@extends('layouts.clientLayout.app')

@section('title', 'About')

@section('content')
	<div class="hero hero-about d-flex">
		<div class="main-wrapper">
			<div class="hero-title">
				<h2>@lang('about.title')</h2>
				<nav aria-label="breadcrumb">
				  	<ol class="breadcrumb">
				    	<li class="breadcrumb-item"><a href="{{ URL('/') }}">Home</a></li>
				    	<li class="breadcrumb-item active" aria-current="page">@lang('about.title')</li>
				  	</ol>
				</nav>
			</div>
		</div>
	</div>
	
	<section class="features features-about arrow-down arrow-up-rev arrow-black"">
		<div class="main-wrapper text-center">
			<h2 class="features-title mt-5 mb-0 divider">@lang('about.features-title')</h2>
			<p class="features-slogan mx-auto">@lang('about.features-slogan')</p>

			@include('client.includes.counter')

			<p class="features-slogan mx-auto my-4">@lang('about.features-slogan')</p>
			<span class="features-quote">&laquo;@lang('about.features-quote')&raquo;</span>
			
			<div class="clients-carousel">
				
				@include('client.includes.carousel')
			
			</div>

		</div>
	</section>

	@include('client.includes.video')

	<section class="reviews arrow-down arrow-down-rev arrow-white">

		@include('client.common.reviews')

	</section>

@endsection
