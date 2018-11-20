@extends('layouts.clientLayout.app')

@section('title', 'Cars gallery')

@section('content')

	<section class="cars-gallery arrow-down-rev arrow-white">
		@include('client.common.gallery')
	</section>

@endsection