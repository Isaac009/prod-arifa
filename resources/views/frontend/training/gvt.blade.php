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
						{{-- <div class="row"> --}}
							{{-- @foreach ($projects as $project) --}}
                            <div class="col-lg-12 col-sm-12 col-12">
								<div class="single-case-block">
									<div>
										<div class="text clearfix">
											<h4>Custom Government Training Solutions</h4>
											<p>
                                                Government agencies continue to face the challenge of doing more with
                                                tighter budgets, even as new legislative requirements and directives
                                                seek to improve financial, project, and security management.
                                                Now more than ever, it is critical to keep employee skills in line with
                                                today’s advancing technology to ensure your department’s goals are met.
                                            </p><br>
                                            <p>
                                                ARIFA courses and training will help improve employee productivity and efficiency while saving money.
                                                Our representatives will work with you to create a customized learning solution that aligns with your agency’s goals
                                            </p>
										</div> <!-- /.text -->
									</div> <!-- /.hover-content -->
								</div> <!-- /.single-case-block -->
							</div> <!-- /.col- -->
							<div class="col-lg-12 col-sm-12 col-12">
								<div class="single-case-block">
									<div>
										<div class="text clearfix">
											<h4>Convenient Learning Solutions</h4>
											<p>
                                                With rising transportation and infrastructure costs, many government leaders recognize the benefits of online training and learning.
                                                Online training options from ARIFA reduce costs and increase learning flexibility.
                                            </p><br>
                                            <p>
                                                We also offer on-site, private, and traditional instructor-led classroom training.
                                                These courses can also be completed in a group environment that fuels team collaboration and growth.
                                            </p>
										</div> <!-- /.text -->
									</div> <!-- /.hover-content -->
								</div> <!-- /.single-case-block -->
							</div> <!-- /.col- -->
							<div class="col-lg-12 col-sm-12 col-12">
								<div class="single-case-block">
									<div>
										<div class="text clearfix">
											<h4>Measurable Results</h4>
                                            <p>In an era of fiscal belt-tightening, it is important to have measurable results from training investments.</p><br>
                                            With government training at ARIFA, you will be able to identify the learning that occurred, the areas that
                                            still need to be improved, and the value of the skills obtained with the help of:

                                            <li>Course Evaluations</li>
                                            <li>Certification Exams</li>
                                            <li>Post-Class Assessments</li>
                                            <li>SurveysSurveys</li>

										</div> <!-- /.text -->
									</div> <!-- /.hover-content -->
								</div> <!-- /.single-case-block -->
							</div> <!-- /.col- -->
                            {{-- @endforeach --}}
						{{-- </div> <!-- /.row --> --}}
					</div> <!-- /.wrapper -->
				</div> <!-- /.container -->
			</div> <!-- /.our-case -->

@endsection
