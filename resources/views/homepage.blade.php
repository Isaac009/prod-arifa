@extends('frontend.layout.app')
<style>
    .slider {
    width: 100%;
    height: 500px;
    overflow: hidden;
}

.slides {
    display: flex;
    animation: slide 40s infinite;
}

.slide {
    width: 100%;
    height: 500px;
    flex-shrink: 0;
    background-size: cover;
    background-position: center;
    position: relative; /* Required for positioning slide-text */
}

/* Styling for the text container */
.slide-text {
    position: absolute;
    bottom: 20px;
    left: 20px;
    background: rgba(0, 0, 0, 0.5);
    color: white;
    padding: 10px 20px;
    border-radius: 5px;
    font-size: 1.2em;
    font-weight: bold;
    z-index: 1;
}

.slide1 { background-image: url('images/slide1.jpg'); }
.slide2 { background-image: url('images/slide2.jpg'); }
.slide3 { background-image: url('images/slide3.jpg'); }
.slide4 { background-image: url('images/slide4.jpg'); }
.slide5 { background-image: url('images/slide5.jpg'); }
.slide1-copy { background-image: url('images/slide1.jpg'); }

/* Keyframes for the slide animation */
@keyframes slide {
    0% { transform: translateX(0%); }
    14.28% { transform: translateX(0%); } /* Hold the first slide */
    19.04% { transform: translateX(-100%); }
    33.32% { transform: translateX(-100%); } /* Hold the second slide */
    38.08% { transform: translateX(-200%); }
    52.36% { transform: translateX(-200%); } /* Hold the third slide */
    57.12% { transform: translateX(-300%); }
    71.40% { transform: translateX(-300%); } /* Hold the fourth slide */
    76.16% { transform: translateX(-400%); }
    90.44% { transform: translateX(-400%); } /* Hold the fifth slide */
    95.20% { transform: translateX(-500%); }
    100% { transform: translateX(-500%); } /* Smooth transition to the first slide copy */
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
                            <div class="slide slide1">
                                <div class="slide-text">AI Awareness Workshop NM-AIST Arusha
                                </div>
                            </div>
                            <div class="slide slide2">
                                <div class="slide-text">AI Awareness Workshop NM-AIST Arusha</div>
                            </div>
                            <div class="slide slide3">
                                <div class="slide-text">Conference on the State of AI in Africa-Strathmore University Nairobi</div>
                            </div>
                            <div class="slide slide4">
                                <div class="slide-text">AI Workshop Dar es Salaam</div>
                            </div>
                            <div class="slide slide5">
                                <div class="slide-text">ARIFA Participated in Financial Inclusion Workshop Organized by STIPRO</div>
                            </div>
                            <div class="slide slide1-copy">
                                <div class="slide-text">AI Awareness Workshop NM-AIST Arusha
                                </div>
                            </div>
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
							<h4><a href="#">Conduct Cutting-Edge AI Research</a></h4>
							<p>Undertake interdisciplinary research to advance the understanding and application of AI in addressing
                                real-world challenges.</p>
						</div> <!-- /.main-content -->
					</div> <!-- /.item -->
					<div class="item">
						<div class="main-content" style="background:#f6f6f6;">
							<img src="{{ asset('front-resources/images/icon/3.png') }}" alt="">
							<h4><a href="#">Provide Comprehensive AI Training</a></h4>
							<p>Deliver training programs to enhance the skills and knowledge of individuals and organizations,
                                fostering a proficient workforce in the field of AI.</p>
						</div> <!-- /.main-content -->
					</div> <!-- /.item -->
					<div class="item">
						<div class="main-content" style="background:#efefef;">
							<img src="{{ asset('front-resources/images/icon/2.png') }}" alt="">
							<h4><a href="#">Promote Ethical AI Practices</a></h4>
							<p>Advocate for and promote ethical considerations in AI development and deployment, emphasizing
                                responsible practices and inclusive approaches.</p>
						</div> <!-- /.main-content -->
					</div> <!-- /.item -->
					<div class="item">
						<div class="main-content" style="background:#e9e9e9;">
							<img src="{{ asset('front-resources/images/icon/4.png') }}" alt="">
							<h4><a href="#">Influence Evidence-Based AI Policies</a></h4>
							<p>Generate insights from research to inform evidence-based policies and regulations, contributing to the
                                responsible governance of AI technologies.</p>
						</div> <!-- /.main-content -->
					</div> <!-- /.item -->
                    <div class="item">
						<div class="main-content" style="background:#e9e9e9;">
							<img src="{{ asset('front-resources/images/icon/4.png') }}" alt="">
							<h4><a href="#">Address Societal Challenges with AI Impact</a></h4>
							<p>{{ Str::substr("Utilize AI research and applications to address societal challenges, focusing on leveraging technology
                                for positive social impact, sustainability, and community well-being.", 0, 170) }} ...</p>
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
									<p style="text-align: justify">
										Africa Research Institute For AI (ARIFA), is a not-for-profit think tank united by a shared commitment to advancing impactful research, training and advisory. ARIFA is specifically focused on Sub-Saharan Africa (SSA) and seeks to foster innovation, facilitate knowledge exchange, and drive evidence-based policymaking to effectively tackle the dynamic challenges posed by the rapid advancements in technology.
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
						<h2>Join  us as we help build <span style="font-style: italic; font-family: Lucida Calligraphy">"a feature where Artificial Intelligence empowers
							humanity by contributing to a more just, equitable, and prosperous world".</span>
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
                                        @if ($project->project_image !== null)
                                        <div class="img-box"><img src="{{ asset('storage/'.$project->project_image) }}" alt=""></div>
                                        @endif
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
										<img src="{{ asset('storage/'.$member->profile_photo_url) }}" class="image_size" alt="">
										<div class="overlay">
											<div class="hover-content">
												<ul>
													<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
													<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
													<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
												</ul>
												<p>{!! Str::substr($member->bio, 0, 60) !!}...</p>
                                                <button type="button" class="btn btn-primary"
                                                data-toggle="modal" data-target="#memberModal"
                                                data-member-id="{{ $member->id }}">
                                                    View Member Details
                                                </button>
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

            <div class="modal fade" id="memberModal" tabindex="-1" role="dialog"
            aria-labelledby="memberModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="memberModalLabel">Member Details</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Member details will be displayed here -->
                        </div>
                    </div>
                </div>
            </div>


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
			=============================================
				Core Values
			==============================================
			-->
			<div class="core-values">
				<div class="container">
					<div class="theme-title-one">
						<h2>RECENT EVENTS</h2>
					</div> <!-- /.theme-title-one -->
					<div class="wrapper">
						<div class="core-value-slider">
							@foreach ($events as $event)
                            <div class="item">
								<div class="single-value-block">
									<div class="image-box">
										<img src="{{ asset($event->image != null ? 'storage/'.$event->image : 'images/event_default.png') }}" alt="">
										<div class="overlay"><a href="{{ route('events.details',$event->id) }}" class="theme-button-one">READ MORE</a></div>
									</div> <!-- /.image-box -->
									<div class="text">
										<h5><a href="{{ route('events.details',$event->id) }}">{{ Str::substr($event->topic, 0, 50) }}...</a></h5>
										<p>{!! Str::substr($event->description, 0, 60) !!}</p>
									</div> <!-- /.text -->
								</div> <!-- /.single-value-block -->
							</div> <!-- /.col- -->
                            @endforeach
						</div> <!-- /.core-value-slider -->
					</div> <!-- /.wrapper -->
				</div> <!-- /.container -->
			</div> <!-- /.core-values -->

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

        $('#memberModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var memberId = button.data('member-id'); // Extract member ID from data-* attributes

            // Make an AJAX request to fetch member details
            $.ajax({
                url: '/team/' + memberId, // Assuming you have a route for fetching member details
                method: 'GET',
                success: function(response) {
                    // Update modal body with member details
                    $('#memberModal .modal-body').html(response);
                },
                error: function(xhr) {
                    console.error('Error fetching member details:', xhr);
                }
            });
        });
    </script>
@endpush
