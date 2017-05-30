<?php

namespace Belo;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'contact_number',
        'birthdate',
        'gender'
    ];

    public function illnesses()
    {
        return $this->belongsToMany(Illness::class, 'patient_illnesses');
    }
}
