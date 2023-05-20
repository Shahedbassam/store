@extends('layouts.admin')
@section('content')
<div class="py-3">
    <form method="POST" action="/categories/update/{{$category->id}}" >
        {{ csrf_field() }}
        {{ method_field('put') }}
        <div class="mb-3">
            <label for="nameFormControlInput" class="form-label">Category name</label>
            <input type="text" class="form-control" id="name" name="name" value="">
        </div>
        <div class="mb-3">
            <button class="btn btn-info" type="submit">submit</button>
        </div>
    </form>
</div>
@endsection
