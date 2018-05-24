<div class="mb-3">
    {!! Form::label('firstname','First Name', ['class' => 'control-label']) !!}
    {!! Form::text('firstname', null, ['class' => 'form-control' . ($errors->has('firstname') ? ' is-invalid' : '') ]) !!}
    {!! $errors->first('firstname', '<span class="invalid-feedback">:message</span>') !!}
</div>

<div class="mb-3">
    {!! Form::label('lastname','Last Name', ['class' => 'control-label']) !!}
    {!! Form::text('lastname', null, ['class' => 'form-control' . ($errors->has('lastname') ? ' is-invalid' : '') ]) !!}
    {!! $errors->first('lastname', '<span class="invalid-feedback">:message</span>') !!}
</div>

<div class="mb-3">
    {!! Form::label('company','Company', ['class' => 'control-label']) !!}
    {!! Form::select('company_id', $companies->pluck('name'), (isset($employee->company)) ? $employee->company->id : '', [
        'class' => 'form-control',
        'placeholder' => 'Select',
        'required' =>  'required'
    ]) !!}
    {!! $errors->first('company', '<span class="invalid-feedback">:message</span>') !!}
</div>

<div class="mb-3">
    {!! Form::label('email','Email', ['class' => 'control-label']) !!}
    {!! Form::text('email', null, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : '') ]) !!}
    {!! $errors->first('email', '<span class="invalid-feedback">:message</span>') !!}
</div>