@extends('layouts.main')

@section('content')
<h2>Patients</h2>

<div class="row">
    <div class="col-md-8">
        {{ Form::model($patient, [
                'route' => ['patients.update', $patient->id],
                'method' => 'PUT'
            ]) }}

            @include('patients.form')
        {{ Form::close() }}
    </div>
</div>
@endsection