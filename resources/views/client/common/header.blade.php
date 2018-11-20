<header>
  <nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="/">
    	<img src="{{ asset('img/logo.png') }}" alt="Perform Auto">
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
					<a href="#" class="d-inline-block rounded-circle text-center"><i class="fa fa-facebook"></i></a>
					<a href="#" class="d-inline-block rounded-circle text-center"><i class="fa fa-instagram"></i></a>
				</div>
				{{-- !social --}}
				{{-- top buttons --}}
				<div class="top-buttons">
				  <div class="btn-group" role="group">
				  	<button id="btnGroupDrop1" type="button" class="btn btn-outline dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    usd
				    </button>
				    <div class="dropdown-menu text-center" aria-labelledby="btnGroupDrop1">
				    	<a class="dropdown-item" href="#">eur</a>
				    	<a class="dropdown-item" href="#">usd</a>
				    </div>
				  </div>
					<div class="btn-group" role="group">
					 <button id="btnGroupDrop2" type="button" class="btn btn-outline dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					  	en
					  </button>
					  <div class="dropdown-menu text-center" aria-labelledby="btnGroupDrop2">
				    	<a class="dropdown-item" href="#">en</a>
				    	<a class="dropdown-item" href="#">fr</a>
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
			        <a class="dropdown-item" href="#">@lang('navigation.dropdown-link1')<span class="float-right">24</span></a>
			        <a class="dropdown-item" href="#">@lang('navigation.dropdown-link2')<span class="float-right">2</span></a>
			        <a class="dropdown-item" href="#">@lang('navigation.dropdown-link3')<span class="float-right">6</span></a>
			        <a class="dropdown-item" href="#">@lang('navigation.dropdown-link4')<span class="float-right">2</span></a>
			        <a class="dropdown-item" href="#">@lang('navigation.dropdown-link5')<span class="float-right">1</span></a>
		          <a class="dropdown-item" href="#">@lang('navigation.dropdown-link6')<span class="float-right">5</span></a>
		          <a class="dropdown-item" href="#">@lang('navigation.dropdown-link7')<span class="float-right">8</span></a>
		        </div>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link {{ Request::is('advantages') ? 'active' : null }}" href="{{ url('advantages') }}">@lang('advantages.title')</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link {{ Request::is('about') ? 'active' : null }}" href="{{ url('about') }}">@lang('about.title')</a>
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
