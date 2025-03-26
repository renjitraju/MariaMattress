<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'MariaMatress') }}</title>

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Poppins:wght@200;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>
<body>
 <!-- Spinner Start -->
 <div id="spinner"
 class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
 <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
     <span class="sr-only">Loading...</span>
 </div>
</div>
<!-- Spinner End -->


<!-- Navbar Start -->
<div class="container-fluid sticky-top">
 <div class="container border-bottom border-1">
     <nav class="navbar navbar-expand-lg navbar-light p-0">
         <a href="index.html" class="navbar-brand pt-4">
             {{-- <h2 class="text-white">Maria Mattress</h2> --}}
             <img src="{{asset('assets/img/logo.png')}}" alt="Maria Mattress" class="img-fluid" width="50%">
         </a>
         <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse"
             data-bs-target="#navbarCollapse">
             <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarCollapse">
             <div class="navbar-nav ms-auto">
                 <a href="index.html" class="nav-item nav-link active">Home</a>
                 <a href="about.html" class="nav-item nav-link">About</a>
                 <a href="product.html" class="nav-item nav-link">Products</a>
                 {{-- <div class="nav-item dropdown">
                     <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                     <div class="dropdown-menu bg-light mt-2">
                         <a href="feature.html" class="dropdown-item">Features</a>
                         <a href="how-to-use.html" class="dropdown-item">How To Use</a>
                         <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                         <a href="blog.html" class="dropdown-item">Blog Articles</a>
                         <a href="404.html" class="dropdown-item">404 Page</a>
                     </div>
                 </div> --}}
                 <a href="contact.html" class="nav-item nav-link">Contact</a>
             </div>
             <a href="" class="btn btn-dark py-2 px-4 d-none d-lg-inline-block">Cart</a>
         </div>
     </nav>
 </div>
</div>

<!-- Navbar End -->

<!-- Contents Start -->
@yield('contents')
<!-- Contents End -->



<!-- Footer Start -->

<div class="container-fluid bg-white footer">
 <div class="container py-5">
     <div class="row g-5">
         <div class="col-md-6 col-lg-5 wow fadeIn" data-wow-delay="0.1s">
             <a href="index.html" class="d-inline-block mb-3">
                 <h1 class="text-primary">Maria Mattress</h1>
             </a>
             <p class="mb-0">
                Our mission is to help you achieve a restful night's sleep by offering a range of mattresses that cater to different needs and preferences. Whether you're looking for memory foam, pocket sprung, or orthopaedic mattresses, we have something for everyone.
             </p>
         </div>

         <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
             <h5 class="mb-4">Our Products</h5>
             <a class="btn btn-link" href="">Zipped Mattress - Single</a>
             <a class="btn btn-link" href="">Zipped Mattress - Double</a>
             <a class="btn btn-link" href="">Zipped Mattress - King</a>

         </div>
         <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
            <h5 class="mb-4">Get In Touch</h5>
            <p><i class="fa fa-map-marker-alt me-3"></i>391 Longridge, Knutsford, Greater Manchester, WA16 8PP</p>
            <p><i class="fa fa-phone-alt me-3"></i>+44 7947 310490</p>
            <p><i class="fa fa-envelope me-3"></i>contact@mariamattress.co.uk</p>
            <div class="d-flex pt-2">
                <a class="btn btn-square btn-outline-primary me-1" href=""><i class="fab fa-twitter"></i></a>
                <a class="btn btn-square btn-outline-primary me-1" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-square btn-outline-primary me-1" href=""><i class="fab fa-instagram"></i></a>
                <a class="btn btn-square btn-outline-primary me-1" href=""><i
                        class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
     </div>
 </div>
 <div class="container wow fadeIn" data-wow-delay="0.1s">
     <div class="copyright">
         <div class="row">
             <div class="col-md-12 text-center text-md-end mb-3 mb-md-0">
                 &copy; <a class="border-bottom" href="#">MariaMatress</a>, All Right Reserved.
                 Designed By <a class="border-bottom" href="#">Renjit</a>
             </div>

         </div>
     </div>
 </div>
</div>

<!-- Footer End -->

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('assets/lib/wow/wow.min.js') }}"></script>
<script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('assets/lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>

<!-- Template Javascript -->
<script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
