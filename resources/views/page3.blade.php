@extends('layouts.app')

@section('content')
<div class="test text-light"> kgdjhf </div>

<div id="gallery" style="display:none;">
		
	<img alt="Image 1 Title" src="{{ asset('/img/slide2.jpg') }}"
		data-image="{{ asset('/img/slide2.jpg') }}">
			
	<img alt="Image 2 Title" src="{{ asset('/img/slide4.jpg') }}"
		data-image="{{ asset('/img/slide4.jpg') }}">
		
</div>

@endsection