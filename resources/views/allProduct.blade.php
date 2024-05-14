@extends('bootstrap.style')

    <div class="container-fluid d-flex justify-content-between align-items-center mb-5">
      <h2 class="text-center">All Products</h2>
      {{-- <a href="" class="btn btn-primary">View Products</a> --}}
    </div>
    
    @foreach($items as $item)
    <div class="container-lg">
        <div class="row">
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    {{$item->product_image}}
                    <div class="card-body">
                      <h5 class="card-title">{{$item->product_name}}</h5>
                      <p class="card-text">US ${{$item->product_price}}</p>
                      <a href="#" class="btn btn-primary">Add To Cart</a>
                    </div>
                  </div>
            </div>
          </div>  
    </div>
    @endforeach
    