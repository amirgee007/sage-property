{{--@include('front-end.partials.base')--}}
@extends('front-end.partials.base')
@section('content')
<section id="our_story">

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="our_story_image">
                    <img class="img-responsive" src="frontend/images/Image01.jpg" alt="choose us" />
                </div>
            </div>

            <div class="col-md-8">
                <div class="our_story_title">
                    <h4><span>Why </span>Sage?</h4>
                </div>

                <div class="our_story_services">
                    <ul class="our_story_list">

                        <!-- feature -->
                        <li class="col-md-6">
                            <div class="our_story_box  animated fadeInRight in" data-animation="fadeInRight" data-delay="0">
                                <span class="iconbox"><img src="frontend/icons/Data_Centric.png" alt="Data"/></span>
                                <div class="our_story_content">
                                    <h6>DATA CENTRIC </h6>
                                    <p>We offer the first-rate options relevant to your preference and affordability.</p>
                                </div>
                            </div>
                        </li>

                        <!-- feature -->
                        <li class="col-md-6">
                            <div class="our_story_box  animated fadeInRight in" data-animation="fadeInRight" data-delay="0">
                                <span href="#" class="iconbox"><img src="frontend/icons/Conveniet.png" alt="Data"/></span>
                                <div class="our_story_content">
                                    <h6>CONVENIENT</h6>
                                    <p>Pursue your dream home at your go.</p>
                                </div>
                            </div>
                        </li>

                        <!-- feature -->
                        <li class="col-md-6">
                            <div class="our_story_box  animated fadeInRight in" data-animation="fadeInRight" data-delay="0">
                                <span href="#" class="iconbox"><img src="frontend/icons/Time-Saving.png" alt="Data"/></span>
                                <div class="our_story_content">
                                    <h6>TIME SAVING</h6>
                                    <p>Searching for your dream home can be time consuming but at Sage, we do the hunt, you do the pick.</p>
                                </div>
                            </div>
                        </li>

                        <!-- feature -->
                        <li class="col-md-6">
                            <div class="our_story_box  animated fadeInRight in" data-animation="fadeInRight" data-delay="0">
                                <span href="#" class="iconbox"><img src="frontend/icons/Personalisation.png" alt="Data"/></span>
                                <div class="our_story_content">
                                    <h6>BETTER PERSONALISATION</h6>
                                    <p>Understanding your information improves our search for the right property just for you.</p>
                                </div>
                            </div>
                        </li>

                    </ul>
                    <!-- end choose-list -->
                </div>

            </div>


        </div>
    </div>

</section>
<!-- our story end-->
<section class="what_hot">
    <div class="container">
        <div class="row">
            <div class="our_story_title hot_title">
                <h2><span>What's</span> hot ?</h2>
            </div>
        </div>

        <div class="row">

            <div class="col-md-4">
                <div class="demo-3" id="effect-1" class="effects clearfix">
                    <div class="single_hot img">
                        <img src="frontend/images/Sage1.png" class="image" alt=""/>
                        <div class="hot_description overlay">
                            <h2><span>FROM</span> RM1,380,000</h2>
                            <ul>
                                <li><img src="frontend/icons/Freeholdx24.png" alt=""/> Freehold</li>
                                <li><img src="frontend/icons/Sqftx24.png" alt=""/> From 4,495 sq ft</li>
                                <li><img src="frontend/icons/Bathroomx24.png" alt=""/> <!--<i class="fa fa-bath" aria-hidden="true"></i>--> 6 Bathrooms</li>
                                <li><img src="frontend/icons/Bedroomx24.png" alt=""/> 5 Bedrooms</li>
                            </ul>

                            <a href="#" class="btn btn_details">details</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="demo-3" id="effect-1" class="effects clearfix">
                    <div class="single_hot img">
                        <img src="frontend/images/Sage2.png" class="image" alt=""/>
                        <div class="hot_description overlay">
                            <h2><span>FROM</span> RM1,380,000</h2>
                            <ul>
                                <li><img src="frontend/icons/Freeholdx24.png" alt=""/> Freehold</li>
                                <li><img src="frontend/icons/Sqftx24.png" alt=""/> From 4,495 sq ft</li>
                                <li><img src="frontend/icons/Bathroomx24.png" alt=""/> <!--<i class="fa fa-bath" aria-hidden="true"></i>--> 6 Bathrooms</li>
                                <li><img src="frontend/icons/Bedroomx24.png" alt=""/> 5 Bedrooms</li>
                            </ul>

                            <a href="#" class="btn btn_details">details</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">

                <div class="single_hot img">
                    <img src="frontend/images/Sage3.png" class="image" alt=""/>
                    <div class="hot_description overlay">
                        <h2><span>FROM</span> RM1,380,000</h2>
                        <ul>
                            <li><img src="frontend/icons/Freeholdx24.png" alt=""/> Freehold</li>
                            <li><img src="frontend/icons/Sqftx24.png" alt=""/> From 4,495 sq ft</li>
                            <li><img src="frontend/icons/Bathroomx24.png" alt=""/> <!--<i class="fa fa-bath" aria-hidden="true"></i>--> 6 Bathrooms</li>
                            <li><img src="frontend/icons/Bedroomx24.png" alt=""/> 5 Bedrooms</li>
                        </ul>

                        <a href="#" class="btn btn_details">details</a>
                    </div>
                </div>

            </div>



        </div>
    </div>
</section>
@endsection
