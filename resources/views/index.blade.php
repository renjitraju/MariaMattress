
    @extends('layouts.app')
    @section('contents')

        <!-- Homebanner Start -->
        <div class="container-fluid bg-primary hero-header mb-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 text-center text-lg-start">
                        <h3 class="fw-light text-white animated slideInRight">Grade 100% Water Proof</h3>
                        <h1 class="display-4 text-white animated slideInRight">Heavy Duty <span class="fw-light text-dark">Premium Zipped Mattress Protector</span> NHS Hospital</h1>
                        <p class="text-white mb-4 animated slideInRight">SINGLE. DOUBLE. KING</p>
                        <a href="" class="btn btn-dark py-2 px-4 me-3 animated slideInRight">Shop Now</a>
                        {{-- <a href="" class="btn btn-outline-dark py-2 px-4 animated slideInRight">Contact Us</a> --}}
                    </div>
                    <div class="col-lg-6">
                        <img class="img-fluid animated pulse infinite" src="{{ asset('assets/img/shampoo.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- Homebanner end -->

        <!-- Feature Start -->
        {{-- <div class="container-fluid py-5">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                        <div class="feature-item position-relative bg-primary text-center p-3">
                            <div class="border py-5 px-3">
                                <i class="fa fa-leaf fa-3x text-dark mb-4"></i>
                                <h5 class="text-white mb-0">100% Natural</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                        <div class="feature-item position-relative bg-primary text-center p-3">
                            <div class="border py-5 px-3">
                                <i class="fa fa-tint-slash fa-3x text-dark mb-4"></i>
                                <h5 class="text-white mb-0">Anti Hair Fall</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                        <div class="feature-item position-relative bg-primary text-center p-3">
                            <div class="border py-5 px-3">
                                <i class="fa fa-times fa-3x text-dark mb-4"></i>
                                <h5 class="text-white mb-0">Hypoallergenic</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Feature End -->


        <!-- About Start -->
        <div class="container-fluid py-5 border-bottom border-primary border-1">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <img class="img-fluid animated pulse infinite" src="{{ asset('assets/img/aboutimage.png') }}">
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <h1 class="text-primary mb-4">Maria Mattress<span class="fw-light text-dark">Top-Quality Healthcare Products</span></h1>
                        <p class="mb-4">Welcome to Maria Mattress, where we specialize in providing top-quality healthcare products designed to meet the highest standards of hygiene and comfort. Our flagship product, the Heavy Duty Premium Zipped Mattress Protector, is crafted to offer NHS Hospital Grade 100% Waterproof Protection.</p>
                        <p class="mb-4">Our mattress protectors are meticulously designed with multi-stretch fabric that includes an anti-fungal agent...</p>
                        <a class="btn btn-primary py-2 px-4" href="">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Product Start -->
        <div class="container-fluid py-5 border-bottom border-primary border-1">
            <div class="container">
                <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="text-primary mb-3"><span class="fw-light text-dark">Maria Mattress</span> 3 Sizes</h1>
                    <p class="mb-5">Choose Maria Mattress for reliable, high-quality mattress protection that you can trust.</p>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                        <div class="product-item text-center border h-100 p-4">
                            <img class="img-fluid mb-4" src="{{ asset('assets/img/product-1.png') }}" alt="">
                            {{-- <div class="mb-2">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small>(99)</small>
                            </div> --}}
                            <a href="" class="h6 d-inline-block mb-2">SINGLE : 90 x 190+25 cm</a>
                            <h5 class="text-primary mb-3">£54.99</h5>
                            <a href="" class="btn btn-outline-primary px-3">Add To Cart</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                        <div class="product-item text-center border h-100 p-4">
                            <img class="img-fluid mb-4" src="{{ asset('assets/img/product-1.png') }}" alt="">
                            {{-- <div class="mb-2">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small>(99)</small>
                            </div> --}}
                            <a href="" class="h6 d-inline-block mb-2">DOUBLE : 140 x 190+25cm</a>
                            <h5 class="text-primary mb-3">£60.99</h5>
                            <a href="" class="btn btn-outline-primary px-3">Add To Cart</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                        <div class="product-item text-center border h-100 p-4">
                            <img class="img-fluid mb-4" src="{{ asset('assets/img/product-1.png') }}" alt="">
                            {{-- <div class="mb-2">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small>(99)</small>
                            </div> --}}
                            <a href="" class="h6 d-inline-block mb-2">KING : 150 x 200+25cm</a>
                            <h5 class="text-primary mb-3">£69.99</h5>
                            <a href="" class="btn btn-outline-primary px-3">Add To Cart</a>
                        </div>
                    </div>
                    {{-- <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.7s">
                        <div class="product-item text-center border h-100 p-4">
                            <img class="img-fluid mb-4" src="{{ asset('assets/img/product-2.png') }}" alt="">
                            <div class="mb-2">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small>(99)</small>
                            </div>
                            <a href="" class="h6 d-inline-block mb-2">Hair Growing Shampoo</a>
                            <h5 class="text-primary mb-3">$99.99</h5>
                            <a href="" class="btn btn-outline-primary px-3">Add To Cart</a>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
        <!-- Product End -->

        <!-- Deal Start -->
        {{-- <div class="container-fluid deal bg-primary my-5 py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <img class="img-fluid animated pulse infinite" src="{{ asset('assets/img/shampoo-2.png') }}">
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <div class="bg-white text-center p-4">
                            <div class="border p-4">
                                <p class="mb-2">Natural & Organic Shampoo</p>
                                <h2 class="fw-bold text-uppercase mb-4">Deals of the Day</h2>
                                <h1 class="display-4 text-primary mb-4">$99.99</h1>
                                <h5>Fresh Organic Shampoo</h5>
                                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit. Etiam feugiat rutrum lectus sed auctor.</p>
                                <div class="row g-0 cdt mb-4">
                                    <div class="col-3">
                                        <h1 class="display-6" id="cdt-days"></h1>
                                    </div>
                                    <div class="col-3">
                                        <h1 class="display-6" id="cdt-hours"></h1>
                                    </div>
                                    <div class="col-3">
                                        <h1 class="display-6" id="cdt-minutes"></h1>
                                    </div>
                                    <div class="col-3">
                                        <h1 class="display-6" id="cdt-seconds"></h1>
                                    </div>
                                </div>
                                <a class="btn btn-primary py-2 px-4" href="">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Deal End -->


        <!-- Feature Start -->
        <div class="container-fluid py-5">
            <div class="container">
                <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="text-primary mb-3"><span class="fw-light text-dark">Best Features Of Our</span> Mattress</h1>
                    <p class="mb-5">We are committed to enhancing the quality of life by providing products that offer superior protection and durability</p>
                </div>
                <div class="row g-4 align-items-center">
                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                        <div class="row g-5">
                            <div class="col-12 d-flex">
                                <div class="btn-square rounded-circle border flex-shrink-0"
                                    style="width: 80px; height: 80px;">
                                    <i class="fa fa-check fa-2x text-primary"></i>
                                </div>
                                <div class="ps-3">
                                    <h5>Natural & Organic</h5>
                                    <hr class="w-25 bg-primary my-2">
                                    <span>Lorem ipsum dolor sit amet adipiscing elit aliquet.</span>
                                </div>
                            </div>
                            <div class="col-12 d-flex">
                                <div class="btn-square rounded-circle border flex-shrink-0"
                                    style="width: 80px; height: 80px;">
                                    <i class="fa fa-check fa-2x text-primary"></i>
                                </div>
                                <div class="ps-3">
                                    <h5>Anti Hair Fall</h5>
                                    <hr class="w-25 bg-primary my-2">
                                    <span>Lorem ipsum dolor sit amet adipiscing elit aliquet.</span>
                                </div>
                            </div>
                            <div class="col-12 d-flex">
                                <div class="btn-square rounded-circle border flex-shrink-0"
                                    style="width: 80px; height: 80px;">
                                    <i class="fa fa-check fa-2x text-primary"></i>
                                </div>
                                <div class="ps-3">
                                    <h5>Anti-dandruff</h5>
                                    <hr class="w-25 bg-primary my-2">
                                    <span>Lorem ipsum dolor sit amet adipiscing elit aliquet.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                        <img class="img-fluid animated pulse infinite" src="{{ asset('assets/img/shampoo.png') }}">
                    </div>
                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                        <div class="row g-5">
                            <div class="col-12 d-flex">
                                <div class="btn-square rounded-circle border flex-shrink-0"
                                    style="width: 80px; height: 80px;">
                                    <i class="fa fa-check fa-2x text-primary"></i>
                                </div>
                                <div class="ps-3">
                                    <h5>No Internal Side Effect</h5>
                                    <hr class="w-25 bg-primary my-2">
                                    <span>Lorem ipsum dolor sit amet adipiscing elit aliquet.</span>
                                </div>
                            </div>
                            <div class="col-12 d-flex">
                                <div class="btn-square rounded-circle border flex-shrink-0"
                                    style="width: 80px; height: 80px;">
                                    <i class="fa fa-check fa-2x text-primary"></i>
                                </div>
                                <div class="ps-3">
                                    <h5>No Skin Irritation</h5>
                                    <hr class="w-25 bg-primary my-2">
                                    <span>Lorem ipsum dolor sit amet adipiscing elit aliquet.</span>
                                </div>
                            </div>
                            <div class="col-12 d-flex">
                                <div class="btn-square rounded-circle border flex-shrink-0"
                                    style="width: 80px; height: 80px;">
                                    <i class="fa fa-check fa-2x text-primary"></i>
                                </div>
                                <div class="ps-3">
                                    <h5>No Artificial Smell</h5>
                                    <hr class="w-25 bg-primary my-2">
                                    <span>Lorem ipsum dolor sit amet adipiscing elit aliquet.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End -->







        <!-- Testimonial Start -->
        <div class="container-fluid testimonial bg-primary my-5 py-5">
            <div class="container text-white py-5">
                <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="text-white mb-3">Our Customer Said <span class="fw-light text-dark">About Our Natural Shampoo</span></h1>
                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis aliquet, erat non malesuada consequat, nibh erat tempus risus.</p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="owl-carousel testimonial-carousel wow fadeIn" data-wow-delay="0.1s">
                            <div class="testimonial-item text-center" data-dot="1">
                                <img class="img-fluid border p-2" src="{{asset('assets/img/testimonial-1.jpg')}}" alt="">
                                <h5 class="fw-light lh-base text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis aliquet, erat non malesuada consequat, nibh erat tempus risus, vitae porttitor purus nisl vitae purus. Praesent tristique odio ut rutrum pellentesque. Fusce eget molestie est, at rutrum est. Nullam scelerisque libero nunc, vitae ullamcorper elit volutpat ut.</h5>
                                <h5 class="mb-1">Client Name</h5>
                                <h6 class="fw-light text-white fst-italic mb-0">Profession</h6>
                            </div>
                            <div class="testimonial-item text-center" data-dot="2">
                                <img class="img-fluid border p-2" src="{{asset('img/testimonial-2.jpg')}}" alt="">
                                <h5 class="fw-light lh-base text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis aliquet, erat non malesuada consequat, nibh erat tempus risus, vitae porttitor purus nisl vitae purus. Praesent tristique odio ut rutrum pellentesque. Fusce eget molestie est, at rutrum est. Nullam scelerisque libero nunc, vitae ullamcorper elit volutpat ut.</h5>
                                <h5 class="mb-1">Client Name</h5>
                                <h6 class="fw-light text-white fst-italic mb-0">Profession</h6>
                            </div>
                            <div class="testimonial-item text-center" data-dot="3">
                                <img class="img-fluid border p-2" src="{{asset('img/testimonial-3.jpg')}}" alt="">
                                <h5 class="fw-light lh-base text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis aliquet, erat non malesuada consequat, nibh erat tempus risus, vitae porttitor purus nisl vitae purus. Praesent tristique odio ut rutrum pellentesque. Fusce eget molestie est, at rutrum est. Nullam scelerisque libero nunc, vitae ullamcorper elit volutpat ut.</h5>
                                <h5 class="mb-1">Client Name</h5>
                                <h6 class="fw-light text-white fst-italic mb-0">Profession</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


    @endsection

