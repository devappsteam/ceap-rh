<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    public function index()
    {
        try {
            return view('site.home.index');
        } catch (Exception $exception) {
            Log::error("Erro ao acessar a tela inicial:", [
                'error' => $exception->getMessage(),
                'date' => now()
            ]);
            abort(500);
        }
    }
}
