<?php

namespace App\Http\Controllers;

use App\Models\Language;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LanguageController extends Controller
{
    public function search_language_by_name(Request $request)
    {
        try {
            if (!empty($request->input('language'))) {
                $cities = Language::where("name", "LIKE", "%{$request->input('language')}%")->limit(10)->get();
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
            Log::error('Falha ao buscar linguagem.', [
                'error' => $exception->getMessage(),
                'date'  => now()
            ]);
        }
    }
}
