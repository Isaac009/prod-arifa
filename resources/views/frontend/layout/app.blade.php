<!DOCTYPE html>
<html lang="en">
	
<head>
    @include('frontend.layout.head')
</head>

<body>
  <div class="main-page-wrapper">

    <!-- ===================================================
      Loading Transition
    ==================================================== -->
    <div id="loader-wrapper">
      <div id="loader"></div>
    </div>


  @include('frontend.layout.header')

    <!-- Main Content -->
    @section('main-content')
    @show
    <!-- End  Main Content -->

    <!-- FOOTER -->
    @include('frontend.layout.footer')
    {{-- @include('frontend.layout.preloader') --}}


    @include('frontend.layout.script')
    @stack('additional-scripts')
  </div> <!-- /.main-page-wrapper -->
</body>
