@extends('frontend.common.layout')

@section('content')

<section class="page_breadcrumbs cs background_cover section_padding_top_40 section_padding_bottom_40">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2>Login</h2>
                <ol class="breadcrumb">
                    @if(session()->has('message'))
                    <div class="alert alert-{{session('type')}}"> {{ session('message') }} </div>
                @endif
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
                    <form method="post" action="" class="checkout with_border with_padding form-horizontal"  role="form">
                        @csrf

                        <div class="form-group">
                            <label for="username" class="col-sm-3 control-label">
                                <span class="grey">Nick or email:</span>
                                <span class="required">*</span>
                            </label>
                            <div class="col-sm-9">
                                <input type="email"
                                value="{{old('email')}}" class="form-control" name="email" id="username">
                            </div>
                            @error('email')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-sm-3 control-label">
                                <span class="grey">Password:</span>
                                <span class="required">*</span>
                            </label>
                            <div class="col-sm-9">
                                <input

                                class="form-control" type="password" name="password" id="password">
                            </div>
                            @error('password')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">

                                <input type="submit" class="theme_button color1 topmargin_20" name="login" value="Login">
                                <div class="lost_password">
                                    <a href="#">Lost your password?</a>
                                </div>

                                <div class="lost_password">
                                    <a href="{{route('customerregister')}}">Register Now</a>
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
