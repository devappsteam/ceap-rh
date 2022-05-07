<?php

namespace App\Http\Controllers;

use App\Models\File;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class FileController extends Controller
{
    public function send_file(Request $request)
    {
        try {
            if ($request->hasFile('file') && !empty($request->input('type'))) {
                $file = new File();
                $file->uuid         = Str::uuid();
                $file->name         = $request->file->getClientOriginalName();
                $file->path         = $request->file->store($request->input('type'));
                $file->size         = $request->file->getSize();
                $file->mime         = $request->file->getMimeType();
                $file->extension    = $request->file->getClientOriginalExtension();
                $file->save();

                return response()->json(array(
                    'status'    => true,
                    'uuid'      => $file->uuid,
                ));
            }
            return response()->json(array(
                'status'    => false,
                'error'     => "Falha ao enviar arquivo."
            ));
        } catch (Exception $exception) {
            Log::error('Falha ao enviar arquivo.', [
                'error' => $exception->getMessage(),
                'date'  => now()
            ]);
        }
    }
}
