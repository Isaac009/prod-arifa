<!--
			=============================================
				Theme Header One
			==============================================
			-->
            @php
                $institute = \App\Models\Institute::latest()->take(1)->first();
            @endphp
			<header class="header-one">
				<div class="top-header">
					<div class="container clearfix">
						<div class="logo float-left"><a href="{{ route('home') }}">
                            <img src="{{ asset('images/arifa-logo-edited.jpeg') }}" width="50" height="50" alt=""></a>
                        </div>
						<div class="address-wrapper float-right">
							<ul>
								<li class="address">
									<i class="icon flaticon-placeholder"></i>
									<h6>Address:</h6>
									<p>{{ $institute->address }}</p>
								</li>
								<li class="address">
									<i class="icon flaticon-multimedia"></i>
									<h6>Mail us:</h6>
									<p>{{ $institute->email }}</p>
								</li>
								{{-- <li class="quotes"><a href="#">GET A QUOTES</a></li> --}}
							</ul>
						</div> <!-- /.address-wrapper -->
					</div> <!-- /.container -->
				</div> <!-- /.top-header -->

				<div class="theme-menu-wrapper">
					<div class="container">
						<div class="bg-wrapper clearfix">
							<!-- ============== Menu Warpper ================ -->
					   		<div class="menu-wrapper float-left">
					   			<nav id="mega-menu-holder" class="clearfix">
								   <ul class="clearfix">
									    <li class="{{ request()->routeIs('home')?'active':'' }}"><a href="{{ route('home') }}">Home</a>
									    	{{-- <ul class="dropdown">
									        	<li><a href="{{ url('/') }}">Home version one</a></li>
									        	<li><a href="index-2.html">Home version two</a></li>
									      </ul> --}}
									    </li>
									    <li class="{{ request()->routeIs(['about','team'])?'active':'' }}"><a href="#">INSTITUTE</a>
									    	<ul class="dropdown">
									    		<li><a href="{{ route('about') }}">About us</a></li>
									    		<li><a href="{{ route('team') }}">Our team</a></li>
									    		<li><a href="faq.html">Faq's</a></li>
									    		{{-- <li><a href="404.html">404</a></li>
									    		<li><a href="shop.html">Shop</a></li>
									    		<li><a href="shop-details.html">Shop details</a></li>
									            <li><a href="#">Third Level menu</a>
									    			<ul>
									    				<li><a href="#">Demo one</a></li>
									    				<li><a href="#">Demo two</a></li>
									    			</ul>
									    		</li> --}}
									       </ul>
									    </li>
									    <li class="{{ request()->routeIs('objectives')?'active':'' }}"><a href="#">Objectives</a>
									    	{{-- <ul class="dropdown">
									        	<li><a href="service.html">Service Version one</a></li>
									        	<li><a href="service-v2.html">Service version two</a></li>
									        	<li><a href="service-details.html">Service Details</a></li>
									       </ul> --}}
									    </li>
                                        <li class="{{ request()->routeIs(['gallery.*'])?'active':'' }}"><a href="{{ route('gallery.index') }}">Gallery</a></li>
									    <li class="{{ request()->routeIs(['projects.*'])?'active':'' }}"><a href="{{ route('projects') }}">Projects</a>
									    	{{-- <ul class="dropdown">
									        	<li><a href="">projects</a></li>
									        	<li><a href="project-details.html">Project details</a></li>
									       </ul> --}}
									    </li>
									    <li><a href="#">Blog</a>
									    	<ul class="dropdown">
									        	<li><a href="">Blog List</a></li>
									        	<li><a href="">Blog Grid</a></li>
									        	<li><a href="">Blog details</a></li>
									       </ul>
									    </li>
									    <li class="{{ request()->routeIs('contact-us')?'active':'' }}"><a href="{{ route('contact-us') }}">contact</a></li>
								   </ul>
								</nav> <!-- /#mega-menu-holder -->
					   		</div> <!-- /.menu-wrapper -->

					   		<div class="right-widget float-right">
					   			<ul>
					   				<li class="social-icon">
					   					<ul>
											<li><a href="{!! $institute->facebook !!}" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="{!! $institute->x !!}" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
											<li><a href="{!! $institute->linkedin !!}" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
											<li><a href="{!! $institute->youtube !!}" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
										</ul>
					   				</li>
					   				{{-- <li class="cart-icon">
					   					<a href="#"><i class="flaticon-tool"></i> <span>2</span></a>
					   				</li>
					   				<li class="search-option">
					   					<div class="dropdown">
					   						<button type="button" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-search" aria-hidden="true"></i></button>
											<form action="#" class="dropdown-menu">
												<input type="text" Placeholder="Enter Your Search">
												<button><i class="fa fa-search"></i></button>
											</form>
					   					</div>
					   				</li> --}}
					   			</ul>
					   		</div> <!-- /.right-widget -->
						</div> <!-- /.bg-wrapper -->
					</div> <!-- /.container -->
				</div> <!-- /.theme-menu-wrapper -->
			</header> <!-- /.header-one -->
