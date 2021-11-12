<style>
    .pd-wrap {
        padding: 40px 0;
        font-family: 'Poppins', sans-serif;
    }
    .heading-section {
        text-align: center;
        margin-bottom: 20px;
    }
    .sub-heading {
        font-family: 'Poppins', sans-serif;
        font-size: 12px;
        display: block;
        font-weight: 600;
        color: #2e9ca1;
        text-transform: uppercase;
        letter-spacing: 2px;
    }
    .heading-section h2 {
        font-size: 32px;
        font-weight: 500;
        padding-top: 10px;
        padding-bottom: 15px;
        font-family: 'Poppins', sans-serif;
    }
    .user-img {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        position: relative;
        min-width: 80px;
        background-size: 100%;
    }
    .carousel-testimonial .item {
        padding: 30px 10px;
    }
    .quote {
        position: absolute;
        top: -23px;
        color: #2e9da1;
        font-size: 27px;
    }
    .name {
        margin-bottom: 0;
        line-height: 14px;
        font-size: 17px;
        font-weight: 500;
    }
    .position {
        color: #adadad;
        font-size: 14px;
    }
    .owl-nav button {
        position: absolute;
        top: 50%;
        transform: translate(0, -50%);
        outline: none;
        height: 25px;
    }
    .owl-nav button svg {
        width: 25px;
        height: 25px;
    }
    .owl-nav button.owl-prev {
        left: 25px;
    }
    .owl-nav button.owl-next {
        right: 25px;
    }
    .owl-nav button span {
        font-size: 45px;
    }
    .product-thumb .item img {
        height: 100px;
    }
    .product-name {
        font-size: 22px;
        font-weight: 500;
        line-height: 22px;
        margin-bottom: 4px;
    }
    .product-price-discount {
        font-size: 22px;
        font-weight: 400;
        padding: 10px 0;
        clear: both;
    }
    .product-price-discount span.line-through {
        text-decoration: line-through;
        margin-left: 10px;
        font-size: 14px;
        vertical-align: middle;
        color: #a5a5a5;
    }
    .display-flex {
        display: flex;
    }
    .align-center {
        align-items: center;
    }
    .product-info {
        width: 100%;
    }
    .reviews-counter {
        font-size: 13px;
    }
    .reviews-counter span {
        vertical-align: -2px;
    }
    .rate {
        float: left;
        padding: 0 10px 0 0;
    }
    .rate:not(:checked) > input {
        position:absolute;
        top:-9999px;
    }
    .rate:not(:checked) > label {
        float: right;
        width: 15px;
        overflow: hidden;
        white-space: nowrap;
        cursor: pointer;
        font-size: 21px;
        color:#ccc;
        margin-bottom: 0;
        line-height: 21px;
    }
    .rate:not(:checked) > label:before {
        content: '\2605';
    }
    .rate > input:checked ~ label {
        color: #ffc700;
    }
    .rate:not(:checked) > label:hover,
    .rate:not(:checked) > label:hover ~ label {
        color: #deb217;
    }
    .rate > input:checked + label:hover,
    .rate > input:checked + label:hover ~ label,
    .rate > input:checked ~ label:hover,
    .rate > input:checked ~ label:hover ~ label,
    .rate > label:hover ~ input:checked ~ label {
        color: #c59b08;
    }
    .product-dtl p {
        font-size: 14px;
        line-height: 24px;
        color: #7a7a7a;
    }
    .product-dtl .form-control {
        font-size: 15px;
    }
    .product-dtl label {
        line-height: 16px;
        font-size: 15px;
    }
    .form-control:focus {
        outline: none;
        box-shadow: none;
    }
    .product-count {
        margin-top: 15px;
    }
    .product-count .qtyminus,
    .product-count .qtyplus {
        width: 34px;
        height: 34px;
        background: #212529;
        text-align: center;
        font-size: 19px;
        line-height: 36px;
        color: #fff;
        cursor: pointer;
    }
    .product-count .qtyminus {
        border-radius: 3px 0 0 3px;
    }
    .product-count .qtyplus {
        border-radius: 0 3px 3px 0;
    }
    .product-count .qty {
        width: 60px;
        text-align: center;
    }
    .round-black-btn {
        border-radius: 4px;
        background: #212529;
        color: #fff;
        padding: 7px 45px;
        display: inline-block;
        margin-top: 20px;
        border: solid 2px #212529;
        transition: all 0.5s ease-in-out 0s;
    }
    .round-black-btn:hover,
    .round-black-btn:focus {
        background: transparent;
        color: #212529;
        text-decoration: none;
    }

    .product-info-tabs {
        margin-top: 25px;
    }
    .product-info-tabs .nav-tabs {
        border-bottom: 2px solid #d8d8d8;
    }
    .product-info-tabs .nav-tabs .nav-item {
        margin-bottom: 0;
    }
    .product-info-tabs .nav-tabs .nav-link {
        border: none;
        border-bottom: 2px solid transparent;
        color: #323232;
    }
    .product-info-tabs .nav-tabs .nav-item .nav-link:hover {
        border: none;
    }
    .product-info-tabs .nav-tabs .nav-item.show .nav-link,
    .product-info-tabs .nav-tabs .nav-link.active,
    .product-info-tabs .nav-tabs .nav-link.active:hover {
        border: none;
        border-bottom: 2px solid #d8d8d8;
        font-weight: bold;
    }
    .product-info-tabs .tab-content .tab-pane {
        padding: 30px 20px;
        font-size: 15px;
        line-height: 24px;
        color: #7a7a7a;
    }
    .review-form .form-group {
        clear: both;
    }
    .mb-20 {
        margin-bottom: 20px;
    }

    .review-form .rate {
        float: none;
        display: inline-block;
    }
    .review-heading {
        font-size: 24px;
        font-weight: 600;
        line-height: 24px;
        margin-bottom: 6px;
        text-transform: uppercase;
        color: #000;
    }
    .review-form .form-control {
        font-size: 14px;
    }
    .review-form input.form-control {
        height: 40px;
    }
    .review-form textarea.form-control {
        resize: none;
    }
    .review-form .round-black-btn {
        text-transform: uppercase;
        cursor: pointer;
    }
</style>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"><div class="pd-wrap">
    @extends('admin.master')
    @section('content')

        <body class="g-sidenav-show  bg-gray-200">

        <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
            <!-- Navbar -->
            @include('admin.layouts.navbar')
<div class="container">
    <div class="row">
        <div style="text-align: center">
        <h2>Chi tiết sản phẩm </h2>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('/storage/'.$product->image) }}" width="450px" height="400px">
        </div>
        <div class="col-md-6">
            <label>Tên sản phẩm</label>
            <p>- {{$product->name}}</p>
            <label>Mô tả</label>
            <p>- {{$product->desc}}</p>
            <label>Trạng thái</label>
            @if($product->status == 1)
            <p>- Còn hàng</p>
                @else
                <p>- Hết hàng</p>
            @endif
            <lable>Giá</lable>
            <p>- {{$product->price}}Vnd</p>
            <button class="btn btn-warning"><a href="{{ route('product.list') }}">Quay lại</a></button>
        </div>

    </div>
</div>
        </main>
        </body>
@endsection
