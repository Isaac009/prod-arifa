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
                <h2>Our Experts</h2>
            </div> <!-- /.container -->
        </div> <!-- /.overlay -->
    </div> <!-- /.theme-inner-banner -->


    <!--
    =====================================================
        Our Team
    =====================================================
    -->
    <div class="our-team section-spacing">
        <div class="container">
            <div class="wrapper">
                <div class="row">
                    @forelse ($members as $member)
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
									<div class="text">
										<h6>@foreach($member->titles as $title)
                                            {{ $title }}
                                        @endforeach
                                        {{ $member->name }}</h6>
                                {{-- <span>Sales Consultant</span> --}}
                            </div> <!-- /.text -->
                        </div> <!-- /.team-member -->
                    </div> <!-- /.col- -->
                    @empty
                        <p>No Team Yet.</p>
                    @endforelse
                </div> <!-- /.row -->
            </div> <!-- /.wrapper -->
        </div> <!-- /.container -->
    </div> <!-- /.our-team -->



    <!--
    =====================================================
        Free Consultation
    =====================================================
    -->
    {{-- <div class="consultation-form section-spacing">
        <div class="container">
            <div class="theme-title-one">
                <h2>Get Appointment</h2>
                <p>A tale of a fateful trip that started from this tropic port aboard this tiny ship today stillers</p>
            </div> <!-- /.theme-title-one -->
            <div class="clearfix main-content no-gutters row">
                <div class="col-xl-6 col-lg-5 col-12"><div class="img-box"></div></div>
                <div class="col-xl-6 col-lg-7 col-12">
                    <div class="form-wrapper">
                        <form action="#" class="theme-form-one">
                            <div class="row">
                                <div class="col-md-6"><input type="text" placeholder="Name *"></div>
                                <div class="col-md-6"><input type="text" placeholder="Phone *"></div>
                                <div class="col-md-6"><input type="email" placeholder="Email *"></div>
                                <div class="col-md-6">
                                    <select class="form-control" id="exampleSelect1">
                                        <option>Whom you’re looking for?</option>
                                        <option>Richards Mills</option>
                                        <option>Mike Hussey</option>
                                        <option>Jenilia D’sosa</option>
                                        <option>David Warner</option>
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
    </div> <!-- /.consultation-form --> --}}



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
                        <div class="item"><img src="{{ asset('storage/'.$sponsor->partner_logo_url) }}" width="120" height="100" alt=""></div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- /.partner-section -->

@endsection
