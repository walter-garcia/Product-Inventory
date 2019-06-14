<?php

namespace inventory\Http\Controllers;

use inventory\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use inventory\Product;

class ProductController extends Controller
{
    public function index()
    {
        return view('index.home');
    }

    public function newProduct()
    {
        return view('product.form');
    }

    public function edit(Product $product)
    {
        return view('product.update', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $data = $request->all();
        $product->update($data);

        return redirect('products')->with('update', 'Product Updated Successfully!');
    }

    public function delete(Product $product)
    {
        $product->delete();

        return redirect('products');
    }

    public function include(ProductRequest $request)
    {
        Product::create($request->all());

        return redirect('products')->with('success', 'Product Registered Successfully!');
    }

    public function list()
    {
        $products = Product::all();
        return view('product.list')->with('products', $products);
    }

    public function showDetails(Product $product)
    {
        return view('product.details')->with(['products' => $product]);
    }
}
