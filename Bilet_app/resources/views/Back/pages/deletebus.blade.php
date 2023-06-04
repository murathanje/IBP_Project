@extends('back.pages.master')
@section('title', 'Delete Bus')
@section('deletebus')
<form method="POST" action="{{ asset('admin/delete/bus/check') }}">
    @csrf
    <div class="mb-3">
        <label for="busID" class="form-label">Bus ID</label>
        <input type="number" class="form-control" id="busID" name="busID" placeholder="Bus ID" value="">
    </div>
    <button type="submit" class="btn btn-danger">Delete</button>
</form>
@endsection
