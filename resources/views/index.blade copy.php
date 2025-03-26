
    @extends('layouts.app')
    @section('contents')

        <!-- Homebanner Start -->
        <div class="container-fluid nhsblue hero-header mb-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 text-center text-lg-start">
                        <h3 class="fw-light text-white animated slideInRight">Grade 100% Water Proof</h3>
                        <h1 class="display-4 text-white animated slideInRight">Heavy Duty <span class="fw-light text-dark bg-info">Premium Zipped Mattress Protector</span> NHS Hospital</h1>
                        <p class="text-white mb-4 animated slideInRight">Available in SINGLE, DOUBLE & KING Sizes</p>
                        <a href="{{route('home.products')}}" class="btn btn-dark py-2 px-4 me-3 animated slideInRight">Shop Now</a>
                    </div>
                    <div class="col-lg-6">
                        <img class="img-fluid animated pulse infinite" src="{{ asset('assets/img/homeimage.png') }}" alt="Mattress Protector">
                    </div>
                </div>
            </div>
        </div>
        <!-- Homebanner end -->

        <!-- About Start -->
        <div class="container-fluid py-5 border-bottom border-primary border-1">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <img class="img-fluid animated pulse infinite" src="{{ asset('assets/img/aboutimage.png') }}">
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <h1 class="nhsblue-text  mb-4">Maria Mattress Protectors <span class="fw-light text-dark">Top-Quality Healthcare Products</span></h1>
                        <p class="mb-4">At Maria Mattress, our mission is to provide unparalleled protection for your sleep sanctuary. We are dedicated to ensuring that every mattress is safeguarded against spills, allergens, and wear, allowing you to enjoy a restful night's sleep with peace of mind. Our innovative products combine comfort, durability, and style, so you can rest easy knowing that your investment in quality sleep is well protected.</p>
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
                <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                    <h1 class="nhsblue-text mb-3"><span class="fw-light text-dark">Maria Mattress Protectors </span> 3 Sizes</h1>
                    <p class="mb-5">Choose Maria Mattress Protectors for reliable, high-quality mattress protection that you can trust.</p>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                        <div class="product-item text-center border h-100 p-4">
                            <img class="img-fluid mb-4" src="{{ asset('assets/img/mariamatress-product1.png') }}" alt="mariamatress-product 1">
                            <a href="" class="h6 d-inline-block mb-2">SINGLE : 90 x 190+25 cm</a>
                            <h5 class="nhsblue-text  mb-3">£54.99</h5>
                            <a href="" class="btn btn-outline-primary px-3">Add To Cart</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                        <div class="product-item text-center border h-100 p-4">
                            <img class="img-fluid mb-4" src="{{ asset('assets/img/mariamatress-product1.png') }}" alt="mariamatress-product 2">
                            <a href="" class="h6 d-inline-block mb-2">DOUBLE : 140 x 190+25cm</a>
                            <h5 class="nhsblue-text  mb-3">£60.99</h5>
                            <a href="" class="btn btn-outline-primary px-3">Add To Cart</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                        <div class="product-item text-center border h-100 p-4">
                            <img class="img-fluid mb-4" src="{{ asset('assets/img/mariamatress-product1.png') }}" alt="mariamatress-product 3">
                            <a href="" class="h6 d-inline-block mb-2">KING : 150 x 200+25cm</a>
                            <h5 class="nhsblue-text  mb-3">£69.99</h5>
                            <a href="" class="btn btn-outline-primary px-3">Add To Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product End -->

        <!-- Feature Start -->
        <div class="container-fluid py-5">
            <div class="container">
                <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="nhsblue-text  mb-3"><span class="fw-light text-dark">Best Features Of Our</span> Mattress</h1>
                    <p class="mb-5">We are committed to enhancing the quality of life by providing products that offer superior protection and durability</p>
                </div>
                <div class="row g-4 align-items-center">
                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                        <div class="row g-5">
                            <div class="col-12 d-flex">
                                <div class="btn-square rounded-circle border flex-shrink-0"
                                    style="width: 80px; height: 80px;">
                                    <i class="fa fa-check fa-2x nhsblue-text "></i>
                                </div>
                                <div class="ps-3">
                                    <h5>Bleach Cleanable</h5>
                                    <hr class="w-25 bg-primary my-2">
                                    <span>Discover a fresh and hygienic sleep experience with our Bleach Cleanable Mattress.</span>
                                </div>
                            </div>
                            <div class="col-12 d-flex">
                                <div class="btn-square rounded-circle border flex-shrink-0"
                                    style="width: 80px; height: 80px;">
                                    <i class="fa fa-check fa-2x nhsblue-text "></i>
                                </div>
                                <div class="ps-3">
                                    <h5>Odour-free</h5>
                                    <hr class="w-25 bg-primary my-2">
                                    <span>Experience the ultimate freshness with our Odour-Free Mattress.</span>
                                </div>
                            </div>
                            <div class="col-12 d-flex">
                                <div class="btn-square rounded-circle border flex-shrink-0"
                                    style="width: 80px; height: 80px;">
                                    <i class="fa fa-check fa-2x nhsblue-text "></i>
                                </div>
                                <div class="ps-3">
                                    <h5>Flame Retardant</h5>
                                    <hr class="w-25 bg-primary my-2">
                                    <span>Prioritise safety without compromising on comfort with our Flame Retardant Mattress.</span>
                                </div>
                            </div>
                            <div class="col-12 d-flex">
                                <div class="btn-square rounded-circle border flex-shrink-0"
                                    style="width: 80px; height: 80px;">
                                    <i class="fa fa-check fa-2x nhsblue-text "></i>
                                </div>
                                <div class="ps-3">
                                    <h5>Machine Washable</h5>
                                    <hr class="w-25 bg-primary my-2">
                                    <span>Say goodbye to hassle and hello to convenience with our Machine Washable Mattress.</span>
                                </div>
                            </div>
                            <div class="col-12 d-flex">
                                <div class="btn-square rounded-circle border flex-shrink-0"
                                    style="width: 80px; height: 80px;">
                                    <i class="fa fa-check fa-2x nhsblue-text "></i>
                                </div>
                                <div class="ps-3">
                                    <h5>Bio Compactible</h5>
                                    <hr class="w-25 bg-primary my-2">
                                    <span>Embrace sustainability without sacrificing comfort with our Bio-Compactible Mattress.</span>
                                </div>
                            </div>
                            <div class="col-12 d-flex">
                                <div class="btn-square rounded-circle border flex-shrink-0"
                                    style="width: 80px; height: 80px;">
                                    <i class="fa fa-check fa-2x nhsblue-text "></i>
                                </div>
                                <div class="ps-3">
                                    <h5>High Abrasion Resistance</h5>
                                    <hr class="w-25 bg-primary my-2">
                                    <span>Enjoy enhanced durability with our High Abrasion Resistance Mattress.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                        <img class="img-fluid animated pulse infinite" src="{{ asset('assets/img/homeimage.png') }}" alt="Maria Matress">
                    </div>
                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                        <div class="row g-5">
                            <div class="col-12 d-flex">
                                <div class="btn-square rounded-circle border flex-shrink-0"
                                    style="width: 80px; height: 80px;">
                                    <i class="fa fa-check fa-2x nhsblue-text "></i>
                                </div>
                                <div class="ps-3">
                                    <h5>100% Waterproof</h5>
                                    <hr class="w-25 bg-primary my-2">
                                    <span>Protect your mattress from spills and accidents with our Waterproof Mattress.</span>
                                </div>
                            </div>
                            <div class="col-12 d-flex">
                                <div class="btn-square rounded-circle border flex-shrink-0"
                                    style="width: 80px; height: 80px;">
                                    <i class="fa fa-check fa-2x nhsblue-text "></i>
                                </div>
                                <div class="ps-3">
                                    <h5>Breathable</h5>
                                    <hr class="w-25 bg-primary my-2">
                                    <span>Stay cool and comfortable all night with our Breathable Mattress.</span>
                                </div>
                            </div>
                            <div class="col-12 d-flex">
                                <div class="btn-square rounded-circle border flex-shrink-0"
                                    style="width: 80px; height: 80px;">
                                    <i class="fa fa-check fa-2x nhsblue-text "></i>
                                </div>
                                <div class="ps-3">
                                    <h5>Wipe Clean</h5>
                                    <hr class="w-25 bg-primary my-2">
                                    <span>Simplify your cleaning routine with our Wipe Clean Mattress.</span>
                                </div>
                            </div>
                            <div class="col-12 d-flex">
                                <div class="btn-square rounded-circle border flex-shrink-0"
                                    style="width: 80px; height: 80px;">
                                    <i class="fa fa-check fa-2x nhsblue-text "></i>
                                </div>
                                <div class="ps-3">
                                    <h5>Antimicrobial Finish</h5>
                                    <hr class="w-25 bg-primary my-2">
                                    <span>Ensure a healthier sleep environment with our Antimicrobial Finish Mattress.</span>
                                </div>
                            </div>
                            <div class="col-12 d-flex">
                                <div class="btn-square rounded-circle border flex-shrink-0"
                                    style="width: 80px; height: 80px;">
                                    <i class="fa fa-check fa-2x nhsblue-text "></i>
                                </div>
                                <div class="ps-3">
                                    <h5>Featherlight & Silky Smooth</h5>
                                    <hr class="w-25 bg-primary my-2">
                                    <span>Indulge in ultimate comfort with our Featherlight & Silky Smooth Mattress.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End -->

        <!-- Testimonial Start -->
        <div class="container-fluid testimonial nhsblue py-5">
            <div class="container text-white py-5">
                <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 800px;">
                    <h1 class="text-white mb-3">Our Customer Said <span class="fw-light text-dark">About Our Mattress</span></h1>
                    <p class="mb-5">Join us on our journey to transform your sleep and wake up refreshed every morning. Discover the Maria Mattress difference today!</p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="owl-carousel testimonial-carousel wow fadeIn" data-wow-delay="0.1s">
                            <div class="testimonial-item text-center" data-dot="1">
                                <img class="img-fluid border p-2" src="{{asset('assets/img/testimonial-1.jpg')}}" alt="testimonial-1">
                                <h5 class="fw-light lh-base text-white">Since switching to this mattress, my sleep quality has improved tremendously. The comfort and support it provides are unmatched. Plus, the antimicrobial finish gives me peace of mind knowing I'm sleeping on a clean surface every night. Highly recommended!</h5>
                                <h5 class="mb-1">Sarah L</h5>
                            </div>
                            <div class="testimonial-item text-center" data-dot="2">
                                <img class="img-fluid border p-2" src="{{asset('assets/img/testimonial-2.jpg')}}" alt="testimonial-2">
                                <h5 class="fw-light lh-base text-white">I never realized how much of a difference a good mattress could make until I tried this one. It's breathable and keeps me cool all night long. The fact that it's also waterproof means no more worrying about spills. It's been a game-changer for our family!</h5>
                                <h5 class="mb-1">John M</h5>
                            </div>
                            <div class="testimonial-item text-center" data-dot="3">
                                <img class="img-fluid border p-2" src="{{asset('assets/img/testimonial-3.jpg')}}" alt="testimonial-3">
                                <h5 class="fw-light lh-base text-white">This mattress is incredible! The featherlight and silky smooth feel makes it seem like I'm sleeping on a cloud. It's also so easy to clean, thanks to its wipe clean surface. I'll never go back to my old mattress again!</h5>
                                <h5 class="mb-1">Emily R</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
    @endsection

