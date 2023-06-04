@extends('back.pages.master')
@section('title', 'Edit User')
@section('edituser')
<form method="POST" action="{{ asset('admin/edit/user/check') }}">
    @csrf
    <div class="mb-3">
        <label for="userID" class="form-label">User ID</label>
        <input type="number" class="form-control" id="userID" name="userID" placeholder="User ID" value="">
    </div>
    <div class="mb-3">
        <label for="firstName" class="form-label">First Name</label>
        <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name" value="">
    </div>
    <div class="mb-3">
        <label for="lastName" class="form-label">Last Name</label>
        <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name" value="">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">User Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="User Email" value="">
    </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" minlength="8" placeholder="Password" required>
        <div class="invalid-feedback">The password must be at least 8 characters long.</div>
    </div>

    <button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection
