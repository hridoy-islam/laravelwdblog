@extends('frontend.common.layout')

@section('content')

<section class="page_breadcrumbs cs background_cover section_padding_top_40 section_padding_bottom_40">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2>Login</h2>
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


                <div class="collapse in" id="registeredForm" aria-expanded="true" style="">
                    <form class="checkout with_border with_padding form-horizontal" role="form">
                        <p>If you have shopped with us before, please enter your details in the boxes below. If you are a new customer please proceed to the Billing &amp; Shipping section.</p>

                        <div class="form-group">
                            <label for="username" class="col-sm-3 control-label">
                                <span class="grey">Nick or email:</span>
                                <span class="required">*</span>
                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="username" id="username">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-sm-3 control-label">
                                <span class="grey">Password:</span>
                                <span class="required">*</span>
                            </label>
                            <div class="col-sm-9">
                                <input class="form-control" type="password" name="password" id="password">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <div class="checkbox">
                                    <label for="rememberme" class="control-label">
                                        <input name="rememberme" type="checkbox" id="rememberme" value="forever"> Remember me
                                    </label>
                                </div>
                                <input type="submit" class="theme_button color1 topmargin_20" name="login" value="Login">
                                <div class="lost_password">
                                    <a href="#">Lost your password?</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

            <!-- eof aside sidebar -->

        </div>

    </div>
</section>

@endsection
