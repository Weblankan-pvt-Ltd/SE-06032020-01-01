@extends('layouts.app', ['activePage' => 'Question 3', 'titlePage' => 'Question 3'])

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
                  <h4 class="card-title ">Question 3</h4>
                </div>
                <div class="card-body">
                <div class="row">
                  <div class="col-12 text-right">
                    <a href="{{ route('add_product') }}" class="btn btn-sm btn-primary">New Product</a>
                  </div>
                </div>
                </br>
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>Product</th>
                        <th>Type</th>
                        <th>Price</th>
                        <th>Status</th>
                      </thead>
                      <tbody>

                      @foreach($products as $product)
                      
                        <tr>
                          <td>{{$product->product}}</td>
                          <td>{{$product->type}}</td>
                          <td>{{$product->price}}</td>
                          <td>{{$product->status}}</td>
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