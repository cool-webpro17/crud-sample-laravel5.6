@extends('app')

@section('main')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3">
        <h1 class="h2">Edit Employee</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
                <a href="{{ route('employees.index') }}" class="btn btn-outline-secondary">
                    <span data-feather="arrow-left"></span> Back
                </a>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-md-6">
            {!! Form::model($employee, ['route' => ['employees.update', $employee->id], 'method' => 'PATCH']) !!}

            @include('employees.partials.form', ['companies' => $companies, 'employee' => $employee])

            <button class="btn btn-primary btn-lg" type="submit">
                <span data-feather="send"></span> Update Employee
            </button>

            {!! Form::close() !!}
        </div>

    </div>

@stop