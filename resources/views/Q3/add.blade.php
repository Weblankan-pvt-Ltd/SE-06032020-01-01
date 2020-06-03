@extends('layouts.app', ['activePage' => 'product', 'titlePage' => 'Product'])

@section('content')
<div class="container-fluid">

      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{route('add_product')}}" autocomplete="off" class="form-horizontal" enctype="multipart/form-data">
            @csrf

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">New Product</h4>
                <p class="card-category"></p>
              </div>
              <div class="card-body ">

              <div class="row">
                  <label class="col-sm-2 col-form-label">Product</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('product') ? ' has-danger' : '' }}">
                        <select class="form-control{{ $errors->has('product') ? ' is-invalid' : '' }}" name="product" id="product" required="true" aria-required="true"/>
                            <option value="Laser Printer">Laser Printer</option>
                            <option value="Ink Jet Printer">Ink Jet Printer</option>
                            <option value="Dot-Matrix Printer">Dot-Matrix Printer</option>
                        </select>
                      @if ($errors->has('product'))
                        <span id="product-error" class="error text-danger" for="input-product">{{ $errors->first('product') }}</span>
                      @endif
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">Type</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('type') ? ' has-danger' : '' }}">
                        <select class="form-control{{ $errors->has('type') ? ' is-invalid' : '' }}" name="type" id="type" required="true" aria-required="true"/>
                            <option value="Samsung">Samsung</option>
                            <option value="Brother">Brother</option>
                            <option value="HP">HP</option>
                            <option value="Canon">Canon</option>
                            <option value="Lexmark">Lexmark</option>
                            <option value="Dell">Dell</option>
                        </select>
                      @if ($errors->has('type'))
                        <span id="type-error" class="error text-danger" for="type">{{ $errors->first('type') }}</span>
                      @endif
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">Price</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('price') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" id="price" type="text" placeholder="Price" required="true" aria-required="true"/>
                      @if ($errors->has('price'))
                        <span id="price-error" class="error text-danger" for="input-price">{{ $errors->first('price') }}</span>
                      @endif
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">Status</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('status') ? ' has-danger' : '' }}">
                        <select class="form-control{{ $errors->has('status') ? ' is-invalid' : '' }}" name="status" id="status" required="true" aria-required="true"/>
                            <option value="Brand New">Brand New</option>
                            <option value="Used">Used</option>
                        </select>
                      @if ($errors->has('status'))
                        <span id="status-error" class="error text-danger" for="status">{{ $errors->first('status') }}</span>
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







