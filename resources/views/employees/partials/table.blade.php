<div class="table-responsive">
    <table class="table table-bordered table-hover table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Company</th>
            <th>E-mail</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $employee)
            <tr>
                <td>{{ $employee->id }}</td>
                <td>{{ $employee->firstname }}</td>
                <td>{{ $employee->lastname }}</td>
                <td>{{ $employee->company->name }}</td>
                <td>{{ $employee->email }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <p>Total: <strong>{{ count($data) }}</strong></p>
</div>