@extends('frontend.layout.app')
<style>
    .slider {
            width: 100%;
            height: 500px;
            overflow: hidden;
        }

        .slides {
            display: flex;
            animation: slide 30s infinite;
        }

        .slide {
            width: 100%;
            height: 500px;
            flex-shrink: 0;
            background-size: cover;
            background-position: center;
        }

        .slide1 { background-image: url('images/slide1.jpg'); }
        .slide2 { background-image: url('images/slide2.png'); }
        .slide3 { background-image: url('images/slide3.png'); }
        .slide4 { background-image: url('images/slide5.png'); }

        @keyframes slide {
            0% { transform: translateX(0); }
            20% { transform: translateX(0); }
            25% { transform: translateX(-100%); }
            45% { transform: translateX(-100%); }
            50% { transform: translateX(-200%); }
            70% { transform: translateX(-200%); }
            75% { transform: translateX(-300%); }
            95% { transform: translateX(-300%); }
            100% { transform: translateX(-400%); }
        }
</style>

@section('main-content')

			<!--
			=============================================
				Theme Main Banner
			==============================================
            theme-main-banner
			-->
			<div id="" class="banner-one">
                <div class="slider">
                        <div class="slides">
                            <div class="slide slide1"></div>
                            <div class="slide slide2"></div>
                            <div class="slide slide3"></div>
                            <div class="slide slide4"></div>
                        </div>
                </div>
				{{-- <div data-src="{{ asset('front-resources/images/home/slide-1.jpg') }}">
					<div class="camera_caption">
						<div class="container">
							<p class="wow fadeInUp animated">The government they survive artical of fortune</p>
							<h1 class="wow fadeInUp animated" data-wow-delay="0.2s">We IMPROVE YOUR <br>SALES EFFICIENCY</h1>
							<a href="contact.html" class="theme-button-one wow fadeInUp animated" data-wow-delay="0.39s">CONTACT US</a>
						</div> <!-- /.container -->
					</div> <!-- /.camera_caption -->
				</div>
				<div data-src="{{ asset('front-resources/images/home/slide-2.jpg') }}">
					<div class="camera_caption">
						<div class="container">
							<p class="wow fadeInUp animated">The government they survive artical of fortune</p>
							<h1 class="wow fadeInUp animated" data-wow-delay="0.2s">We IMPROVE YOUR <br>SALES EFFICIENCY</h1>
							<a href="contact.html" class="theme-button-one wow fadeInUp animated" data-wow-delay="0.39s">CONTACT US</a>
						</div> <!-- /.container -->
					</div> <!-- /.camera_caption -->
				</div>
				<div data-src="{{ asset('front-resources/images/home/slide-3.jpg') }}">
					<div class="camera_caption">
						<div class="container">
							<p class="wow fadeInUp animated">The government they survive artical of fortune</p>
							<h1 class="wow fadeInUp animated" data-wow-delay="0.2s">We IMPROVE YOUR <br>SALES EFFICIENCY</h1>
							<a href="contact.html" class="theme-button-one wow fadeInUp animated" data-wow-delay="0.39s">CONTACT US</a>
						</div> <!-- /.container -->
					</div> <!-- /.camera_caption -->
				</div> --}}
			</div> <!-- /#theme-main-banner -->


			<!--
			=============================================
				Top Feature
			==============================================
			-->
			<div class="top-feature section-spacing">
				<div class="top-features-slide">
					<div class="item">
						<div class="main-content" style="background:#fafafa;">
							<img src="{{ asset('front-resources/images/icon/1.png') }}" alt="">
							<h4><a href="#">Consumer Insights</a></h4>
							<p>The east side to a deluxe apartment in move on up to the east side</p>
						</div> <!-- /.main-content -->
					</div> <!-- /.item -->
					<div class="item">
						<div class="main-content" style="background:#f6f6f6;">
							<img src="{{ asset('front-resources/images/icon/2.png') }}" alt="">
							<h4><a href="#">Emerging Ideas</a></h4>
							<p>The east side to a deluxe apartment in move on up to the east side</p>
						</div> <!-- /.main-content -->
					</div> <!-- /.item -->
					<div class="item">
						<div class="main-content" style="background:#efefef;">
							<img src="{{ asset('front-resources/images/icon/3.png') }}" alt="">
							<h4><a href="#">Thought Leadership</a></h4>
							<p>The east side to a deluxe apartment in move on up to the east side</p>
						</div> <!-- /.main-content -->
					</div> <!-- /.item -->
					<div class="item">
						<div class="main-content" style="background:#e9e9e9;">
							<img src="{{ asset('front-resources/images/icon/4.png') }}" alt="">
							<h4><a href="#">Marketing Goals</a></h4>
							<p>The east side to a deluxe apartment in move on up to the east side</p>
						</div> <!-- /.main-content -->
					</div> <!-- /.item -->
				</div> <!-- /.top-features-slide -->
			</div> <!-- /.top-feature -->


			<!--
			=============================================
				About Company
			==============================================
			-->
			<div class="about-compnay section-spacing">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-12"><img src="{{ asset('images/about.png') }}" alt=""></div>
						<div class="col-lg-6 col-12">
							<div class="text">
								<div class="theme-title-one">
									<h2>About Our {{ $institute->name }}</h2>
									<p>Africa Research Institute For AI (ARIFA), is a not-for-profit think tank united by a shared commitment to advancing impactful research, training and advisory. ARIFA is specifically focused on Sub-Saharan Africa (SSA) and seeks to foster innovation, facilitate knowledge exchange, and drive evidence-based policymaking to effectively tackle the dynamic challenges posed by the rapid advancements in technology.
                                        Rooted in its commitment to interdisciplinary research and collaboration, ARIFA has emerged as a pivotal force within the research and development (R&D) sector. As a key player in the renaissance of AI, ARIFA actively contributes to shaping the future integration of AI and other emerging technologies into the fabric of modern society.
                                        Since its inception, ARIFA has been dedicated to fostering a renaissance in AI, leveraging computational power and abundant data to push the boundaries of real-world applications. As ARIFA continues its journey, its historic background stands as a testament to its founding principles, serving as a foundation for growth, impact, and a relentless pursuit of excellence in the ever-evolving fields of AI and other Emerging Technologies.
                                    </p>
								</div> <!-- /.theme-title-one -->
								<ul class="mission-goal clearfix">
									<li>
										<a href="#" onclick="event.preventDefault()" data-bs-toggle="popover"
											data-bs-placement="top" data-bs-content="And here's some amazing content. It's very engaging. Right?">
											<i class="icon flaticon-star"></i>
										</a>
										<h4>Vision</h4>
									</li>
									<li>
										<i class="icon flaticon-medal"></i>
										<h4>Missions</h4>
									</li>
									<li>
										<i class="icon flaticon-target"></i>
										<h4>Values</h4>
									</li>
								</ul> <!-- /.mission-goal -->
							</div> <!-- /.text -->
						</div> <!-- /.col- -->
					</div> <!-- /.row -->
				</div> <!-- /.container -->
			</div> <!-- /.about-compnay -->


			<!--
			=============================================
				Feature Banner
			==============================================
			-->
			<div class="feature-banner section-spacing">
				<div class="opacity">
					<div class="container">
						<h2>Join  us as we help build "a feature where Artificial Intelligence empowers
							humanity by contributing to a more just, equitable, and prosperous world."
						</h2>
						<a href="#" class="theme-button-one">JOIN US</a>
					</div> <!-- /.container -->
				</div> <!-- /.opacity -->
			</div> <!-- /.feature-banner -->


			<!--
			=============================================
				Project Style One
			==============================================
			-->
			<div class="service-style-one section-spacing">
				<div class="container">
					<div class="theme-title-one">
						<h2>Our PROJECTS</h2>
						{{-- <p>A tale of a fateful trip that started from this tropic port aboard this tiny ship today stillers</p> --}}
					</div> <!-- /.theme-title-one -->
					<div class="wrapper">
						<div class="row">
                            @if (count($projects) > 0)
                                @foreach ($projects as $project)
                                <div class="col-xl-4 col-md-6 col-12">
                                    <div class="single-service">
                                        <div class="img-box"><img src="{{ asset('storage/'.$project->project_image) }}" alt=""></div>
                                        <div class="text">
                                            <h5><a href="{{ route('research.projects.show',$project->id) }}">{{ substr($project->title, 0, 16) }}</a></h5>
                                            {{-- <p>{!! substr($project->description, 0, 20) !!}...</p> --}}
                                            <a href="{{ route('research.projects.show',$project->id) }}" class="read-more">READ MORE <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                        </div> <!-- /.text -->
                                    </div> <!-- /.single-service -->
                                </div> <!-- /.col- -->
                                @endforeach
                            @else
                                <div class="col-xl-4 col-md-3">
                                </div>
                                <div class="contact-text text-center col-xl-4 col-md-6">
                                    <h4>There are no projects at the moment.</h4>
                                </div>
                            @endif
						</div> <!-- /.row -->
					</div> <!-- /.wrapper -->
					<div class="contact-text">
						<h4>You can also send us an email and we’ll get in touch shortly, or Call us</h4>
						<h5><a href="#">{{ $institute->email }}</a>  (or)  <a href="#">+{{ $institute->phone }}</a></h5>
					</div>
				</div> <!-- /.container -->
			</div> <!-- /.service-style-one -->


			<!--
			=====================================================
				Testimonial Slider
			=====================================================
			-->
			{{-- <div class="testimonial-section section-spacing">
				<div class="overlay">
					<div class="container">
						<div class="wrapper">
							<div class="bg">
								<div class="testimonial-slider">
									<div class="item">
										<p>“ A tale of a fateful trip that started from this tropic port aboard this tiny ship today still wanted by the government they survive as soldiers of fortune to a deluxe apartment in the sky moving on up to the east side a family. ”</p>
										<div class="name">
											<h6>Shawn Michael</h6>
											<span>Founder, Mnc Inc.</span>
										</div> <!-- /.name -->
									</div> <!-- /.item -->
									<div class="item">
										<p>“ A tale of a fateful trip that started from this tropic port aboard this tiny ship today still wanted by the government they survive as soldiers of fortune to a deluxe apartment in the sky moving on up to the east side a family. ”</p>
										<div class="name">
											<h6>Rashed Ka.</h6>
											<span>Founder, Mnc Inc.</span>
										</div> <!-- /.name -->
									</div> <!-- /.item -->
									<div class="item">
										<p>“ A tale of a fateful trip that started from this tropic port aboard this tiny ship today still wanted by the government they survive as soldiers of fortune to a deluxe apartment in the sky moving on up to the east side a family. ”</p>
										<div class="name">
											<h6>Mahfuz Riad</h6>
											<span>Founder, Mnc Inc.</span>
										</div> <!-- /.name -->
									</div> <!-- /.item -->
								</div> <!-- /.testimonial-slider -->
							</div> <!-- /.bg -->
						</div> <!-- /.wrapper -->
					</div> <!-- /.container -->
				</div> <!-- /.overlay -->
			</div> <!-- /.testimonial-section --> --}}


			<!--
			=====================================================
				Our Team
			=====================================================
			-->
			<div class="our-team section-spacing">
				<div class="container">
					<div class="theme-title-one">
						<h2>Our TEAM</h2>
						<p>A tale of a fateful trip that started from this tropic port aboard this tiny ship today stillers</p>
					</div> <!-- /.theme-title-one -->
					<div class="wrapper">
						<div class="row">
                            @if(count($team) > 0)
							@foreach ($team as $member)
                            <div class="col-lg-3 col-sm-6 col-12">
								<div class="team-member">
									<div class="image-box">
										<img src="{{ asset('storage/'.$member->profile_photo_url) }}" width="130px" height="240px" alt="">
										<div class="overlay">
											<div class="hover-content">
												<ul>
													<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
													<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
													<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
												</ul>
												<p>{!! Str::substr($member->bio, 0, 60) !!}...</p>
											</div> <!-- /.hover-content -->
										</div> <!-- /.overlay -->
									</div> <!-- /.image-box -->
									<div class="text" style="">
										<h6>@foreach($member->titles as $title)
                                            {{ $title }}
                                        @endforeach
                                        {{ $member->name }}</h6>
										{{-- <span>Sales Consultant</span> --}}
									</div> <!-- /.text -->
								</div> <!-- /.team-member -->
							</div> <!-- /.col- -->
                            @endforeach
                            @else
                                <div class="col-xl-4 col-md-3">
                                </div>
                                <div class="contact-text text-center col-xl-4 col-md-6">
                                    <h4>There is no team information at the moment.</h4>
                                </div>
                            @endif
						</div> <!-- /.row -->
					</div> <!-- /.wrapper -->
				</div> <!-- /.container -->
			</div> <!-- /.our-team -->


			<!--
			=====================================================
				Theme Counter
			=====================================================
			-->
			{{-- <div class="theme-counter section-spacing">
				<div class="container">
					<div class="bg">
						<h6>Company Success</h6>
						<h2>Some fun facts about our consulting</h2>

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
				        				<div class="number"><span class="timer" data-from="0" data-to="24" data-speed="1200" data-refresh-interval="5">0</span></div>
				        				<p>Consultants</p>
				        			</div> <!-- /.single-counter-box -->
								</div>  <!-- /.col- -->
							</div> <!-- /.row -->
						</div> <!-- /.cunter-wrapper -->
						<a href="#" class="theme-button-one">VIEW CASE STUDIES</a>
					</div> <!-- /.bg -->
				</div> <!-- /.container -->
			</div> <!-- /.theme-counter --> --}}


			<!--
			=====================================================
				Free Consultation
			=====================================================
			-->
			<div class="consultation-form section-spacing">
				<div class="container">
					<div class="theme-title-one">
						<h2>FREE CONSULTATION</h2>
						<p>A tale of a fateful trip that started from this tropic port aboard this tiny ship today stillers</p>
					</div> <!-- /.theme-title-one -->
					<div class="clearfix main-content no-gutters row">
						<div class="col-xl-6 col-lg-5 col-12">
                            <div>
                                <img src="{{ asset('images/in-touch.png') }}" alt="">
                            </div>
                        </div>
						<div class="col-xl-6 col-lg-7 col-12">
							<div class="form-wrapper">
								<form action="#" class="theme-form-one">
									<div class="row">
										<div class="col-md-6"><input type="text" placeholder="Name *"></div>
										<div class="col-md-6"><input type="text" placeholder="Phone *"></div>
										<div class="col-md-6"><input type="email" placeholder="Email *"></div>
										<div class="col-md-6">
											<select class="form-control" id="exampleSelect1">
										      <option>Service you’re looking for?</option>
										      <option>Business Services</option>
										      <option>Consumer Product</option>
										      <option>Financial Services</option>
										      <option>Software Research</option>
										    </select>
										</div>
										<div class="col-12"><textarea placeholder="Message"></textarea></div>
									</div> <!-- /.row -->
									<button class="theme-button-one">GET A QUOTES</button>
								</form>
							</div> <!-- /.form-wrapper -->
						</div> <!-- /.col- -->
					</div> <!-- /.main-content -->
				</div> <!-- /.container -->
			</div> <!-- /.consultation-form -->



			<!--
			=====================================================
				Partner Slider
			=====================================================
			-->
			<div class="partner-section bg-color">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-4 col-12">
							<h6>OUR <br>PARTNERS</h6>
						</div>
						<div class="col-md-9 col-sm-8 col-12">
							<div class="partner-slider">
                                @foreach ($sponsors as $sponsor)
                                @if ($sponsor->partner_logo_url !== null)
                                <div class="item">
                                    <img src="{{ asset('storage/'.$sponsor->partner_logo_url) }}" width="120" height="100" alt="">
                                </div>
                                @endif
                                @endforeach
							</div>
						</div>
					</div>
				</div>
			</div> <!-- /.partner-section -->

@endsection

@push('additional-scripts')
	<!-- Initialize Popover -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
            var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
                return new bootstrap.Popover(popoverTriggerEl)
            })
        });
    </script>
@endpush
