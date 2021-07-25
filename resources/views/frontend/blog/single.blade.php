@extends('frontend.common.layout')

@section('content')

<section class="page_breadcrumbs cs background_cover section_padding_top_40 section_padding_bottom_40">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2>{{ $data->title }}</h2>
            </div>
        </div>
    </div>
</section>
<section class="ls section_padding_top_150 section_padding_bottom_150">
    <div class="container">
        <div class="row">

            <div class="col-sm-7 col-md-8 col-lg-8">

                <article class="single-post vertical-item content-padding with_border ">
                    <div class="entry-thumbnail item-media">
                        <img src="{{$data->thumbnail}}" alt="">
                    </div>
                    <div class="item-content top-zebra-border">

                        <header class="entry-header content-justify">

                            <h3 class="entry-title">
                                <a href="blog-single-right.html" rel="bookmark">{{$data->title}}</a>
                            </h3>

                            <a href="#" class="entry-author">by {{$data->user->name}}</a>


                        </header>
                        <!-- .entry-header -->

                        <div class="entry-content">
                            <p>{{$data->description}}</p>


                        </div>
                        <!-- .entry-content -->

                    </div>
                    <!-- .item-content -->

                </article>


                <div class="author-meta side-item content-padding cs">

                    <div class="row">

                        <div class="col-md-4">
                            <div class="item-media">
                                <img src="{{$data->user->thumbnail}}" alt="">
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="item-content">
                                <h4 class="bold text-uppercase">{{$data->user->name}}</h4>
                                <hr class="divider_30_3 divider_left zebra_bg divider_20">

                                <p>Ground round drumstick shank beef burgdoggen tail alcatra frankfurter boudin rump prosciutto meatball capicola flank. Swine capicola pig shoulder fatback prosciutto. Rump</p>
                                <!-- <div class="author-social"> -->
                                <div class="darklinks">
                                    <a href="{{$data->user->facebook}}" class="social-icon soc-facebook"></a>
                                    <a href="{{$data->user->github}}" class="social-icon soc-github"></a>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>


                @include('frontend.common.comment')



                <div class="row columns_padding_5 page-nav">
                    <div class="col-md-6">
                        <div class="with_padding_small text-center ds bg_teaser after_cover darkgrey_bg" style="background-image: url(&quot;images/gallery/05.jpg&quot;);">
                            <img src="images/gallery/05.jpg" alt="">
                            <div class="item-content">
                                <div class="small-text highlightlinks">
                                    <a href="blog-single-right.html">Prev</a>
                                </div>
                                <h4>
                                    <a href="blog-single-right.html" rel="bookmark">Pastrami pancetta beef spare ribs ground round </a>
                                </h4>
                            </div>
                            <!-- eof .item-content -->
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="with_padding_small text-center ds bg_teaser after_cover darkgrey_bg" style="background-image: url(&quot;images/gallery/03.jpg&quot;);">
                            <img src="images/gallery/03.jpg" alt="">
                            <div class="item-content">
                                <div class="small-text highlightlinks">
                                    <a href="blog-single-right.html">Next</a>
                                </div>
                                <h4>
                                    <a href="blog-single-right.html" rel="bookmark">Pancetta tenderloin drumst jerky filet mignon boudin</a>
                                </h4>
                            </div>
                            <!-- eof .item-content -->
                        </div>
                    </div>

                </div>

            </div>
            <!--eof .col-sm-8 (main content)-->


           @include('frontend.common.sidebar');

        </div>
    </div>
</section>


@endsection
