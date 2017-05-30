@extends('layouts.main')

@section('content')
<h2>Patients</h2>

<div class="row">
    <div class="col-md-8">
        {{ Form::open(['route' => 'patients.store']) }}
            @include('patients.form')
        {{ Form::close() }}
    </div>
</div>
@endsection