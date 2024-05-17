<!DOCTYPE html>
<html html lang="zxx">

<head>
    @include('user.layout.pHead')
</head>

<body>

 
  @include('user.layout.pHeader')

    <!-- Main Content -->
    @section('main-content')
    @show
    <!-- End  Main Content -->

    <!-- FOOTER -->
    @include('user.layout.footer')

    
    @include('user.layout.script')
    
</body>