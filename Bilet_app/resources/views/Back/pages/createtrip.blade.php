@extends('back.pages.master')
@section('title','Create Trip')
@section('createtrip')
<form method="POST" action="{{ asset('admin/create/user/check') }}">
    @csrf
  <div class="mb-3">
    <label for="firstName" class="form-label">First Name</label>
    <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name">
  </div>
  <div class="mb-3">
    <label for="lastName" class="form-label">Last Name</label>
    <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">E-mail</label>
    <input type="email" class="form-control" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="E-mail" required>
    <div class="invalid-feedback">Geçerli bir e-posta adresi giriniz.</div>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password" minlength="8" placeholder="Password" required>
    <div class="invalid-feedback">The password must be at least 8 characters long.</div>
  </div>
  <button type="submit" class="btn btn-primary">Create</button>
</form>

@endsection