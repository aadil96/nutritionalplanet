@extends('layouts.app')

@section('title', 'Products')

@section('content')

<section class="inner-banner pattern-3" style="margin-top: 1rem;">
    <div class="container text-center">
        <h2>Products</h2>
    </div>
</section>

<section class="bread-cumb">
    <div class="container text-center">
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><span>Products</span></li>
        </ul>
    </div>
</section>

<section class="sidebar-pages popular-shop-item">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                <div class="sidebar-page-content section-padding pb0">
                    <div class="inner-page-wrapper section-padding pt0 white-bg">
                        <div class="product-content-box clearfix">
                            <div class="img-box">
                                <div class="single-product-carousel-content-box owl-theme owl-carousel">
                                    <div class="item">
                                        <img src="img/shop/single-1.jpg" alt="Awesome Image" />
                                    </div>
                                    <!-- /.item -->
                                    <div class="item">
                                        <img src="img/shop/single-1.jpg" alt="Awesome Image" />
                                    </div>
                                    <!-- /.item -->
                                    <div class="item">
                                        <img src="img/shop/single-1.jpg" alt="Awesome Image" />
                                    </div>
                                    <!-- /.item -->
                                </div>
                                <!-- /.single-product-carousel-content-box owl-theme-owl-carousel -->
                                <div class="single-product-carousel-thumbnail-box owl-theme owl-carousel">
                                    <div class="item">
                                        <img src="img/shop/single-thumb-1.jpg" alt="Awesome Image" />
                                    </div>
                                    <!-- /.item -->
                                    <div class="item">
                                        <img src="img/shop/single-thumb-2.jpg" alt="Awesome Image" />
                                    </div>
                                    <!-- /.item -->
                                    <div class="item">
                                        <img src="img/shop/single-thumb-1.jpg" alt="Awesome Image" />
                                    </div>
                                    <!-- /.item -->
                                </div>
                                <!-- /.single-product-carousel-thumbnail-box owl-theme owl-carousel -->
                            </div>
                            <div class="content-box">
                                <h2>Kobo Multi Stepper </h2>
                                <div class="review-box">
                                    <ul class="list-inline">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <span>(2 Customers Review)</span>
                                </div>
                                <span class="price"><del>$230.99</del> $200.99</span>
                                <p>Working from home meant we could vary snack and coffee breaks, change our desks or view, goof off, drink on the job, even spend the day in pajamas</p>
                                <div class="location-box">
                                    <p>Check Delivery Option at Your Location:</p>
                                    <form action="#">
                                        <input type="text" placeholder="Pincode">
                                        <button type="submit">Check</button>
                                        <br />
                                        <span>Expected Delivery in 4-10 Days</span>
                                    </form>
                                    <div class="add-to-cart-box">
                                        <input type="number" name="quantity" min="1" value="1">
                                        <a href="cart.html" class="thm-btn">Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-tab-box">
                            <div class="tab-title">
                                <ul role="tablist">
                                    <li class="active" data-tab-name="description"><a href="#description" aria-controls="description" role="tab" data-toggle="tab">Item Details</a></li>
                                    <li data-tab-name="review-box"><a href="#review-box" aria-controls="review-box" role="tab" data-toggle="tab">Reviews(2)</a></li>
                                </ul>
                            </div>
                            <div class="tab-content">
                                <div class="single-tab-content tab-pane fade in active" id="description">
                                    <p>Easy to install, full paisa wasool , the package was good without any damage but shipping is late remaing everything is good go for it it is better than other threadmill</p>
                                    <h3>Highlights</h3>
                                    <ul>
                                        <li>Training for the game of life </li>
                                        <li>Brand: Energie Fitness </li>
                                        <li>Type: Motorized Treadmill Display </li>
                                        <li>Features: Distance, Program, Pulse, Speed, Calories and heart rate program </li>
                                        <li>Speed Range: 0.5-13KM/H </li>
                                        <li>Emergency Stop: Key </li>
                                        <li>Foldable: Yes </li>
                                        <li>Inclination Level: Yes (manual) Maximum User Weight: 110kg Motor </li>
                                        <li>Power: 2 HP User/ Installation Manual: Yes </li>
                                        <li>Warranty; 3 Months SUPC: SDL394564365</li>
                                    </ul>
                                </div>
                                <div class="single-tab-box tab-pane fade" id="review-box">
                                    <div class="review-box">
                                        <div class="single-review-box">
                                            <div class="img-box">
                                                <img src="img/shop/review-thumb-1.jpg" alt="Awesome Image" />
                                            </div>
                                            <div class="text-box">
                                                <div class="top-box clearfix">
                                                    <div class="title pull-left">
                                                        <h2>William Simith</h2>
                                                    </div>
                                                    <div class="rating-box pull-right">
                                                        <span class="time">21/08/2015  at  09.45</span>
                                                        <ul class="review-star">
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <p>Many web sites still sed in their infancy Various versions have sed evolveed over the years, sometimes by there accident, sometimes all times purpose rationally sed encounter se consequencess ut that are at sed extremely well painful or again is there anyone who loves or seds of pursues.</p>
                                                </div>
                                                <div class="bottom-box">
                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-angle-up"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-angle-down"></i></a></li>
                                                        <li class="reply"><a href="#">Reply</a></li>
                                                        <li><a href="#">Share</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-review-box">
                                            <div class="img-box">
                                                <img src="img/shop/review-thumb-2.jpg" alt="Awesome Image" />
                                            </div>
                                            <div class="text-box">
                                                <div class="top-box clearfix">
                                                    <div class="title pull-left">
                                                        <h2>Darreno Picaso</h2>
                                                    </div>
                                                    <div class="rating-box pull-right">
                                                        <span class="time">26/08/2015  at  05.30</span>
                                                        <ul class="review-star">
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <p>Many web sites still sed in their infancy Various versions have sed evolveed over the years, sometimes by there accident, sometimes all times purpose rationally sed encounter se consequencess ut that are at sed extremely well painful or again is there anyone who loves or seds of pursues.</p>
                                                </div>
                                                <div class="bottom-box">
                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-angle-up"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-angle-down"></i></a></li>
                                                        <li class="reply"><a href="#">Reply</a></li>
                                                        <li><a href="#">Share</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="reply-box review-form-box">
                                        <div class="section-title">
                                            <h1><span>Give your Review</span></h1>
                                        </div>
                                        <!-- /.section-title -->
                                        <div class="add-rating-box">
                                            <h4>Your Rating</h4>
                                            <ul>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="text" placeholder="Your Name*" />
                                            </div>
                                            <!-- /.col-md-6 -->
                                            <div class="col-md-6">
                                                <input type="text" placeholder="Your Email*" />
                                            </div>
                                            <!-- /.col-md-6 -->
                                            <div class="col-md-12">
                                                <textarea placeholder="Comments"></textarea>
                                            </div>
                                            <!-- /.col-md-12 -->
                                            <div class="col-md-12">
                                                <button type="submit" class="arrow-push-out-right"><span>Submit Now <i class="fa fa-caret-right"></i></span></button>
                                            </div>
                                            <!-- /.col-md-12 -->
                                        </div>
                                        <!-- /.row -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.inner-page-wrapper -->
                </div>
                <!-- /.sidebar-page-content -->
            </div>
            <!-- /.col-md-9 -->
        </div>
    </div>
</section>

@endsection