<?php

namespace Belo\Http\Controllers;

use Belo\Patient;
use Illuminate\Http\Request;
use Belo\Http\Requests\PatientRequest;
use Belo\Transformers\PatientTransformer;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Patient $patient)
    {
        return view('patients.index', [
            'patients' => $patient->latest()->paginate(50)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PatientRequest $request)
    {
        $patient = Patient::create($request->all());

        return redirect()->route('patients.edit', $patient->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \Belo\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        $patient->load('illnesses');

        return $patient;
        // return fractal($patient, new PatientTransformer())->toArray();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Belo\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        return view('patients.edit', [
            'patient' => $patient
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Belo\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(PatientRequest $request, Patient $patient)
    {
        $patient->update($request->all());

        return redirect()->route('patients.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Belo\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient)
    {
        //
    }
}
