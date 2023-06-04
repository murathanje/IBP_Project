@extends('back.pages.master')
@section('title', 'Delete User')
@section('deleteuser')

<form method="POST" action="{{ asset('admin/delete/user/check') }}">
    @csrf
    <div class="mb-3">
        <label for="userID" class="form-label">User ID</label>
        <input type="number" class="form-control" id="userID" name="userID" placeholder="User ID">
    </div>
    <button type="submit" class="btn btn-danger">Delete</button>
</form>
@endsection