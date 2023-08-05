@extends('layouts.app')

@section('content')
    <h1>Edit Company</h1>
    <form action="{{ route('companies.update', $company->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="{{ $company->name }}" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{{ $company->email }}">
        </div>
        <div>
            <label for="logo">Logo:</label>
            <input type="file" name="logo" id="logo">
            @if ($company->logo)
                <img src="{{ asset('storage/' . $company->logo) }}" alt="Company Logo" width="100">
            @else
                <p>No logo uploaded.</p>
            @endif
        </div>
        <div>
            <label for="website">Website:</label>
            <input type="text" name="website" id="website" value="{{ $company->website }}">
        </div>
        <button type="submit">Update</button>
    </form>
@endsection
