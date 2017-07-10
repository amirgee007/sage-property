
<!-- Sign in Modal Login form-->

<div class="modal fade" id="loginModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal">&times;</button>

            <div class="container">
                <div class="row">
                    <div class="col-md-6">

                        <div class="sign_logo"><img src="frontend/icons/Signin.png"/></br><span>Sign in</span></div>

                        <div class="sign_form">
                            <form method="post" role="form" class="signInForm" id="signInForm" action="{{ route('login') }}">
                                {{ csrf_field() }}

                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label>email</label>
                                        <input type="email" name="email" class="form-control form" id="email" placeholder="" required/>

                                    </div>
                                    <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label>password</label>
                                        <input type="password" class="form-control" name="password" id="password" placeholder="" required/>


                                            <span style="color: red;" class="help-block" id="errors">
                                        <strong> </strong>
                                            </span>

                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <button type="submit" id="signin_btn" name="submit" class="btn signin_btn"> <img src="frontend/icons/Next-Arrow.png"></button>
                                </div>
                            </form>


                            <p class="new_here">NEW HERE? <a href="#" data-toggle="modal" data-target="#SignupModal" >SIGN UP NOW!</a></p>
                            <a class="fb_sign" href="{{ url('auth/facebook') }}"><img src="frontend/icons/fb.png" alt=""/></a>

{{--                            <a href="{{ url('auth/facebook') }}" class="btn btn-facebook"><i class="fa fa-facebook"></i> Facebook</a>--}}

                            {{--<a class="forgot_pass" href="#">FORGOTTEN PASSWORD</a>--}}

                            <a  class="forgot_pass" data-toggle="modal" data-target="#forgotPassModal" title="Forgot Password" href="#"> FORGOTTEN PASSWORD?</a>

                            {{--<a class="forgot_pass" href="{{ route('password.request') }}">--}}
                                {{--FORGOTTEN PASSWORD?--}}
                            {{--</a>--}}

                        </div><!-- sign_form -->
                    </div>
                </div>
            </div> <!--Container -->

        </div>


    </div>
</div>
<!-- Sign in Modal Login form-->


<!-- Forgot Password Modal Login form-->
<div class="modal fade" id="forgotPassModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal">&times;</button>

            <div class="container">
                <div class="row">
                    <div class="col-md-6">

                        <div class="sign_logo"><img src="frontend/icons/Signin.png"/></br><span>Reset Password</span></div>

                        <div class="sign_form">

                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <form method="post" role="form" class="signInForm" action="{{ route('password.email') }}">
                                {{ csrf_field() }}

                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label for="email">Email</label>
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-xs-12">

                                    <button style="margin-top: 30px; background-color: #fe2846" type="submit"  name="submit" class="btn btn-danger">Password Reset Link <img src="frontend/icons/Next-Arrow.png"></button>
                                </div>
                            </form>


                        </div><!-- forgot_pass_form -->
                    </div>
                </div>
            </div> <!--Container -->

        </div>


    </div>
</div>
<!-- Sign in Modal Login form-->


<!-- Sign Up Modal Login form-->
<div class="modal fade" id="SignupModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal">&times;</button>

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
                                        <input type="text" name="name" class="form-control form" id="name" placeholder="" required/>

                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>

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



<!-- Sign Up Intro Modal-->
<div class="modal fade" id="SignupIntroModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal">&times;</button>

            <div class="container">
                <div class="row">
                    <div class="col-md-6">

                        <div class="sign_intro">
                            <h2>WELCOME TO <span>SAGE</span></h2>
                            <h3>FOR US TO <strong>UNDERSTAND YOU</strong><span>BETTER...</span></h3>
                            <div class="sign_intro_content">
                                <p>we value your opinions as they allow us to understand you better and provide the quality choices that best suit you.</p>
                            </div>
                            <a data-toggle="modal" data-target="#QuestionnaireModal" href="#">Continue</a>

                        </div><!-- sign_intro -->
                    </div>
                </div>
            </div> <!--Container -->

        </div>
    </div>
</div>
<!-- Sign Up  Intro Modal-->

