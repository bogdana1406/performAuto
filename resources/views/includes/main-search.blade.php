<div class="arrow-black">
	@include('includes.arrow-down')
</div>

<div class="search px-3">
	<div class="main-wrapper">
		<form action="" class="form-row mb-0 align-items-center">
			<div class="form-group col test">
				<label for="inputBrand" class="sr-only">Brand</label>
	      		<select id="inputBrand" class="form-control">
	        		<option selected>Select brand</option>
	        		<option>...</option>
	      		</select>
			</div>
			<div class="form-group col">
				<label for="inputModel" class="sr-only">Model</label>
      			<select id="inputModel" class="form-control">
        			<option selected>Choose a model</option>
        			<option>...</option>
      			</select>
			</div>
			<div class="form-group col">
				<label for="inputYear" class="sr-only">Year</label>
        		<select id="inputYear" class="form-control">
        			<option selected>Year of model</option>
        			<option>...</option>
      			</select>
			</div>
			<div class="trackbar col">
				<input type="range" min="0" max="300" value="10">
			</div>
			<div class="col-auto">
				<buton class="btn btn-search">search</buton>
			</div>
		</form>
	</div>
</div>

@include('includes.triangles-down')