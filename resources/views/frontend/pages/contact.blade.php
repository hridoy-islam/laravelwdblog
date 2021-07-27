@extends('frontend.common.layout')

@section('content')

<section class="page_breadcrumbs cs background_cover section_padding_top_40 section_padding_bottom_40">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2>Contact 2</h2>
                <ol class="breadcrumb">
                    {{ Breadcrumbs::render('contact')}}
                </ol>
            </div>
        </div>
    </div>
</section>
<section class="ls section_padding_top_100 section_padding_bottom_75">
    <div class="container">

        <div class="row topmargin_40">
            <div class="col-sm-4 to_animate animated pullDown" data-animation="pullDown">
                <div class="teaser text-center">
                    <div class="teaser_icon highlight size_normal">
                        <i class="rt-icon2-phone5"></i>
                    </div>

                    <p>
                        <span class="grey">Phone:</span> +12 345 678 9123
                        <br>
                        <span class="grey">Fax:</span> +12 345 678 9123
                    </p>

                </div>
            </div>
            <div class="col-sm-4 to_animate animated pullDown" data-animation="pullDown">
                <div class="teaser text-center">
                    <div class="teaser_icon highlight size_normal">
                        <i class="rt-icon2-location2"></i>
                    </div>

                    <p>
                        PO Box 54378
                        <br> 4321 Your Address,
                        <br> Your City, Your Country
                    </p>

                </div>
            </div>
            <div class="col-sm-4 to_animate animated pullDown" data-animation="pullDown">
                <div class="teaser text-center">
                    <div class="teaser_icon highlight size_normal">
                        <i class="rt-icon2-mail"></i>
                    </div>

                    <p>info@company.com</p>

                </div>
            </div>

        </div>

        <div class="row topmargin_40">
            <div class="col-sm-12 to_animate animated fadeInUp">
                <form class="contact-form" method="post" action="./">
                    <div class="row">

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="name">Full Name
                                    <span class="required">*</span>
                                </label>
                                <input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Full Name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email address
                                    <span class="required">*</span>
                                </label>
                                <input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="subject">Subject
                                    <span class="required">*</span>
                                </label>
                                <input type="text" aria-required="true" size="30" value="" name="subject" id="subject" class="form-control" placeholder="Subject">
                            </div>
                        </div>
                        <div class="col-sm-6">

                            <p class="contact-form-message">
                                <label for="message">Message</label>
                                <textarea aria-required="true" rows="8" cols="45" name="message" id="message" class="form-control" placeholder="Message"></textarea>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">

                            <p class="contact-form-submit text-center topmargin_30">
                                <button type="submit" id="contact_form_submit" name="contact_submit" class="theme_button color1">Send Message</button>
                            </p>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
