<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    // Create new type
    public function registerNewType(Request $request)
    {
        // Validate sent request
        $request->validate([
            'name' => 'required|string'
        ]);

        $type = Type::create([
            'name' => $request->get('name'),
            'description' => $request->get('description')
        ]);

        $response = [
            'Message' => 'Created successfully',
            'Data' => $type
        ];

        return response($response, 201);
    }

    // Fetch all types
    public function getAllTypes()
    {
        $types = Type::all();

        if (count($types) > 0) {
            $response = [
                'Message' => 'Fetched successfully',
                'Data' => $types
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
