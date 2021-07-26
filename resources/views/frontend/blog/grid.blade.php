@extends('frontend.common.layout')

@section('content')

<section class="page_breadcrumbs cs background_cover section_padding_top_40 section_padding_bottom_40">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2>Blog Page</h2>
                <ol class="breadcrumb">
                    {{ Breadcrumbs::render('blog') }}
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="ls section_padding_top_40 section_padding_bottom_40">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 text-center">

                <form action="{{route('search.blog')}}" >

                    <input type="search" required name="query">
                    <button>Search</button>
                </form>


            </div>
        </div>
    </div>
</section>

<section class="ls page_portfolio section_padding_top_100 section_padding_bottom_75">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                <div class="isotope_container isotope row masonry-layout columns_bottom_margin_30"
                    style="position: relative; height: 2474px;">
                    @foreach ($data as $row)


                    <div class="isotope-item col-lg-4 col-md-6 col-sm-12"
                        style="position: absolute; left: 0%; top: 0px;">

                        <article
                            class="vertical-item content-padding mosaic-post post format-standard text-center with_border">

                            <div class="item-media entry-thumbnail">
                                <img src="{{$row->thumbnail}}" alt="">
                                <div class="media-links">
                                    <a class="abs-link" title="" href=""></a>
                                </div>
                            </div>

                            <div class="item-content entry-content">
                                <header class="entry-header">

                                    <h3 class="entry-title">
                                        <a href="{{route('singlepost', $row->slug)}}" rel="bookmark">{{$row->title}}</a>

                                    </h3>

                                    <span class="date main_bg_color">
                                        <time datetime="2017-01-10T15:05:23+00:00" class="entry-date">
                                            {{$row->created_at->format('M d Y')}}
                                        </time>
                                    </span>

                                </header>
                                <!-- .entry-header -->

                                <p>{{$row->description}}</p>

                            </div>
                            <!-- .item-content.entry-content -->
                            <div class="post-social-links text-center">
                                <a href="#" class="social-icon color-icon soc-twitter"></a>
                                <a href="#" class="social-icon color-icon soc-facebook"></a>
                                <a href="#" class="social-icon color-icon soc-google"></a>
                                <a href="#" class="social-icon color-icon soc-flickr"></a>
                            </div>
                        </article>

                    </div>

                    @endforeach

                </div>

            </div>
        </div>
    </div>
</section>

@endsection
