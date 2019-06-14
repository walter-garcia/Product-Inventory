@extends('layout.main')

@section('content')
  @if(!$products->isEmpty())
    <h1 class="m-2 text-center font-weight-bold">Products List</h1>
    @if(session('success'))
      <div class="alert alert-success" id="sucAlert">
        {{ session('success') }}
      </div>
    @elseif(session('update'))
      <div class="alert alert-success" id="updateAlert">
        {{ session('update') }}
      </div>
    @endif
    <table class="table text-center table-hover">
      <thead class="thead-light">
        <tr>
          <th scope="col">PRODUCT NAME</th>
          <th scope="col">PRODUCT DETAIL</th>
          <th scope="col">EDIT | REMOVE</th>
          <!-- <th scope="col">REMOVE PRODUCT</th> -->
        </tr>
      </thead>

      <tbody>
      @forelse ($products as $product)
        <tr>
          <td class="text-capitalize">{{ $product->productName }}</td>
            <td>
              <a href="{{ url('/products/details/'.$product->id) }}"><i class="fas fa-search"></i></a>
            </td>
          </td>
          <td>
            <form method="POST" action="{{ url('/products/'.$product->id) }}">
              @method('DELETE')
              @csrf
              <a href="{{ url('/products/update/'.$product->id) }}"><i class="mr-4 fas fa-edit"></i></a>
              <button type="submit" class="btn btn-link"> <i class="fas fa-trash"></i> </button>
            </form>
          </td>
        </tr>
        @empty
      @endforelse
      </tbody>
    </table>

    <div class="text-center">
      <a href="{{ url('/') }}" class="m-4 btn btn-primary"><i class="fas fa-home"></i> Back to HomePage</a>
      <a href="{{ url('/products/new') }}" class="m-4 btn btn-primary">Register a Product</a>
     </div>
  @else
    <div class="p-3 text-center alert alert-danger">You have no products registered</div>
    <div class="text-center">
      <a href="{{ url('/') }}" class="m-4 btn btn-primary btn-lg"><i class="fas fa-home"></i> Back to HomePage</a>
      <a href="{{ url('/products/new') }}" class="m-4 btn btn-primary btn-lg">Register New Product</a>
    </div>
  @endif
@endsection
