
@extends('layouts.app')
@section('contents')

    <!-- Hero Start -->
    <div class="container-fluid nhsblue hero-header mb-5">
        <div class="container text-center">
            <h1 class="display-4 text-white mb-3 animated slideInDown">About Us</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0 animated slideInDown">
                    <li class="breadcrumb-item"><a class="text-white" href="{{route('home.index')}}">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">About</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Hero End -->

    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <img class="img-fluid animated pulse infinite" src="{{ asset('assets/img/homeimage.png') }}" alt="Mattress Protector">
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="nhsblue-text mb-4">Maria Mattress <p><span class="fw-light text-dark">Top-Quality Healthcare Products</span></p></h1>
                        <p class="mb-4">Welcome to Maria Mattress, where we specialize in providing top-quality healthcare products designed to meet the highest standards of hygiene and comfort. Our flagship product, the Heavy Duty Premium Zipped Mattress Protector, is crafted to offer NHS Hospital Grade 100% Waterproof Protection.</p>
                        <p class="mb-4">Our mission is to help you achieve a restful night's sleep by offering a range of mattresses that cater to different needs and preferences. Whether you're looking for memory foam, pocket sprung, or orthopaedic mattresses, we have something for everyone.</p>
                        <p class="mb-4">At Maria Mattress, we believe in the importance of a good night's sleep for overall health and well-being. That's why we use only the finest materials and adhere to strict quality standards to ensure that each mattress provides the support and comfort you deserve.</p>
                        <p class="mb-4">Join us on our journey to transform your sleep and wake up refreshed every morning. Discover the Maria Mattress difference today!</p></p>
                    <a class="btn btn-primary nhsblue-text py-2 px-4" href="">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
@endsection

