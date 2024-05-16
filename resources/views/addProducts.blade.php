@extends('bootstrap.style')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between my-4">
            <span class=" text-3xl"><h1>Add New Product</h1></span>
            <a href="products" class="btn btn-primary">View Products</a>
        </div>

        <div class="py-4">
            <form action="{{ route('add-product') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-3">
                    <label class="form-label" for="product_name">Product Name</label>
                    <input placeholder="Enter product name here" type="text" name="product_name" class="form-control mb-1 @error('product_name') is-invalid @enderror" value="{{ old('product_name') }}">
                    @error('product_name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label class="form-label" for="product_price">Product price</label>
                    <input placeholder="Enter product price here" type="text" class="form-control @error('product_price') is-invalid @enderror" name="product_price" value="{{ old('product_price') }}">
                    @error('product_price')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label class="form-label" for="product_description">Product Description</label>
                    <textarea placeholder="Description:" class="form-control @error('product_description') is-invalid @enderror" id="product_description" name="product_description" rows="3">{{ old('product_description') }}</textarea>
                    @error('product_description')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label class="form-label">Select product category</label>
                    <select name="product_category" class="form-select  @error('product_category') is-invalid @enderror" aria-label="Default select example">
                        <option  selected disabled>Category</option>
                            @forelse (\App\Models\Category::all() as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->category_name}}</option>
                            @empty
                                <option selected disabled>No category found.</option>
                            @endforelse
                    </select>
                    @error('product_category')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="product_image" class="form-label">Add product image</label>
                    <input class="form-control @error('product_image') is-invalid @enderror" type="file" id="product_image" name="product_image">
                    @error('product_image')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mt-4">
                    <button type="submit" class="btn btn-primary">Save Product</button>
                </div>
            </form>
        </div>

    </div>
@endsection
