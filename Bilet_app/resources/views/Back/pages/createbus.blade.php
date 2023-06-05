@extends('back.pages.master')
@section('title', 'Create Bus')
@section('createbus')
<form method="POST" action="{{ asset('admin/create/bus/check') }}">
    @csrf
    <div class="mb-3">
        <label for="busName" class="form-label">Bus Number</label>
        <input type="number" class="form-control" id="busName" name="busNumber" placeholder="Bus Number">
    </div>
    <div class="mb-3">
        <label for="busCapacity" class="form-label">Bus Capacity</label>
        <input type="number" class="form-control" id="busCapacity" name="busCapacity" placeholder="Bus Capacity">
    </div>
    <div class="mb-3">
        <label for="companyID" class="form-label">Company ID</label>
        <input type="number" class="form-control" id="companyID" name="companyID" placeholder="Company ID">
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
</form>
@endsection
