@extends('layouts.app')

@section('content')
    <h1>Employees List</h1>
    <table>
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Company</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $employee)
                <tr>
                    <td>{{ $employee->first_name }}</td>
                    <td>{{ $employee->last_name }}</td>
                    <td>{{ $employee->email }}</td>
                    <td>{{ $employee->company->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="pagination">
        {{ $employees->links() }}
    </div>
@endsection
