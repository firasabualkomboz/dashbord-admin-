@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Section</div>

                <div class="card-body">



                @if(count($errors)>0)
                <ul class="navbar-nav mr-auto">
                @foreach ($errors -> all() as $error)
                <li class="nav-item active">
                {{$error}}
                </li>
                @endforeach
                </ul>
                @endif










<form action="{{route('Sections.store')}}" method="POST" >

                {{csrf_field()}}
  <div class="form-group">

    <label for="name">Name Section</label>
    <input type="text" class="form-control" name="name"  placeholder="Enter Name Section">
  </div>

  <button type="submit" class="btn btn-primary">Add Sections</button>
</form>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
