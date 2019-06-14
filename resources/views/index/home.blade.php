@extends('layout.main')

@section('content')
  <body class="jumbotron">
    <div class="alert alert-secondary text-center" style="margin-bottom:0">
      <h1 class="display-1">Hello</h1>
      <h6>What do you want to do?</h6>

      <div>
        <a href="{{ url('/products/new') }}" class="m-4 btn btn-primary btn-lg">Register a Product</a>
        <a href="{{ url('/products') }}" class="m-4 btn btn-primary btn-lg">See Product List</a>
      </div>
    </div>
  </body>
@endsection
