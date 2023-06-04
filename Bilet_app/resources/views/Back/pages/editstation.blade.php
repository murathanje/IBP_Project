@extends('back.pages.master')
@section('title', 'Edit Station')
@section('editstation')
<form method="POST" action="{{ asset('admin/edit/station/check') }}">
    @csrf
    <div class="mb-3">
        <label for="stationID" class="form-label">Station ID</label>
        <input type="number" class="form-control" id="stationID" name="stationID" placeholder="Station ID" value="">
    </div>
    <div class="mb-3">
        <label for="stationName" class="form-label">Station Name</label>
        <input type="text" class="form-control" id="stationName" name="stationName" placeholder="Station Name" value="">
    </div>
    <div class="mb-3">
        <label for="stationLocation" class="form-label">Station Location</label>
        <input type="text" class="form-control" id="stationLocation" name="stationLocation" placeholder="Station Location" value="">
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection
