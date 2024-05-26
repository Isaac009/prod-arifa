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
						<h2>Levels of Engagement and Support</h2>
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
                            <div class="col-lg-6 col-sm-6 col-12">
								<div class="single-case-block">
									<div>
										<div class="text clearfix">
											<h4>Level 1 - Annual Donation of $25,000</h4>
												<li>Publications & Newsletter</li>
												<li>Invitation to ARIFA events</li>
												<li>Donor recognition on the ARIFA website</li>
												<li>Fellowship and Internship recruiting opportunities</li>
												<li>Opportunities to provide guest lectures and to sponsor networking events.</li>
											<br><br>
											<h4>Level 2 - Annual Donation of $50,000 </h4>
											All ARIFA Level 1 Partner opportunities, plus;
												<li>Contract Research</li>
												<li>Project Management</li>
												<li>Personell Exchange: Research & Advisory</li>
												<li>Shared Workload & Joint Projects</li>
												<li>Full access to ARIFA collected data</li>
												<li>Generic/collaborative driven research oriented toward creating new knowledge and tools valuable to the greater community and general public.</li>

											<br><br>
											<h4>Level 3 - Annual Donation of $100,000</h4>
											All ARIFA Level 2 Partner opportunities, plus;
												<li>Partnership guided by the ARIFA Director</li>
												<li>An assigned, dedicated research liaison within the ARIFA group</li>
												<li>Pre-Access to papers before publication.</li>
										</div> <!-- /.text -->
									</div> <!-- /.hover-content -->
								</div> <!-- /.single-case-block -->
							</div> <!-- /.col- -->
							<div class="col-lg-6 col-sm-6 col-12">
								<div class="form-wrapper">
									<form action="" method="POST" class="theme-form-one form-validation" autocomplete="off">
										@csrf
										<div class="row">
											<div class="col-sm-6 col-12"><input type="text" placeholder="Name *" name="name" required></div>
											<div class="col-sm-6 col-12"><input type="text" placeholder="Phone *" name="phone" required></div>
											<div class="col-sm-6 col-12"><input type="email" placeholder="Email *" name="email" required></div>
											<div class="col-sm-6 col-12"><input type="text" placeholder="Website *" name="web" required></div>
											{{-- <div class="col-12"><textarea placeholder="Message" name="message"></textarea></div> --}}
										</div> <!-- /.row -->
										<button class="theme-button-one" type="submit">Register</button>
									</form>
								</div> <!-- /.form-wrapper -->
							</div>
						</div> <!-- /.row -->
					</div> <!-- /.wrapper -->
				</div> <!-- /.container -->
			</div> <!-- /.our-case -->

@endsection
