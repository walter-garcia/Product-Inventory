@extends('layout.main')

@section('content')
<h1 class="m-2 text-center font-weight-bold">Product Update</h1>
    <form action="{{ url('/products/'.$product->id) }}" method="POST">
      @method('PUT')
      @csrf
      <div class="form-row">
        <div class="form-group col-md-3">
          <label for="productname">Product</label>
          <input name="productName" type="text" value="{{ old('productName') ?? $product->productName }}" class="form-control" id="productname" />
        </div>

        <div class="form-group col-md-3">
          <label for="productBrand">Brand</label>
          <input name="brand" type="text" value="{{ old('brand') ?? $product->brand }}" class="form-control" id="productBrand" />
        </div>

        <div class="form-group col-md-3">
          <label for="valueField">Value</label>
          <input name="value" type="number" value="{{ old('value') ?? $product->value }}" class="form-control" id="valueField" />
        </div>

        <div class="form-group col-md-3">
          <label for="amount">Amount</label>
          <input name="amount" type="number" value="{{ old('amount') ?? $product->amount }}" class="form-control" id="amount" />
        </div>
      </div>

      <div class="form-group">
        <label for="productDescription">Description</label>
        <input name="description" type="text" value="{{ old('description') ?? $product->description }}" class="form-control" id="productDescription" />
      </div>

      <div class="m-4 text-center">
        <a href="{{ url('/products') }}" class="m-3 btn btn-primary">Cancel</a>
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
  </form>
@endsection
