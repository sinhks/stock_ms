@extends('layouts.master')
@section('content')


        <div class="text-success fs-3 mt-3 mb-3">Edit OrderItem</div>
        <form action="{{ route('inventories.update', $inventory->id) }}" method="POST" class="card p-5">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="product_id">Product Name:</label>
                <select name="product_id" class="form-control" required>
                    @foreach($products as $product)
                        <option value="{{ $product->id }}" {{ $inventory->product_id == $product->id ? 'selected' : '' }}>{{ $product->product_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="order_id">Order ID:</label>
                <select name="order_id" class="form-control" required>
                    @foreach($orders as $order)
                        <option value="{{ $order->id }}" {{$inventory->order_id == $order->id ? 'selected' : '' }}>{{ $order->shipping_address }}</option>
                    @endforeach
                </select>
            </div>
            
            <div class="form-group">
                <label for="quantity">Quantity :</label>
                <input type="text" name="quantity" class="form-control" value="{{ $inventory->quantity }}" required>
            </div>
            
            <button type="submit" class="btn btn-primary">Update</button>
</form>

@endsection