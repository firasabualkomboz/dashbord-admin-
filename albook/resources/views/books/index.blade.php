@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">All Books</div>

                <div class="card-body">

@if($books -> count() > 0 )



                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col"> NO </th>
                            <th scope="col"> Title </th>

                            <th scope="col">Edit</th>
                       <th scope="col">Delete</th>

                          </tr>
                        </thead>
                        <tbody>

                            @foreach ($books as $book)
                            <tr>
                                <th scope="row">
                                    <img src="{{$book->featrued}} " alt="  {{$book->title}}" class="img-thumbnail" class="img-thumbnail" width="100px" height="100px">

                                </th>

                                <th scope="row">{{$book->title}}</th>

                                <td>
                                 <a class="" href="{{route('books.edit_book',['id'=>$book->id ])}}">
                                        EDIT
                                   <i class="far fa-eye"></i>

                               </a>

                            </td>


                <td>

                    <a class="" href="{{route('books.delete',['id'=>$book->id ])}}">
                        Delete
                    <i class="far fa-eye"></i>

            </a>

            </td>


                              </tr>
                            @endforeach

                            @else
                            <p scope="row" class="text-center">No  Books</p>

                            @endif
                        </tbody>
                      </table>




                </div>
            </div>
        </div>
    </div>
</div>
@endsection
