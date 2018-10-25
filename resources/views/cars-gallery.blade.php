@extends('layouts.app')

@section('title', 'Cars gallery')

@section('content')

	<section class="cars-gallery arrow-down-rev arrow-white">
		@include('common.gallery')
	</section>

@endsection