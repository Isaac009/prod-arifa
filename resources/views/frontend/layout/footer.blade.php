<!--
			=====================================================
				Footer
			=====================================================
			-->
            @php
                $institute = \App\Models\Institute::latest()->take(1)->first();
            @endphp
			<footer class="theme-footer-one">
				<div class="top-footer" style="background-color: rgb(106, 18, 18)">
					<div class="container">
						<div class="row">
							<div class="col-xl-3 col-lg-4 col-sm-6 about-widget">
								<h6 class="title">ABOUT {{ $institute->name }}</h6>
								<p>Africa Research Institute For AI (ARIFA), is a not-for-profit think tank united by a shared commitment to advancing impactful research, training and advisory. ARIFA is specifically focused on Sub-Saharan Africa (SSA) and ...
                                    <a href="{{ route('about') }}">READ MORE...</a>
                                </p>

								<div class="queries"><i class="flaticon-phone-call"></i> Any Queries : <a href="#">+{{ $institute->phone }}</a></div>
							</div> <!-- /.about-widget -->
							<div class="col-xl-4 col-lg-3 col-sm-6 footer-recent-post">
								<h6 class="title">RECENT POSTS</h6>
								<ul>
                                    @php
                                        $events = \App\Models\Event::latest()->take(2)->get();
                                    @endphp
									@foreach ($events as $event)
                                    <li class="clearfix">
										<img src="{{ asset($event->image != null ? 'storage/'.$event->image : 'images/event_default.png') }}" alt="" class="float-left">
										<div class="post float-left">
											<a href="{{ route('events.details',$event->id) }}">{{ $event->topic }}</a>
											<div class="date"><i class="fa fa-calendar-o" aria-hidden="true"></i> Feb 06, 2018</div>
										</div>
									</li>
                                    @endforeach
								</ul>
							</div> <!-- /.footer-recent-post -->
							<div class="col-xl-2 col-lg-3 col-sm-6 footer-list">
								<h6 class="title">USEFUL LINKS</h6>
								<ul>
									<li><a href="{{ route('about') }}">About</a></li>
									<li><a href="{{ route('projects') }}">Research Projects</a></li>
									<li><a href="{{ route('events.index') }}">Events</a></li>
									<li><a href="{{ route('opportunities.call-for-papers') }}">Call for Paper</a></li>
									<li><a href="{{ route('publications.index') }}">Publications</a></li>
									<li><a href="{{ route('opportunities.index') }}">Opportunities</a></li>
								</ul>
							</div> <!-- /.footer-list -->
							<div class="col-xl-3 col-lg-2 col-sm-6 footer-newsletter">
								<h6 class="title">NEWSLETTER</h6>
								<form action="#">
									<input type="text" placeholder="Name *">
									<input type="email" placeholder="Email *">
									<button class="theme-button-one">SUBSCRIBE</button>
								</form>
							</div>
						</div> <!-- /.row -->
					</div> <!-- /.container -->
				</div> <!-- /.top-footer -->
				<div class="bottom-footer" style="background-color: rgb(8, 0, 0)">
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-12"><p>&copy; Copyrights 2018. All Rights Reserved.</p></div>
							<div class="col-md-6 col-12">
								<ul>
									<li><a href="{{ route('about') }}">About</a></li>
									<li><a href="{{ route('projects') }}">Projects</a></li>
									<li><a href="#">FAQ’s</a></li>
									<li><a href="{{ route('contact-us') }}">Contact</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div> <!-- /.bottom-footer -->
			</footer> <!-- /.theme-footer -->




	        <!-- Scroll Top Button -->
			<button class="scroll-top tran3s">
				<i class="fa fa-angle-up" aria-hidden="true"></i>
			</button>
