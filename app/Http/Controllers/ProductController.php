<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Create new product
    public function registerNewProduct(Request $request)
    {
        // Validate sent request
        $request->validate([
            'name' => 'required|string',
        ]);

        $product = Product::create([
            'name' => $request->get('name'),
            'description' => $request->get('description')
        ]);

        $response = [
            'Message' => 'Created successfully',
            'Data' => $product
        ];

        return response($response, 201);
    }

    // Fetched all products
    public function getAllProducts()
    {
        $products = Product::all();

        if (count($products) > 0) {
            $response = [
                'Message' => 'Fetched successfully',
                'Data' => $products
            ];

        } else {
            $response = [
                'Message' => 'Data not found!',
                'Data' => []
            ];
        }

        return response($response);
    }
}
