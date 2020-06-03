@extends('layouts.app', ['activePage' => 'Question 2', 'titlePage' => 'Question 2'])

@section('content')
<div class="container-fluid">
        @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
            @endif

          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Question 2</h4>
                </div>
                <div class="card-body">
                <div class="row">
                  <div class="col-12 text-right">
                    <a href="{{ route('add') }}" class="btn btn-sm btn-primary">New Person</a>
                  </div>
                </div>
                </br>
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Action</th>
                      </thead>
                      <tbody>

                      @foreach($people as $person)
                      
                        <tr>
                          <td>{{$person->name}}</td>
                          <td>{{$person->email}}</td>
                          <td>{{$person->address}}</td>

                          <td>
                          <a href="/edit/{{$person->id}}">
                            <i class="material-icons">edit</i>
                          </a>
                            <i>/</i>
                          <a href="/delete/{{$person->id}}">
                            <i class="material-icons">delete</i>
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
        </div>

   @endsection      