@extends('back.pages.master')

@section('title', 'Tables')

@section('content')
    <div class="container">
        <h1>User Data</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach($userData as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->users_first_name }}</td>
                        <td>{{ $user->users_last_name }}</td>
                        <td>{{ $user->users_email }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <br> <!-- Boşluk eklendi -->

        <h1>Ticket Data</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>User ID</th>
                    <th>Trip ID</th>
                    <th>Ticket Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach($ticketData as $ticket)
                    <tr>
                        <td>{{ $ticket->user_id }}</td>
                        <td>{{ $ticket->trips_id }}</td>
                        <td>{{ $ticket->ticket_price }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <br> <!-- Boşluk eklendi -->

        <h1>Trip Data</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Bus ID</th>
                    <th>Route ID</th>
                    <th>Date</th>
                    <th>Time</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tripsData as $trip)
                    <tr>
                        <td>{{ $trip->bus_id }}</td>
                        <td>{{ $trip->route_id }}</td>
                        <td>{{ $trip->trip_date }}</td>
                        <td>{{ $trip->trip_time }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <br> <!-- Boşluk eklendi -->

        <h1>Station Data</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Station Name</th>
                    <th>Location</th>
                </tr>
            </thead>
            <tbody>
                @foreach($stationData as $station)
                    <tr>
                        <td>{{ $station->id }}</td>
                        <td>{{ $station->station_name }}</td>
                        <td>{{ $station->station_location }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <br> <!-- Boşluk eklendi -->

        <h1>Buses Data</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Bus Name</th>
                    <th>Capacity</th>
                </tr>
            </thead>
            <tbody>
                @foreach($busesData as $bus)
                    <tr>
                        <td>{{ $bus->id }}</td>
                        <td>{{ $bus->bus_number }}</td>
                        <td>{{ $bus->bus_capacity }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <br> <!-- Boşluk eklendi -->

        <h1>Company Data</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Company Name</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody>
                @foreach($companyData as $company)
                    <tr>
                        <td>{{ $company->id }}</td>
                        <td>{{ $company->company_name }}</td>
                        <td>{{ $company->company_address }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <br> <!-- Boşluk eklendi -->

        <h1>Routes Data</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Route Name</th>
                    <th>Distance</th>
                </tr>
            </thead>
            <tbody>
                @foreach($routesData as $route)
                    <tr>
                        <td>{{ $route->id }}</td>
                        <td>{{ $route->route_name }}</td>
                        <td>{{ $route->route_distance }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection
