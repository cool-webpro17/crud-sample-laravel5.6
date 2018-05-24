@extends('app')

@section('main')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3">
        <h1 class="h2">Employees</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
                <a href="{{ route('employees.create') }}" class="btn btn-primary"><span data-feather="plus"></span> Create</a>
            </div>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-vcenter table-hover table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Company</th>
                <th>Email</th>
                <th class="text-center">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($employees as $employee)
                <tr>
                    <td>{{ $employee->id }}</td>
                    <td>{{ $employee->firstname }}</td>
                    <td>{{ $employee->lastname }}</td>
                    <td>{{ $employee->company->name }}</td>
                    <td>{{ $employee->email }}</td>
                    <td class="text-center">
                        <div class="btn-group btn-group-sm">
                            <a href="{{ route('employees.show', $employee->id) }}" class="btn btn-primary"><span data-feather="eye"></span></a>
                            <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-warning"><span data-feather="edit-2"></span></a>
                            <a data-method="DELETE" data-confirm="Are you sure?" href="{{ route('employees.destroy', $employee->id) }}" class="btn btn-danger"><span data-feather="x"></span></a>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@stop