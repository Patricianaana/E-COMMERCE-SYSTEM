@extends('bootstrap.style')
@section('content')
  <div class="container-fluid d-flex justify-content-between align-items-center mb-5">
    <h2 class="text-center">All Products</h2>
    <a href="product" class="btn btn-primary">Back</a>
  </div>

  <div class="container-lg">
    <div class="row">
      @foreach($items as $item)
        <div class="col-3">
            <div class="card mb-3" style="width: 18rem;">
                <img src="{{ Storage::url($item->product_image) }}" alt="product image" style="height:230px">
                <div class="card-body">
                  <h5 class="card-title">{{$item->product_name}}</h5>
                  <p class="card-text">US ${{$item->product_price}}</p>
                  <a href="#" class="btn btn-primary">View Details</a>
                </div>
              </div>
        </div>
      @endforeach
    </div>  
  </div>
@endsection
    
    
    