@extends('layouts.main')

@section('content')
<h2>Patients</h2>

<div class="table-responsive">
  <table class="table table-striped">
    <thead>
      <tr>
        <th width="50"></th>
        <th>Full Name</th>
        <th>Gender</th>
      </tr>
    </thead>
    <tbody>
      @foreach($patients as $patient)
      <tr>
        <td>
            <img width="50" class="rounded" src="/img/dog.jpg" alt="">
        </td>
        <td>
            <a href="{{ route('patients.edit', $patient->id) }}">
            {{ $patient->first_name }} {{ $patient->last_name }}
            </a>
        </td>
        <td class="text-capitalize">{{ $patient->gender }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>

  {{ $patients->links('vendor.pagination.bootstrap-4') }}
</div>
@endsection