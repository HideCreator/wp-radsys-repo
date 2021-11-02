
@extends('layouts.report')
@section('content')
<div id="report-title"><h1></h1></div>
<table class="table table-sm table-striped">
    <thead>
        <tr>
            <th>Kd Akun</th>
            <th>Username</th>
            <th>Password</th>
            <th>Email</th>
            <th>Role</th>
            <th>Timestamp</th>
        </tr>
    </thead>
    <tbody>
        @foreach($records as $record)
        <tr>
            <td>{{ $record->kd_akun }}</td>
            <td>{{ $record->username }}</td>
            <td>{{ $record->password }}</td>
            <td>{{ $record->email }}</td>
            <td>{{ $record->role }}</td>
            <td>{{ $record->timestamp }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
