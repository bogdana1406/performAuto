@if (request()->is('cars'))
<section class="gallery gallery-light">
@else
<section class="gallery">
	<div class="holder">
@endif
		<div class="main-wrapper">
				<div class="gallery-filter d-flex">
					{{-- gallery filter --}}
					@if (request()->is('cars'))
					<div class="gallery-title pl-4">
						<h2 class="mb-0">@lang('gallery.full_gallery_title')</h2>
						<nav aria-label="breadcrumb">
						  <ol class="breadcrumb">
						   	<li class="breadcrumb-item"><a href="{{ URL('/') }}">Home</a></li>
						   	<li class="breadcrumb-item active" aria-current="page">@lang('cars.title')</li>
					  	</ol>
						</nav>
					@else
					<div class="gallery-title slash pl-4">
						<h2 class="mb-0">@lang('gallery.title')</h2>
						<span>@lang('gallery.sub-title')</span>
					@endif
					</div>
					<nav class="nav ml-auto" id="gallery-filter">
						<a href="#" class="nav-link {{$activBrand === 'all' ? 'active' : ''}}" data-toggle="portfilter" data-target="all">@lang('brands.all_brands')<sup class="cars-number">{{ $countAllCars }}</sup></a>
						@foreach($arrayBrandsCount as $brandName => $brandCount)
						<a href="#" class="nav-link {{$activBrand === $brandName ? 'active' : ''}}" data-toggle="portfilter" data-target={{ $brandName }}>{{ $brandName }}<sup class="cars-number">{{ $brandCount }}</sup></a>
						@endforeach
					</nav>
				</div>
			{{-- search for full gallery --}}
			@if (request()->is('cars'))
				<div class="search-white">

					@include('includes.main-search')

				</div>
			@endif
			{{-- car cards --}}
			<div class="row">
			@php
			$i=0
			@endphp
				@foreach($cars as $car)
					@php
						$i++
					@endphp
					@if(Request::url() !== route('cars') && $i>2)
						<div class="col-md-3" data-tag={{ $car->brand->name }} style="display: none">
					@else
						<div class="col-md-3" data-tag={{ $car->brand->name }}>
					@endif
					<div class="card">
						<div class="card-img-top">
							<a href="#" class="show-modal" data-toggle="modal" data-target="#car{{$car->id}}">
								@if(!empty($car->image))
									@if(Storage::exists('files/images/backend_images/medium/'.$car->image))
									<img src="{{ URL::asset('files/images/backend_images/medium/'.$car->image) }}" class="img-thumb" alt="car-thumb">
									@else
									<img src="{{ URL::asset('/images/car-default.jpg') }}" class="img-thumb" alt="car-thumb">
									@endif
								@endif
								{{--<img src="{{ URL::asset('/images/backend_images/cars/small/'.$car->image) }}" class="img-thumb" alt="car-thumb">--}}
								<div class="search-icon">
									<img src="{{ URL::asset('/images/search.png') }}" class="img-icon" alt="search">
								</div>
							</a>
							<div class="modal fade" id="car{{$car->id}}" tabindex="-1" role="dialog" aria-labelledby="car{{$car->id}}Label" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered" role="document">
	    						<div class="modal-content">
									   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
									      <span aria-hidden="true">&times;</span>
									    </button>

									@if(Storage::exists('files/images/backend_images/medium/'.$car->image)))
										<img src="{{ URL::asset('files/images/backend_images/medium/'.$car->image) }}" class="img-thumb" alt="car-thumb">
									@else
										<img src="{{ URL::asset('/images/car-default.jpg') }}" class="img-thumb" alt="car-thumb">
									@endif
									</div>
								</div>
							</div>
						</div>
						<div class="card-body">
						    <a href="{{route('car', ['id'=>$car->id])}}" class="d-block">
						    	<div class="row">
							    	<h5 class="col card-title d-inline-block">{{$car->name}}</h5>
						    		<div class="col text-right">
						    			<span class="date">{{$car->year}}</span>
						    		</div>
						    	</div>
						    	<div class="row">
						    		<div class="col">
						    			<span class="car-price">{{$car->price}}</span><span class="currency">&euro;</span>
						    		</div>
						    		{{--<div class="col text-right">--}}
						    			{{--<span class="mileage">150000 km</span>--}}
						    		{{--</div>--}}
						    	</div>
						    </a>
						</div>
					</div>
				</div>
				@endforeach

			</div>
			<div class="d-flex justify-content-center mt-5 position-relative">
				{{-- @if (request()->is('cars')) --}}
				<a href="{{ route('cars') }}" class="btn btn-outline btn-medium {{ Request::url() === route('cars')? 'd-none' : null }}">all cars</a>

			</div>
		</div>
	</div>
	</div>
</section>
</section>

@if(Request::url() === route('cars'))
<script>
    $(document).ready(function() {
		$('nav#gallery-filter a.active').click();
	});
</script>
@endif