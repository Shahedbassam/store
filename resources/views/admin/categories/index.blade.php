@extends('layouts.admin')
@section('content')

<div py-5>
    <form action="/categories/create" method="post">
        @csrf
        @method('get')
        <input type="submit" value="Add category">
          </form>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Category name</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                    <tr>
                        <th scope="row">{{ $category->id }}</th>
                        <td>{{ $category->name }}</td>
                        <td>
                            <a href="{{ url('categories/edit/'. $category->id) }}" class="btn btn-info">edit</a>
                            <a href="{{ url('categories/delete/'. $category->id) }}" class="btn btn-danger">delete</a>


                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
  </div>
  @endsection
