@extends('layouts.app')
@section('content')

    <h1> Employees </h1>
    {{--<a class="btn btn-success" href="{{ action('EmployeeController@create') }}">Create</a>--}}

    <table class="table table-hover table-bordered">
        <tr>
            <th>Employee Name</th>
            <th>Employee Cnic</th>
            <th>Employee scale</th>
            <th>Employee code</th>
        </tr>
            <tr>
                <td>{{ $employee->$employee_name }}</td>
                <td>{{ $employee->$employee_cnic }}</td>
                <td>{{ $employee->$employee_scale }}</td>
                <td>{{ $employee->$employee_code }}</td>
            </tr>

    </table>

    <div class="text-center">{{ $employees->links() }}</div>

@endsection
