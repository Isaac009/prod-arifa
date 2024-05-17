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
                <h2>Projects Details</h2>
            </div> <!-- /.container -->
        </div> <!-- /.overlay -->
    </div> <!-- /.theme-inner-banner -->


    <!--
    =============================================
        Project Details
    ==============================================
    -->
    <div class="project-details section-spacing">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-9 col-md-10 col-12 project-details-sidebar order-md-last">
                    <div class="strategies">
                        <h5>{{ $project->title }}</h5>
                        <hr>
                        <p>{!! $project->description !!}</p>
                        <hr>
                        {{-- <p>Boldly go where no man has gone before you would see the biggest gift would be from me and the card attached would say thank you.</p> --}}
                        <ul class="project-history clearfix">
                            <li>
                                <h6>Sponsor :</h6>
                                <span>{{ $project->sponsor->name }}</span>
                            </li>
                            <li>
                                <h6>Date :</h6>
                                <span>From: {{ $project->from_date }} ~ To: {{ $project->to_date }}</span>
                            </li>
                            {{-- <li>
                                <h6>Budget :</h6>
                                <span>$3,450</span>
                            </li>
                            <li>
                                <h6>Category :</h6>
                                <span>Business Consulting</span>
                            </li> --}}
                        </ul>
                        <h6>Share us on :</h6>
                        <ul class="social-icon">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>

                    <div class="charts">
                        <h3 class="main-title">Improvement Charts</h3>
                        <p>The man has gone before you would see the biggest gift would be from me and the card attached.</p>
                        <div id="chartContainer"></div>
                    </div> <!-- /.charts -->
                </div> <!-- /.project-details-sidebar -->
                <div class="col-xl-8 col-lg-3 col-md-2 col-12 order-md-first image-col">
                    <img src="{{ asset('storage/'.$project->project_image) }}" alt="">
                    <img src="{{ asset('storage/'.$project->project_image) }}" alt="">
                    <img src="{{ asset('storage/'.$project->project_image) }}" alt="">
                </div>
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.project-details -->


    <!--
    =====================================================
        Testimonial Slider
    =====================================================
    -->
    <div class="testimonial-section">
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
    </div> <!-- /.testimonial-section -->
@endsection
