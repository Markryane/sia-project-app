<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Resources\ProductResource;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Display a listing of the products.
    public function index()
    {
        $products = Product::all();
        return ProductResource::collection($products);
    }

    // Store a newly created product in storage.
    public function store(Request $request)
    {
        $product = Product::create($request->all());
        return new ProductResource($product);
    }

    // Display the specified product.
    public function show($id)
    {
        $product = Product::find($id);
        if ($product) {
            return new ProductResource($product);
        } else {
            return response()->json(['message' => 'Product not found'], 404);
        }
    }

    // Update the specified product in storage.
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        if ($product) {
            $product->update($request->all());
            return new ProductResource($product);
        } else {
            return response()->json(['message' => 'Product not found'], 404);
        }
    }

    // Remove the specified product from storage.
    public function destroy($id)
    {
        $product = Product::find($id);
        if ($product) {
            $product->delete();
            return response()->json(['message' => 'Product deleted successfully']);
        } else {
            return response()->json(['message' => 'Product not found'], 404);
        }
    }
}

