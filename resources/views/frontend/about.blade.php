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
						<h2>ABOUT</h2>
					</div> <!-- /.container -->
				</div> <!-- /.overlay -->
			</div> <!-- /.theme-inner-banner -->

			<!--
			=============================================
				About Company Stye Two
			==============================================
			-->
			<div class="about-compnay-two no-bg section-spacing">
				<div class="overlay">
					<div class="container">
						<div class="row">
                            <div class="col-sm-12 col-md-5 col-lg-12">
                                <h3 class="title">KNOW {{ $institute->name }}</h3>
                                <hr>
                            </div>
                            <div class="col-sm-12 col-md-7 col-lg-12">
                                {{-- <p>{!! $institute->about !!}</p> --}}
                            <p>Africa Research Institute For AI (ARIFA), is a not-for-profit think tank united by a shared
                            commitment to advancing impactful research, training and advisory.
                            ARIFA is specifically focused on Sub-Saharan Africa (SSA) and seeks to foster innovation,
                            facilitate knowledge exchange, and drive evidence-based policymaking to effectively tackle
                            the dynamic challenges posed by the rapid advancements in technology.</p><br/><br/>

                            <p>Rooted in its commitment to interdisciplinary research and collaboration, ARIFA has emerged
                            as a pivotal force within the research and development (R&D) sector. As a key player in the
                            renaissance of AI, ARIFA actively contributes to shaping the future integration of AI and other
                            emerging technologies into the fabric of modern society.</p><br/><br/>

                            <p>Since its inception, ARIFA has been dedicated to fostering a renaissance in AI, leveraging
                            computational power and abundant data to push the boundaries of real-world applications.
                            As ARIFA continues its journey, its historic background stands as a testament to its founding
                            principles, serving as a foundation for growth, impact, and a relentless pursuit of excellence
                            in the ever-evolving fields of AI and other Emerging Technologies.</p>
                            </div>
                        </div>
					</div> <!-- /.container -->
				</div> <!-- /.overlay -->
			</div> <!-- /.about-compnay-two -->

            <hr>

            <div class="about-compnay-two no-bg section-spacing">
				<div class="overlay">
					<div class="container">
						<div class="row">
                            <div class="col-sm-12 col-md-5 col-lg-12">
                                <h3 class="title">Diversity, Equity, and Belonging</h3>
                                <hr>
                            </div>
                            <div class="col-sm-12 col-md-7 col-lg-12">
                                {{-- <p>{!! $institute->about !!}</p> --}}
                            <p>ARIFA is committed to fostering an inclusive work environment for everyone.
                                We embrace and celebrate the unique experiences, perspectives and cultural
                                backgrounds each employee brings to our workplace. ARIFA aims to create an
                                environment where our employees feel respected,
                                valued and empowered, and to create an inclusive workplace through which our team members
                                are an integral part.
                            </p>
                            </div>
                        </div>
					</div> <!-- /.container -->
				</div> <!-- /.overlay -->
			</div> <!-- /.about-compnay-two -->

            <hr>

            <div class="about-compnay-two no-bg section-spacing">
				<div class="overlay">
					<div class="container">
						<div class="row">
                            <div class="col-sm-12 col-md-5 col-lg-12">
                                <h3 class="title">Ventures/Research Partners</h3>
                                <hr>
                            </div>
                            <div class="col-sm-12 col-md-7 col-lg-12">
                            <p>
                                ARIFA now’s work is done through collaborations across an expansive, world-class network
                                that includes scholars, technologists, policy-makers, advocates, and many others.
                                We have established formal partnerships with the following organizations:
                            </p>
                            </div>
                        </div>
					</div> <!-- /.container -->
				</div> <!-- /.overlay -->
			</div> <!-- /.about-compnay-two -->

			<!--
			=====================================================
				Why We Best
			=====================================================
			-->
			{{-- <div class="why-we-best">
				<div class="overlay">
					<div class="container">
						<div class="theme-title-one">
							<h2>WE ARE ALWAYS BEST</h2>
							<p>A tale of a fateful trip that started from this tropic port aboard this tiny ship today stillers</p>
						</div> <!-- /.theme-title-one -->

						<div class="wrapper row no-gutters">
							<div class="col-lg-6 col-12 order-lg-last"><div class="img-box"></div></div>
							<div class="col-lg-6 col-12 order-lg-first">
								<ul class="best-list-item">
									<li>
										<i class="icon flaticon-puzzle"></i>
										<h5><a href="#">Best Strategy</a></h5>
										<p>The Love Boat soon will be making another run plore strange tools enter new worlds.</p>
									</li>
									<li>
										<i class="icon flaticon-presentation"></i>
										<h5><a href="#">High-Quality Services</a></h5>
										<p>The Love Boat soon will be making another run plore strange tools enter new worlds.</p>
									</li>
									<li>
										<i class="icon flaticon-people"></i>
										<h5><a href="#">Friendly Support</a></h5>
										<p>The Love Boat soon will be making another run plore strange tools enter new worlds.</p>
									</li>
								</ul>
							</div> <!-- /.col- -->
						</div> <!-- /.wrapper -->
					</div> <!-- /.container -->
				</div> <!-- /.overlay -->
			</div> <!-- /.why-we-best --> --}}


			<!--
			=====================================================
				Theme Counter
			=====================================================
			-->
			{{-- <div class="theme-counter-two section-spacing">
				<div class="container">
					<div class="clearfix">
						<div class="cunter-wrapper">
							<div class="row">
								<div class="col-md-3 col-6">
									<div class="single-counter-box">
				        				<div class="number"><span class="timer" data-from="0" data-to="30" data-speed="1200" data-refresh-interval="5">0</span>+</div>
				        				<p>Years of Excellence</p>
				        			</div> <!-- /.single-counter-box -->
								</div>  <!-- /.col- -->
								<div class="col-md-3 col-6">
									<div class="single-counter-box">
				        				<div class="number"><span class="timer" data-from="0" data-to="100" data-speed="1200" data-refresh-interval="5">0</span>%</div>
				        				<p>Client Satisfaction</p>
				        			</div> <!-- /.single-counter-box -->
								</div>  <!-- /.col- -->
								<div class="col-md-3 col-6">
									<div class="single-counter-box">
				        				<div class="number"><span class="timer" data-from="0" data-to="53" data-speed="1200" data-refresh-interval="5">0</span>k</div>
				        				<p>Cases Completed</p>
				        			</div> <!-- /.single-counter-box -->
								</div>  <!-- /.col- -->
								<div class="col-md-3 col-6">
									<div class="single-counter-box">
				        				<div class="number">
                                            <span class="timer" data-from="0" data-to="24" data-speed="1200" data-refresh-interval="5">0
                                                </span>
                                            </div>
				        				<p>Consultants</p>
				        			</div> <!-- /.single-counter-box -->
								</div>  <!-- /.col- -->
							</div> <!-- /.row -->
						</div> <!-- /.cunter-wrapper -->
					</div> <!-- /.clearfix -->
				</div> <!-- /.container -->
			</div> <!-- /.theme-counter --> --}}


			<!--
			=============================================
				Core Values
			==============================================
			-->
			{{-- <div class="core-values">
				<div class="container">
					<div class="theme-title-one">
						<h2>CORE VALUES</h2>
					</div> <!-- /.theme-title-one -->
					<div class="wrapper">
						<div class="core-value-slider">
							<div class="item">
								<div class="single-value-block">
									<div class="image-box">
										<img src="{{ asset('front-resources/images/home/17.jpg') }}" alt="">
										<div class="overlay"><a href="#" class="theme-button-one">READ MORE</a></div>
									</div> <!-- /.image-box -->
									<div class="text">
										<h5><a href="#">Challenging Staff</a></h5>
										<p>The Love Boat soon will be making other run plore strange tools.</p>
									</div> <!-- /.text -->
								</div> <!-- /.single-value-block -->
							</div> <!-- /.col- -->
							<div class="item">
								<div class="single-value-block">
									<div class="image-box">
										<img src="{{ asset('front-resources/images/home/18.jpg') }}" alt="">
										<div class="overlay"><a href="#" class="theme-button-one">READ MORE</a></div>
									</div> <!-- /.image-box -->
									<div class="text">
										<h5><a href="#">Integrity Properties</a></h5>
										<p>The Love Boat soon will be making other run plore strange tools.</p>
									</div> <!-- /.text -->
								</div> <!-- /.single-value-block -->
							</div> <!-- /.col- -->
							<div class="item">
								<div class="single-value-block">
									<div class="image-box">
										<img src="{{ asset('front-resources/images/home/19.jpg') }}" alt="">
										<div class="overlay"><a href="#" class="theme-button-one">READ MORE</a></div>
									</div> <!-- /.image-box -->
									<div class="text">
										<h5><a href="#">Innovation Solutions</a></h5>
										<p>The Love Boat soon will be making other run plore strange tools.</p>
									</div> <!-- /.text -->
								</div> <!-- /.single-value-block -->
							</div> <!-- /.col- -->
						</div> <!-- /.core-value-slider -->
					</div> <!-- /.wrapper -->
				</div> <!-- /.container -->
			</div> <!-- /.core-values --> --}}



			<!--
			=====================================================
				Partner Slider
			=====================================================
			-->
			{{-- <div class="partner-section">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-4 col-12">
							<h6>OUR <br>PARTNERS</h6>
						</div>
						<div class="col-md-9 col-sm-8 col-12">
							<div class="partner-slider">
							@foreach ($sponsors as $sponsor)
                                @if ($sponsor->partner_logo_url !== null)
                                <div class="item"><img src="{{ asset('storage/'.$sponsor->partner_logo_url) }}" width="120" height="100" alt=""></div>
                                @endif
                            @endforeach
							</div>
						</div>
					</div>
				</div>
			</div> <!-- /.partner-section --> --}}

@endsection
