@extends('layouts.master')
@section('content')
    

    <div class="text-success fs-3 mt-3 mb-3">Create New Supplier</div>

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

    <form action="{{ route('suppliers.store') }}" method="POST" class="card p-5">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="supplier_name" name="supplier_name" value="{{ old('supplier_name') }}">
        </div>
        <div class="form-group">
            <label for="name">Contact Name:</label>
            <input type="text" class="form-control" id="contact_name" name="contact_name" value="{{ old('contact_name') }}">
        </div>
        <div class="form-group">
            <label for="address">address:</label>
            <textarea class="form-control" id="address" name="address">{{ old('address') }}</textarea>
        </div>
        <div class="form-group">
            <label for="postal_code">postal code:</label>
            <input type="number" class="form-control" id="postal_code" name="postal_code" value="{{ old('postal_code') }}">
        </div>
        <div class="form-group">
            <label for="phone">phone</label>
            <input type="number" class="form-control" id="phone" name="phone" value="{{ old('phone') }}">
        </div>
        <div class="form-group">
            <label for="email">email</label>
            <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{route('suppliers.index')}}" class="btn btn-info mt-2">Show Supplier</a>
    </form>


@endsection