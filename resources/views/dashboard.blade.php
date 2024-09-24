@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                        <h1>Employment Contracts Dashboard</h1>

                        <!-- Search Form -->
                        <form action="" method="GET" class="mb-4">
                            <div class="input-group d-flex gap-2">
                                <input type="text" name="search" class="form-control" placeholder="Search by employee name or address" value="{{ request()->get('search') }}">
                                <button class="btn btn-primary" type="submit">Search</button>
                                <a href="{{ route("dashboard") }}" class="btn btn-secondary">Clear</a>
                            </div>
                        </form>

                        <!-- Dynamic Table displaying data from employment_contracts table -->
                        <table class="table table-bordered table-striped">
                            <thead class="table-dark">
                                <tr>
                                    <th>Employee Name</th>
                                    <th>Employee Address</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contracts as $contract)
                                    <tr>
                                        <td>{{ $contract->employee_name }}</td>
                                        <td>{{ $contract->employee_address }}</td>
                                        <td>
                                            <a href="{{ route("generate-pdf", ['id' => $contract->id]) }}" class="btn btn-sm btn-success">Download</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <!-- Pagination Links -->
                        <div class="d-flex justify-content-center">
                            {{ $contracts->appends(request()->query())->links() }}
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
