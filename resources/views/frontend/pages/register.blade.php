@extends('frontend.common.layout')

@section('content')
<section class="ls ms section_padding_top_40 section_padding_bottom_40 section_full_height">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                <div class="with_background with_padding">

                    @if(session()->has('message'))
        <div class="alert alert-{{session('type')}}"> {{ session('message') }} </div>
    @endif

                    <h4 class="text-center">
                        Sign Up New Account
                    </h4>
                    <hr class="bottommargin_30">
                    <div class="wrap-forms">
                        <form action="{{route('processregister')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group has-placeholder">
                                        <label for="login-name">First Name</label>
                                        <i class="grey fa fa-user"></i>
                                        <input type="text" class="form-control" id="login-name" name='firstname'
                                            placeholder="First Name" value="{{ old('firstname') }}">
                                        @error('firstname')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group has-placeholder">
                                        <label for="login-name">Last Name</label>
                                        <i class="grey fa fa-user"></i>
                                        <input type="text" value="{{ old('lastname') }}" class="form-control" id="login-name" name="lastname"
                                            placeholder="Last Name">
                                    </div>
                                    @error('lastname')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group has-placeholder">
                                        <label for="login-email">Email address</label>
                                        <i class="grey fa fa-envelope-o"></i>
                                        <input type="email" value="{{ old('email') }}" name="email" class="form-control" id="login-email"
                                            placeholder="Email">
                                    </div>
                                    @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group has-placeholder">
                                        <label for="login-password">Password</label>
                                        <i class="grey fa fa-pencil-square-o"></i>
                                        <input type="password" name="password" id="password" class="form-control"
                                            id="login-password" placeholder="Password">
                                    </div>
                                    @error('password')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group has-placeholder">
                                        <label for="login-password2">Retype Password</label>
                                        <i class="grey fa fa-pencil-square-o"></i>
                                        <input type="password" name="password_confirmation" class="form-control"
                                            id="login-password2" placeholder="Retype Password">
                                    </div>
                                    @error('password_confirmation')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <button type="submit" class="theme_button block_button color1">Create an account</button>
                        </form>
                    </div>

                </div>
                <!-- .with_background -->

                <p class="divider_20 text-center">
                    Already registered?
                    <a href="{{route('customerlogin')}}">Log In</a>.
                </p>

            </div>
            <!-- .col-* -->
        </div>
        <!-- .row -->
    </div>
    <!-- .container -->
</section>

@endsection
