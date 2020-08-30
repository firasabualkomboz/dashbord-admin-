@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Section {{$section->name}}</div>

                <div class="card-body">


<form action="{{route('Sections.update', ['id'=>$section->id])}}" method="POST">

{{csrf_field()}}
<div class="form-group">

    <label for="name">Name</label>
   <input type="text" class="form-control" name="name"  value="{{$section->name}}">

  </div>



  <button type="submit" class="btn btn-primary">Update</button>
</form>

{{--

    <form action="{{route('category.update', ['id'=>$category->id])}}" method="POST" >
                {{csrf_field()}}
  <div class="form-group">

    <label for="name">Name</label>
    <input type="text" class="form-control" name="name"  value="{{$category->name}}">
  </div>



  <button type="submit" class="btn btn-primary">Update</button>
</form>



    --}}



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
