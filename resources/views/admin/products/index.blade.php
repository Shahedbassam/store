@extends('layouts.admin')
@section('content')

<div class="py-5">
    <form action="/products/create" method="post">
        @csrf
        @method('get')
        <input type="submit" value="Add product">
          </form>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Product name</th>
            <th scope="col">Category</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            @csrf
                    <tr>
                        <th scope="row">{{ $product->id }}</th>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->category_id }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td>
                        <a href="{{ url('products/edit/'. $product->id) }}" class="btn btn-info">edit</a>
                        <a href="{{ url('products/delete/'. $product->id) }}" class="btn btn-danger">delete</a>
                    </td>

                    </tr>
                @endforeach
        </tbody>
      </table>
</div>
@endsection
