@extends('back.pages.master')
@section('title', 'Create Route')
@section('createroute')
<form method="POST" action="{{ asset('admin/create/routes/check') }}">
    @csrf
    <div class="mb-3">
        <label for="routeName" class="form-label">Route Name</label>
        <input type="text" class="form-control" id="routeName" name="routeName" placeholder="Route Name">
    </div>
    <div class="mb-3">
        <label for="distance" class="form-label">Distance</label>
        <input type="number" class="form-control" id="distance" name="routeDistance" placeholder="Distance">
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
</form>
@endsection
