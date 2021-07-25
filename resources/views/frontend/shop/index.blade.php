@extends('frontend.common.layout')

@section('content')

<section class="page_breadcrumbs cs background_cover section_padding_top_40 section_padding_bottom_40">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2>Shop</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="./">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#">Gallery</a>
                    </li>
                    <li class="active">Gallery Right Sidebar 2 columns</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="ls section_padding_top_100 section_padding_bottom_75">
    <div class="container">
        <div class="row">


            <div class="col-sm-7 col-md-8 col-lg-8">


                <div class="isotope_container isotope row masonry-layout columns_margin_top_0 columns_margin_bottom_30" data-filters=".isotope_filters" style="position: relative; height: 3252px;">

                    @foreach ($data as $product )


                    <div class="isotope-item col-lg-6 col-md-12 col-sm-12 category3" style="position: absolute; left: 0%; top: 0px;">
                        <div class="vertical-item content-padding gallery-extended-item with_border text-center">
                            <div class="item-media">
                                <img src="{{$product->thumbnail}}" alt="">
                                <div class="media-links">
                                    <a class="abs-link" title="" href="{{route('singleproduct', $product->slug)}}"></a>
                                </div>
                            </div>
                            <div class="item-content top-zebra-border">
                                <h3 class="item-title">
                                <a href="{{route('singleproduct', $product->slug)}}">
                                    {{$product->name}}
                                </a>
                                </h3>
                                <p>{{$product->short_description}}</p>
                            </div>
                        </div>
                    </div>

                    @endforeach


                </div>
                <!-- eof .isotope_container.row -->


                <div class="row">
                    <div class="col-sm-12 text-center">
                        <div class="topmargin_20">
                            <ul class="pagination">
                                <li>
                                    <a href="#">
                                        <span class="sr-only">Prev</span>
                                        <i class="fa  fa-angle-left"></i>
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="#">1</a>
                                </li>
                                <li>
                                    <a href="#">2</a>
                                </li>
                                <li>
                                    <a href="#">3</a>
                                </li>
                                <li>
                                    <a href="#">4</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="sr-only">Next</span>
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
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
                    <hr class="divider_30_3 zebra_bg">
                    <form class="topmargin_60" method="post" action="./">

                        <div class="form-group select-group">
                            <label for="category" class="sr-only">Select Category</label>
                            <div class="input-group">
                                <select aria-required="true" id="category" name="category" class="choice empty form-control">
                                    <option value="" disabled="" selected="" data-default="">Select Category</option>
                                    <option value="january">Categoty 1</option>
                                    <option value="february">Categoty 2</option>
                                    <option value="march">Categoty 3</option>
                                    <option value="january">Categoty 4</option>
                                    <option value="february">Categoty 5</option>
                                    <option value="march">Categoty 6</option>
                                </select>
                            </div>
                        </div>

                    </form>
                </div>

                <div class="widget widget_recent_posts">

                    <h3 class="widget-title text-center">Recent
                        <strong>Posts</strong>
                    </h3>
                    <hr class="divider_30_3 zebra_bg">
                    <ul class="media-list">
                        <li>
                            <h4>
                                <a href="blog-single-right.html">Eod tempor invidunt labore dolore magna</a>
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

                        <li>
                            <h4>
                                <a href="blog-single-right.html">T-bone Ham Meatloaf Biltong Pig Pastra Bacon Boudin Chicken</a>
                            </h4>
                            <p>Pork chop hamburger landjaeger meatloaf, cow bacon drumstick shoulder rump.</p>
                            <div class="content-justify">
                                <div class="entry-date small-text">
                                    <time class="entry-date" datetime="2017-03-13T08:50:40+00:00">
                                        September 07, 2016
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
