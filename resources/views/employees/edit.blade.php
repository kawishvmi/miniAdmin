@extends('layouts.app')

@section('content')
    <h1>Edit Employee</h1>
    <form action="{{ route('employees.update', $employee->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="first_name">First Name:</label>
            <input type="text" name="first_name" id="first_name" value="{{ $employee->first_name }}" required>
        </div>
        <div>
            <label for="last_name">Last Name:</label>
            <input type="text" name="last_name" id="last_name" value="{{ $employee->last_name }}" required>
        </div>
        <div>
            <label for="company">Company:</label>
            <select name="company" id="company" required>
                @foreach ($companies as $company)
                    <option value="{{ $company->id }}" {{ $employee->company_id === $company->id ? 'selected' : '' }}>
                        {{ $company->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{{ $employee->email }}">
        </div>
        <div>
            <label for="phone">Phone:</label>
            <input type="text" name="phone" id="phone" value="{{ $employee->phone }}">
        </div>
        <button type="submit">Update</button>
    </form>
@endsection
