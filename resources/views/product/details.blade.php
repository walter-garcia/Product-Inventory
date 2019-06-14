@extends('layout.main')

@section('content')
	<h1 class="text-capitalize m-2 text-center font-weight-bold"><?= $products->productName ?></h1>
	<table class="table text-center table-bordered">
		<thead class="thead-light">
			<tr>
				<th scope="col">VALUE</th>
				<th scope="col">DESCRIPTION</th>
				<th scope="col">STOCK</th>
			</tr>
			<tr class="{{ $products->amount < 1 ? 'alert alert-danger' : '' }}">
				<td>${{ $products->value }}</td>
				<td>{{ $products->description }}</td>
				@if($products->amount < 1)
					<td><h5><span class="badge badge-pill badge-danger">Out of stock</span></h5></td>
				@else
					<td>{{ $products->amount }}</td>
				@endif
			</tr>
		</thead>
	</table>

	<div class="text-center"><a class="btn btn-primary" href="{{ url('/products') }}">Back</a></div>
@endsection
