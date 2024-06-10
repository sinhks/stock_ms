@extends('layouts.master')
@section('content')


    <div class="text-success fs-3 mt-3 mb-3">Edit Supplier</div>
<form action="{{ route('suppliers.update', $supplier->id) }}" method="POST" class="card p-5">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="supplier_name" name="supplier_name" value="{{ $supplier->supplier_name }}" required>
        </div>
        <div class="form-group">
            <label for="name">Contact Name:</label>
            <input type="text" class="form-control" id="contact_name" name="contact_name" value="{{ $supplier->contact_name }}" required>
        </div>
        <div class="form-group">
            <label for="address">address:</label>
            <textarea class="form-control" id="address" name="address" required>{{ $supplier->address }}</textarea>
        </div>
        <div class="form-group">
            <label for="postal_code">postal code:</label>
            <input type="text" class="form-control" id="postal_code" name="postal_code" value="{{ $supplier->postal_code }}" required>
        </div>
        <div class="form-group">
            <label for="phone">phone</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{ $supplier->phone }}" required>
        </div>
        <div class="form-group">
            <label for="email">email</label>
            <input type="text" class="form-control" id="email" name="email" value="{{ $supplier->email }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>

    
@endsection