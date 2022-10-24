@extends('layouts.app')
@section('content')

    <section class="rev_slider_wrapper">
        <div id="slider1" class="rev_slider" data-version="5.0">
            <ul>
                <li data-transition="random">
                    <img src="img/slides/1-1.jpg" alt="" width="1920" height="705" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1">
                    <div class="tp-caption tp-resizeme banner-caption-h1" data-x="center" data-hoffset="0" data-y="top" data-voffset="385" data-transform_idle="o:1;" data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none" data-start="500">
                        Encouraging you to lead a healthy
                    </div>
                    <div class="tp-caption  tp-resizeme banner-caption-h1" data-x="center" data-hoffset="0" data-y="top" data-voffset="480" data-transform_idle="o:1;" data-transform_in="x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:[-100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-start="1500">
                        and active lifestyle.
                    </div>
                    <div class="tp-caption tp-resizeme banner-caption-h1-large banner-caption-bg" data-x="center" data-hoffset="0" data-y="top" data-voffset="570" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-start="2000">
                        <span><img src="img/slides/title-decor.png" alt=""> Nutritional Planet</span>
                    </div>
                </li>
                {{-- <li data-transition="random">
                    <img src="img/slides/1-2.jpg" alt="" width="1920" height="705" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="2">
                    <div class="tp-caption tp-resizeme banner-caption-h1" data-x="right" data-hoffset="0" data-y="top" data-voffset="385" data-transform_idle="o:1;" data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none" data-start="500">
                        Awesome fitness Gym
                    </div>
                    <div class="tp-caption  tp-resizeme banner-caption-h1" data-x="right" data-hoffset="0" data-y="top" data-voffset="480" data-transform_idle="o:1;" data-transform_in="x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:[-100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-start="1000">
                        Html Template
                    </div>
                    <div class="tp-caption  tp-resizeme banner-caption-h1-large banner-caption-bg" data-x="right" data-hoffset="15" data-y="top" data-voffset="570" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-start="1500">
                        <span><img src="img/slides/title-decor.png" alt=""> Don't Miss it</span>
                    </div>
                </li>
                <li data-transition="random" class="slider-3">
                    <img src="img/slides/1-3.jpg" alt="" width="1920" height="705" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="3">
                    <div class="tp-caption tp-resizeme banner-caption-h1 banner-caption-bg" data-x="left" data-hoffset="15" data-y="top" data-voffset="340" data-transform_idle="o:1;" data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-start="500">
                        <span>Get Maximum From Us</span>
                    </div>
                    <div class="tp-caption  tp-resizeme feature-list-item " data-x="left" data-hoffset="15" data-y="top" data-voffset="460" data-transform_idle="o:1;" data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none" data-start="700">
                        <div class="icon-box">
                            <div class="box">
                                <i class="fa fa-database"></i>
                            </div>
                        </div>
                        <div class="text-box">
                            <p>Responsive Layout</p>
                        </div>
                    </div>
                    <div class="tp-caption  tp-resizeme feature-list-item " data-x="left" data-hoffset="325" data-y="top" data-voffset="460" data-transform_idle="o:1;" data-transform_in="x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:[-100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-start="800">
                        <div class="icon-box">
                            <div class="box">
                                <i class="fa fa-calculator"></i>
                            </div>
                        </div>
                        <div class="text-box">
                            <p>BMI & IWC Calculator </p>
                        </div>
                    </div>
                    <div class="tp-caption  tp-resizeme feature-list-item " data-x="left" data-hoffset="15" data-y="top" data-voffset="545" data-transform_idle="o:1;" data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none" data-start="900">
                        <div class="icon-box">
                            <div class="box">
                                <i class="fa fa-codepen"></i>
                            </div>
                        </div>
                        <div class="text-box">
                            <p>Premium Plugins Free</p>
                        </div>
                    </div>
                    <div class="tp-caption  tp-resizeme feature-list-item " data-x="left" data-hoffset="325" data-y="top" data-voffset="545" data-transform_idle="o:1;" data-transform_in="x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:[-100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-start="1000">
                        <div class="icon-box">
                            <div class="box">
                                <i class="fa fa-calendar"></i>
                            </div>
                        </div>
                        <div class="text-box">
                            <p>Active Contact Form</p>
                        </div>
                    </div>
                    <div class="tp-caption  tp-resizeme feature-list-item " data-x="left" data-hoffset="15" data-y="top" data-voffset="630" data-transform_idle="o:1;" data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none" data-start="1100">
                        <div class="icon-box">
                            <div class="box">
                                <i class="fa fa-users"></i>
                            </div>
                        </div>
                        <div class="text-box">
                            <p>MailChimp Support</p>
                        </div>
                    </div>
                    <div class="tp-caption  tp-resizeme feature-list-item " data-x="left" data-hoffset="325" data-y="top" data-voffset="630" data-transform_idle="o:1;" data-transform_in="x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:[-100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-start="1200">
                        <div class="icon-box">
                            <div class="box">
                                <i class="fa fa-calculator "></i>
                            </div>
                        </div>
                        <div class="text-box">
                            <p>Free customer Support</p>
                        </div>
                    </div>
                    <div class="tp-caption  tp-resizeme  " data-x="left" data-hoffset="15" data-y="top" data-voffset="742" data-transform_idle="o:1;" data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none" data-start="2000">
                        <img src="img/slides/title-decor2.png" alt="Awesome Image" />
                    </div>
                    <div class="tp-caption tp-resizeme  " data-x="left" data-hoffset="200" data-y="top" data-voffset="730" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-start="2300">
                        <a href="#" class="thm-btn borderd arrow-push-in-right"><span>More Details <i class="fa fa-caret-right"></i></span></a>
                    </div>
                    <div class="tp-caption tp-resizeme  " data-x="left" data-hoffset="400" data-y="top" data-voffset="730" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-start="2600">
                        <a href="pricing.html" class="thm-btn arrow-push-in-right"><span>Buy Now <i class="fa fa-caret-right"></i></span></a>
                    </div>
                </li> --}}
            </ul>
        </div>
    </section>
    <section class="workout-schedules-area">
        <div class="container">
            <div class="section-title">
                <h1><span>Our Products</span></h1>
            </div>
            <div class="row">
                <!--Start single item-->
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="single-item">
                        <div class="img-holder">
                            <img alt="" src="{{ asset('images/products/milk-thistle.jpeg') }}">
                            <div class="overlay">
                                <div class="icon-holder">
                                    <a href="#"><i class="fa fa-share"></i></a>
                                </div>
                            </div>
                            {{-- <div class="date">
                                <h4>Day<br>01</h4>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <!--End single item-->

                <!--Start single item-->
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="single-item">
                        <div class="img-holder">
                            <img alt="" src="{{ asset('images/products/super-b-complex.jpeg') }}">
                            <div class="overlay">
                                <div class="icon-holder">
                                    <a href="#"><i class="fa fa-share"></i></a>
                                </div>
                            </div>
                            {{-- <div class="date">
                                <h4>Day<br>01</h4>
                            </div> --}}
                        </div>
                        {{-- <div class="content">
                            <h3> Chest & Triceps<span>( Body Building )</span></h3>
                            <ul>
                                <li><i class="fa fa-clock-o"></i> Duration : 1 Hour</li>
                                <li><i class="fa fa-user"></i>Stepthen Adams</li>
                            </ul>
                            <div class="schedules-list">
                                <h4>Chest :</h4>
                                <ul>
                                    <li><i class="fa fa-check"></i>Incline dumbbell press - 4 sets of 8 to 10 reps. </li>
                                    <li><i class="fa fa-check"></i>Flatbench barbell press - 4 sets of 8 to 12 reps. </li>
                                    <li><i class="fa fa-check"></i>Incline dumbbell flies - 4 sets of 8 to 12 reps. </li>
                                    <li><i class="fa fa-check"></i>Cable crossovers - 2 sets of 12 to 18 reps.</li>
                                </ul>
                            </div>
                            <div class="schedules-list bottom">
                                <h4>Triceps :</h4>
                                <ul>
                                    <li><i class="fa fa-check"></i>Pushdowns - 4 sets of 8 to 12 reps.</li>
                                    <li><i class="fa fa-check"></i>Extensions using a rope - 2 sets of 12 to 18 reps.</li>
                                </ul>
                            </div>
                            <a href="single-workout.html" class="arrow-push-out-right"><span>View EXERCISE Plans <i class="fa fa-caret-right"></i></span></a>
                        </div> --}}
                    </div>
                </div>
                <!--End single item-->

                <!--Start single item-->
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="single-item">
                        <div class="img-holder">
                            <img alt="" src="{{ asset('images/products/nettle-leaf.jpeg') }}">
                            <div class="overlay">
                                <div class="icon-holder">
                                    <a href="#"><i class="fa fa-share"></i></a>
                                </div>
                            </div>
                            {{-- <div class="date">
                                <h4>Day<br>01</h4>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <!--End single item-->
            </div>
        </div>
    </section>

@endsection
