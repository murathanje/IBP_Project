@extends('back.pages.master')
@section('title', 'Edit Ticket')
@section('editticket')
<form method="POST" action="{{ asset('admin/edit/ticket/check') }}">
    @csrf
    <div class="mb-3">
        <label for="ticketID" class="form-label">Ticket ID</label>
        <input type="number" class="form-control" id="ticketID" name="ticketID" placeholder="Ticket ID" value="">
    </div>
    <div class="mb-3">
        <label for="userID" class="form-label">User ID</label>
        <input type="number" class="form-control" id="userID" name="userID" placeholder="User ID" value="">
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection
