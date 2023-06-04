@extends('back.pages.master')
@section('title', 'Delete Route')
@section('deleteroute')
<form method="POST" action="{{ asset('admin/delete/routes/check') }}">
    @csrf
    <div class="mb-3">
        <label for="routeID" class="form-label">Route ID</label>
        <input type="number" class="form-control" id="routeID" name="routeID" placeholder="Route ID" value="">
    </div>
    <button type="submit" class="btn btn-danger">Delete</button>
</form>
@endsection
