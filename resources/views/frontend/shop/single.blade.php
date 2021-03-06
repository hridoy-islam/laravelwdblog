@extends('frontend.common.layout')

@section('content')
<section class="page_breadcrumbs cs background_cover section_padding_top_40 section_padding_bottom_40">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2>{{$data->name}}</h2>

                <ol class="breadcrumb">
                    {{ Breadcrumbs::render('singleproduct', $data->name) }}
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="ls page_portfolio section_padding_top_100 section_padding_bottom_75">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">


                <div class="isotope_container isotope row masonry-layout columns_margin_top_0 columns_margin_bottom_30"
                    data-filters=".isotope_filters" style="position: relative; height: 2400px;">

                    <div class="isotope-item col-lg-6 col-md-6 col-sm-12 category3"
                        style="position: absolute; left: 0%; top: 0px;">
                        <div class="vertical-item gallery-item content-absolute text-center ds">
                            <div class="item-media">
                                <img src="{{$data->thumbnail}}" alt="">
                                <div class="media-links">
                                    <div class="links-wrap">
                                        <a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]"
                                            href="{{$data->thumbnail}}"></a>
                                        <a class="p-link" title="" href="gallery-single.html"></a>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="isotope-item col-lg-6 col-md-6 col-sm-12 category3">
                        <div>

<h1>{{$data->name}}</h1>
<p>{{$data->short_description}}</p>

<p><b>Brand</b>: {{$data->brand->name}}</p>
<h3><b>Price</b> : ${{$data->price}}</h3>



<form action="{{route('addtocart')}}" method="post">
    @csrf
    <h4>Quantity : </h4>
    <input class="form-control" type="number" name="quantity" value="1">
    <input type="hidden" name="product_id" value="{{$data->id}}">
    <input type="hidden" name="product_price" value="{{$data->price}}">
    <button class="btn btn-info">Add To Cart</button>
</form>


                            <p> Stock Available Now : {{$data->stock}} </p>

                        </div>
                    </div>
                </div>


            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">

                <h3>Description</h3>
                <p>{{$data->long_description}}</p>


            </div>
        </div>
    </div>
</section>

@endsection
