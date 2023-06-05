@extends('user.pages.index')
@section('title', 'Find Ticket')
@section('findticket')
    <div class="d-flex justify-content-center align-items-center" style="height: 60vh;">
        <div class="container">
            <h2>Find Ticket</h2>
            <form method="POST" action="{{ asset('account/panel/buyticket') }}">
                @csrf
                <table class="table">
                    <thead>
                        <tr>
                            <th>Company Logo</th>
                            <th>Route Name</th>
                            <th>Route Distance</th>
                            <th>Bus Capacity</th>
                            <th>Trip Date</th>
                            <th>Trip Time</th>
                            <th>Ticket Price</th>
                            <th>Seat Number</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($trips as $trip)
                            <tr>
                                <td>
                                    <img src="{{ $trip->bus->company->logo_url }}" alt="Logo" style="width: 50px; height: 50px;">
                                </td>
                                <td>{{ $trip->route->route_name }}</td>
                                <td>{{ $trip->route->route_distance }}</td>
                                <td>{{ $trip->bus->bus_capacity }}</td>
                                <td>{{ $trip->trip_date }}</td>
                                <td>{{ $trip->trip_time }}</td>
                                <td>{{ rand(70, 250) }}</td>
                                <td>
                                    <input type="hidden" name="trip_id" value="{{ $trip->id }}">
                                    <input type="hidden" name="ticket_price" value="{{ rand(70, 250) }}">
                                    <select name="seat_number">
                                        @for ($i = 1; $i <= $trip->bus->bus_capacity; $i++)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                    <button type="submit" class="btn btn-primary">Satın Al</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </form>
        </div>
    </div>
@endsection
