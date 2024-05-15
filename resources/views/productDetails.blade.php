@extends('bootstrap.style')
@section('content')
  <div class="container-fluid d-flex justify-content-between align-items-center mb-5">
    <h2 class="text-center">Product Details</h2>
    <a href="product" class="btn btn-primary">Back</a>
  </div>

  <div class="container-lg">
    <div class="row">
      {{-- @foreach($items as $item) --}}
        <div class="col-6">
            <div class="card mb-3 d-flex" style="width: 50rem;">
                <div class="">
                    <img src="{{ Storage::url($item->product_image) }}" alt="product image" style="height:230px">
                </div>
                <div class="card-body">
                  {{-- <h5 class="card-title">{{$item->product_name}}</h5>
                  <p class="card-text">US ${{$item->product_price}}</p> --}}
                  <a href="#" class="btn btn-primary">Add to cart</a>
                </div>
              </div>
        </div>
      {{-- @endforeach --}}
    </div>  
  </div>
@endsection
    
    
    