@extends('back.pages.master')
@section('title', 'Delete Company')
@section('deletecompany')
<form method="POST" action="{{ asset('admin/delete/company/check') }}">
    @csrf
    <div class="mb-3">
        <label for="companyID" class="form-label">Company ID</label>
        <input type="number" class="form-control" id="companyID" name="companyID" placeholder="Company ID" value="">
    </div>
    <button type="submit" class="btn btn-danger">Delete</button>
</form>
@endsection
