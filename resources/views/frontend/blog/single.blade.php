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


            <!-- sidebar -->
 <aside class="col-sm-5 col-md-4 col-lg-4">


    <div class="widget widget_apsc_widget">
        <h3 class="widget-title text-center">Get
            <strong>In Touch</strong>
        </h3>
        <hr class="divider_30_3 zebra_bg">
        <div class="apsc-icons-wrapper clearfix apsc-theme-4">
            <div class="apsc-each-profile">
                <a class="apsc-facebook-icon clearfix" href="#">
                    <div class="apsc-inner-block">
                        <span class="social-icon">
                            <i class="fa fa-facebook apsc-facebook"></i>
                            <span class="apsc-count">24.7K</span>
                            <span class="apsc-media-type">Friends</span>
                        </span>
                    </div>
                </a>
            </div>
            <div class="apsc-each-profile">
                <a class="apsc-twitter-icon clearfix" href="#">
                    <div class="apsc-inner-block">
                        <span class="social-icon">
                            <i class="fa fa-twitter apsc-twitter"></i>
                            <span class="apsc-count">10.4K</span>
                            <span class="apsc-media-type">Followers</span>
                        </span>
                    </div>
                </a>
            </div>
            <div class="apsc-each-profile">
                <a class="apsc-google-plus-icon clearfix" href="#">
                    <div class="apsc-inner-block">
                        <span class="social-icon">
                            <i class="fa fa-google-plus apsc-google-plus"></i>
                            <span class="apsc-count">6.3K</span>
                            <span class="apsc-media-type">Fans</span>
                        </span>
                    </div>
                </a>
            </div>
        </div>

    </div>


    <div class="widget widget_mailchimp">

        <h3 class="widget-title text-center">
            <strong>Newsletter</strong>
        </h3>
        <hr class="divider_30_3 zebra_bg">

        <form class="signup form-inline" action="./" method="get">
            <div class="form-group">
                <input name="email" type="email" class="mailchimp_email form-control" placeholder="Enter your email">
            </div>
            <button type="submit" class="theme_button">Send</button>
            <div class="response"></div>
        </form>

        <p class="topmargin_10">Subscribe to our Newsletter right now to be updated. We promice not to spam!</p>

    </div>


    <div class="widget widget_flickr">

        <h3 class="widget-title text-center">Flickr
            <strong>Widget</strong>
        </h3>
        <hr class="divider_30_3 zebra_bg">
        <ul id="flickr" class="flickr_loaded"><a href="https://live.staticflickr.com/7510/27054858972_f4811c1670_b.jpg" data-gal="prettyPhoto[pp_gal]"><li><img alt="QuoteoftheDay 'The souls in search for God do not mind the religion, and despite different religions, they seek guidance from whomsoever they believe is connected with God.' - Lord Ra Riaz Gohar Shahi" src="https://live.staticflickr.com/7510/27054858972_f4811c1670_m.jpg"></li></a><a href="https://live.staticflickr.com/7087/27081355201_8ff1033a07_b.jpg" data-gal="prettyPhoto[pp_gal]"><li><img alt="QuoteoftheDay 'The more love you have for God and humanity, the better you are.' - His Holiness Younus AlGohar" src="https://live.staticflickr.com/7087/27081355201_8ff1033a07_m.jpg"></li></a><a href="https://live.staticflickr.com/7377/27081358471_53ff2aec4d_b.jpg" data-gal="prettyPhoto[pp_gal]"><li><img alt="QuoteoftheDay 'When greed takes place in your heart, you forget many moral obligations.' - His Holiness Younus AlGohar" src="https://live.staticflickr.com/7377/27081358471_53ff2aec4d_m.jpg"></li></a><a href="https://live.staticflickr.com/7471/26875854870_f9fc88bb8c_b.jpg" data-gal="prettyPhoto[pp_gal]"><li><img alt="QuoteoftheDay 'When the heart embraces divinity, it begins to love everybody.' - HH Younus AlGohar" src="https://live.staticflickr.com/7471/26875854870_f9fc88bb8c_m.jpg"></li></a></ul>
    </div>

    <div class="widget widget_categories">

        <h3 class="widget-title text-center">
            <strong>Categories</strong>
        </h3>

        <ul>

        @foreach ($cat as $category)
        <li><a href="{{route('category.slug', $category->category_slug)}}">{{$category->category_name}}</a></li>
        @endforeach
    </ul>

    </div>

    <div class="widget widget_recent_posts">

        <h3 class="widget-title text-center">Recent
            <strong>Posts</strong>
        </h3>
        <hr class="divider_30_3 zebra_bg">
        <ul class="media-list">


        <li>
            <h4>
                <a href="blog-single-right.html">asas</a>
            </h4>
            <p>Cupim t-bone hamburger sirloin, biltong pork picanha turducken pancetta meatball.</p>
            <div class="content-justify">
                <div class="entry-date small-text">
                    <time class="entry-date" datetime="2017-03-13T08:50:40+00:00">
                        September 26, 2016
                    </time>
                </div>
                <a href="#" class="entry-author">by Admin</a>
            </div>
        </li>




        </ul>
    </div>

    <div class="widget widget_archive">

        <h3 class="widget-title text-center">
            <strong>Archives</strong>
        </h3>
        <hr class="divider_30_3 zebra_bg">
        <form class="topmargin_60" method="post" action="./">

            <div class="form-group select-group">
                <label for="archive" class="sr-only">Select Month</label>
                <div class="input-group">
                    <select aria-required="true" id="archive" name="archive" class="choice empty form-control">
                        <option value="" disabled="" selected="" data-default="">Select Month</option>
                        <option value="january">January</option>
                        <option value="february">February</option>
                        <option value="march">March</option>
                        <option value="january">April</option>
                        <option value="february">May</option>
                        <option value="march">June</option>
                        <option value="march">July</option>
                        <option value="march">August</option>
                        <option value="march">September</option>
                        <option value="march">October</option>
                        <option value="march">November</option>
                        <option value="march">December</option>
                    </select>
                </div>
            </div>

        </form>
    </div>


</aside>
<!-- eof aside sidebar -->


        </div>
    </div>
</section>


@endsection
