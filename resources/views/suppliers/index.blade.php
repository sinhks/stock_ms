@extends('layouts.master')
@section('content')


    <div class="float-start text-success fs-3 mt-3 mb-3"><i class="fa-solid fa-truck-field nav-icon"></i> Supplier</div>
    <div class="float-end mt-2 mb-4">
        <a href="{{route('suppliers.create')}}" class="btn btn-success">Create New Supplier</a>
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
    <table class="table table-striped text-center">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Contact Name</th>
                    <th>Address</th>
                    <th>Postal code</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach( $suppliers as $supplier)
                    <tr>
                        <td>{{ $supplier->id }}</td>
                        <td>{{ $supplier->supplier_name }}</td>
                        <td>{{ $supplier->contact_name }}</td>
                        <td>{{ $supplier->address }}</td>
                        <td>{{ $supplier->postal_code }}</td>
                        <td>{{ $supplier->phone }}</td>
                        <td>{{ $supplier->email }}</td>
                        <td>
                            <form action="{{route('suppliers.destroy',$supplier->id)}}" method="POST">
                            
                                <a href="{{route('suppliers.edit',$supplier->id)}}" class="btn btn-info">Edit</a>
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