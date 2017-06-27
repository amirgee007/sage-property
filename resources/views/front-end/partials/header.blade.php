<!--Header-->
<header class="header">

    <div class="container top_header_con">
        <div class="row">
            <div class="top_header">
                <div class="col-md-12">
                    <div class="top_header_bar">
                        <a onclick="openNav()" href="#"><img src="frontend/icons/bars.png"></a>
                    </div>
                    <div class="sign_in">
                        @if (Auth::guest())
                        <a  data-toggle="modal" data-target="#loginModal" title="Sign In" href="#"><img src="frontend/icons/Userx24.png"> Sign in</a>
                        @else
                            <ul style="" class="dropdown">
                                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="/images/user.png" style="width: 30px; height: 30px;">
                            </span>
                                    <span class="username">{{ Auth::user()->name }}</span>
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu extended logout">
                                    <div class="log-arrow-up"></div>
                                    <li>
                                        <a href="{{ route('logout') }}">
                                            <i class="icon_key_alt"></i> Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>

                                    <li>
                                        <a href="{{ route('get.dashboard') }}">
                                            <i class="icon_key_alt"></i> Admin
                                        </a>
                                    </li>
                                </ul>
                            </ul>
                        @endif
                    </div>
                    @include('flash::message')

                </div>
            </div>

        </div>
    </div>

    <section class="hero_section">

        <div class="">
            <div class="row">
                <div id="owl-demo" class="owl-carousel">

                    <!-- <div> -->
                    <!-- <div class="owl-text-overlay"> -->
                    <!-- <img class="logo" src="frontend/Logo.png" alt="logo"/> -->

                    <!-- <h2 class="owl-title">A CLICK CLOSER TO DREAM HOME</h2> -->
                    <!-- <p class="owl-caption hidden-xs">your ideal residence within your reach</p> -->
                    <!-- </div> -->
                    <!-- <img src="images/Banner01.jpg" class="owl-img"> -->
                    <!-- </div> -->



                    <!--TESTIMONIAL 1 -->
                    <div class="item">
                        <div class="">
                            <div class="owl-text-overlay">
                                <img class="logo" src="frontend/Logo.png" alt="logo" />

                                <h2 class="owl-title">A CLICK CLOSER TO DREAM HOME</h2>
                                <p class="owl-caption hidden-xs">your ideal residence within your reach</p>

                                <div class="hero_action_btn">
                                    <a data-toggle="modal" data-target="#SignupIntroModal" title="Invst/Buy" href="#" class="invest_btn">invst/buy</a>
                                    <a data-toggle="modal" data-target="#HangoutModal"  title="Rent" href="#" class="rent_btn">rent</a>
                                </div>

                                <a href="#feature" class="mouse-hover" data-toggle="modal" data-target="#PromoModal"><div class="mouse"></div></a>

                            </div>
                            <img src="frontend/images/Banner01.jpg" class="owl-img">


                        </div>
                    </div>
                    <!--END OF TESTIMONIAL 1 -->
                </div>
            </div>
        </div>
    </section>
</header>