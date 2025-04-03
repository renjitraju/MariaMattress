
@extends('layouts.app')
@section('contents')

<div class="container text-center py-5">
    <div class="alert alert-danger" role="alert">
        <h1 class="display-4">Payment Failed</h1>
        <p class="lead">Unfortunately, your payment was not successful. Please try again.</p>
    </div>
    <div class="my-4">
        <img src="{{ asset('assets/img/payment-failed.png') }}" alt="Payment Failed" class="img-fluid" style="max-width: 250px;">
    </div>
    <div class="mt-4">
        <a href="{{ route('checkout') }}" class="btn btn-warning btn-lg">Retry Payment</a>
        <a href="{{ route('home.index') }}" class="btn btn-secondary btn-lg">Back to Home</a>
    </div>
</div>

@endsection
