@extends('layouts.app')

@section('title', 'Home')

@section('content')
	<div class="hero d-flex align-items-end">
		<div class="hero-title mx-auto text-center">
			<h2>@lang('home.hero-title')</h2>
			<span>@lang('home.search-title')</span>
		</div>
	</div>
	
	@include('includes.main-search')

	<section class="home-features">
		<div class="container">

			@include('includes.counter')
	
		</div>
		<h2 class="features-title">@lang('home.features-title')</h2>
		<div class="divider"></div>
		<p class="features-slogan">@lang('home.features-slogan')<span>&laquo;@lang('home.features-quote')&raquo;</span></p>
	</section>
@endsection