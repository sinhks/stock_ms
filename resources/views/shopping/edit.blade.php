@extends('layouts.master')
@section('content')

        <div class="text-success fs-3 mt-3 mb-3">Edit ShoppingCard</div>
        <form action="{{ route('shopping.update', $shopping->id) }}" method="POST" class="card p-5">
            @csrf
            @method('PUT')
           
            <div class="form-group">
                <label for="customer_id">Customer Name:</label>
                <select name="customer_id" class="form-control" required>
                    @foreach($customers as $customer)
                        <option value="{{ $customer->id }}" {{$shopping->customer_id == $customer->id ? 'selected' : '' }}>{{ $customer->customer_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="product_id">Product Name:</label>
                <select name="product_id" class="form-control" required>
                    @foreach($products as $product)
                        <option value="{{ $product->id }}" {{ $shopping->product_id == $product->id ? 'selected' : '' }}>{{ $product->product_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="quantity">Quantity :</label>
                <input type="text" name="quantity" class="form-control" value="{{ $shopping->quantity }}" required>
            </div>
            
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{route('shopping.index')}}" class="btn btn-info">Back</a>
</form>

@endsection