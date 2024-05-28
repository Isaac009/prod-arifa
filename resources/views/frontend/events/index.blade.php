@extends('frontend.layout.app')

@section('main-content')
<!--
			=============================================
				Theme Inner Banner
			==============================================
			-->
			<div class="theme-inner-banner section-spacing">
				<div class="overlay">
					<div class="container">
						<h2>Events</h2>
					</div> <!-- /.container -->
				</div> <!-- /.overlay -->
			</div> <!-- /.theme-inner-banner -->


			<!--
			=============================================
				Our Case
			==============================================
			-->
			<div class="our-case our-project section-spacing">
				<div class="container">
					<div class="wrapper">
						<div class="row">
							@foreach ($events as $event)
                            {{-- <div class="callout-banner no-bg"> --}}
								<div class="container clearfix">
									<div class="row">
										<div class="col-lg-4">
											<h6>{{ $event->from }} ~ {{ $event->to }}</h6>
										</div>
										<hr>
										<div class="col-lg-8">
											<p>{!! $event->description !!}</p>
											<br/>
										</div>
										<hr>
									</div>
									{{-- <a href="{{ route('contact-us') }}" class="theme-button-one">CONTACT US</a> --}}
								</div>
								<hr>
							{{-- </div> <!-- /.callout-banner --> --}}
                            @endforeach
							<div class="col-sm-6 col-md-3 col-lg-4"></div>
							<div class="text-center">
								{{ $events->appends(request()->except('page'))->links('pagination::bootstrap-5') }}
								{{-- <ul>
									<li><a href="#">1</a></li>
									<li class="active"><a href="#">2</a></li>
									<li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
								</ul> --}}
							</div>
						</div> <!-- /.row -->
					</div> <!-- /.wrapper -->
					
				</div> <!-- /.container -->
			</div> <!-- /.our-case -->

@endsection
