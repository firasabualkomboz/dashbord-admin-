@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Authors</div>

                <div class="card-body">




                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col"> NO </th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>

                          </tr>
                        </thead>
                        <tbody>

                            {{-- @foreach ($categories as $category) --}}

                            <tr>
                                {{-- <th scope="row">{{$category->name}}</th> --}}
                                <th scope="row">#</th>
                                <td>
                                    {{-- <a class="" href="{{route('category.edit',['id'=>$category->id ])}}"> --}}
                                        <a class="" href="#">
                                        EDIT
                                   <i class="far fa-eye"></i>

                                </a>
                            </td>


                <td>
                    {{-- <a class="" href="{{route('category.delete',['id'=>$category->id ])}}"> --}}
                        <a class="" href="#">
                        Delete
                    <i class="far fa-eye"></i>

                </a>
            </td>


                              </tr>
                            {{-- @endforeach --}}


                        </tbody>
                      </table>




                </div>
            </div>
        </div>
    </div>
</div>
@endsection
