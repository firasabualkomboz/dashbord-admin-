@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Books</div>

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










<form action="{{route('books.store')}}" method="POST" enctype="multipart/form-data">

                {{csrf_field()}}



                  <div class="form-group">
                    <label for="category">Sections</label>
                    <select class="form-control" name="section_id" id="section">

                    @foreach ($sections as $section)
                    <option value="{{$section->id}}">{{$section->name}}</option>
                    @endforeach

                    </select>
                  </div>


                  <div class="form-check">

                    {{-- @foreach ($tags as $tag)

                    <input class="form-check-input" type="checkbox" name="tags[]" value="{{$tag->id}}"  >
                    <label class="form-check-label"  >
                            {{$tag->tag}}
                          </label><br>
                    @endforeach --}}


                  </div>




  <div class="form-group">
    <label for="title">Name Book</label>
    <input type="text" class="form-control" name="title"  placeholder="Enter Name Book">
  </div>


  <div class="form-group">
    <label for="content">Description</label>
    <textarea class="form-control" name="content" row="8" cols="8"  ></textarea>
  </div>

  <div class="form-group">
    <label for="featured">Title</label>
    <input type="file" class="form-control-file" name="featured" >
  </div>


  <button type="submit" class="btn btn-primary">Add Book</button>
</form>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection



{{-- @section('styles')
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css" rel="stylesheet">

@endsection


@section('scripts')

<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js" defer></script>

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script>
    $(document).ready(function() {
      $('#content').summernote();
    });
</script>

@endsection --}}

