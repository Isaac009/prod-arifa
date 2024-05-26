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
						<h2>Corporate Training</h2>
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
											<h4>Request a Corporate or In-House Training</h4>
											<p>
                                                ARIFA provides in-house training courses that are customized or fully tailored to meet your organizational objectives to fulfill the gap.
                                                By applying, you will obtain a learning solution that is delivered to your premises and at your desired time. As business technology increases in complexity, it is very important to invest time and money into employee training.
                                                When employees are trained in new technologies, they can use them to provide better results for your business.
                                            </p><br>
                                            <p>
                                                Employee training continues to produce one of the highest returns on investment a company can make.
                                                Increased employee efficiency creates a ripple effect in your business, leading to greater satisfaction for all, including your customers.
                                            </p>
										</div> <!-- /.text -->
									</div> <!-- /.hover-content -->
								</div> <!-- /.single-case-block -->
							</div> <!-- /.col- -->
							<div class="col-lg-6 col-sm-6 col-12">
								<div class="single-case-block">
									<div>
										<div class="text clearfix">
											<h4>Advantages of Training for Your Employees</h4>
                                            Training your employees with ARIFA can increase:
												<li>Process efficiency, flexibility, & productivity</li>
												<li>Problem-solving skills</li>
                                                <li>Innovation in strategies and products</li>
                                                <li>Job satisfaction & morale</li>
                                                <li>Employee motivation & retention</li>
                                                <li>Customer satisfaction</li>
										</div> <!-- /.text -->
									</div> <!-- /.hover-content -->
								</div> <!-- /.single-case-block -->
							</div> <!-- /.col- -->
							<div class="col-lg-6 col-sm-6 col-12">
								<div class="single-case-block">
									<div>
										<div class="text clearfix">
											<h4>Professional Development for AI Practitioners</h4>
												<li>Continuing Education for AI Professionals</li>
												<li>Industry-Specific AI Training</li>
												<li>Certification in AI Ethics and Governance</li>
										</div> <!-- /.text -->
									</div> <!-- /.hover-content -->
								</div> <!-- /.single-case-block -->
							</div> <!-- /.col- -->
							<div class="col-lg-6 col-sm-6 col-12">
								<div class="single-case-block">
									<div>
										<div class="text clearfix">
											<h4>Capacity Building in AI for Organizations/Companies/Institutions</h4>
												<li>Training Programs</li>
												<li>AI Skill Building for Social Impact</li>
												<li>Grant-Writing Workshops for AI Initiatives</li>
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
