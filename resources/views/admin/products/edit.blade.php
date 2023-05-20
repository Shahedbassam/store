@extends('layouts.admin')
@section('content')
    <div class="py-3">
        <form action="/products/update/{{$product->id }}" method="POST">
            {{ csrf_field() }}
        {{ method_field('put') }}

            <div class="mb-3">
                <label for="nameFormControlInput" class="form-label">Product name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}">
            </div>
            <div class="mb-3">
                <label for="quantityFormControlInput" class="form-label">quantity</label>
                <input type="number" class="form-control" id="name" name="name" value="{{ $product->quantity }}">
            </div>
            <div class="mb-3">
                <label for="priceFormControlInput" class="form-label">Price</label>
                <input type="number" class="form-control" id="price" name="price" value="{{ $product->price }}">
            </div>
            <div class="mb-3">
                <label for="decscriptionFormControlTextarea" class="form-label">decscription</label>
                <textarea class="form-control" id="decscription"  name="decscription" rows="3">{{ $product->decscription }}</textarea>
            </div>
            <div class="mb-3">
                <label for="categoryFormControlInput" class="form-label">Category</label>
                <select class="form-select" id="category" name="category" >
                    <option value="{{$category_name->id}}">{{ $category_name->name}}</option>
                    @foreach ($categories as $category)
                    <option value="{{$category->category_id}}">{{$category->name}}</option>
                    @endforeach

                </select>
            </div>
            <div class="mb-3">
                <button class="btn btn-info" type="submit">submit</button>
            </div>
        </form>
    </div>
@endsection
