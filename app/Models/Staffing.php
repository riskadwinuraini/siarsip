<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staffing extends Model
{
    use HasFactory;
    protected $fillable=[
        'CPPK',
        'photo',
        'curriculum_vitae',
        'fip01',
        'fip02',
        'model_dk',
        'spmt',
        'certificate',
        'training_certificate',
        'spmt',
        'marriage_certificate',
        'child_birth_certificate',
        'id_card',
        'death_certificate',
        'bpjs',
        'npwp',
        'sk',
        'competency_certification',
    ];
}
