
@extends('layouts.app')
@section('contents')

    <!-- Hero Start -->
    <div class="container-fluid nhsblue hero-header mb-5">
        <div class="container text-center">
            <h1 class="display-4 text-white mb-3 animated slideInDown">Products</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0 animated slideInDown">
                    <li class="breadcrumb-item"><a class="text-white" href="{{route('home.index')}}">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Products</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Hero End -->

        <!-- Product Start -->
        <div class="container-fluid py-5 border-bottom border-primary border-1">
            <div class="container">
                <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="nhsblue-text mb-3"><span class="fw-light text-dark">Maria Mattress</span> 3 Sizes</h1>
                    <p class="mb-5">Choose Maria Mattress for reliable, high-quality mattress protection that you can trust.</p>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                        <div class="product-item text-center border h-100 p-4">
                            <img class="img-fluid mb-4" src="{{ asset('assets/img/mariamatress-product1.png') }}" alt="mariamatress-product 1">
                            <a href="" class="h6 d-inline-block mb-2">SINGLE : 90 x 190+25 cm</a>
                            <h5 class="text-primary mb-3">£54.99</h5>
                            <cite title="Source Title">*Quantity can be change in the cart</cite>
                            <a href="{{ route('home.cart') }}" class="btn btn-product px-3 mt-3">Add To Cart</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                        <div class="product-item text-center border h-100 p-4">
                            <img class="img-fluid mb-4" src="{{ asset('assets/img/mariamatress-product1.png') }}" alt="mariamatress-product 2">
                            <a href="" class="h6 d-inline-block mb-2">DOUBLE : 140 x 190+25cm</a>
                            <h5 class="text-primary mb-3">£60.99</h5>
                            <cite title="Source Title">*Quantity can be change in the cart</cite>
                            <a href="" class="btn btn-product px-3 mt-3">Add To Cart</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                        <div class="product-item text-center border h-100 p-4">
                            <img class="img-fluid mb-4" src="{{ asset('assets/img/mariamatress-product1.png') }}" alt="mariamatress-product 3">
                            <a href="" class="h6 d-inline-block mb-2">KING : 150 x 200+25cm</a>
                            <h5 class="text-primary mb-3">£69.99</h5>
                            <cite title="Source Title">*Quantity can be change in the cart</cite>
                            <a href="" class="btn btn-product px-3 mt-3">Add To Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product End -->

@endsection

