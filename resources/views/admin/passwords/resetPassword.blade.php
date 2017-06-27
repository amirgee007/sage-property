@extends('front-end.partials.base')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6" style="align-content: center; margin: 20px">

                <div class="sign_logo" ><img src="frontend/icons/Signup.png"/></br><span>Reset Password</span></div>

                <div class="sign_form">
                    <form action="{{ route('password.request') }}" method="post" role="form" class="signInForm">
                        {{ csrf_field() }}

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label>email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="" required/>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label>password <span> ( Please key in an alphanumeric of at least 8 characters. )</span></label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="" required/>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>confirm password</label>
                                <input type="password" class="form-control" name="password_confirmation" id="password-confirmation" placeholder="" required/>
                            </div>

                        </div>
                        <div class="col-xs-12">
                            <!-- Button -->
                            <a href="{{route('home')}}" type="submit" id="back_btn" name="submit" class="btn btn_s">Cancel</a>
                            <button type="submit" id="signup_btn" name="submit" class="btn btn_s"> Reset Password</button>
                        </div>
                    </form>


                </div><!-- sign_form -->
            </div>
        </div>
    </div> <!--Container -->


    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-8 col-md-offset-2">--}}
                {{--<div class="panel panel-default">--}}
                    {{--<div class="panel-heading">Reset Password</div>--}}

                    {{--<div class="panel-body">--}}
                        {{--@if (session('status'))--}}
                            {{--<div class="alert alert-success">--}}
                                {{--{{ session('status') }}--}}
                            {{--</div>--}}
                        {{--@endif--}}

                        {{--<form class="form-horizontal" role="form" method="POST" action="{{ route('password.request') }}">--}}
                            {{--{{ csrf_field() }}--}}

                            {{--<input type="hidden" name="token" value="{{ $token }}">--}}

                            {{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
                                {{--<label for="email" class="col-md-4 control-label">E-Mail Address</label>--}}

                                {{--<div class="col-md-6">--}}
                                    {{--<input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>--}}

                                    {{--@if ($errors->has('email'))--}}
                                        {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                    {{--</span>--}}
                                    {{--@endif--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
                                {{--<label for="password" class="col-md-4 control-label">Password</label>--}}

                                {{--<div class="col-md-6">--}}
                                    {{--<input id="password" type="password" class="form-control" name="password" required>--}}

                                    {{--@if ($errors->has('password'))--}}
                                        {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                    {{--</span>--}}
                                    {{--@endif--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">--}}
                                {{--<label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>--}}
                                {{--<div class="col-md-6">--}}
                                    {{--<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>--}}

                                    {{--@if ($errors->has('password_confirmation'))--}}
                                        {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('password_confirmation') }}</strong>--}}
                                    {{--</span>--}}
                                    {{--@endif--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group">--}}
                                {{--<div class="col-md-6 col-md-offset-4">--}}
                                    {{--<button type="submit" class="btn btn-primary">--}}
                                        {{--Reset Password--}}
                                    {{--</button>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</form>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
@endsection
