<footer>
	<div class="top-footer">
		<div class="main-wrapper">
			{{-- contacts --}}
			<div class="contacts-container d-md-flex">
				<div class="col-md-6">
					<div class="inline-title">
						<h2 class="text-white">@lang('footer.contacts1')</h2>
					</div>
					<div class="contact-details text-white">
						<span class="d-block">@lang('footer.street') 142A</span>
						<span>@lang('footer.city'), </span>
						<span>@lang('footer.country') 8880</span>
					</div>
				</div>
				<div class="col-md-6">
					<div class="inline-title">
						<h2 class="text-white">@lang('footer.contacts2')</h2>
					</div>
					<div class="contact-details">
						<a class="d-block" href="tel:+32 494 15 96 75">+32 494 15 96 75</a>
						<a class="d-block" href="mailto:info@performauto.be">info@performauto.be</a>
					</div>
				</div>
			</div>
			{{-- /contacts --}}
			{{-- dealers --}}
			<div class="cards-wrapper d-md-flex">
				<div class="col-md-6">
					<div class="card p-0 border-0 d-flex flex-row">
						<div class="card-body p-0 pb-4">
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
				<div class="col-md-6">
					<div class="card p-0 border-0 d-flex flex-row">
						<div class="card-body p-0">
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
	<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2116.879500198804!2d3.149142613623346!3d50.87915559343541!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c33149dcbf9487%3A0x76da0cbf95702c1a!2zUm9lc2VsYXJlc3RyYWF0IDE0MiwgODg4MCBMZWRlZ2VtLCDQkdC10LvRjNCz0LjRjw!5e0!3m2!1sru!2sua!4v1538038556581" width="100%" height="568" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
	{{-- /google map --}}
	{{-- footer navigation --}}
	<div class="footer-links arrow-down arrow-black pt-5">
		<div class="main-wrapper">
			<nav class="navbar navbar-expand-md navbar-dark pb-4">
			    <a class="navbar-brand" href="#">
			        <img src="{{ asset('img/logo.png') }}" alt="">
			    </a>
				<div class="ml-md-auto">
				    <div class="navbar-nav">
				      <a class="nav-item nav-link active" href="#">@lang('navigation.nav-link1')</a>
				      <a class="nav-item nav-link" href="#">@lang('navigation.nav-link2')</a>
				      <a class="nav-item nav-link" href="#">@lang('navigation.nav-link3')</a>
				      <a class="nav-item nav-link" href="#">@lang('navigation.nav-link4')</a>
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
				<span class="d-block">&copy;2018 @lang('footer.copyright').</span>
				<span>@lang('footer.designed-by')</span>
			</div>
			<div class="social">
				<a href="" class="d-inline-block rounded-circle text-center"><i class="fa fa-facebook"></i></a>
				<a href="" class="d-inline-block rounded-circle text-center"><i class="fa fa-instagram"></i></a>
			</div>
		</div>
	</div>
	{{-- /footer copyright --}}
</footer>