<!-- QuestionnaireModal Modal-->
<div class="modal fade" id="QuestionnaireModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal">&times;</button>

            <div class="container">
                <div class="row">
                    <div class="col-md-7">

                        <div class="hangout_form">
                            <span id="complete_msg">Hooray! Is completed!</span>
                            <h2><span>06</span> HANGOUT SPOTS<p>Questionnaire Tell Us About?</p>
                            </h2>
                            <form action="{{route('store.questions')}}" method="POST" enctype="multipart/form-data">
                                {{csrf_field()}}


                                <div class="box">

                                    <p>
                                        <select name="monthlySalary" style="background:transparent;border:1px solid #505050;border-bottom:1px solid #505050;color:#505050;font-size:20px;font-weight:100;" class="form-control" required>
                                           <option value="" selected>Monthly Income</option>
                                           <option value="Rm 3000 - 3999" {{(\App\SageProperty\Helper::getMonthlySalaryQs()=='Rm 3000 - 3999') ? 'Selected' : ''}}>Rm 3000 - 3999</option>
                                           <option value="Rm 4000 - 4999" {{(\App\SageProperty\Helper::getMonthlySalaryQs()=='Rm 4000 - 4999') ? 'Selected' : ''}}>Rm 4000 - 4999</option>
                                           <option value="Rm 5000 - 5999" {{(\App\SageProperty\Helper::getMonthlySalaryQs()=='Rm 5000 - 5999') ? 'Selected' : ''}}>Rm 5000 - 5999</option>
                                           <option value="Rm 6000 - 6999" {{(\App\SageProperty\Helper::getMonthlySalaryQs()=='Rm 6000 - 6999') ? 'Selected' : ''}}>Rm 6000 - 6999</option>
                                           <option value="Rm 7000 - 7999" {{(\App\SageProperty\Helper::getMonthlySalaryQs()=='Rm 7000 - 7999') ? 'Selected' : ''}}>Rm 7000 - 7999</option>
                                           <option value="Rm 8000 - 8999" {{(\App\SageProperty\Helper::getMonthlySalaryQs()=='Rm 8000 - 8999') ? 'Selected' : ''}}>Rm 8000 - 8999</option>
                                           <option value="Rm 9000 onwards" {{(\App\SageProperty\Helper::getMonthlySalaryQs()=='Rm 9000 onwards') ? 'Selected' : ''}}>Rm 9000 onwards</option>
                                        </select>
                                        <label for="c1">What's your monthly income?</label>
                                    </p>

                                    <p>
                                        <input type="radio" name="propertyType" value="simple" {{(\App\SageProperty\Helper::getpropertyTypeQs()=='simple') ? 'checked' : ''}} required> Simple<br>
                                        <input type="radio" name="propertyType" value="modern" {{(\App\SageProperty\Helper::getpropertyTypeQs()=='modern') ? 'checked' : ''}} required> Modern<br>
                                        <input type="radio" name="propertyType" value="premium" {{(\App\SageProperty\Helper::getpropertyTypeQs()=='premium') ? 'checked' : ''}} required> Premium<br>
                                    </p>

                                    <p>
                                        <label for="c1">What type of property would you like to stay in??</label>
                                    </p>



                                </div>
                                <input type="submit" value="complete" />

                                <a href="{{route('home')}}" type="button" style="float: right;color: #fff;padding: 15px 20px;font-size: 18px;display: inline-block;letter-spacing: 0px;font-weight: 100;text-transform: uppercase;border: none;margin-left: 10px;margin-top: 60px;width: 155px;" id="black_btn">Back</a>
                            </form>

                        </div>
                    </div>
                </div>
            </div> <!--Container -->

        </div>
    </div>
</div>
<!-- QuestionnaireModal Modal-->





