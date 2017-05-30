<?php

namespace Belo;

use Illuminate\Database\Eloquent\Model;

class PatientIllness extends Model
{
    public function illness()
    {
        return $this->belongsTo(Illness::class);
    }
}
