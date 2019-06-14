{{--
@extends('errors::minimal')

@section('title', __('Not Found'))
@section('code', '404')
@section('message', __('Not Found'))
--}}

@extends('layout.main')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="m-2 text-center">
        <h1>Oops!</h1>
        <h2>404 Error</h2>
        <div class="m-2">
          Sorry, Product Not Found!
        </div>
        <div>
          <a href="{{ url('/') }}" class="m-4 btn btn-primary btn-lg"><i class="fas fa-home"></i> Take Me Home</a>
        </div>
      </div>
    </div>
  </div>
@endsection
