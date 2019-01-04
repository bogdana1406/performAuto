<div class="search px-3">
	<div class="main-wrapper">
		<form method="post" action="{{ route ('carsFilter') }}" class="form-row mb-0 align-items-center">{{ csrf_field() }}
			<div class="col form-group">
				<div class="custom-select">
					<label for="inputBrand" class="sr-only">Brand</label>
					<select name="brand_id" id="inputBrand">
						<option value="0" >@lang('main_search.select1')</option>
						@foreach ($carFilterBrands as $carFilterBrand)
							<option value="{{ $carFilterBrand->id }}">{{ $carFilterBrand->name }}</option>
						@endforeach
					</select>
				</div>
			</div>
			<div class="col form-group">
				<div class="custom-select">
					<label for="inputModel" class="sr-only">Brand</label>
					<select name="model" id="inputModel">
				   		<option value="0">@lang('main_search.select2')</option>
						@foreach ($carFilterModels as $carFilterModel)
							<option value="{{ $carFilterModel }}">{{ $carFilterModel }}</option>
						@endforeach
				   	</select>
				</div>
			</div>
			<div class="col form-group">
				<div class="custom-select">
					<label for="inputYear" class="sr-only">Brand</label>
					<select name="year" id ="inputYear">
				   		<option value="0">@lang('main_search.select3')</option>
						@foreach ($carFilterYears as $carFilterYear)
							<option value="{{ $carFilterYear }}">{{ $carFilterYear }}</option>
						@endforeach
				   	</select>
				</div>
			</div>
			<div class="trackbar col">
				<span class="trackbar-title">@lang('main_search.trackbar_title') ({{$curr}})</span>
				<input value="" name="priceBar" id="priceBar" type="text"/>
			</div>

			<div class="col-auto">
				<button class="btn btn-red btn-large border-0" type="submit">search</button>
			</div>
		</form>
	</div>
</div>
<script>
	var minPrice = +"{{$carFilterPriceMin * $cours_cur}}"||0;
	var maxPrice = +"{{$carFilterPriceMax * $cours_cur}}"||100;
    $("#priceBar").slider({ min: minPrice, max: maxPrice, range: true, value: [minPrice, maxPrice] });

</script>
