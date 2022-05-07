<?php

namespace App\Http\Controllers;

use App\Models\City;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CityController extends Controller
{
    public function search_city_by_name(Request $request)
    {
        try {
            if (!empty($request->input('city'))) {
                $cities = City::where("name", "LIKE", "%{$request->input('city')}%")->limit(10)->get();
                return response()->json(array(
                    'status'    => true,
                    'data'      => $cities
                ));
            }
            return response()->json(array(
                'status'    => true,
                'data'      => []
            ));
        } catch (Exception $exception) {
            Log::error('Falha ao buscar cidade.', [
                'error' => $exception->getMessage(),
                'date'  => now()
            ]);
        }
    }
}
