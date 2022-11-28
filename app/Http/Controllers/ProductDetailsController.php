<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductDetails;
use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductDetailsController extends Controller
{
    // Create new product details
    public function registerNewProductDetails(Request $request)
    {
        $fields = $request->validate([
            'quantity' => 'required',
            'product_id' => 'required',
            'unit_id' => 'required'
        ]);

        $product = Product::find($fields['product_id']);
        $unit = Unit::find($fields['product_id']);

        if (($product) && ($unit)) {

            $productDetails = ProductDetails::create([
                'quantity' => $fields['quantity'],
                'product_id' => $fields['product_id'],
                'unit_id' => $fields['unit_id']
            ]);

            $response = [
                'Message' => 'Created successfully',
                'Data' => $productDetails
            ];

        } else {
            $response = [
                'Message' => 'Input data are not valid!',
                'Data' => []
            ];

            return response($response);
        }

        return response($response, 201);
    }

    // Get sum of the product's quantity in specific unit
    public function getProductQuantityInSpecificUnit(int $productId, int $unitId)
    {
        $productDetails = DB::table('product_details')
            ->where('product_id', $productId)
            ->get();

        if (count($productDetails->toArray()) > 0) {
            $sum = 0.0;

            $mainUnit = Unit::find($unitId);
            $mainFactor = $mainUnit->factor;

            foreach ($productDetails->toArray() as $productInfo) {
                if ($productInfo->unit_id === $unitId) {
                    $sum += $productInfo->quantity;
                    $mainFactor = $mainUnit->factor;

                } else {
                    $unit = Unit::find($productInfo->unit_id);

                    $sum += ($productInfo->quantity * $mainFactor) / $unit->factor;
                }
            }

            $response = [
                'Message' => 'Fetched successfully',
                'Data' => [
                    'Unit' => $mainUnit->name,
                    'Sum of the quantity' => $sum
                ]
            ];

        } else {
            $response = [
                'Message' => 'Data not found!',
                'Data' => []
            ];
        }

        return response($response);
    }

    // Fetch all products details
    public function getAllProductsDetails()
    {
        $productsDetails = ProductDetails::all();

        if (count($productsDetails) > 0) {
            $response = [
                'Message' => 'Fetched successfully',
                'Data' => $productsDetails
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
