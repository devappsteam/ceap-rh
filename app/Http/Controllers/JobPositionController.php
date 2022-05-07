<?php

namespace App\Http\Controllers;

use App\Models\JobPosition;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class JobPositionController extends Controller
{
    public function search_job_by_name(Request $request)
    {
        try {
            if (!empty($request->input('job'))) {
                $jobs = JobPosition::where("name", "LIKE", "%{$request->input('job')}%")->limit(10)->get();
                return response()->json(array(
                    'status'    => true,
                    'data'      => $jobs
                ));
            }
            return response()->json(array(
                'status'    => true,
                'data'      => []
            ));
        } catch (Exception $exception) {
            Log::error('Falha ao buscar cargo.', [
                'error' => $exception->getMessage(),
                'date'  => now()
            ]);
        }
    }
}
