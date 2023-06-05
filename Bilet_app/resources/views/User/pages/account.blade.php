@extends('user.pages.index')
@section('title', 'Edit My Info')
@section('myaccount')
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form method="POST" action="{{ asset('account/panel/myaccount/check') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="firstName" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="firstName" name="firstName" placeholder="{{ $users->users_first_name }}" value="{{ $users->users_first_name }}">
                        </div>
                        <div class="mb-3">
                            <label for="lastName" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="lastName" name="lastName" placeholder="{{ $users->users_last_name }}" value="{{ $users->users_last_name }}">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">User Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="{{ $users->users_email }}" value="{{ $users->users_email }}">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" minlength="8" placeholder="Password" required>
                            <div class="invalid-feedback">The password must be at least 8 characters long.</div>
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                        <button type="submit" class="btn btn-danger" formaction="{{ asset('account/panel/myaccount/delete') }}">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
