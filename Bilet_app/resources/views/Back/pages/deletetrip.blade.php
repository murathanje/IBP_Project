@extends('back.pages.master')
@section('title', 'Delete Trip')
@section('deletetrip')

<form method="POST" action="{{ asset('admin/delete/trip/check') }}">
    @csrf
    <div class="mb-3">
        <label for="tripID" class="form-label">Trip ID</label>
        <input type="number" class="form-control" id="tripID" name="tripID" placeholder="Trip ID">
    </div>
    <button type="submit" class="btn btn-danger">Delete</button>
</form>
@endsection