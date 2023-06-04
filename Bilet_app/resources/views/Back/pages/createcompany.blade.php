@extends('back.pages.master')
@section('title', 'Create Company')
@section('createcompany')
<form method="POST" action="{{ asset('admin/create/company/check') }}">
    @csrf
    <div class="mb-3">
        <label for="companyName" class="form-label">Company Name</label>
        <input type="text" class="form-control" id="companyName" name="companyName" placeholder="Company Name">
    </div>
    <div class="mb-3">
        <label for="companyLocation" class="form-label">Company Address</label>
        <input type="text" class="form-control" id="companyName" name="companyAddress" placeholder="Company Address">
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
</form>
@endsection
