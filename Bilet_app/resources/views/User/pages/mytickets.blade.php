@extends('user.pages.index')
@section('title', 'My Tickets')
@section('mytickets')
<div class="d-flex justify-content-center align-items-center" style="height: 120vh;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">My Tickets</div>

                    <div class="card-body">
                        @if (count($tickets) > 0)
                            <form method="POST" action="{{ asset('/account/panel/cancelticket') }}">
                                @csrf
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Company</th>
                                            <th>Route Name</th>
                                            <th>Seat Number</th>
                                            <th>Bus Capacity</th>
                                            <th>Ticket Price</th>
                                            <th>Route Distance</th>
                                            <th>Trip Date</th>
                                            <th>Trip Time</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($tickets as $ticket)
                                            <tr>
                                                <td>
                                                    <img src="{{ $ticket->trip->bus->company->logo_url }}" alt="Logo" style="width: 50px; height: 50px;">
                                                </td>
                                                <td>{{ $ticket->trip->route->route_name }}</td>
                                                <td>{{ $ticket->seat_number }}</td>
                                                <td>{{ $ticket->trip->bus->bus_capacity }}</td>
                                                <td>{{ $ticket->ticket_price }}</td>
                                                <td>{{ $ticket->trip->route->route_distance }}</td>
                                                <td>{{ $ticket->trip->trip_date }}</td>
                                                <td>{{ $ticket->trip->trip_time }}</td>
                                                <td>
                                                    <button type="submit" class="btn btn-danger" name="ticket_id" value="{{ $ticket->id }}">Delete</button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </form>
                        @else
                            <p>No tickets found.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
