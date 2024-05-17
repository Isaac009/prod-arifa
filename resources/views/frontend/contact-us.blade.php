@extends('frontend.layout.app')

@section('main-content')

    <!--
    =====================================================
        Google Map
    =====================================================
    -->
    <!-- Google Map -->
    <div class="google-map-two section-spacing">
        <div class="map-canvas">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7924.729880400827!2d39.2260491!3d-6.7252483!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x185c51e35ee62eab%3A0x649458e4e8b09aef!2sAlly%20Sykes%20road%2C%20Dar%20es%20Salaam%2C%20Tanzania!5e0!3m2!1sen!2skr!4v1715720328621!5m2!1sen!2skr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <!--
    =============================================
        Conatct us Section
    ==============================================
    -->
    <div class="contact-us-section section-spacing">
        <div class="container">
            <div class="theme-title-one">
                <h2>GET IN TOUCH</h2>
                <p>A tale of a fateful trip that started from this tropic port aboard this tiny ship today stillers</p>
            </div> <!-- /.theme-title-one -->
            <div class="clearfix main-content no-gutters row">
                <div class="col-lg-5 col-12">
                    <div>
                        <img src="{{ asset('images/in-touch.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-7 col-12">
                    <div class="form-wrapper">
                        <form action="{{ route('contact.send') }}" method="POST" class="theme-form-one form-validation" autocomplete="off">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6 col-12"><input type="text" placeholder="Name *" name="name"></div>
                                <div class="col-sm-6 col-12"><input type="text" placeholder="Phone *" name="phone"></div>
                                <div class="col-sm-6 col-12"><input type="email" placeholder="Email *" name="email"></div>
                                <div class="col-sm-6 col-12"><input type="text" placeholder="Website *" name="web"></div>
                                <div class="col-12"><textarea placeholder="Message" name="message"></textarea></div>
                            </div> <!-- /.row -->
                            <button class="theme-button-one" type="submit">SEND MESSAGE</button>
                        </form>
                    </div> <!-- /.form-wrapper -->
                </div> <!-- /.col- -->
            </div> <!-- /.main-content -->
        </div> <!-- /.container -->

        <!--Contact Form Validation Markup -->
        <!-- Contact alert -->
        {{-- <div class="alert-wrapper" id="alert-success">
            <div id="success">
                <button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
                <div class="wrapper">
                    <p>Your message was sent successfully.</p>
                    </div>
            </div>
        </div> <!-- End of .alert_wrapper -->
        <div class="alert-wrapper" id="alert-error">
            <div id="error">
                <button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
                <div class="wrapper">
                    <p>Sorry!Something Went Wrong.</p>
                </div>
            </div>
        </div> <!-- End of .alert_wrapper -->
    </div> <!-- /.contact-us-section -->



    <!--
    =============================================
        Compnay Branch Address
    ==============================================
    -->
    <div class="branch-address">
        <div class="container">
            <div class="row">
                <div class="address-slider">
                    <div class="item">
                        <div class="wrapper">
                            <h6>United States Office</h6>
                            <p><i class="fa fa-address-book-o" aria-hidden="true"></i> 23A, Queenstown St, Log Vegas, United States.</p>
                        </div> <!-- /.wrapper -->
                    </div>
                    <div class="item">
                        <div class="wrapper">
                            <h6>Australia Office</h6>
                            <p><i class="fa fa-address-book-o" aria-hidden="true"></i> consult floor, melbourne, Australia.</p>
                        </div> <!-- /.wrapper -->
                    </div>
                    <div class="item">
                        <div class="wrapper">
                            <h6>Germany Office</h6>
                            <p><i class="fa fa-address-book-o" aria-hidden="true"></i> no:108, shshi st, berlin, <br> Germany.</p>
                        </div> <!-- /.wrapper -->
                    </div>
                    <div class="item">
                        <div class="wrapper">
                            <h6>London Office</h6>
                            <p><i class="fa fa-address-book-o" aria-hidden="true"></i> cityhigh, clock bell floor, United Kingdom.</p>
                        </div> <!-- /.wrapper -->
                    </div>
                </div> <!-- /.address-slider -->
            </div>
        </div> <!-- /.container -->
    </div> <!-- /.branch-address --> --}}
@endsection
