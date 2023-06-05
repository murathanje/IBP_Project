@extends('user.pages.index')
@section('title', 'My Tickets')
@section('mytickets')
<div class="d-flex justify-content-center align-items-center" style="height: 60vh;">
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
                                            <th>Route Name</th> <!-- route_name eklendi -->
                                            <th>Bus Capacity</th> <!-- bus_capacity eklendi -->
                                            <th>Ticket Price</th>
                                            <th>Route Distance</th> <!-- route_distance eklendi -->
                                            <th>Trip Date</th>
                                            <th>Trip Time</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($tickets as $ticket)
                                                <tr>
                                                    <td>{{ $ticket->trip->route->route_name }}</td> 
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
