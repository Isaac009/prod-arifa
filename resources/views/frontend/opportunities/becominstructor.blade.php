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
						<h2>Become Instructor</h2>
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
                            <div class="col-lg-3"></div>
                            <div class="col-lg-6 col-12">
                                <div class="form-wrapper">
                                    <form action="#" method="POST" class="theme-form-one form-validation" autocomplete="off">
                                        @csrf
                                        <div class="row">
                                            {{-- <div class="col-sm-6 col-12"><input type="text" placeholder="Name *" name="name"></div>
                                            <div class="col-sm-6 col-12"><input type="text" placeholder="Phone *" name="phone"></div>
                                            <div class="col-sm-6 col-12"><input type="email" placeholder="Email *" name="email"></div>
                                            <div class="col-sm-6 col-12"><input type="text" placeholder="Website *" name="web"></div> --}}
                                            <div class="form-group col-sm-6 col-12">
                                                <label for="name">Full Name</label>
                                                <input type="text" class="form-control" id="name" placeholder="Enter your full name">
                                              </div>
                                              <div class="form-group col-sm-6 col-12">
                                                <label for="email">Email Address</label>
                                                <input type="email" class="form-control" id="email" placeholder="Enter your email">
                                              </div>
                                              <div class="form-group col-sm-6 col-12">
                                                <label for="phone">Phone Number</label>
                                                <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number">
                                              </div>
                                              <div class="form-group col-sm-6 col-12">
                                                <label for="courseCategory">Course Category</label>
                                                <select class="form-control" id="courseCategory">
                                                  <option selected>Select Course Category</option>
                                                  <!-- Add options here -->
                                                </select>
                                              </div>
                                              <div class="form-group col-sm-6 col-12">
                                                <label for="courseLocation">Course Location</label>
                                                <select class="form-control" id="courseLocation">
                                                  <option selected>Select Course Location</option>
                                                  <!-- Add options here -->
                                                </select>
                                              </div>
                                              <div class="form-group col-sm-6 col-12">
                                                <label for="courseLevel">Course Level</label>
                                                <select class="form-control" id="courseLevel">
                                                  <option selected>Select Course Level</option>
                                                  <!-- Add options here -->
                                                </select>
                                              </div>
                                            <div class="col-12"><textarea placeholder="Message" name="message"></textarea></div>
                                        </div> <!-- /.row -->
                                        <button class="theme-button-one" type="submit">Submit</button>
                                    </form>
                                </div> <!-- /.form-wrapper -->
                            </div> <!-- /.col- -->
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
					<div class="theme-pagination text-center">
						<ul>
							<li><a href="#">1</a></li>
							<li class="active"><a href="#">2</a></li>
							<li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div> <!-- /.container -->
			</div> <!-- /.our-case -->

@endsection
