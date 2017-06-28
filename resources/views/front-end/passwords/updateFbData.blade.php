
@extends('front-end.partials.base')

@section('content')

    <!-- Sign Up Modal Login form-->
    <div class="modal fade in" style="display:block;" id="updateFbPassModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                {{--<button type="button" class="close" data-dismiss="modal">&times;</button>--}}

                <div class="container">
                    <div class="row">
                        <div class="col-md-6">

                            <div class="sign_logo"><img src="frontend/icons/Signup.png"/></br><span>Sign up</span></div>

                            <div class="sign_form">
                                <form action="{{ route('register') }}" method="post" role="form" class="signInForm">
                                    {{ csrf_field() }}

                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                            <label>username</label>
                                            <input type="text" name="name" value="{{request('name')}}" class="form-control form" id="name" placeholder="" required readonly/>

                                            @if ($errors->has('name'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                            @endif
                                        </div>

                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                            <label>email</label>
                                            <input type="email" class="form-control" value="{{request('email')}}" name="email" id="email" required readonly/>
                                        </div>

                                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                            <label>password <span> ( Please key in an alphanumeric of at least 8 characters. )</span></label>
                                            <input type="password" class="form-control" minlength="8" name="password" autofocus id="password" placeholder="" required/>
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
                                        <a href="{{route('home')}}" type="submit" id="back_btn" name="submit" class="btn btn_s">Back</a>
                                        <button type="submit" id="signup_btn" name="submit" class="btn btn_s"> Create an account</button>
                                    </div>
                                </form>


                            </div><!-- sign_form -->
                        </div>
                    </div>
                </div> <!--Container -->

            </div>
        </div>
    </div>
    <!-- Sign Up Modal form-->

    <script type="text/javascript">
        $(document).ready(function() {
            if (!$("#updateFbPassModal").is(':visible')) {
                $('#updateFbPassModal').modal('show');
            }
        });
        toastr.info("Enter Password for registration")
    </script>
@endsection


