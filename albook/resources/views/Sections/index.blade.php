@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">All Sections</div>

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

                           @foreach ($sections as $section)

                            <tr>
                                 <th scope="row">{{$section->name}}</th>

                                <td>
                               <a class="" href="{{route('Sections.edit_section',['id'=>$section->id ])}}">

                                        EDIT
                                   <i class="fas fa-eye"></i>

                                </a>
                            </td>


                <td>
                 <a class="" href="{{route('Sections.delete',['id'=>$section->id ])}}">
                        Delete
                    <i class="far fa-eye"></i>

                </a>
            </td>


                              </tr>
                       @endforeach


                        </tbody>
                      </table>




                </div>
            </div>
        </div>
    </div>
</div>
@endsection
