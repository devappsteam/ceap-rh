<?php

use App\Http\Controllers\CandidateController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobPositionController;
use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/candidato/introducao', [CandidateController::class, 'index'])->name('candidate.index');
Route::get('/candidato/cadastrar', [CandidateController::class, 'create'])->name('candidate.create');
Route::post('/candidato/cadastrar', [CandidateController::class, 'store'])->name('candidate.store');
Route::get('/candidato/sucesso', [CandidateController::class, 'success'])->name('candidate.success');

Route::post('/city/search', [CityController::class, 'search_city_by_name'])->name('city.search_by_name');
Route::post('/job/search', [JobPositionController::class, 'search_job_by_name'])->name('job.search_by_name');
Route::post('/language/search', [LanguageController::class, 'search_language_by_name'])->name('language.search_by_name');
Route::post('/file/send', [FileController::class, 'send_file'])->name('file.send');
