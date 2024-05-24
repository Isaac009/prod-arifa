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
						<h2>Register for a Course</h2>
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
							<div class="col-12">
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
