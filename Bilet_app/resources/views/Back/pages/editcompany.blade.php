@extends('back.pages.master')
@section('title', 'Edit Company')
@section('editcompany')
<form method="POST" action="{{ asset('admin/edit/company/check') }}">
    @csrf
    <div class="mb-3">
        <label for="companyID" class="form-label">Company ID</label>
        <input type="number" class="form-control" id="companyID" name="companyID" placeholder="Company ID" value="">
    </div>
    <div class="mb-3">
        <label for="companyName" class="form-label">Company Name</label>
        <input type="text" class="form-control" id="companyName" name="companyName" placeholder="Company Name" value="">
    </div>
    <div class="mb-3">
        <label for="companyAddress" class="form-label">Company Address</label>
        <input type="text" class="form-control" id="companyAddress" name="companyAddress" placeholder="Company Address" value="">
    </div>
        <div class="mb-3">
        <label for="companyUrl" class="form-label">Company Logo</label>
        <input type="text" class="form-control" id="companyUrl" name="companyUrl" placeholder="Company Logo Url">
    </div>

    <button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection
