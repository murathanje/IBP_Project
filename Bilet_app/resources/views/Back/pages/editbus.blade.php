@extends('back.pages.master')
@section('title', 'Edit Bus')
@section('editbus')
<form method="POST" action="{{ asset('admin/edit/bus/check') }}">
    @csrf
    <div class="mb-3">
        <label for="busId" class="form-label">Bus Id</label>
        <input type="number" class="form-control" id="busID" name="busID" placeholder="Bus Id" value="">
    </div>
    <div class="mb-3">
        <label for="busName" class="form-label">Bus Number</label>
        <input type="number" class="form-control" id="busName" name="busNumber" placeholder="Bus Number" value="">
    </div>
    <div class="mb-3">
        <label for="busCapacity" class="form-label">Bus Capacity</label>
        <input type="number" class="form-control" id="busCapacity" name="busCapacity" placeholder="Bus Capacity" value="">
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection
