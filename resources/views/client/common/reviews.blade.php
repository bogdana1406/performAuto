	<div class="main-wrapper">
		<div class="inline-title pl-4 slash">
			<h2 class="mb-0">@lang('reviews.title')</h2>
			<span>@lang('reviews.sub-title')</span>
		</div>
		<div class="row pb-2">
			@foreach($reviews as $review)
			<div class="col-md-6">
				<div class="card">

					<a href="{{$review->customer_link ?? '#'}}" target="_blank" class="d-flex">
						<div class="col-auto">
							<img src="{{ asset($review->customer_photo) }}" alt="post-author" class="card-img rounded-circle">
							<div class="stars mx-auto bg-primary text-center">{{$review->mark_review}}<i class="fa fa-star"></i></div>
						</div>
						<div class="col">
							<div class="card-title">
								<div class="icon-fb text-center float-right rounded-circle"><i class="fa fa-facebook"></i></div>
								<h3>{{ $review->customer_name }}</h3>
								<span class="date">{{ $review->published_at }}</span>
							</div>
							<div class="card-post">{{$review->text_review[App::getLocale()]}}
							</div>
						</div>
					</a>
				</div>
			</div>
			@endforeach
		</div>
		<div class="d-flex justify-content-center mt-4"><a href="https://www.facebook.com/pg/PerformAuto/reviews" target="_blank" class="btn fb-btn">@lang('reviews.fb-button')</a></div>
	</div>
