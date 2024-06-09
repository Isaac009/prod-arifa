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
                <h2>Publications</h2>
            </div> <!-- /.container -->
        </div> <!-- /.overlay -->
    </div> <!-- /.theme-inner-banner -->


    <!--
    =============================================
        Our Publications
    ==============================================
    -->
    <div class="blog-grid section-spacing">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-8 col-12 our-blog">
                    <div class="post-wrapper row">
                        <div class="col-md-12 col-12" style="margin-bottom: 10px">
                            <h4>Policy Briefs</h4>
                        </div>
                        @forelse ($publications as $item)
                        <div class="col-md-6 col-12">
                            <div class="single-blog">
                                <div class="image-box">
                                    <img src="{{ asset('storage/'.$item->image) }}" alt="">
                                    <div class="overlay"><a href="#" class="date">Published on: {{ $item->published_on }}</a></div>
                                </div> <!-- /.image-box -->
                                <div class="post-meta">
                                    <h5 class="title"><a href="{{ route('publications.show', $item->id) }}">{{ $item->title }}</a></h5>
                                    {{-- <p>{!! $item->content !!}}</p> --}}
                                    <a href="{{ route('publications.show', $item->id) }}" class="read-more">READ MORE</a>
                                </div> <!-- /.post-meta -->
                            </div> <!-- /.single-blog -->
                        </div> <!-- /.col- -->
                        @empty
                        <div class="col-md-6 col-12">
                            No Publications Available Yet
                        </div>
                        @endforelse
                    </div> <!-- /.post-wrapper -->
                    {{-- <div class="theme-pagination">
                        <ul>
                            <li><a href="#">1</a></li>
                            <li class="active"><a href="#">2</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
                        </ul>
                    </div> --}}
                </div>
                <!-- ===================== Blog Sidebar ==================== -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8 col-12 blog-sidebar">
                    <div class="sidebar-container sidebar-search">
                        <form action="#">
                            <input type="text" placeholder="Search...">
                            <button><i class="fa fa-search" aria-hidden="true"></i></button>
                        </form>
                    </div> <!-- /.sidebar-search -->
                    <div class="sidebar-container sidebar-categories">
                        <h5 class="title">Publication Categories</h5>
                        <ul>
                            <li><a href="#">Research Reports</a></li>
                            <li><a href="#">Policy Briefs</a></li>
                            <li><a href="#">Concept Notes</a></li>
                            <li><a href="#">Books</a></li>
                            <li><a href="#">ARIFA Journal</a></li>
                        </ul>
                    </div> <!-- /.sidebar-categories -->
                    <div class="sidebar-container sidebar-recent-post">
                        <h5 class="title">Recent Posts</h5>
                        <ul>
                            @forelse ($recent_posts as $item)
                            <li class="clearfix">
                                <img src="images/blog/6.jpg" alt="" class="float-left">
                                <div class="post float-left">
                                    <a href="{{ route('blogs.details', 1) }}">World don't move to beat of just one drum.</a>
                                    <div class="date">5 minutes ago</div>
                                </div>
                            </li>
                            @empty
                            <li class="clearfix">
                                No posts yet.
                            </li>
                            @endforelse
                        </ul>
                    </div> <!-- /.sidebar-recent-post -->
                    <div class="sidebar-container sidebar-archives">
                        <h5 class="title">Archives</h5>
                        <ul>
                            <li><a href="#">January 2024</a></li>
                        </ul>
                    </div> <!-- /.sidebar-archives -->
                    <div class="sidebar-tags">
                        <h5 class="title">tags</h5>
                        <ul class="clearfix">
                            <li><a href="#">AI</a></li>
                            <li><a href="#">Policy</a></li>
                            <li><a href="#">InT</a></li>
                            {{-- <li><a href="#">Startup</a></li>
                            <li class="active"><a href="#">Marketing</a></li>
                            <li><a href="#">Services</a></li> --}}
                            <li><a href="#">Financial</a></li>
                            <li><a href="#">Research</a></li>
                        </ul>
                    </div> <!-- /.sidebar-tags -->
                </div> <!-- /.col- -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.blog-inner-page -->
@endsection
