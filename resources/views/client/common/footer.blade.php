<footer>
	<div class="top-footer" id="contacts">
		<div class="main-wrapper">
			{{-- contacts --}}
			<div class="contacts-container d-md-flex">
				<div class="col-md-6">
					<div class="inline-title pl-4 slash">
						<h2 class="text-white">@lang('footer.contacts1')</h2>
					</div>
					<div class="contact-details text-white pl-4">
						<span class="d-block">@lang('footer.street') 142A</span>
						<span>@lang('footer.city'), </span>
						<span>@lang('footer.country') 8880</span>
					</div>
				</div>
				<div class="col-md-6">
					<div class="inline-title pl-4 slash d-flex">
						<h2 class="text-white">@lang('footer.contacts2')</h2>
						<button class="btn btn-red btn-medium border-0" data-toggle="modal" data-target="#contactModal">write to us</button>
						<div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel" aria-hidden="true">
						  <div class="modal-dialog modal-dialog-centered" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h5 class="modal-title" id="contactModalLabel">@lang('contact_form.title')</h5>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>
						      <div class="modal-body">
						        <form action="">
						            <input type="text" name="name" class="form-control" placeholder="@lang('contact_form.name')">
						            <input type="number" class="form-control" name="phone" placeholder="@lang('contact_form.phone')">
						            <input type="email" name="email" class="form-control" placeholder="@lang('contact_form.email')">
						            <textarea class="form-control" placeholder="@lang('contact_form.text')"></textarea>
						        </form>
						      </div>
						      <div class="modal-footer">
						        <button type="submit" class="btn btn-middle btn-red border-0" data-dismiss="modal">Submit</button>
						      </div>
						    </div>
						  </div>
						</div>
					</div>
					<div class="contact-details pl-4">
						<a class="d-block" href="tel:+32 494 15 96 75">+32 494 15 96 75</a>
						<a class="d-block" href="mailto:info@performauto.be">info@performauto.be</a>
					</div>
				</div>
			</div>
			{{-- /contacts --}}
			{{-- dealers --}}
			<div class="cards-wrapper d-md-flex">
				<div class="col-md-6 pr-4">
					<div class="card p-0 border-0 d-flex flex-row">
						<div class="card-body p-0 pb-4 arrow-right">
							<div class="card-title">
								<h3>@lang('footer.name1')</h3>
								<span class="position">@lang('footer.dealer')</span>
							</div>
							<div class="contacts"><i class="fa fa-phone mr-2"></i><a href="tel:+32494159675">+32 494 15 96 75</a>
							</div>
							<div class="contacts"><i class="fa fa-envelope-o mr-2"></i><a href="mailto:stan@performauto.be">stan@performauto.be</a>
							</div>
						</div>
						<div class="card-img"><img src="{{ asset('/img/dealer1.jpg') }}" alt=""></div>
					</div>
				</div>
				<div class="col-md-6 pl-4">
					<div class="card p-0 border-0 d-flex flex-row">
						<div class="card-body p-0 arrow-right">
							<div class="card-title">
								<h3>@lang('footer.name2')</h3>
								<span class="position">@lang('footer.dealer')</span>
							</div>
							<div class="contacts"><i class="fa fa-phone mr-2"></i><a href="tel:+32484940027">+32 484 94 00 27</a>
							</div>
							<div class="contacts"><i class="fa fa-envelope-o mr-2"></i><a href="dimitri@performauto.be">dimitri@performauto.be</a>
							</div>
						</div>
						<div class="card-img"><img src="{{ asset('/img/dealer2.jpg') }}" alt=""></div>
					</div>
				</div>
			</div>
			{{-- /dealers --}}
		</div>
	</div>
	{{-- google map --}}
	<div id="map"></div>
    <script>
      function initMap() {
        var styledMapType = new google.maps.StyledMapType(
            [
			  {
			    "elementType": "geometry",
			    "stylers": [
			      {
			        "color": "#353535"
			      }
			    ]
			  },
			  {
			    "elementType": "labels.icon",
			    "stylers": [
			      {
			        "visibility": "off"
			      }
			    ]
			  },
			  {
			    "elementType": "labels.text.fill",
			    "stylers": [
			      {
			        "color": "#757575"
			      }
			    ]
			  },
			  {
			    "elementType": "labels.text.stroke",
			    "stylers": [
			      {
			        "color": "#212121"
			      }
			    ]
			  },
			  {
			    "featureType": "administrative",
			    "elementType": "geometry",
			    "stylers": [
			      {
			        "color": "#757575"
			      }
			    ]
			  },
			  {
			    "featureType": "administrative.country",
			    "elementType": "labels.text.fill",
			    "stylers": [
			      {
			        "color": "#9e9e9e"
			      }
			    ]
			  },
			  {
			    "featureType": "administrative.land_parcel",
			    "stylers": [
			      {
			        "visibility": "off"
			      }
			    ]
			  },
			  {
			    "featureType": "administrative.locality",
			    "elementType": "labels.text.fill",
			    "stylers": [
			      {
			        "color": "#bdbdbd"
			      }
			    ]
			  },
			  {
			    "featureType": "poi",
			    "elementType": "labels.text.fill",
			    "stylers": [
			      {
			        "color": "#757575"
			      }
			    ]
			  },
			  {
			    "featureType": "poi.park",
			    "elementType": "geometry",
			    "stylers": [
			      {
			        "color": "#181818"
			      }
			    ]
			  },
			  {
			    "featureType": "poi.park",
			    "elementType": "labels.text.fill",
			    "stylers": [
			      {
			        "color": "#616161"
			      }
			    ]
			  },
			  {
			    "featureType": "poi.park",
			    "elementType": "labels.text.stroke",
			    "stylers": [
			      {
			        "color": "#1b1b1b"
			      }
			    ]
			  },
			  {
			    "featureType": "road",
			    "elementType": "geometry",
			    "stylers": [
			      {
			        "color": "#2e2e2e"
			      }
			    ]
			  },
			  {
			    "featureType": "road",
			    "elementType": "labels.text.fill",
			    "stylers": [
			      {
			        "color": "#8a8a8a"
			      }
			    ]
			  },
			  {
			    "featureType": "road.local",
			    "elementType": "labels.text.fill",
			    "stylers": [
			      {
			        "color": "#616161"
			      }
			    ]
			  },
			  {
			    "featureType": "transit",
			    "elementType": "labels.text.fill",
			    "stylers": [
			      {
			        "color": "#757575"
			      }
			    ]
			  },
			  {
			    "featureType": "water",
			    "elementType": "geometry",
			    "stylers": [
			      {
			        "color": "#2e2e2e"
			      }
			    ]
			  },
			  {
			    "featureType": "water",
			    "elementType": "labels.text.fill",
			    "stylers": [
			      {
			        "color": "#3d3d3d"
			      }
			    ]
			  }
			],
            {name: 'Styled Map'});

        // Create a map object, and include the MapTypeId to add
        // to the map type control.
        var coordinates = {lat: 50.879782, lng: 3.150103},

        	markerImage = 'img/map_marker.png',

        	map = new google.maps.Map(document.getElementById('map'), {
          		center: {lat: 50.879782, lng: 3.150103},
          		zoom: 12,
          		disableDefaultUI: true,
          		mapTypeControlOptions: {
            		mapTypeIds: ['roadmap', 'satellite', 'hybrid', 'terrain', 'styled_map']
          		}
        	}),

        	marker = new google.maps.Marker({
        		position: coordinates,
        		map: map,
        		icon: markerImage
    		});

        //Associate the styled map with the MapTypeId and set it to display.
        map.mapTypes.set('styled_map', styledMapType);
        map.setMapTypeId('styled_map');
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCzTbEWcML77cE02KRqFNkW8MlnzjDFs6E&callback=initMap">
    </script>
	{{-- /google map --}}
	{{-- footer navigation --}}
	<div class="footer-links arrow-down-plus arrow-black pt-5">
		<div class="main-wrapper">
			<nav class="navbar navbar-expand-md navbar-dark pb-4">
			    <a class="navbar-brand" href="{{ url('/') }}">
			        <img src="{{ asset('img/logo.png') }}" alt="">
			    </a>
				<div class="ml-md-auto">
				    <div class="navbar-nav">
				      <a class="nav-item nav-link {{ Request::is('/') ? 'active' : null }}" href="{{ url('/') }}">@lang('navigation.nav-link1')</a>
				      <a class="nav-item nav-link {{ Request::is('advantages') ? 'active' : null }}" href="{{ url('advantages') }}">@lang('advantages.title')</a>
				      <a class="nav-item nav-link {{ Request::is('about') ? 'active' : null }}" href="{{ url('about') }}">@lang('about.title')</a>
				      <a class="nav-item nav-link {{ Request::is('') ? 'active' : null }} toContacts" href="#">@lang('navigation.nav-link4')</a>
				    </div>
				</div>
			</nav>
		</div>
	</div>
	{{-- /footer navigation --}}
	{{-- footer copyright --}}
	<div class="sub-footer">
		<div class="main-wrapper d-flex justify-content-between">
			<div class="copyright">
				<span class="d-block">@lang('footer.copyright').</span>
				<a href="{{ url('/') }}"><span>@lang('footer.designed-by')</span></a>
			</div>
			<div class="social">
				<a href="" class="d-inline-block rounded-circle text-center"><i class="fa fa-facebook"></i></a>
				<a href="" class="d-inline-block rounded-circle text-center"><i class="fa fa-instagram"></i></a>
			</div>
		</div>
	</div>
	{{-- /footer copyright --}}
</footer>
