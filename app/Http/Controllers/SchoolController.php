<?php

namespace App\Http\Controllers;

use App\Models\School;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class SchoolController extends Controller
{
    public function create()
    {
        try {
            return view('site.school.form');
        } catch (Exception $exception) {
            Log::error("Erro ao acessar a tela de cadastro:", [
                'error' => $exception->getMessage(),
                'date' => now()
            ]);
            abort(500);
        }
    }

    public function store(Request $request)
    {
        try {
            $school = new School();
            $school->uuid = Str::uuid();
            $school->cnpj = $request->input('cnpj');
            $school->name = $request->input('name');
            $school->email = $request->input('email');
            $school->phone = $request->input('phone');
            $school->director_name = $request->input('director_name');
            $school->director_phone = $request->input('director_phone');
            $school->address_postcode = $request->input('postcode');
            $school->address = $request->input('address');
            $school->address_number = $request->input('address_number');
            $school->address_complement = $request->input('address_complement');
            $school->address_district = $request->input('district');
            $school->receive_email = $request->input('receive_email');
            $school->save();

            if (isset($school->id) && !empty($school->id)) {
                return redirect(route('school.success'));
            }

            return redirect()->back()->with('alert-danger', 'Oops!, encontramos um problema ao processar os seus dados, tente mais tarde!');
        } catch (Exception $exception) {
            Log::error("Erro ao cadastrar instituição:", [
                'error' => $exception->getMessage(),
                'data' => $request->all(),
                'date' => now()
            ]);
            return redirect()->back()->with('alert-danger', 'Oops!, encontramos um problema ao processar os seus dados, tente mais tarde!');
        }
    }

    public function success(){
        return view('site.school.success');
    }

}
