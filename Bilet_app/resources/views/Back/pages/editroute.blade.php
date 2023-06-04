@extends('back.pages.master')
@section('title', 'Edit Route')
@section('editroute')
<form method="POST" action="{{ asset('admin/edit/routes/check') }}">
    @csrf
    <div class="mb-3">
        <label for="routeID" class="form-label">Route ID</label>
        <input type="number" class="form-control" id="routeID" name="routeID" placeholder="Route ID" value="">
    </div>
    <div class="mb-3">
        <label for="routeName" class="form-label">Route Name</label>
        <input type="text" class="form-control" id="routeName" name="routeName" placeholder="Route Name" value="">
    </div>
    <div class="mb-3">
        <label for="routeDistance" class="form-label">Route Distance</label>
        <input type="number" class="form-control" id="routeDistance" name="routeDistance" placeholder="Route Distance" value="">
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection
