@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @auth
                            <p>Welcome, {{ Auth::user()->name }}!</p>
                            <div>
                                <a href="{{ route('companies.index') }}" class="btn btn-primary">
                                    <i class="fas fa-building"></i> View Companies
                                </a>
                                <a href="{{ route('companies.create') }}" class="btn btn-success">
                                    <i class="fas fa-plus"></i> Add Company
                                </a>
                            </div>
                            <div style="margin-top: 10px;">
                                <a href="{{ route('employees.index') }}" class="btn btn-primary">
                                    <i class="fas fa-user"></i> View Employees
                                </a>
                                <a href="{{ route('employees.create') }}" class="btn btn-success">
                                    <i class="fas fa-plus"></i> Add Employee
                                </a>
                            </div>
                        @else
                            <p>You are not logged in. Please <a href="{{ route('login') }}">log in</a> or <a href="{{ route('register') }}">register</a>.</p>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
