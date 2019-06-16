@extends('layout.main')

@section('content')
    <h1 class="m-2 text-center font-weight-bold">Product Registration</h1>
    <form action="{{ url('/products/register') }}" method="POST">
      @csrf
      <div class="form-row">
        <div class="form-group col-md-3">
          <label for="productname">Product Name</label>
          <input name="productName" type="text" value="{{ old('productName') }}" class="form-control"
            id="productname" placeholder="Product Name" autofocus />
            @error('productName')
              <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-md-3">
          <label for="productBrand">Brand</label>
          <input name="brand" type="text" value="{{ old('brand') }}" class="form-control"
            id="productBrand" placeholder="Product Brand" />
            @error('brand')
              <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-md-3">
          <label for="valueField">Value</label>
          <input name="value" type="number" value="{{ old('value') }}" class="form-control"
            id="valueField" placeholder="Product Value" />
            @error('value')
              <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-md-3">
          <label for="amount">Amount</label>
          <input name="amount" type="number" value="{{ old('amount') }}" class="form-control"
            id="amount" placeholder="How many products?" />
            @error('amount')
              <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
      </div>

        <div class="form-group">
          <label for="productDescription">Description</label>
          <input name="description" type="text" value="{{ old('description') }}" class="form-control"
            id="productDescription" placeholder="Product Description" />
            @error('description')
              <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="m-4 text-center">
          <button type="submit" class="btn btn-primary">Register New Product</button>
          <a href="{{ url('/') }}" class="m-3 btn btn-primary"><i class="fas fa-home"></i> Back to HomePage</a>
        </div>
  </form>
@endsection
