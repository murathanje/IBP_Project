@extends('user.pages.index')
@section('title', 'Find Ticket')
@section('findticket')
    <div class="d-flex justify-content-center align-items-center" style="height: 60vh;">
        <div class="container">
            <h2>Find Ticket</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>Route Name</th>
                        <th>Route Distance</th>
                        <th>Bus Capacity</th>
                        <th>Trip Date</th>
                        <th>Trip Time</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($trips as $trip)
                        <tr>
                            <td>{{ $trip->route->route_name }}</td>
                            <td>{{ $trip->route->route_distance }}</td>
                            <td>{{ $trip->bus->bus_capacity }}</td>
                            <td>{{ $trip->trip_date }}</td>
                            <td>{{ $trip->trip_time }}</td>
                            <td>
                                <form method="POST" action="{{ asset('account/panel/buyticket') }}">
                                    @csrf
                                    <input type="hidden" name="trip_id" value="{{ $trip->id }}">
                                    <button type="submit" class="btn btn-primary">Satın Al</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
