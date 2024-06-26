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
                <h2>Blog</h2>
            </div> <!-- /.container -->
        </div> <!-- /.overlay -->
    </div> <!-- /.theme-inner-banner -->


    <!--
    =============================================
        Our Blog
    ==============================================
    -->
    <div class="blog-grid section-spacing">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-8 col-12 our-blog">
                    <div class="post-wrapper row">
                        @forelse ($blogs as $blog)
                        <div class="col-md-6 col-12">
                            <div class="single-blog">
                                <div class="image-box">
                                    <img src="{{ asset('storage/'.$blog->image) }}" alt="">
                                    <div class="overlay"><a href="#" class="date">{{ $blog->created_at->diffForHumans() }}</a></div>
                                </div> <!-- /.image-box -->
                                <div class="post-meta">
                                    <h5 class="title"><a href="{{ route('blogs.details', $blog->id) }}">{{ $blog->title }}</a></h5>
                                    {{-- <p>{!! $blog->content !!}}</p> --}}
                                    <a href="{{ route('blogs.details', $blog->id) }}" class="read-more">READ MORE</a>
                                </div> <!-- /.post-meta -->
                            </div> <!-- /.single-blog -->
                        </div> <!-- /.col- -->
                        @empty
                        <div class="col-md-6 col-12">
                            No blogs
                        </div>
                        @endforelse
                        {{-- <div class="col-md-6 col-12">
                            <div class="single-blog">
                                <div class="image-box">
                                    <img src="images/blog/4.jpg" alt="">
                                    <div class="overlay"><a href="#" class="date">Mar 30, 2018</a></div>
                                </div> <!-- /.image-box -->
                                <div class="post-meta">
                                    <h5 class="title"><a href="{{ route('blogs.details', 1) }}">Kind of torture to have to watch</a></h5>
                                    <p>To seek out new life and new civilizations to boldly go where no man has gone before you would see the biggest gift.</p>
                                    <a href="{{ route('blogs.details', 1) }}" class="read-more">READ MORE</a>
                                </div> <!-- /.post-meta -->
                            </div> <!-- /.single-blog -->
                        </div> <!-- /.col- -->
                        <div class="col-md-6 col-12">
                            <div class="single-blog">
                                <div class="image-box">
                                    <img src="images/blog/5.jpg" alt="">
                                    <div class="overlay"><a href="#" class="date">Apr 14, 2018</a></div>
                                </div> <!-- /.image-box -->
                                <div class="post-meta">
                                    <h5 class="title"><a href="{{ route('blogs.details', 1) }}">Make the best of things its an uphill.</a></h5>
                                    <p>To seek out new life and new civilizations to boldly go where no man has gone before you would see the biggest gift.</p>
                                    <a href="{{ route('blogs.details', 1) }}" class="read-more">READ MORE</a>
                                </div> <!-- /.post-meta -->
                            </div> <!-- /.single-blog -->
                        </div> <!-- /.col- -->
                        <div class="col-md-6 col-12">
                            <div class="single-blog">
                                <div class="image-box">
                                    <img src="images/blog/3.jpg" alt="">
                                    <div class="overlay"><a href="#" class="date">Feb 06, 2018</a></div>
                                </div> <!-- /.image-box -->
                                <div class="post-meta">
                                    <h5 class="title"><a href="{{ route('blogs.details', 1) }}">Trouble with the law since</a></h5>
                                    <p>To seek out new life and new civilizations to boldly go where no man has gone before you would see the biggest gift.</p>
                                    <a href="{{ route('blogs.details', 1) }}" class="read-more">READ MORE</a>
                                </div> <!-- /.post-meta -->
                            </div> <!-- /.single-blog -->
                        </div> <!-- /.col- -->
                        <div class="col-md-6 col-12">
                            <div class="single-blog">
                                <div class="image-box">
                                    <img src="images/blog/4.jpg" alt="">
                                    <div class="overlay"><a href="#" class="date">Mar 30, 2018</a></div>
                                </div> <!-- /.image-box -->
                                <div class="post-meta">
                                    <h5 class="title"><a href="{{ route('blogs.details', 1) }}">Kind of torture to have to watch</a></h5>
                                    <p>To seek out new life and new civilizations to boldly go where no man has gone before you would see the biggest gift.</p>
                                    <a href="{{ route('blogs.details', 1) }}" class="read-more">READ MORE</a>
                                </div> <!-- /.post-meta -->
                            </div> <!-- /.single-blog -->
                        </div> <!-- /.col- -->
                        <div class="col-md-6 col-12">
                            <div class="single-blog">
                                <div class="image-box">
                                    <img src="images/blog/5.jpg" alt="">
                                    <div class="overlay"><a href="#" class="date">Apr 14, 2018</a></div>
                                </div> <!-- /.image-box -->
                                <div class="post-meta">
                                    <h5 class="title"><a href="{{ route('blogs.details', 1) }}">Make the best of things its an uphill.</a></h5>
                                    <p>To seek out new life and new civilizations to boldly go where no man has gone before you would see the biggest gift.</p>
                                    <a href="{{ route('blogs.details', 1) }}" class="read-more">READ MORE</a>
                                </div> <!-- /.post-meta -->
                            </div> <!-- /.single-blog -->
                        </div> <!-- /.col- --> --}}
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
                        <h5 class="title">Categories</h5>
                        <ul>
                            <li><a href="#">Travel and Aviation</a></li>
                            <li><a href="#">Business Services</a></li>
                            <li><a href="#">Consumer Products</a></li>
                            <li><a href="#">Financial Services</a></li>
                            <li><a href="#">Software Research</a></li>
                        </ul>
                    </div> <!-- /.sidebar-categories -->
                    <div class="sidebar-container sidebar-recent-post">
                        <h5 class="title">Recent Posts</h5>
                        <ul>
                            <li class="clearfix">
                                <img src="images/blog/6.jpg" alt="" class="float-left">
                                <div class="post float-left">
                                    <a href="{{ route('blogs.details', 1) }}">World don't move to beat of just one drum.</a>
                                    <div class="date">5 minutes ago</div>
                                </div>
                            </li>
                            <li class="clearfix">
                                <img src="images/blog/7.jpg" alt="" class="float-left">
                                <div class="post float-left">
                                    <a href="{{ route('blogs.details', 1) }}">Be right for you may not be right for some.</a>
                                    <div class="date">2 days ago</div>
                                </div>
                            </li>
                            <li class="clearfix">
                                <img src="images/blog/8.jpg" alt="" class="float-left">
                                <div class="post float-left">
                                    <a href="{{ route('blogs.details', 1) }}">World don't move to beat of just one drum.</a>
                                    <div class="date">1 month ago</div>
                                </div>
                            </li>
                        </ul>
                    </div> <!-- /.sidebar-recent-post -->
                    <div class="sidebar-container sidebar-archives">
                        <h5 class="title">Archives</h5>
                        <ul>
                            <li><a href="#">January 2018</a></li>
                            <li><a href="#">February 2018</a></li>
                            <li><a href="#">March 2018</a></li>
                        </ul>
                    </div> <!-- /.sidebar-archives -->
                    <div class="sidebar-tags">
                        <h5 class="title">tags</h5>
                        <ul class="clearfix">
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Consulting</a></li>
                            <li><a href="#">Sales</a></li>
                            <li><a href="#">Startup</a></li>
                            <li class="active"><a href="#">Marketing</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Financial</a></li>
                            <li><a href="#">Research</a></li>
                        </ul>
                    </div> <!-- /.sidebar-tags -->
                </div> <!-- /.col- -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.blog-inner-page -->
@endsection
