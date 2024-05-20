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
						<h2>Government Training</h2>
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
							{{-- @foreach ($projects as $project) --}}
                            <div class="col-lg-6 col-sm-6 col-12">
								<div class="single-case-block">
									<div>
										<div class="text clearfix">
											<h4>AI Skills Development Programs</h4>
											<ul>
												<li>Introductory AI Training</li>
												<li>Advanced AI Workshops</li>
												<li>Specialized AI Certifications</li>
											</ul>
										</div> <!-- /.text -->
									</div> <!-- /.hover-content -->
								</div> <!-- /.single-case-block -->
							</div> <!-- /.col- -->
							<div class="col-lg-6 col-sm-6 col-12">
								<div class="single-case-block">
									<div>
										<div class="text clearfix">
											<h4>Ethics in AI Training</h4>
											<ul>
												<li>Ethical AI Principles</li>
												<li>Responsible AI Practices</li>
												<li>Bias Mitigation Strategies</li>
											</ul>
										</div> <!-- /.text -->
									</div> <!-- /.hover-content -->
								</div> <!-- /.single-case-block -->
							</div> <!-- /.col- -->
							<div class="col-lg-6 col-sm-6 col-12">
								<div class="single-case-block">
									<div>
										<div class="text clearfix">
											<h4>Professional Development for AI Practitioners</h4>
											<ul>
												<li>Continuing Education for AI Professionals</li>
												<li>Industry-Specific AI Training</li>
												<li>Certification in AI Ethics and Governance</li>
											</ul>
										</div> <!-- /.text -->
									</div> <!-- /.hover-content -->
								</div> <!-- /.single-case-block -->
							</div> <!-- /.col- -->
							<div class="col-lg-6 col-sm-6 col-12">
								<div class="single-case-block">
									<div>
										<div class="text clearfix">
											<h4>Capacity Building in AI for Organizations/Companies/Institutions</h4>
											<ul>
												<li>Training Programs</li>
												<li>AI Skill Building for Social Impact</li>
												<li>Grant-Writing Workshops for AI Initiatives</li>
											</ul>
										</div> <!-- /.text -->
									</div> <!-- /.hover-content -->
								</div> <!-- /.single-case-block -->
							</div> <!-- /.col- -->
                            {{-- @endforeach --}}
						</div> <!-- /.row -->
					</div> <!-- /.wrapper -->
				</div> <!-- /.container -->
			</div> <!-- /.our-case -->

@endsection
