<?php

namespace App\Http\Controllers;

use App\Models\Type;
use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    // Create new unit
    public function registerNewUnit(Request $request)
    {
        // Validate sent request
        $fields = $request->validate([
            'name' => 'required|string',
            'symbol' => 'required|string',
            'factor' => 'required',
            'type_id' => 'required|integer'
        ]);

        $type = Type::find($fields['type_id']);

        if ($type) {
            $unit = Unit::create([
                'name' => $fields['name'],
                'symbol' => $fields['symbol'],
                'factor' => $fields['factor'],
                'type_id' => $fields['type_id'],
            ]);
        }

        $response = [
            'Message' => 'Created successfully',
            'Data' => $unit
        ];

        return response($response, 201);
    }

    // Fetch all units
    public function getAllUnits()
    {
        $units = Unit::all();

        if (count($units) > 0) {
            $response = [
                'Message' => 'Fetched successfully',
                'Data' => $units
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
