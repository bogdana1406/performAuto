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
				<div id="slider-connect" class="noUi-target noUi-ltr noUi-horizontal">
					<div class="noUi-base">
						<div class="noUi-connects">
							<div class="noUi-connect"></div>
						</div>
						<div class="noUi-origin" style="transform: translate(-75%, 0px); z-index: 5;">
							<div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="2000.0" aria-valuemax="7975.6" aria-valuenow="4512.2" aria-valuetext="4512.20">
							</div>
						</div>
						<div class="noUi-origin">
							<div class="noUi-handle noUi-handle-upper" data-handle="1" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="4512.2" aria-valuemax="10000.0" aria-valuenow="7975.6" aria-valuetext="7975.61">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-auto">
				<buton class="btn btn-search">search</buton>
			</div>
		</form>
	</div>
</div>

@include('includes.triangles-down')