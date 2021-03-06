@extends('master')

@section('main')
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="index.html">Home</a></li>
                <li><a href="/campaign">Campaigns</a></li>
            </ol>
            <h2>Campaigns</h2>
        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Campaign Section ======= -->
    <section id="campaign_index" class="campaign">
        <div class="container">

            <div class="row">

                <div class="col-lg-8 entries">

                    <div class="row">

                        @foreach($campaigns as $campaign)
                            <div class="col-md-6 d-flex align-items-stretch">
                                <article class="entry">

                                    <div class="entry-img">
                                        <img src="{{ asset('storage/'.$campaign->photo) }}" alt="" class="img-fluid">
                                    </div>

                                    <h2 class="entry-title">
                                        <a href=" {{ asset('campaign/'.$campaign->id) }} ">{{ $campaign->title }}</a>
                                    </h2>

                                    <div class="entry-meta">
                                        <ul>
                                            <li class="d-flex align-items-center"><i class="icofont-user"></i> <a
                                                    href="campaign-single.html">{{$campaign->user->name}}</a></li>
                                            <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a
                                                    href="campaign-single.html">
                                                    <time
                                                        datetime="2020-01-01">{{ $campaign->created_at->format('Y-m-d') }}</time>
                                                </a></li>
                                        </ul>
                                    </div>

                                    <div class="entry-content">
                                        <p>
                                            {{ Str::limit($campaign->description, $limit=200) }}
                                        </p>
                                        <div class="read-more">
                                            <a href="{{ asset('campaign/'.$campaign->id) }}">Read More</a>
                                        </div>
                                    </div>

                                </article><!-- End campaign entry -->
                            </div>
                        @endforeach

                    </div>

                    <div class="pagination">
                        <ul class="justify-content-center">
                            <li class="disabled"><i class="icofont-rounded-left"></i></li>
                            <li><a href="#">1</a></li>
                            <li class="active"><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#"><i class="icofont-rounded-right"></i></a></li>
                        </ul>
                    </div>

                </div><!-- End campaign entries list -->

                <div class="col-lg-4">

                    <div class="sidebar">

                        <h3 class="sidebar-title">Search</h3>
                        <div class="sidebar-item search-form">
                            <form action="">
                                <input type="text">
                                <button type="submit"><i class="icofont-search"></i></button>
                            </form>

                        </div><!-- End sidebar search formn-->

                        <h3 class="sidebar-title">Categories</h3>
                        <div class="sidebar-item categories">
                            <ul>
                                @foreach($categories as $category)
                                    <li><a href="#">{{ $category->category_name }} <span>(25)</span></a></li>
                                @endforeach
                            </ul>

                        </div><!-- End sidebar categories-->

                        <h3 class="sidebar-title">Recent Posts</h3>
                        <div class="sidebar-item recent-posts">
                            <div class="post-item clearfix">
                                <img src="assets/img/blog-recent-1.jpg" alt="">
                                <h4><a href="campaign-single.html">Nihil blanditiis at in nihil autem</a></h4>
                                <time datetime="2020-01-01">Jan 1, 2020</time>
                            </div>

                            <div class="post-item clearfix">
                                <img src="assets/img/blog-recent-2.jpg" alt="">
                                <h4><a href="campaign-single.html">Quidem autem et impedit</a></h4>
                                <time datetime="2020-01-01">Jan 1, 2020</time>
                            </div>

                            <div class="post-item clearfix">
                                <img src="assets/img/blog-recent-3.jpg" alt="">
                                <h4><a href="campaign-single.html">Id quia et et ut maxime similique occaecati ut</a>
                                </h4>
                                <time datetime="2020-01-01">Jan 1, 2020</time>
                            </div>

                            <div class="post-item clearfix">
                                <img src="assets/img/blog-recent-4.jpg" alt="">
                                <h4><a href="campaign-single.html">Laborum corporis quo dara net para</a></h4>
                                <time datetime="2020-01-01">Jan 1, 2020</time>
                            </div>

                            <div class="post-item clearfix">
                                <img src="assets/img/blog-recent-5.jpg" alt="">
                                <h4><a href="campaign-single.html">Et dolores corrupti quae illo quod dolor</a></h4>
                                <time datetime="2020-01-01">Jan 1, 2020</time>
                            </div>

                        </div><!-- End sidebar recent posts-->

                        {{--                        <h3 class="sidebar-title">Tags</h3>--}}
                        {{--                        <div class="sidebar-item tags">--}}
                        {{--                            <ul>--}}
                        {{--                                <li><a href="#">App</a></li>--}}
                        {{--                                <li><a href="#">IT</a></li>--}}
                        {{--                                <li><a href="#">Business</a></li>--}}
                        {{--                                <li><a href="#">Business</a></li>--}}
                        {{--                                <li><a href="#">Mac</a></li>--}}
                        {{--                                <li><a href="#">Design</a></li>--}}
                        {{--                                <li><a href="#">Office</a></li>--}}
                        {{--                                <li><a href="#">Creative</a></li>--}}
                        {{--                                <li><a href="#">Studio</a></li>--}}
                        {{--                                <li><a href="#">Smart</a></li>--}}
                        {{--                                <li><a href="#">Tips</a></li>--}}
                        {{--                                <li><a href="#">Marketing</a></li>--}}
                        {{--                            </ul>--}}

                        {{--                        </div><!-- End sidebar tags-->--}}

                    </div><!-- End sidebar -->

                </div><!-- End campaign sidebar -->

            </div>

        </div>
    </section><!-- End campaign Section -->
@endsection
