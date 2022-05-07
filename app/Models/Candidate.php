<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Candidate extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'uuid',
        'code',
        'name',
        'sex',
        'birth_date',
        'cpf',
        'rg',
        'marital_status',
        'email',
        'personal_presentation',
        'naturalness',
        'address_number',
        'address_complement',
        'address_district',
        'father_name',
        'mother_name',
        'special_needs',
        'special_needs_description',
        'video',
        'approve',
        'receive_email',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
