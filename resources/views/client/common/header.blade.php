<header>
  <nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="{{route('home')}}">
    	<img src="{{ asset('images/logo.png') }}" alt="Perform Auto">
  	</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="nav-toggler ti-view-list"></span>
    </button>
		<div class="nav-wrapper d-flex flex-column">
			<div class="top-bar d-flex justify-content-between align-items-center">
				{{-- contacts --}}
				<div class="contacts"><i class="fa fa-phone mr-3"></i><a href="tel:+32 494 15 96 75">+32 494 15 96 75</a>
				</div>
				<div class="contacts"><i class="fa fa-envelope-o mr-3"></i><a href="mailto:contact@performauto.be">contact@performauto.be</a>
				</div>
				{{-- !contacts --}}
				{{-- social --}}
				<div class="social">
					<a href="https://www.facebook.com/PerformAuto" class="d-inline-block rounded-circle text-center"><i class="fa fa-facebook"></i></a>
					<a href="https://www.instagram.com/perform.auto/" class="d-inline-block rounded-circle text-center"><i class="fa fa-instagram"></i></a>
				</div>
				{{-- !social --}}
				{{-- top buttons --}}
				<div class="top-buttons">
				  <div class="btn-group" role="group">
				  	<button id="btnGroupDrop1" type="button" class="btn btn-outline dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    {{$currency}}
				    </button>
				    <div class="dropdown-menu text-center" aria-labelledby="btnGroupDrop1">
						<a class="dropdown-item" href="<?= route('setcurrency', ['curr' => 'eur']) ?>">eur</a>
						<a class="dropdown-item" href="<?= route('setcurrency', ['curr' => 'usd']) ?>">usd</a>
						<a class="dropdown-item" href="<?= route('setcurrency', ['curr' => 'btc']) ?>">btc</a>
				    </div>
				  </div>
					<div class="btn-group" role="group">
					 <button id="btnGroupDrop2" type="button" class="btn btn-outline dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						 {{App::getLocale()}}
					  </button>
					  <div class="dropdown-menu text-center" aria-labelledby="btnGroupDrop2">
						  <a class="dropdown-item" href="<?= route('setlocale', ['lang' => 'en']) ?>">en</a>
						  <a class="dropdown-item" href="<?= route('setlocale', ['lang' => 'fr']) ?>">fr</a>
						  <a class="dropdown-item" href="<?= route('setlocale', ['lang' => 'nl']) ?>">nl</a>
				    </div>
				  </div>
				</div>
				{{-- !top buttons --}}
			</div>
		  <div class="collapse navbar-collapse header-divider pt-1" id="navbarSupportedContent">
		    <ul class="navbar-nav py-1 mr-auto">
		    	<li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="{{ url('/') }}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">@lang('navigation.nav-link1')</a>
						<div class="dropdown-menu triangle-top" aria-labelledby="navbarDropdown">
			        <a class="dropdown-item" href="{{ route('cars') }}">@lang('navigation.dropdown-link1')<span class="float-right">{{ $countAllCars }}</span></a>

							@foreach($arrayBrandsCount as $brandName => $brandCount)
								<a href="{{ route('cars')}}?brand={{$brandName}}" class="dropdown-item" data-toggle="portfilter" data-target={{ $brandName }}>{{ $brandName }}<span class="float-right">{{ $brandCount }}</span></a>
							@endforeach
		        </div>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link {{ Request::is('advantages') ? 'active' : null }}" href="{{ route('advantages') }}">@lang('advantages.title')</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link {{ Request::is('about') ? 'active' : null }}" href="{{ route('about') }}">@lang('about.title')</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link {{ Request::is('') ? 'active' : null }} toContacts" href="#">@lang('navigation.nav-link4')</a>
		      </li>
		    </ul>
		    <div class="btn-group">
		    	<a href="#" class="btn btn-outline border border-danger btn-navbar toContacts">@lang('header.navbar-button')</a>
		    </div>
		  </div>	
    </div>
  </nav>
</header>
