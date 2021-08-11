<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // * read
    public function index() {
        $products = Product::all();
        return view('products.index', compact(['products']));
    }

    // * create
    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        Product::create($request->all());        
        return redirect('/products');
    }

    // * update
    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit', compact(['product']));
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->update($request->all());

        return redirect('/products');
    }

    // * delete
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect('/products');
    }

}
