<!-- Optional JavaScript _____________________________  -->

    	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    	<!-- jQuery -->
		{{-- <script src="{{ asset('front-resources/vendor/jquery.2.2.3.min.js') }}"></script> --}}
		<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
        <!-- Popper js -->
		<script src="{{ asset('front-resources/vendor/popper.js/popper.min.js') }}"></script>
		<!-- Bootstrap JS -->
		<script src="{{ asset('front-resources/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
		<!-- Camera Slider -->
		<script src="{{ asset('front-resources/vendor/Camera-master/scripts/jquery.mobile.customized.min.js') }}"></script>
	    <script src="{{ asset('front-resources/vendor/Camera-master/scripts/jquery.easing.1.3.js') }}"</script>
	    <script src="{{ asset('front-resources/vendor/Camera-master/scripts/camera.min.js') }}"></script>
	    <!-- menu  -->
		<script src="{{ asset('front-resources/vendor/menu/src/js/jquery.slimmenu.js') }}"></script>
		<!-- WOW js -->
		<script src="{{ asset('front-resources/vendor/WOW-master/dist/wow.min.js') }}"></script>
		<!-- owl.carousel -->
		<script src="{{ asset('front-resources/vendor/owl-carousel/owl.carousel.min.js') }}"></script>
		<!-- js count to -->
		<script src="{{ asset('front-resources/vendor/jquery.appear.js') }}"></script>
		<script src="{{ asset('front-resources/vendor/jquery.countTo.js') }}"></script>
		<!-- Fancybox -->
		<script src="{{ asset('front-resources/vendor/fancybox/dist/jquery.fancybox.min.js') }}"></script>

		<!-- Theme js -->
		<script src="{{ asset('front-resources/js/theme.js') }}"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": true,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "1000",
            "hideDuration": "1000",
            "timeOut": "10000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
            }

            var msg = {!! json_encode(session()->get('message')) !!};
            if (msg) {
                toastr.success(msg);

                // Check if the session message exists
                if ('{{ Session::has('message') ? 'true' : 'false' }}' === 'true') {
                    console.log("session message exists");
                    // Make an AJAX request to remove the session value
                    $.ajax({
                        url: "{{ route('session.remove') }}",
                        method: 'POST',
                        data: {_token: '{{ csrf_token() }}'},
                        success: function(response) {
                            console.log('Session value removed successfully');
                        },
                        error: function(xhr) {
                            console.error('Error removing session value:', xhr);
                        }
                    });
                }

                // Function to check if the session message exists
                // function sessionMessageExists() {
                //     // Replace 'key' with the name of the session value you want to check for
                //     return '{{ Session::has('message') ? 'true' : 'false' }}' === 'true';
                // }
            }

            var errors = {!! json_encode($errors->all()) !!};
            if (errors.length > 0) {
                for (let i = 0; i < errors.length; i++) {
                    let error = errors[i];
                    console.log("error: " + error);
                    toastr.error(error);
                }
            }
        </script>
