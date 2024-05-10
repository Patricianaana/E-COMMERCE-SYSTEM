@extends('bootstrap.style')

    @if($errors->any())
      <div class="alert alert-danger" role="alert">
        <ul>
            @foreach($errors->all() as $error)
               <li>{{$error}}</li>
            @endforeach
        </ul>
      </div>
    @endif
    <div class="container-lg">
        <div class="">
            <h2>Add New Product</h2>
        </div>
        <form method="POST" action="/tasks" enctype="multipart/form-data">
            <div class="form-group mb-1">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="product_name">Product Name</label>
                    <input placeholder="Enter product name here" type="text" name="product_name" class="form-control mb-1">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="product_price">Product price</label>
                    <input placeholder="Enter product price here" type="text" class="form-control" name="product_price">
                </div>
               <div class="mb-3">
                <label class="form-label" for="product_description">Product Description</label>
                <textarea placeholder="Description:" class="form-control" id="product_description" rows="3"></textarea>
              </div>
              <div class="mb-3">
                <label class="form-label">Select product category</label>
               <select name="product_category" class="form-select" aria-label="Default select example">
                <option  selected disabled>Category</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
               </select>
              </div>
               <div class="mb-3">
                <label for="product_image" class="form-label">Add product image</label>
                <input class="form-control" type="file" id="product_image">
              </div>
            </div>
            <div class="d-grid form-group mt-3">
                <button type="submit" class="btn btn-primary">Add Product</button>
            </div>
        </form>
    </div>

