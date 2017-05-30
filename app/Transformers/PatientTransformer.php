<?php

namespace Belo\Transformers;

use Belo\Patient;
use League\Fractal\TransformerAbstract;

class PatientTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Patient $patient)
    {
        $illnesses = $patient->illnesses->map(function($item) {
            return $item->name;
        });

        return [
            'first_name' => $patient->first_name,
            'illnesses' => $illnesses
        ];
    }
}
