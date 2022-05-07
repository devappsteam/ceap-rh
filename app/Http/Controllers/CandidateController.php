<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\CandidatePhone;
use App\Models\JobPosition;
use App\Models\State;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class CandidateController extends Controller
{
    public function index()
    {
        try {
            return view('candidate.index');
        } catch (Exception $exception) {
            Log::error("Erro ao acessar a tela inicial:", [
                'error' => $exception->getMessage(),
                'date' => now()
            ]);
            abort(500);
        }
    }

    public function create()
    {
        try {
            return view('candidate.form');
        } catch (Exception $exception) {
            Log::error("Erro ao acessar a tela inicial:", [
                'error' => $exception->getMessage(),
                'date' => now()
            ]);
            abort(500);
        }
    }

    public function store(Request $request)
    {
        try {
            /*
            $candidate = new Candidate();
            $candidate->uuid = Str::uuid();
            $candidate->code = $this->generate_protocol('candidates');
            $candidate->name = $request->input('name');
            $candidate->sex = $request->input('sex');
            $candidate->birth_date = $request->input('bithdate');
            $candidate->cpf = $request->input('cpf');
            $candidate->rg = $request->input('rg');
            $candidate->marital_status = $request->input('marital_status');
            $candidate->email = $request->input('email');
            $candidate->personal_presentation = $request->input('personal_presentation');
            $candidate->naturalness = $request->input('hometown');
            $candidate->address_number = $request->input('number');
            $candidate->address_complement = $request->input('complement');
            $candidate->address_district = $request->input('district');
            $candidate->video = $request->input('video');
            $candidate->receive_email = ($request->input('ceap_notification') == 'yes') ? 1 : 0;
            $candidate->save();

            if (!empty($candidate->id) && ($request->has('contact') && !empty($request->input('contact')))) {
                $phones = array();
                foreach ($request->input('contact') as $key => $value) {
                    array_push($phones, array(
                        'uuid'          => $key,
                        'candidate_id'  => $candidate->id,
                        'phone'         => $value['phone'],
                        'type'          => $value['type'],
                        'created_at'    => now(),
                        'updated_at'    => now()
                    ));
                }
                CandidatePhone::insert($phones);
            }
            */

            if (($request->has('interest') && !empty($request->input('interest')))) {
                $interests = array();
                foreach ($request->input('interest') as $key => $value) {
                    $job_id = JobPosition::where('uuid', $value['job'])->first()->id;
                    array_push($interests, array(
                        'uuid'                  => $key,
                        'candidate_id'          => 1,
                        'job_id'                => $job_id,
                        'salary_expectation'    => $this->convert_real_to_decimal($value['price']),
                        'salary_type'           => ($value['salary_type'] == 'month') ? 1 : 2,
                        'created_at'            => now(),
                        'updated_at'            => now()
                    ));
                }
                CandidatePhone::insert($interests);
            }

            dd('aqui');
        } catch (Exception $exception) {
            Log::error("Erro ao cadastrar candidato:", [
                'error' => $exception->getMessage(),
                'data' => $request->all(),
                'date' => now()
            ]);
            abort(500);
        }
    }
}
