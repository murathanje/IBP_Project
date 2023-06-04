@extends('back.pages.master')
@section('title', 'Delete Station')
@section('deletestation')

<form method="POST" action="{{ asset('admin/delete/station/check') }}">
    @csrf
    <div class="mb-3">
        <label for="stationID" class="form-label">Station ID</label>
        <input type="number" class="form-control" id="stationID" name="stationID" placeholder="Station ID">
    </div>
    <button type="submit" class="btn btn-danger">Delete</button>
</form>
@endsection