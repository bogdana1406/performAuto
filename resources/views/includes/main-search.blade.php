<div class="search arrow-down arrow-black  px-3">
	<div class="main-wrapper">
		<form action="" class="form-row mb-0 align-items-center">
			<div class="col form-group">
				<div class="custom-select">
					<label for="inputBrand" class="sr-only">Brand</label>
					<select id="inputBrand">
				   		<option value="0">@lang('main_search.select1')</option>
						<option value="1">@lang('brands.brand1')</option>
						<option value="2">@lang('brands.brand2')</option>
						<option value="3">@lang('brands.brand3')</option>
						<option value="4">@lang('brands.brand4')</option>
						<option value="5">@lang('brands.brand5')</option>
						<option value="6">@lang('brands.brand6')</option>
					</select>
				</div>
			</div>
			<div class="col form-group">
				<div class="custom-select">
					<label for="inputModel" class="sr-only">Brand</label>
					<select id="inputModel">
				   		<option value="0">@lang('main_search.select2')</option>
		       			<option value="1">...</option>
		       			<option value="2">...</option>
				   	</select>
				</div>
			</div>
			<div class="col form-group">
				<div class="custom-select">
					<label for="inputYear" class="sr-only">Brand</label>
					<select id ="inputYear">
				   		<option value="0">@lang('main_search.select3')</option>
		       			<option value="1">...</option>
		       			<option value="2">...</option>
				   	</select>
				</div>
			</div>
			<div class="trackbar col">
				<span class="trackbar-title">@lang('main_search.trackbar_title')</span>
				<input id="priceBar" type="text"/>
			</div>
			<div class="col-auto">
				<buton class="btn btn-red btn-large">search</buton>
			</div>
		</form>
	</div>
</div>

@include('includes.triangles-down')