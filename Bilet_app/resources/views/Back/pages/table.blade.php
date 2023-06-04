@extends('back.pages.master')

@section('title', 'Tables')

@section('content')
    <div class="container">
        <h1>User Data</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach($userData as $user)
                    <tr>
                        <td>{{ $user->users_first_name }}</td>
                        <td>{{ $user->users_last_name }}</td>
                        <td>{{ $user->users_email }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
