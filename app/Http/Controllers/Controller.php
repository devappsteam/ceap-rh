<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Undocumented function
     *
     * @param string $table
     * @return string
     */
    protected function generate_protocol(string $table): string
    {
        try {
            $last_id = DB::table($table)->max('id');
            $last_id = (!empty($last_id)) ? $last_id++ : 1;
            return date('Ymd') . str_pad($last_id, 5, 0, STR_PAD_LEFT);
        } catch (Exception $ex) {
            Log::error(
                'Falha ao gerar protocolo.',
                array(
                    'date' => now(),
                    'error' => $ex->getMessage()
                )
            );
            return date('YmdHi');
        }
    }

    protected function convert_real_to_decimal(string $price): float
    {
        try {

            $price = str_replace('.', '', $price);
            $price = str_replace(',', '.', $price);
            return (float) $price;
        } catch (Exception $ex) {
            Log::error(
                'Falha ao converter preço.',
                array(
                    'date' => now(),
                    'error' => $ex->getMessage()
                )
            );
            return date('YmdHi');
        }
    }
}
