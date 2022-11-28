<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UnitConversionController extends Controller
{
    // Convert value from one unit to another
    public function convertUnit(Request $request)
    {
        // Validate the sent request
        $fields = $request->validate([
            'convertFrom' => 'required',
            'convertTo' => 'required',
            'fromValue' => 'required'
        ]);

        // Retrieve the units
        $convertFromUnit = Unit::find($fields['convertFrom']);
        $convertToUnit = Unit::find($fields['convertTo']);

        if (($convertFromUnit) && ($convertToUnit)) {
            // conversion result = (from value * convert to unit factor) / convert from unit factor
            $result = ($fields['fromValue'] * $convertToUnit->factor) / $convertFromUnit->factor;

            $response = [
                'Message' => 'Fetched successfully',
                'Data' => [
                    'Convert from unit: ' => $convertFromUnit->name,
                    'Convert to unit: ' => $convertToUnit->name,
                    'Convert value: ' => $fields['fromValue'],
                    'Result: ' => $result
                ]
            ];

        } elseif ((! $convertFromUnit) && ($convertToUnit)) {
            // Convert From Unit is not exist
            $response = [
                'Message' => 'Convert From Unit is not exist!',
                'Data' => []
            ];

        } elseif (($convertFromUnit) && (! $convertToUnit)) {
            // Convert To Unit is not exist
            $response = [
                'Message' => 'Convert To Unit is not exist!',
                'Data' => []
            ];

        } else {
            $response = [
                'Message' => 'Input data are not valid!',
                'Data' => []
            ];
        }

        return response($response);
    }
}
