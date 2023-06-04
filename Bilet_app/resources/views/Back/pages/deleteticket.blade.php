@extends('back.pages.master')
@section('title', 'Delete Ticket')
@section('deleteticket')

<form method="POST" action="{{ asset('admin/delete/ticket/check') }}">
    @csrf
    <div class="mb-3">
        <label for="ticketID" class="form-label">Ticket ID</label>
        <input type="number" class="form-control" id="ticketID" name="ticketID" placeholder="Ticket ID">
    </div>
    <button type="submit" class="btn btn-danger">Delete</button>
</form>
@endsection