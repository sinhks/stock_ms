@extends('layouts.master')
@section('content')


    <div class="float-start text-success fs-3 mt-3 mb-3"><i class="fa-brands fa-shopify nav-icon"></i> Order</div>
    <div class="float-end mt-3 mb-4">
        <a href="{{route('orders.create')}}" class="btn btn-success">Create New Order</a>
    </div><br><br>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table table-striped text-center">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Customer</th>
                    <th>Ship_Address</th>
                    <th>Total_amount</th>
                    <th>Payment_method</th>
                    <th>Billing_address</th>
                    <th>Shipping_address</th>
                    <th>status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach( $orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->customer_id }}</td>
                        <td>{{ $order->ship_address }}</td>
                        <td>{{ $order->total_amount }}</td>
                        <td>{{ $order->payment_method }}</td>
                        <td>{{ $order->billing_address }}</td>
                        <td>{{ $order->shipping_address }}</td>
                        <td>{{ $order->status }}</td>
                        <td>
                            <form action="{{route('orders.destroy',$order->id)}}" method="POST">
                            
                                <a href="{{route('orders.edit',$order->id)}}" class="btn btn-info">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this order?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

@endsection