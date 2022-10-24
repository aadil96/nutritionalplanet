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

<section class="popular-shop-item  section-padding">
    <div class="container">
        
        <div class="row">
            <div class="col-md-4 col-sm-6 ">
                <div class="single-product-item text-center">
                    <div class="img-holder">
                        <img alt="" src="{{ asset('images/products/milk-thistle.jpeg') }}">
                        <!-- /.overlay -->
                    </div>
                    <!-- /.img-holder -->
                    <div class="title">
                        <a href="single-shop.html"><h3>Milk Thistle </h3></a>
                        {{-- <h2><del class="before-rate">$190.99</del>$100.99</h2> --}}
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 ">
                <div class="single-product-item text-center">
                    <div class="img-holder">
                        <img alt="" src="{{ asset('images/products/super-b-complex.jpeg') }}">
                        <!-- /.overlay -->
                    </div>
                    <!-- /.img-holder -->
                    <div class="title">
                        <a href="single-shop.html"><h3>Super B Complex</h3></a>
                        {{-- <h2><del class="before-rate">$190.99</del>$100.99</h2> --}}
                    </div>
                </div>
            </div>  
            <div class="col-md-4 col-sm-6 ">
                <div class="single-product-item text-center">
                    <div class="img-holder">
                        <img alt="" src="{{ asset('images/products/nettle-leaf.jpeg') }}">
                        <!-- /.overlay -->
                    </div>
                    <!-- /.img-holder -->
                    <div class="title">
                        <a href="single-shop.html"><h3>Nettle Leaf</h3></a>
                        {{-- <h2><del class="before-rate">$190.99</del>$100.99</h2> --}}
                    </div>
                </div>
            </div>              
        </div>
    </div>
    <!-- /.container -->
</section>
@endsection