@extends('mariaadmin.masterpages.mainlayout')
@section('title', 'InCompleted Orders')

@section('contents')
<div class="container-fluid mt-4">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <h2 class="text-center mb-0">Pending Orders</h2>
        </div>
        <div class="card-body">
    <div class="table-responsive">
        <table class="table table-striped table-hover text-center">
            <thead class="bg-dark text-white">
                <tr>
                    <th style="color:white">#</th>
                    <th style="color:white">User Name</th>
                    <th style="color:white">Email</th>
                    <th style="color:white">Order Id</th>
                    <th style="color:white">Amount</th>
                    <th style="color:white">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $key => $order)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $order->name ?? 'N/A' }}</td>
                    <td>{{ $order->email ?? 'N/A' }}</td>
                    <td>{{ $order->order_id ?? 'N/A' }}</td>
                    <td>£{{ number_format($order->amount, 2) }}</td>
                    <td>
                        <a href="{{ route('orders.show', $order->id) }}" class="btn btn-info btn-sm">
                            <i class="fas fa-eye"></i> View
                        </a>
                   
                        <form action="{{ route('orders.destroy', $order->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">
                                <i class="fas fa-trash-alt"></i> Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

    </div>
</div>
@endsection
