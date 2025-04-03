@extends('layouts.app')

@section('contents')
<div class="container-fluid py-5 text-center">
    <div class="container py-5">
        <div class="card shadow-lg p-5">
            <div class="text-center mb-4">

                <h2 class="mt-4 text-success">Payment Successful!</h2>
                <p class="text-muted">Thank you for your purchase. Your order has been placed successfully.</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="bg-light rounded p-4">
                        <h4 class="mb-3">Order Summary</h4>
                        <div class="d-flex justify-content-between">
                            <p>Subtotal:</p>
                            <p>£ <span id="orderSubtotal">{{ $subtotal }}</span></p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p>Shipping:</p>
                            <p>Free</p>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <h5>Total:</h5>
                            <h5>£ <span id="orderTotal">{{ $total }}</span></h5>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="mt-4">
                <a href="{{ route('home.index') }}" class="btn btn-primary">Back to Home</a>
            </div>
        </div>
    </div>
</div>
@endsection