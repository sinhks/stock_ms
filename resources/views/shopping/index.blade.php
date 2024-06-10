@extends('layouts.master')
@section('content')


        <div class="text-success fs-3 mt-3 mb-3 float-start"> <i class="fa-solid fa-cart-shopping nav-icon"></i> Shopping Card</div>
        <div class="float-end mt-2 mb-4">
            <a href="{{route('shopping.create')}}" class="btn btn-success">Create New ShoppingCard</a>
        </div><br><br><br>
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
    <table class="table table-striped  text-center">
        <thead>
        <tr>
            <th>ID</th>
            <th>Customer Name</th>
            <th>Product_Name</th>
            <th>Quantity</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($shoppings as $shopping)
                <tr>
                    <td>{{$shopping->id}}</td>
                    <td>{{$shopping->customer_id}}</td>
                    <td>{{$shopping->product_id}}</td>
                    <td>{{$shopping->quantity}}</td>
                    
                    <td>
                    <form action="{{route('shopping.destroy',$shopping->id)}}" method="POST">
                            
                            <a href="{{route('shopping.edit',$shopping->id)}}" class="btn btn-info">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this category?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>

@endsection