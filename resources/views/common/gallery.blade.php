<section class="gallery arrow-up arrow-white">
	<div class="main-wrapper">
		<div class="gallery-filter d-flex">
			<div class="gallery-title pl-4">
				<h2 class="mb-0">@lang('gallery.title')</h2>
				<span>@lang('gallery.sub-title')</span>
			</div>
			<nav class="nav ml-auto" id="gallery-filter">
				<a href="#" class="nav-link active" data-toggle="portfilter" data-target="all">@lang('brands.all_brands')<sup class="cars-number">24</sup></a>
				<a href="#" class="nav-link"" data-toggle="portfilter" data-target="@lang('brands.brand1')">@lang('brands.brand1')<sup class="cars-number">2</sup></a>
				<a href="#" class="nav-link"" data-toggle="portfilter" data-target="@lang('brands.brand2')">@lang('brands.brand2')<sup class="cars-number">6</sup></a>
				<a href="#" class="nav-link"" data-toggle="portfilter" data-target="@lang('brands.brand3')">@lang('brands.brand3')<sup class="cars-number">2</sup></a>
				<a href="#" class="nav-link"" data-toggle="portfilter" data-target="@lang('brands.brand4')">@lang('brands.brand4')<sup class="cars-number">1</sup></a>
				<a href="#" class="nav-link"" data-toggle="portfilter" data-target="@lang('brands.brand5')">@lang('brands.brand5')<sup class="cars-number">5</sup></a>
				<a href="#" class="nav-link"" data-toggle="portfilter" data-target="@lang('brands.brand6')">@lang('brands.brand6')<sup class="cars-number">8</sup></a>
			</nav>
		</div>
		{{-- car cards --}}
		<div class="row">
			<div class="col-md-3" data-tag="@lang('brands.brand6')">
				<div class="card">
					<div class="card-img-top">
						<a href="#" class="">
							<img src="{{ URL::asset('/img/car-1.jpg') }}" class="img-thumb" alt="car-thumb">
						</a>
					</div>
					<div class="card-body">
					    <a href="#" class="d-block">
					    	<div class="row">
						    	<h5 class="col card-title d-inline-block">Car name</h5>
					    		<div class="col text-right">
					    			<span class="date">10/2009</span>
					    		</div>
					    	</div>
					    	<div class="row">
					    		<div class="col">
					    			<span class="car-price">10300,00</span><span class="currency">&euro;</span>
					    		</div>
					    		<div class="col text-right">
					    			<span class="mileage">150000 km</span>
					    		</div>
					    	</div>
					    </a>
					</div>
				</div>
			</div>
			<div class="col-md-3" data-tag="@lang('brands.brand1')">
				<div class="card">
					<div class="card-img-top">
						<a href="#" class="">
							<img src="{{ URL::asset('/img/car-2.jpg') }}" class="img-thumb" alt="car-thumb">
						</a>
					</div>
					<div class="card-body">
						<a href="#" class="d-block">
						    <div class="row">
						    	<h5 class="col card-title d-inline-block">Car name</h5>
						    	<div class="col text-right">
						    		<span class="date">10/2009</span>
						    	</div>
						    </div>
						    <div class="row">
						    	<div class="col">
						    		<span class="car-price">10300,00</span><span class="currency">&euro;</span>
						    	</div>
						    	<div class="col text-right">
						    		<span class="mileage">150000 km</span>
						    	</div>
						    </div>
						</a>
					</div>
				</div>
			</div>
			<div class="col-md-3" data-tag="@lang('brands.brand6')">
				<div class="card">
					<div class="card-img-top">
						<a href="#" class="">
							<img src="{{ URL::asset('/img/car-3.jpg') }}" class="img-thumb" alt="car-thumb">
						</a>
					</div>
					<div class="card-body">
						<a href="" class="d-block">
						    <div class="row">
						    	<h5 class="col card-title d-inline-block">Car name</h5>
						    	<div class="col text-right">
						    		<span class="date">10/2009</span>
						    	</div>
						    </div>
						    <div class="row">
						    	<div class="col">
						    		<span class="car-price">10300,00</span><span class="currency">&euro;</span>
						    	</div>
						    	<div class="col text-right">
						    		<span class="mileage">150000 km</span>
						    	</div>
						    </div>
						</a>
					</div>
				</div>
			</div>
			<div class="col-md-3" data-tag="@lang('brands.brand6')">
				<div class="card">
					<div class="card-img-top">
						<a href="#" class="">
							<img src="{{ URL::asset('/img/car-4.jpg') }}" class="img-thumb" alt="car-thumb">
						</a>
					</div>
					<div class="card-body">
						<a href="" class="d-block">
						    <div class="row">
						    	<h5 class="col card-title d-inline-block">Car name</h5>
						    	<div class="col text-right">
						    		<span class="date">10/2009</span>
						    	</div>
						    </div>
						    <div class="row">
						    	<div class="col">
						    		<span class="car-price">10300,00</span><span class="currency">&euro;</span>
						    	</div>
						    	<div class="col text-right">
						    		<span class="mileage">150000 km</span>
						    	</div>
						    </div>
						</a>
					</div>
				</div>
			</div>
			<div class="col-md-3" data-tag="@lang('brands.brand5')">
				<div class="card">
					<div class="card-img-top">
						<a href="#" class="">
							<img src="{{ URL::asset('/img/car-5.jpg') }}" class="img-thumb" alt="car-thumb">
						</a>
					</div>
					<div class="card-body">
						<a href="" class="d-block">
						    <div class="row">
						    	<h5 class="col card-title d-inline-block">Car name</h5>
						    	<div class="col text-right">
						    		<span class="date">10/2009</span>
						    	</div>
						    </div>
						    <div class="row">
						    	<div class="col">
						    		<span class="car-price">10300,00</span><span class="currency">&euro;</span>
						    	</div>
						    	<div class="col text-right">
						    		<span class="mileage">150000 km</span>
						    	</div>
						    </div>
						</a>
					</div>
				</div>
			</div>
			<div class="col-md-3" data-tag="@lang('brands.brand5')">
				<div class="card">
					<div class="card-img-top">
						<a href="#" class="">
							<img src="{{ URL::asset('/img/car-6.jpg') }}" class="img-thumb" alt="car-thumb">
						</a>
					</div>
					<div class="card-body">
						<a href="" class="d-block">
						    <div class="row">
						    	<h5 class="col card-title d-inline-block">Car name</h5>
						    	<div class="col text-right">
						    		<span class="date">10/2009</span>
						    	</div>
						    </div>
						    <div class="row">
						    	<div class="col">
						    		<span class="car-price">10300,00</span><span class="currency">&euro;</span>
						    	</div>
						    	<div class="col text-right">
						    		<span class="mileage">150000 km</span>
						    	</div>
						    </div>
						</a>
					</div>
				</div>
			</div>
			<div class="col-md-3" data-tag="@lang('brands.brand6')">
				<div class="card">
					<div class="card-img-top">
						<a href="#" class="">
							<img src="{{ URL::asset('/img/car-7.jpg') }}" class="img-thumb" alt="car-thumb">
						</a>
					</div>
					<div class="card-body">
						<a href="" class="d-block">
						    <div class="row">
						    	<h5 class="col card-title d-inline-block">Car name</h5>
						    	<div class="col text-right">
						    		<span class="date">10/2009</span>
						    	</div>
						    </div>
						    <div class="row">
						    	<div class="col">
						    		<span class="car-price">10300,00</span><span class="currency">&euro;</span>
						    	</div>
						    	<div class="col text-right">
						    		<span class="mileage">150000 km</span>
						    	</div>
						    </div>
						</a>
					</div>
				</div>
			</div>
			<div class="col-md-3" data-tag="@lang('brands.brand6')">
				<div class="card">
					<div class="card-img-top">
						<a href="#" class="">
							<img src="{{ URL::asset('/img/car-8.jpg') }}" class="img-thumb" alt="car-thumb">
						</a>
					</div>
					<div class="card-body">
						<a href="" class="d-block">
						    <div class="row">
						    	<h5 class="col card-title d-inline-block">Car name</h5>
						    	<div class="col text-right">
						    		<span class="date">10/2009</span>
						    	</div>
						    </div>
						    <div class="row">
						    	<div class="col">
						    		<span class="car-price">10300,00</span><span class="currency">&euro;</span>
						    	</div>
						    	<div class="col text-right">
						    		<span class="mileage">150000 km</span>
						    	</div>
						    </div>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="d-flex justify-content-center mt-5">
			<a href="" class="btn btn-outline">all cars</a>
		</div>
	</div>
</section>
