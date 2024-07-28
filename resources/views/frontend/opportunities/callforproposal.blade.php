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
						<h2>Call for Proposal</h2>
					</div> <!-- /.container -->
				</div> <!-- /.overlay -->
			</div> <!-- /.theme-inner-banner -->


			<!--
			=============================================
				Service Details
			==============================================
			-->
			<div class="service-details section-spacing">
				<div class="container">
					<div class="row">
						<div class="col-xl-9 col-lg-8 col-12">
							<div class="service-content">
								<img src="{{ asset('storage/images/call-for-proposal-financial.png') }}" alt="" class="cover-img">
								<h3 class="main-title">Call for Collaborative Research Proposal</h3>
								<p>Application of Artificial Intelligence (AI) and Machine Learning (ML) in Agriculture, Health and Finance in East Africa Community (EAC).</p>
							</div> <!-- /.service-content -->
						</div> <!-- /.col- -->

						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-8 col-12 theme-sidebar-one">
							<div class="sidebar-box sidebar-brochures">
								<h5 class="title">Resources</h5>
                                <hr>

								<li><a href="{{ asset('storage/attachments/Call_for_Proposal_ARIFA.pdf') }}" target="_blank">
                                    <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                                    Download file. pdf</a>
                                </li>
							</div> <!-- /.sidebar-brochures -->
                            <br>
                            {{-- <div class="sidebar-container sidebar-categories">
                                <h5 class="title">Categories</h5>
                                <ul>
                                    <li><a href="#">Research Reports</a></li>
                                    <li><a href="#">Policy Briefs</a></li>
                                    <li><a href="#">Concept Notes</a></li>
                                    <li><a href="#">Books</a></li>
                                    <li><a href="#">ARIFA Journal</a></li>
                                </ul>
                            </div> <!-- /.sidebar-categories --> --}}
						</div> <!-- /.theme-sidebar-one -->
					</div> <!-- /.row -->
				</div> <!-- /.container -->
			</div> <!-- /.service-details -->
@endsection
