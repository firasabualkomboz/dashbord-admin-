@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                {{-- <div class="card-header">Edit Categoty {{$category->name}}</div> --}}
                <div class="card-header">Edit Author</div>
                <div class="card-body">










{{-- <form action="{{route('category.update', ['id'=>$category->id])}}" method="POST" > --}}
    <form action="#" method="POST" >

                {{csrf_field()}}
  <div class="form-group">

    <label for="name">Name Author</label>
    {{-- <input type="text" class="form-control" name="name"  value="{{$category->name}}"> --}}
    <input type="text" class="form-control" name="name"  value="#">
  </div>



  <button type="submit" class="btn btn-primary">Update</button>
</form>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