<!-- HangoutModal Modal-->
<div class="modal fade" id="HangoutModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal">&times;</button>

            <div class="container">
                <div class="row">
                    <div class="col-md-7">

                        <div class="hangout_form">
                            <span id="complete_msg">Hooray! Is completed!</span>
                            <h2><span>06</span> HANGOUT SPOTS<p>favourite outdoor activities</p>
                            </h2>
                            <form>
                                <div class="box">
                                    <p>
                                        <input type="checkbox" id="c1" name="cb">
                                        <label for="c1">mountain climbing, hiking, rock climbing, extreme biking</label>
                                    </p>
                                    <p>
                                        <input type="checkbox" id="c2" name="cb">
                                        <label for="c2">bungee jumping</label>
                                    </p>
                                    <p>
                                        <input type="checkbox" id="c3" name="cb">
                                        <label for="c3">camping</label>
                                    </p>
                                    <p>
                                        <input type="checkbox" id="c4" name="cb">
                                        <label for="c4">wildlife / environmental issues</label>
                                    </p>
                                    <p>
                                        <input type="checkbox" id="c5" name="cb">
                                        <label for="c5">charities / volunteer work</label>
                                    </p>
                                    <p>
                                        <input type="checkbox" id="c6" name="cb">
                                        <label for="c6">others</label> <input type="text" id="other" placeholder="please specify...">
                                    </p>


                                </div>
                                <input type="submit" value="complete" />

                                <input type="submit" id="black_btn" value="Back">
                            </form>


                        </div><!-- sign_intro -->
                    </div>
                </div>
            </div> <!--Container -->

        </div>
    </div>
</div>
<!-- HangoutModal Modal-->



<!--  Result Modal -->
<div class="modal fade" id="PromoModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal">&times;</button>

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="promo_modal_area">
                            <h2>NULLAM ALIQUAM VIVERRA</h2>
                            <span>curabitur luctus blandit dignissim.</span>

                            <div class="owl_promo-area">
                                <p>5 results selected just for you</p>
                                <div id="slider-carousel" class="owl-carousel">



                                    <div class="item">
                                        <a class="hoverfx" href="#">
                                            <div class="figure">
                                                <img src="frontend/icons/search.png" />
                                            </div>
                                            <div class="overlay">
                                            </div>
                                            <img src="frontend/images/sage4.png">
                                        </a>

                                        <div class="result_txt">
                                            <h4>The Enclave @ Pulai Springs Resort</h4> <i class="fa fa-heart"></i>
                                        </div>

                                    </div><!-- item -->



                                    <div class="item">
                                        <a class="hoverfx" href="#">
                                            <div class="figure">
                                                <img src="frontend/icons/search.png" />
                                            </div>
                                            <div class="overlay">
                                            </div>
                                            <img src="frontend/images/sage5.png">
                                        </a>

                                        <div class="result_txt">
                                            <h4>Lavile @ Kua la Lumpur </h4> <i class="fa fa-heart-o"></i>
                                        </div>

                                    </div><!-- item -->



                                    <div class="item">
                                        <a class="hoverfx" href="#">
                                            <div class="figure">
                                                <img src="frontend/icons/search.png" />
                                            </div>
                                            <div class="overlay">
                                            </div>
                                            <img src="frontend/images/promo3.png">
                                        </a>

                                        <div class="result_txt">
                                            <h4>Tropicana Bay Residences</h4> <i class="fa fa-heart-o"></i>
                                        </div>

                                    </div><!-- item -->


                                    <div class="item">
                                        <a class="hoverfx" href="#">
                                            <div class="figure">
                                                <img src="frontend/icons/search.png" />
                                            </div>
                                            <div class="overlay">
                                            </div>
                                            <img src="frontend/images/sage4.png">
                                        </a>

                                        <div class="result_txt">
                                            <h4>The Enclave @ Pulai Springs Resort</h4> <i class="fa fa-heart-o"></i>
                                        </div>

                                    </div><!-- item -->



                                </div>
                            </div>
                        </div>

                    </div><!-- sign_intro -->
                </div>
            </div>
        </div> <!--Container -->

    </div>
</div>
<!-- PromoModal Modal-->

<script>

    var loginForm = $("#signInForm");
    var error="{{$errors->first('password')}}";

    loginForm.submit(function(e){
        e.preventDefault();
        var formData = loginForm.serialize();

        $.ajax({
            url:'/login',
            type:'POST',
            data:formData,
            success: function(msg){
                toastr.info("welcome to admin panel");
                window.location.href='/';
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {

                toastr.error("Password or Email Mismatch");
                $("#errors").text("These credentials do not match our records.");

            }

        });
    });



</script>

	

