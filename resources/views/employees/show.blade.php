@extends('app')

@section('main')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3">
        <h1 class="h2">{{ $employee->firstname }} {{ $employee->lastname }}</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
                <a href="{{ route('employees.index') }}" class="btn btn-outline-secondary"><span data-feather="arrow-left"></span> Back</a>
                <a href="{{ route('employees.edit', $employee) }}" class="btn btn-primary"><span data-feather="edit-2"></span> Edit</a>
            </div>
        </div>
    </div>

    <h3>Detail Info:</h3>
    <p><strong>Company: </strong>{{ $employee->company->name }}</p>
    <p><strong>Email: </strong>{{ $employee->email }}</p>

@stop