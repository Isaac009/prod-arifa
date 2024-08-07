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
						<h2>Projects</h2>
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
							@foreach ($projects as $project)
                            <div class="col-lg-4 col-sm-6 col-12">
								<div class="single-case-block">
									<img src="{{ asset('storage/'.$project->project_image) }}" alt="">
									<div class="hover-content">
										<div class="text clearfix">
											<div class="float-left">
												<h5><a href="{{ route('projects.show',$project->id) }}">{{ $project->title }}</a></h5>
												{{-- <p>Explore strange new worlds</p> --}}
											</div>
											<a href="{{ route('projects.show',$project->id) }}" class="details float-right"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
										</div> <!-- /.text -->
									</div> <!-- /.hover-content -->
								</div> <!-- /.single-case-block -->
							</div> <!-- /.col- -->
                            @endforeach
							{{-- <div class="col-lg-4 col-sm-6 col-12">
								<div class="single-case-block">
									<img src="{{ asset('front-resources/images/portfolio/2.jpg') }}" alt="">
									<div class="hover-content">
										<div class="text clearfix">
											<div class="float-left">
												<h5><a href="project-details.html">Business Meeting</a></h5>
												<p>Explore strange new worlds</p>
											</div>
											<a href="project-details.html" class="details float-right"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
										</div> <!-- /.text -->
									</div> <!-- /.hover-content -->
								</div> <!-- /.single-case-block -->
							</div> <!-- /.col- -->
							<div class="col-lg-4 col-sm-6 col-12">
								<div class="single-case-block">
									<img src="{{ asset('front-resources/images/portfolio/3.jpg') }}" alt="">
									<div class="hover-content">
										<div class="text clearfix">
											<div class="float-left">
												<h5><a href="project-details.html">Business Meeting</a></h5>
												<p>Explore strange new worlds</p>
											</div>
											<a href="project-details.html" class="details float-right"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
										</div> <!-- /.text -->
									</div> <!-- /.hover-content -->
								</div> <!-- /.single-case-block -->
							</div> <!-- /.col- -->
							<div class="col-lg-4 col-sm-6 col-12">
								<div class="single-case-block">
									<img src="{{ asset('front-resources/images/portfolio/4.jpg') }}" alt="">
									<div class="hover-content">
										<div class="text clearfix">
											<div class="float-left">
												<h5><a href="project-details.html">Business Meeting</a></h5>
												<p>Explore strange new worlds</p>
											</div>
											<a href="project-details.html" class="details float-right"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
										</div> <!-- /.text -->
									</div> <!-- /.hover-content -->
								</div> <!-- /.single-case-block -->
							</div> <!-- /.col- -->
							<div class="col-lg-4 col-sm-6 col-12">
								<div class="single-case-block">
									<img src="{{ asset('front-resources/images/portfolio/5.jpg') }}" alt="">
									<div class="hover-content">
										<div class="text clearfix">
											<div class="float-left">
												<h5><a href="project-details.html">Business Meeting</a></h5>
												<p>Explore strange new worlds</p>
											</div>
											<a href="project-details.html" class="details float-right"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
										</div> <!-- /.text -->
									</div> <!-- /.hover-content -->
								</div> <!-- /.single-case-block -->
							</div> <!-- /.col- -->
							<div class="col-lg-4 col-sm-6 col-12">
								<div class="single-case-block">
									<img src="{{ asset('front-resources/images/portfolio/6.jpg') }}" alt="">
									<div class="hover-content">
										<div class="text clearfix">
											<div class="float-left">
												<h5><a href="project-details.html">Business Meeting</a></h5>
												<p>Explore strange new worlds</p>
											</div>
											<a href="project-details.html" class="details float-right"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
										</div> <!-- /.text -->
									</div> <!-- /.hover-content -->
								</div> <!-- /.single-case-block -->
							</div> <!-- /.col- -->
							<div class="col-lg-4 col-sm-6 col-12">
								<div class="single-case-block">
									<img src="{{ asset('front-resources/images/portfolio/13.jpg') }}" alt="">
									<div class="hover-content">
										<div class="text clearfix">
											<div class="float-left">
												<h5><a href="project-details.html">Business Meeting</a></h5>
												<p>Explore strange new worlds</p>
											</div>
											<a href="project-details.html" class="details float-right"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
										</div> <!-- /.text -->
									</div> <!-- /.hover-content -->
								</div> <!-- /.single-case-block -->
							</div> <!-- /.col- -->
							<div class="col-lg-4 col-sm-6 col-12">
								<div class="single-case-block">
									<img src="{{ asset('front-resources/images/portfolio/14.jpg') }}" alt="">
									<div class="hover-content">
										<div class="text clearfix">
											<div class="float-left">
												<h5><a href="project-details.html">Business Meeting</a></h5>
												<p>Explore strange new worlds</p>
											</div>
											<a href="project-details.html" class="details float-right"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
										</div> <!-- /.text -->
									</div> <!-- /.hover-content -->
								</div> <!-- /.single-case-block -->
							</div> <!-- /.col- -->
							<div class="col-lg-4 col-sm-6 col-12">
								<div class="single-case-block">
									<img src="{{ asset('front-resources/images/portfolio/15.jpg') }}" alt="">
									<div class="hover-content">
										<div class="text clearfix">
											<div class="float-left">
												<h5><a href="project-details.html">Business Meeting</a></h5>
												<p>Explore strange new worlds</p>
											</div>
											<a href="project-details.html" class="details float-right"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
										</div> <!-- /.text -->
									</div> <!-- /.hover-content -->
								</div> <!-- /.single-case-block -->
							</div> <!-- /.col- --> --}}
						</div> <!-- /.row -->
					</div> <!-- /.wrapper -->
					{{-- <div class="theme-pagination text-center">
						<ul>
							<li><a href="#">1</a></li>
							<li class="active"><a href="#">2</a></li>
							<li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
						</ul>
					</div> --}}
				</div> <!-- /.container -->
			</div> <!-- /.our-case -->

@endsection
