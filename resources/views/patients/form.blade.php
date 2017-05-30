<div class="form-group {{ $errors->has('first_name') ? ' has-danger' : null }}">
    <label class="form-control-label">First name</label>
    {{ Form::text('first_name', null, ['class' => 'form-control'])}}
    <p class="help-block text-danger">{{ $errors->first('first_name') }}</p>
</div>

<div class="form-group">
    <label for="">Last name</label>
    {{-- {{ Form::text('last_name', null, ['class' => 'form-control'])}} --}}
    {{-- {{ Form::text('first_name', null, ['class' => 'form-control'])}} --}}
    <input
        type="text"
        name="last_name"
        class="form-control" value="{{ old('last_name') }}">
</div>

<div class="form-group">
    <label for="">Middle name</label>
    {{ Form::text('middle_name', null, ['class' => 'form-control'])}}
</div>
<div class="form-group">
    <label for="">Contact Number</label>
    {{ Form::text('contact_number', null, ['class' => 'form-control'])}}
</div>

<div class="form-group">
    <label for="">Gender</label>
    {{ Form::select('gender',
        ['male' => 'Male', 'female' => 'Female'], null, ['class' => 'form-control'])}}
</div>

<div class="form-group">
    <label for="">Birthdate</label>
    {{ Form::date('birthdate', null, ['class' => 'form-control'])}}
</div>

<button type="submit" class="btn btn-primary">Save</button>