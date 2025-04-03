@extends('mariaadmin.masterpages.mainlayout')
@section('title', 'Order Details')

@section('contents')
<div class="container mt-4">
    <div class="card p-4 shadow-lg rounded-4 border-0">
        
        <!-- Order Header -->
        <div class="mb-4 text-center border-bottom pb-3">
            <h2 class="mb-0 text-primary fw-bold">Order Details</h2>
        </div>

        <!-- Customer Information -->
        <div class="mb-4 p-4 border rounded-3 bg-light">
            <h4 class="text-dark fw-bold"><i class="fas fa-user-circle me-2"></i>Customer Information</h4>
            <p><strong>Name:</strong> {{ $order->name ?? 'N/A' }}</p>
            <p><strong>Email:</strong> {{ $order->email ?? 'N/A' }}</p>
            <p><strong>Phone:</strong> {{ $order->phone ?? 'N/A' }}</p>
            <p><strong>Address:</strong> {{ $order->address ?? 'N/A' }}</p>
        </div>

        <!-- Order Summary -->
        <div class="mb-4 p-4 border rounded-3 bg-white shadow-sm">
            <h4 class="text-dark fw-bold"><i class="fas fa-receipt me-2"></i>Order Information</h4>
            <p><strong>Order ID:</strong> {{ $order->order_id }}</p>
            <p><strong>Total Amount:</strong> <span class="text-success fw-bold">${{ number_format($order->amount, 2) }} - PAID</span></p>
            <p><strong>Payment Method:</strong> {{ $order->payment_method ?? 'Not Specified' }}</p>
            <p><strong>Status:</strong> <span class="badge bg-info text-dark">{{ ucfirst($order->status) }}</span></p>
            <p><strong>Order Date:</strong> {{ $order->created_at->format('Y-m-d H:i:s') }}</p>
        </div>

        <!-- Product List -->
        <div class="p-4 border rounded-3 bg-light">
            <h4 class="text-dark fw-bold"><i class="fas fa-box-open me-2"></i>Products Ordered</h4>
            
            @foreach($order->products as $key => $product)
                <div class="mb-3 p-3 border-bottom bg-white rounded-3 shadow-sm">
                    <p class="fw-bold text-primary"><i class="fas fa-cube me-2"></i>{{ $product->name }}</p>
                    <p><strong>Quantity:</strong> <span class="badge bg-secondary">{{ $product->pivot->quantity }}</span></p>
                    <p><strong>Price:</strong> <span class="text-success fw-bold">£{{ number_format($product->price, 2)  }}</span></p>
                    <p><strong>Total:</strong> <span class="text-danger fw-bold">£{{ number_format($product->pivot->quantity * $product->price, 2) }}</span></p>
                </div>
            @endforeach
        </div>

        <!-- Action Buttons -->
        <div class="mt-4 text-center">
           @if($order->status !='completed')
            <a href="{{ route('incompleted.orders') }}" class="btn btn-outline-primary btn-lg px-4 py-2 rounded-pill shadow-sm">
                <i class="fas fa-arrow-left me-2"></i>Back to Orders
            </a>
            @else()
            <a href="{{ route('completed.orders') }}" class="btn btn-outline-primary btn-lg px-4 py-2 rounded-pill shadow-sm">
                <i class="fas fa-arrow-left me-2"></i>Back to Orders
            </a>
            @endif
            @if($order->status !='completed')
            <form action="{{ route('orders.complete', $order->id) }}" method="POST" class="d-inline"
                onsubmit="return confirm('Are you sure you want to mark this order as completed?');">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{ $order->id }}">
                <button type="submit" class="btn btn-success btn-lg px-4 py-2 rounded-pill shadow-sm">
                    <i class="fas fa-check-circle me-2"></i>Complete Order
                </button>
            </form>
            @endif
        </div>
    </div>
</div>
@endsection