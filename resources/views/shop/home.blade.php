@extends('shop.master')
@section('content')
<div class="slider-area">
    <!-- Slider -->
    <div class="block-slider block-slider4">
        <ul class="" id="bxslider-home4">
            <li>
                <img src="{{asset('images/bac-xanh.jpg')}}" alt="Slide" width="10px" height="10px">
                <div class="caption-group">
                    <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
                </div>
            </li>
            <li><img src="{{asset('images/trang.jpg')}}" alt="Slide" height="200px">
                <div class="caption-group">
                    <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
                </div>
            </li>
            <li><img src="{{asset('images/cam.jpg')}}" alt="Slide">
                <div class="caption-group">
                    <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
                </div>
            </li>
            <li><img src="{{asset('images/xanh-cam-den.jpg')}}" alt="Slide">
                <div class="caption-group">
                    <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
                </div>
            </li>
        </ul>
    </div>
    <!-- ./Slider -->
</div> <!-- End slider area -->

<div class="promo-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="single-promo promo1">
                    <i class="fa fa-refresh"></i>
                    <p>30 Days return</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-promo promo2">
                    <i class="fa fa-truck"></i>
                    <p>Free shipping</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-promo promo3">
                    <i class="fa fa-lock"></i>
                    <p>Secure payments</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-promo promo4">
                    <i class="fa fa-gift"></i>
                    <p>New products</p>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End promo area -->

<div class="maincontent-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="latest-product">
                    <h2 class="section-title">Sản phẩm</h2>
                    <div class="product-carousel">
                        @foreach($products as $key => $product)
                        <div class="single-product">
                            <div class="product-main-img">
                                <img src="{{ asset('/storage/'.$product->image) }}" width="100px" height="100px" alt="">
                                <div class="product-hover">
                                    <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                    <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i>Xem chi tiết</a>
                                </div>
                            </div>

                            <h2><a href="single-product.html">{{ $product->name }}</a></h2>

                            <div class="product-carousel-price">
                                <ins>{{$product->price}}</ins>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
