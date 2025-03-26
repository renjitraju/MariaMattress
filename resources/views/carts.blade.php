
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

        <!-- Cart Page Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Products</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                          </tr>
                        </thead>
                        <tbody>

                        @if(session('type1') == 'single')


                        <tr id="product1">
                            <th scope="row">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('assets/img/placeholder.png') }}" alt="placeholder-product" class="img-fluid me-5 rounded-circle" style="width: 80px; height: 80px;">
                                </div>
                            </th>
                            <td>
                                <p class="mb-0 mt-4">Single - 90 x 190 x 25 cm</p>
                            </td>
                            <td>
                                <p class="mb-0 mt-4">£ <span id="price">54.99</span></p>
                            </td>
                            <td>
                                <div class="input-group quantity mt-4" style="width: 100px;">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-minus rounded-circle bg-light border">
                                            <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" class="form-control form-control-sm text-center border-0 quantity-input" value="1">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-plus rounded-circle bg-light border">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="mb-0 mt-4">£ <span id="totalprice">54.99</span></p>
                            </td>
                        </tr>
                        @endif

                        @if(session('type2') == 'double')


                        <tr id="product1">
                            <th scope="row">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('assets/img/placeholder.png') }}" alt="placeholder-product" class="img-fluid me-5 rounded-circle" style="width: 80px; height: 80px;">
                                </div>
                            </th>
                            <td>
                                <p class="mb-0 mt-4">DOUBLE : 140 x 190 x 25cm</p>
                            </td>
                            <td>
                                <p class="mb-0 mt-4">£ <span id="price2">60.99</span></p>
                            </td>
                            <td>
                                <div class="input-group quantity2 mt-4" style="width: 100px;">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-minus2 rounded-circle bg-light border">
                                            <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" class="form-control form-control-sm text-center border-0 quantity-input" value="1">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-plus2 rounded-circle bg-light border">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="mb-0 mt-4">£ <span id="totalprice2">60.99</span></p>
                            </td>
                        </tr>
                        @endif



                        @if(session('type3') == 'king')


                        <tr id="product3">
                            <th scope="row">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('assets/img/placeholder.png') }}" alt="placeholder-product" class="img-fluid me-5 rounded-circle" style="width: 80px; height: 80px;">
                                </div>
                            </th>
                            <td>
                                <p class="mb-0 mt-4">King : 150 x 200 x 25cm</p>
                            </td>
                            <td>
                                <p class="mb-0 mt-4">£ <span id="price3">69.99</span></p>
                            </td>
                            <td>
                                <div class="input-group quantity3 mt-4" style="width: 100px;">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-minus3 rounded-circle bg-light border">
                                            <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" class="form-control form-control-sm text-center border-0 quantity-input" value="1">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-plus3 rounded-circle bg-light border">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="mb-0 mt-4">£ <span id="totalprice3">69.99</span></p>
                            </td>
                        </tr>
                        @endif



                        </tbody>
                    </table>
                </div>
                <div class="row g-4 justify-content-end mt-5">

                        <div class="col-lg-7 wow fadeIn" data-wow-delay="0.1s">
                            <p class="mb-4">Please fill the below form. All fileds are mandatory.</p>
                            <div class="wow fadeIn" data-wow-delay="0.3s">
                                <form>
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="name" placeholder="Your Name">
                                                <label for="name">Your Full Name*</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="subject" placeholder="Subject">
                                                <label for="subject">Phone Number*</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <input type="email" class="form-control" id="email" placeholder="Your Email">
                                                <label for="email">Your Email*</label>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-floating">
                                                <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                                                <label for="message">Your Address with Postcode*</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <p class="mb-4">Confirmation will be sent it to your email address</p>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>


                    <div class="col-sm-8 col-md-7 col-lg-6 col-xl-4">
                        <div class="bg-light rounded">
                            <div class="p-4">
                                <h1 class="display-6 mb-4">Cart <span class="fw-normal">Total</span></h1>
                                <div class="d-flex justify-content-between mb-4">
                                    <h5 class="mb-0 me-4">Subtotal:</h5>
                                    <p class="mb-0">£ <span id="productTotal"></span></p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <h5 class="mb-0 me-4">Shipping</h5>
                                    <div class="">
                                        <p class="mb-0">Free</p>
                                    </div>
                                </div>

                            </div>
                            <div class="py-1 mb-0 border-top border-bottom d-flex justify-content-between">
                                <h5 class="mb-0 ps-4 me-4">Total</h5>
                                <p class="mb-0 pe-4">£ <span id="grandTotal"></span></p>
                            </div>

                            <div class="py-4 mb-4 border-top border-bottom text-center">

                                <a href="" class="btn btn-primary mb-0 pe-4">Proceed to Payment</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Cart Page End -->



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function() {
                var price = $('#price').text();
                console.log(price);
            });

        $(document).ready(function() {
            $('.btn-plus').click(function() {
                var $row = $(this).closest('tr');
                var $quantityInput = $row.find('.quantity-input');
                var value = parseInt($quantityInput.val());
                var price = parseFloat($row.find('#price').text());
                value+1;
                $quantityInput.val(value);
                var total = (value * price).toFixed(2);
                $row.find('#totalprice').text(total);
            });

            $('.btn-minus').click(function() {
                var $row = $(this).closest('tr');
                var $quantityInput = $row.find('.quantity-input');
                var value = parseInt($quantityInput.val());
                var price = parseFloat($row.find('#price').text());
                value-1;
                    $quantityInput.val(value);
                    var total = (value * price).toFixed(2);
                    $row.find('#totalprice').text(total);
            });
        });



        $(document).ready(function() {
            $('.btn-plus2').click(function() {
                var $row = $(this).closest('tr');
                var $quantityInput = $row.find('.quantity-input');
                var value = parseInt($quantityInput.val());
                var price = parseFloat($row.find('#price2').text());
                value+1;
                $quantityInput.val(value);
                var total = (value * price).toFixed(2);
                $row.find('#totalprice2').text(total);
            });

            $('.btn-minus2').click(function() {
                var $row = $(this).closest('tr');
                var $quantityInput = $row.find('.quantity-input');
                var value = parseInt($quantityInput.val());
                var price = parseFloat($row.find('#price2').text());
                value-1;
                $quantityInput.val(value);
                var total2 = (value * price).toFixed(2);
                $row.find('#totalprice2').text(total2);
            });

        });

        $(document).ready(function() {
            $('.btn-plus3').click(function() {
                var $row = $(this).closest('tr');
                var $quantityInput = $row.find('.quantity-input');
                var value = parseInt($quantityInput.val());
                var price = parseFloat($row.find('#price3').text());
                value+1;
                $quantityInput.val(value);
                var total = (value * price).toFixed(2);
                $row.find('#totalprice3').text(total);
            });

            $('.btn-minus3').click(function() {
                var $row = $(this).closest('tr');
                var $quantityInput = $row.find('.quantity-input');
                var value = parseInt($quantityInput.val());
                var price = parseFloat($row.find('#price3').text());
                value-1;
                $quantityInput.val(value);
                var total2 = (value * price).toFixed(2);
                $row.find('#totalprice3').text(total2);
            });

        });



        $(document).ready(function() {
            function calculateTotal() {
                var total1 = parseFloat($('#totalprice').text()) || 0;
                var total2 = parseFloat($('#totalprice2').text()) || 0;
                var total3 = parseFloat($('#totalprice3').text()) || 0;
                var grandTotal = total1 + total2 + total3 ;
                //console.log(grandTotal+'grantd');
                $('#grandTotal').text(grandTotal.toFixed(2));
                $('#productTotal').text(grandTotal.toFixed(2));
            }

            // Call calculateTotal on document ready and whenever quantity changes
            $(document).ready(function() {
                calculateTotal();

                $('.btn-plus, .btn-minus,.btn-plus2, .btn-minus2, .btn-plus3, .btn-minus3').click(function() {
                    calculateTotal();
                });
            });

        });


            function confirmRemoveRow(button) {
             if (confirm("Are you sure you want to remove this item?")) {
                 removeRow(button);
                 }
              }

              function removeRow(button) {
                $(button).closest('tr').hide();
                }






    </script>
@endsection

