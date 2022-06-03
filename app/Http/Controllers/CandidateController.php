<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\CandidateCourse;
use App\Models\CandidateCurse;
use App\Models\CandidateExperience;
use App\Models\CandidateFormation;
use App\Models\CandidateInterest;
use App\Models\CandidateLanguage;
use App\Models\CandidatePhone;
use App\Models\CandidatePosgraduate;
use App\Models\JobPosition;
use App\Models\Language;
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
            return view('site.candidate.index');
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
            return view('site.candidate.form');
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

            if (!empty($candidate->id) && ($request->has('interest') && !empty($request->input('interest')))) {
                $interests = array();
                foreach ($request->input('interest') as $key => $value) {
                    $job_id = JobPosition::where('uuid', $value['job'])->first()->id;
                    array_push($interests, array(
                        'uuid'                  => $key,
                        'candidate_id'          => $candidate->id,
                        'job_id'                => $job_id,
                        'salary_expectation'    => $this->convert_real_to_decimal($value['price']),
                        'salary_type'           => ($value['type'] == 'month') ? 1 : 2,
                        'created_at'            => now(),
                        'updated_at'            => now()
                    ));
                }
                CandidateInterest::insert($interests);
            }

            if (!empty($candidate->id) && ($request->has('experience') && !empty($request->input('experience')))) {
                $experiencies = array();
                foreach ($request->input('experience') as $key => $value) {
                    $job_id = JobPosition::where('uuid', $value['job'])->first()->id;
                    array_push($experiencies, array(
                        'uuid'              => $key,
                        'candidate_id'      => $candidate->id,
                        'job_id'            => $job_id,
                        'start'             => $value['start'],
                        'end'               => $value['end'],
                        'institution'       => $value['institution'],
                        'activities'        => $value['activities'],
                        'show_institution'  => ($value['is_public'] == 'yes') ? 1 : 0,
                        'created_at'        => now(),
                        'updated_at'        => now()
                    ));
                }
                CandidateExperience::insert($experiencies);
            }


            if (!empty($candidate->id) && ($request->has('formation') && !empty($request->input('formation')))) {
                $formations = array();
                foreach ($request->input('formation') as $key => $value) {
                    array_push($formations, array(
                        'uuid'              => $key,
                        'candidate_id'      => $candidate->id,
                        'course'            => $value['course'],
                        'type'              => $value['type'],
                        'institution'       => $value['institution'],
                        'period'            => $value['period'],
                        'conclusion_year'   => $value['conclusion'],
                        'created_at'        => now(),
                        'updated_at'        => now()
                    ));
                }
                CandidateFormation::insert($formations);
            }

            if (!empty($candidate->id) && ($request->has('posgraduate') && !empty($request->input('posgraduate')))) {
                $posgraduates = array();
                foreach ($request->input('posgraduate') as $key => $value) {
                    array_push($posgraduates, array(
                        'uuid'              => $key,
                        'candidate_id'      => $candidate->id,
                        'course'            => $value['course'],
                        'type'              => $value['type'],
                        'institution'       => $value['institution'],
                        'conclusion_year'   => $value['conclusion'],
                        'comment'           => $value['comment'],
                        'created_at'        => now(),
                        'updated_at'        => now()
                    ));
                }
                CandidatePosgraduate::insert($posgraduates);
            }

            if (!empty($candidate->id) && ($request->has('course') && !empty($request->input('course')))) {
                $courses = array();
                foreach ($request->input('course') as $key => $value) {
                    array_push($courses, array(
                        'uuid'              => $key,
                        'candidate_id'      => $candidate->id,
                        'course'            => $value['course'],
                        'type'              => $value['type'],
                        'institution'       => $value['institution'],
                        'conclusion_year'   => $value['conclusion'],
                        'comment'           => $value['comment'],
                        'created_at'        => now(),
                        'updated_at'        => now()
                    ));
                }
                CandidateCourse::insert($courses);
            }

            if (!empty($candidate->id) &&  ($request->has('language') && !empty($request->input('language')))) {
                $languages = array();
                foreach ($request->input('language') as $key => $value) {
                    $language_id = Language::where('uuid', $value['uuid'])->first()->id;
                    array_push($languages, array(
                        'uuid'              => $key,
                        'candidate_id'      => $candidate->id,
                        'language_id'       => $language_id,
                        'level'             => $value['level'],
                        'created_at'        => now(),
                        'updated_at'        => now()
                    ));
                }
                CandidateLanguage::insert($languages);
            }
            return redirect(route('candidate.success'));
        } catch (Exception $exception) {
            Log::error("Erro ao cadastrar candidato:", [
                'error' => $exception->getMessage(),
                'data' => $request->all(),
                'date' => now()
            ]);
            return redirect()->back()->with('alert-danger', 'Oops!, encontramos um problema ao processar os seus dados, tente mais tarde!');
        }
    }


    public function success(){
        return view('site.candidate.success');
    }

}
