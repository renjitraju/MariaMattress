@extends('mariaadmin.masterpages.mainlayout')
@section('title', 'Completed Orders')

@section('contents')
<div class="container-fluid mt-4">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <h2 class="text-center mb-0">User List</h2>
        </div>
        <div class="card-body">
    <div class="table-responsive">
        <table class="table table-striped table-hover text-center">
            <thead class="bg-dark text-white">
                <tr>
                    <th style="color:white">#</th>
                    <th style="color:white">Name</th>
                    <th style="color:white">Email</th>
                    <th style="color:white">Phone</th>
                    <th style="color:white">Address</th>
                    <th style="color:white">Action</th>
           
                </tr>
            </thead>
            <tbody>
                @foreach($addresss as $key => $address)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $address->name ?? 'N/A' }}</td>
                    <td>{{ $address->email ?? 'N/A' }}</td>
                    <td>{{ $address->phone ?? 'N/A' }}</td>
                    <td>{{ $address->address ?? 'N/A' }}</td>
                 

                    <td> 
                        <form action="{{ route('user.destroy', $address->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?');">
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
