@extends('layouts.admin')
@section('content')
<div class="py-3">
<form action="{{ url('categories/store') }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="nameFormControlInput1" class="form-label">category name </label>
        <input type="text" class="form-control" id="name" name="name">
      </div>

      <div class="mb-3">
        <input type="submit" value="submit" class="btn btn-info">
    </div>
</form>
</div>
@endsection
