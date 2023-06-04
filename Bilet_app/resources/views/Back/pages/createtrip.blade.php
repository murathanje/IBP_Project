@extends('back.pages.master')
@section('title', 'Create Trip')
@section('createtrip')
<form method="POST" action="{{ asset('admin/create/trip/check') }}">
    @csrf
    <div class="mb-3">
        <label for="busID" class="form-label">Bus ID</label>
        <input type="number" class="form-control" id="busID" name="busID" placeholder="Bus ID" value="">
    </div>
    <div class="mb-3">
        <label for="routeID" class="form-label">Route ID</label>
        <input type="number" class="form-control" id="routeID" name="routeID" placeholder="Route ID" value="">
    </div>
    <div class="mb-3">
        <label for="tripDate" class="form-label">Trip Date</label>
        <input type="date" class="form-control" id="tripDate" name="tripDate" placeholder="Trip Date" value="">
    </div>
    <div class="mb-3">
        <label for="tripTime" class="form-label">Trip Time</label>
        <input type="time" class="form-control" id="tripTime" name="tripTime" placeholder="Trip Time" value="">
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
</form>
@endsection
