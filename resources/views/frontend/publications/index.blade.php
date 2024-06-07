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
						<h2>Publications</h2>
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
                            <span>No Publications yet.</span>
							{{-- @foreach ($projects as $project)
                            <div class="col-lg-4 col-sm-6 col-12">
								<div class="single-case-block">
									<img src="{{ asset('storage/'.$project->project_image) }}" alt="">
									<div class="hover-content">
										<div class="text clearfix">
											<div class="float-left">
												<h5><a href="{{ route('projects.show',$project->id) }}">{{ $project->title }}</a></h5>
											</div>
											<a href="{{ route('projects.show',$project->id) }}" class="details float-right"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
										</div> <!-- /.text -->
									</div> <!-- /.hover-content -->
								</div> <!-- /.single-case-block -->
							</div> <!-- /.col- -->
                            @endforeach --}}
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
