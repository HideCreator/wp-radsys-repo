
@extends('layouts.report')
@section('content')
<div id="report-title"><h1></h1></div>
<table class="table table-sm table-striped">
    <tbody>
        <tr>
            <th>Kd Akun</th>
            <td>{{ $record->kd_akun }}</td>
        </tr>
        <tr>
            <th>Username</th>
            <td>{{ $record->username }}</td>
        </tr>
        <tr>
            <th>Password</th>
            <td>{{ $record->password }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $record->email }}</td>
        </tr>
        <tr>
            <th>Role</th>
            <td>{{ $record->role }}</td>
        </tr>
        <tr>
            <th>Timestamp</th>
            <td>{{ $record->timestamp }}</td>
        </tr>
    </tbody>
</table>
@endsection
