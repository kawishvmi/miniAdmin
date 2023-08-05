@extends('layouts.app')

@section('content')
    <h1>Create Company</h1>
    <form action="{{ route('companies.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="logo">Logo:</label>
            <input type="file" name="logo" id="logo" required>
        </div>
        <div>
            <label for="website">Website:</label>
            <input type="text" name="website" id="website">
        </div>
        <button type="submit">Create</button>
    </form>
@endsection
