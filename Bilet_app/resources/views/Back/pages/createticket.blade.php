@extends('back.pages.master')
@section('title', 'Create Ticket')
@section('createticket')

<form method="POST" action="{{ asset('admin/create/ticket/check') }}">
    @csrf
    <div class="mb-3">
        <label for="userID" class="form-label">User ID</label>
        <input type="number" class="form-control" id="userID" name="userID" placeholder="User ID">
    </div>
    <div class="mb-3">
        <label for="ticketPrice" class="form-label">Ticket Price</label>
        <input type="number" class="form-control" id="ticketPrice" name="ticketPrice" placeholder="Ticket Price">
    <div class="mb-3">
        <label for="tripID" class="form-label">Trip ID</label>
        <input type="number" class="form-control" id="tripID" name="tripID" placeholder="Trip ID">
    </div>
    <div class="mb-3">
        <label for="seat_number" class="form-label">Seat Number</label>
        <input type="number" class="form-control" id="seat_number" name="seat_number" placeholder="Seat Number">
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
</form>
@endsection