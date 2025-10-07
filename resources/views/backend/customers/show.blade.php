@extends('layouts.admin')
@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex">
        <h6 class="m-0 font-weight-bold text-primary">Customer ({{ $customer->full_name }})</h6>
    </div>
    <div class="card-body">
        <table class="table table-hover">
            <tbody>
                <tr>
                    <th>Full Name</th>
                    <td>{{ $customer->full_name }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $customer->email }}</td>
                </tr>
                <tr>
                    <th>Mobile</th>
                    <td>{{ $customer->mobile }}</td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>{{ $customer->status() }}</td>
                </tr>
                <tr>
                    <th>Created at</th>
                    <td>{{ $customer->created_at->format('Y-m-d') }}</td>
                </tr>
            </tbody>
        </table>
    </div>

    {{-- customer addresses --}}
    <div class="card-header py-3 d-flex">
        <h6 class="m-0 font-weight-bold text-primary">Customer Addresses</h6>
    </div>
    <div class="card-body">
        <h5 class="mb-4">Addresses</h5>
        @forelse($customer->addresses as $address)
        <table class="table table-hover">
            <tbody>
                <tr>
                    <th>Address {{ $address->address_title }}</th>
                    <td>{{ $address->address }}</td>
                </tr>
                <tr>
                    <th>City</th>
                    <td>{{ $address->city->name }}</td>
                </tr>
                <tr>
                    <th>State</th>
                    <td>{{ $address->state->name }}</td>
                    </tr>
                </tbody>
            </table>
        @empty
            <p>No addresses found</p>
        @endforelse
    </div>
</div>

@endsection
