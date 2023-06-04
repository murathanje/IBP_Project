@extends('back.pages.master')
@section('title', 'Create Trip')
@section('createtrip')

<form method="POST" action="{{ asset('admin/create/trip/check') }}">
    @csrf
    <div class="mb-3">
        <label for="route_id" class="form-label">Route ID</label>
        <input type="text" class="form-control" id="route_id" name="route_id" placeholder="Route ID">
    </div>
    <div class="mb-3">
        <label for="bus_id" class="form-label">Bus ID</label>
        <input type="text" class="form-control" id="bus_id" name="bus_id" placeholder="Bus ID">
    </div>
    <div class="mb-3">
        <label for="departure_time" class="form-label">Departure Time</label>
        <input type="text" class="form-control" id="departure_time" name="departure_time" placeholder="Departure Time">
    </div>
    <div class="mb-3">
        <label for="arrival_time" class="form-label">Arrival Time</label>
        <input type="text" class="form-control" id="arrival_time" name="arrival_time" placeholder="Arrival Time">
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
</form>
@endsection