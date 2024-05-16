@extends('bootstrap.style')

@section('content')

<div class="container">
  <div class="container-md">
    <div class="container-fluid d-flex justify-content-between align-items-center mb-5">
      <h2 class="text-center">Product Details</h2>
      <a href="/products" class="btn btn-primary">Back</a>
    </div>
  </div>

  <div class="container-lg">

    <div class="card mb-3" style="max-width: 600px; background-color:rgb(238, 237, 237)">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="{{ Storage::url($things->product_image) }}" alt="product image" style="height:200px" class="img-fluid rounded-start">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">{{$things->product_name}}</h5>
            <p class="card-text">US ${{$things->product_price}}</p>
            <button class="btn btn-primary mb-3"><i class="bi bi-cart4"></i>  Add to cart</button><br>
            <label for="card-text" style="font-style: italic">Product Description</label>
            <pre class="card-text"><small class="text-body-secondary">{{$things->product_description}}</small></pre>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>



@endsection