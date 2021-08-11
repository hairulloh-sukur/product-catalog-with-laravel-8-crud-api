<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductApiController extends Controller
{
    // * read
    public function index()
    {
        $products = Product::all();
        return response()->json(['message' => 'Success', 'data' => $products]);
        // return response()->json($products); -> json nya akan langsung data: [ - { ... }, - { ... } ]
    }
    
    public function show($id)
    {
        $product = Product::find($id);
        return response()->json(['message' => 'Success', 'data' => $product]);
    }

    // * create
    public function store(Request $request)
    {
        $product = Product::create($request->all());
        return response()->json(['message' => 'Created Success', 'data' => $product]);
    }

    // * update
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->update($request->all());
        return response()->json(['message' => 'Updated Success', 'data' => $product]);
    }

    // * delete
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return response()->json(['message' => 'Deleted Success', 'data' => null]);
    }

}
