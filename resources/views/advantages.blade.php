@extends('layouts.app')

@section('title', 'Advantages')

@section('content')
	<div class="hero hero-advantages d-flex">
		<div class="main-wrapper">
			<div class="hero-title">
				<h2>@lang('advantages.title')</h2>
				<nav aria-label="breadcrumb">
				  	<ol class="breadcrumb">
				    	<li class="breadcrumb-item"><a href="{{ URL('/') }}">Home</a></li>
				    	<li class="breadcrumb-item active" aria-current="page">@lang('advantages.title')</li>
				  	</ol>
				</nav>
			</div>
		</div>
	</div>

	<section class="features features-advantages arrow-down arrow-up-rev arrow-black"">
		<div class="main-wrapper text-center">
			<h2 class="features-title mt-5 mb-0 divider">@lang('advantages.features-title')</h2>
			<div class="features-list">
				<ul class="list-unstyled text-left">
					<li class="bordered-square"><span class="num">01</span>@lang('advantages.features1')</li>
					<li class="bordered-square"><span class="num">02</span>@lang('advantages.features2')</li>
					<li class="bordered-square"><span class="num">03</span>@lang('advantages.features3')</li>
					<li class="bordered-square"><span class="num">04</span>@lang('advantages.features4')</li>
					<li class="bordered-square"><span class="num">05</span>@lang('advantages.features5')</li>
				</ul>
			</div>
			<span class="features-quote">&laquo;@lang('advantages.features-quote')&raquo;</span>
			<div class="d-flex justify-content-center pt-4">
				<a href="{{ url('cars') }}" class="btn btn-red btn-medium border-0">Choose your car</a>
			</div>
		</div>
	</section>

	<section class="clients-carousel bg-white">
		<div class="main-wrapper">
	
			@include('includes.carousel')
	
		</div>
	</section>

	<section class="reviews arrow-down-rev arrow-white">
				
		@include('common.reviews')

	</section>
@endsection
