@extends('layouts.app')

@section('content')
    <h1>Companies List</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Logo</th>
                <th>Website</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($companies as $company)
                <tr>
                    <td>{{ $company->name }}</td>
                    <td>{{ $company->email }}</td>
                    <td>
                        <img src="{{ asset('storage/' . $company->logo) }}" alt="Company Logo" width="50" height="50">
                    </td>
                    <td>{{ $company->website }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

     <div class="pagination">
        {{ $companies->links() }}
  </div>
@endsection
