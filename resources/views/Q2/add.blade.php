@extends('layouts.app', ['activePage' => 'person', 'titlePage' => 'Person'])

@section('content')
<div class="container-fluid">

      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{route('add')}}" autocomplete="off" class="form-horizontal" enctype="multipart/form-data">
            @csrf

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">New Person</h4>
                <p class="card-category"></p>
              </div>
              <div class="card-body ">

              <div class="row">
                  <label class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="name" type="text" placeholder="Name" required="true" aria-required="true"/>
                      @if ($errors->has('name'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                      @endif
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="email" type="text" placeholder="Email Address" required="true" aria-required="true"/>
                      @if ($errors->has('email'))
                        <span id="email-error" class="error text-danger" for="email">{{ $errors->first('email') }}</span>
                      @endif
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">Address</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('address') ? ' has-danger' : '' }}">
                      <textarea class="form-control" name="address" id="address" placeholder="Address" required="true">
                      
                      </textarea>
                      @if ($errors->has('address'))
                        <span id="address-error" class="error text-danger" for="address">{{ $errors->first('address') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                
              </div>
              <div class="card-footer"  style="padding-right: 560px;">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

   @endsection   







