@extends('bootstrap.style')

    <div class="container-fluid d-flex justify-content-between align-items-center mb-5">
      <h2 class="text-center">Categories</h2>
      <a href="products" class="btn btn-primary">View Products</a>
    </div>

    <div class="container-lg">
        <div class="row">
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('images/pic0.jpg') }}" class="card-img-top" alt="Best Selling Fashion Image">
                    <div class="card-body">
                      <h5 class="card-title">Best Selling</h5>
                      <p class="card-text">Elevate your fashion game with Phasionova's Best Selling clothes!</p>
                      <a href="#" class="btn btn-primary">View Category</a>
                    </div>
                  </div>
            </div>
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('images/pic2.jpg') }}" class="card-img-top" alt="Top Collection Fashion Image">
                    <div class="card-body">
                      <h5 class="card-title">Top Collection</h5>
                      <p class="card-text">Peak Chic: Elevating Your Style with Phasionova's Top Collection</p>
                      <a href="#" class="btn btn-primary">View Category</a>
                    </div>
                  </div>
            </div>
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('images/pic3.jpg') }}" class="card-img-top" alt="What's New Fashion Image">
                    <div class="card-body">
                      <h5 class="card-title">What's New?</h5>
                      <p class="card-text">Discover the latest fashion trend with Phashionova's What's New collection.</p>
                      <a href="#" class="btn btn-primary">View Category</a>
                    </div>
                  </div>
            </div>
          </div>  
    </div>
    