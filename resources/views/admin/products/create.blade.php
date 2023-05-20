@extends('layouts.admin')
@section('content')
<div class="py-3">
<form action="{{ url('products/store') }}" method="post">
    @csrf

    <div class="mb-3">
        <label for="nameFormControlInput1" class="form-label">product name </label>
        <input type="text" class="form-control" id="name" name="name">
      </div>
      <div class="mb-3">
        <label for="quantityFormControlInput1" class="form-label"> quantity </label>
        <input type="number" class="form-control" id="quantity" name="quantity">
      </div>
      <div class="mb-3">
        <label for="priceFormControlInput1" class="form-label"> price </label>
        <input type="number" class="form-control" id="price" name="price">
      </div>
      <div class="mb-3">
        <label for="decscriptionFormControlTextarea" class="form-label">decscription</label>
        <textarea class="form-control" id="decscription" name="decscription" rows="3"></textarea>
      </div>
      <div class="mb-3">
        <label for="categoryFormControlInput" class="form-label">Category</label>
        <select class="select-control" id="category" name="category" >
            <option value="#"></option>
            @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach

        </select>
    </div>
      <div class="mb-3">
        <input type="submit" value="submit" class="btn btn-info">
    </div>
</form>
</div>
@endsection
