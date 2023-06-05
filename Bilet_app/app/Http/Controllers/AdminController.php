<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Users;
use App\Models\Buses;
use App\Models\Company;
use App\Models\Routes;
use App\Models\Station;
use App\Models\Tickets;
use App\Models\Trips;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{
    public function index()
        {
            // Admin oturumu açılmış mı kontrol edin
            if (!session()->has('admin')) {
                // Admin oturumu açılmamışsa anasayfaya yönlendirin veya hata mesajı gösterin
                return redirect('/home');
            }
            
            
            $ticketCount = DB::table('tickets')->count();
            $userCount = DB::table('users')->count();
            $totalTicketPrice = DB::table('tickets')->sum('ticket_price');
            return view('Back.pages.dashboard', compact('userCount','ticketCount','totalTicketPrice'));    
        }

    public function table(){
            if (!session()->has('admin')) {
                // Admin oturumu açılmamışsa anasayfaya yönlendirin veya hata mesajı gösterin
                return redirect('/home');
            }
            

        $userData = DB::table('users')->get();
        return view('Back.pages.table', compact('userData'));    

    }

public function createUser(){
        if (!session()->has('admin')) {
            // Admin oturumu açılmamışsa anasayfaya yönlendirin veya hata mesajı gösterin
            return redirect('/home');
        }
    return view('Back.pages.createuser');    

}
public function editUser(){
        if (!session()->has('admin')) {
            // Admin oturumu açılmamışsa anasayfaya yönlendirin veya hata mesajı gösterin
            return redirect('/home');
        }     
    return view('Back.pages.edituser');    

}

public function deleteUser(){
        if (!session()->has('admin')) {
            // Admin oturumu açılmamışsa anasayfaya yönlendirin veya hata mesajı gösterin
            return redirect('/home');
        }
    return view('Back.pages.deleteuser');    

}
public function createCompany()
{
    if (!session()->has('admin')) {
        return redirect('/home');
    }

    return view('Back.pages.createcompany');
}

public function editCompany()
{
    if (!session()->has('admin')) {
        return redirect('/home');
    }

    return view('Back.pages.editcompany');
}

public function deleteCompany()
{
    if (!session()->has('admin')) {
        return redirect('/home');
    }

    return view('Back.pages.deletecompany');
}

public function createBus()
{
    if (!session()->has('admin')) {
        return redirect('/home');
    }

    return view('Back.pages.createbus');
}

public function editBus()
{
    if (!session()->has('admin')) {
        return redirect('/home');
    }

    return view('Back.pages.editbus');
}

public function deleteBus()
{
    if (!session()->has('admin')) {
        return redirect('/home');
    }

    return view('Back.pages.deletebus');
}
public function createRoutes()
{
    if (!session()->has('admin')) {
        return redirect('/home');
    }

    return view('Back.pages.createroute');
}

public function editRoutes()
{
    if (!session()->has('admin')) {
        return redirect('/home');
    }

    return view('Back.pages.editroute');
}

public function deleteRoute()
{
    if (!session()->has('admin')) {
        return redirect('/home');
    }

    return view('Back.pages.deleteroute');
}

public function createStation()
{
    if (!session()->has('admin')) {
        return redirect('/home');
    }

    return view('Back.pages.createstation');
}

public function editStation()
{
    if (!session()->has('admin')) {
        return redirect('/home');
    }

    return view('Back.pages.editstation');
}

public function deleteStation()
{
    if (!session()->has('admin')) {
        return redirect('/home');
    }

    return view('Back.pages.deletestation');
}

public function editTickets()
{
    if (!session()->has('admin')) {
        return redirect('/home');
    }

    return view('Back.pages.editticket');
}

public function deleteTicket()
{
    if (!session()->has('admin')) {
        return redirect('/home');
    }

    return view('Back.pages.deleteticket');
}


public function createTrip(){
        if (!session()->has('admin')) {
            // Admin oturumu açılmamışsa anasayfaya yönlendirin veya hata mesajı gösterin
            return redirect('/home');
        }
        
    return view('Back.pages.createtrip');    

}
public function createTickets(){
        if (!session()->has('admin')) {
            // Admin oturumu açılmamışsa anasayfaya yönlendirin veya hata mesajı gösterin
            return redirect('/home');
        }
        
    return view('Back.pages.createticket');    

}

public function editTrip(){
        if (!session()->has('admin')) {
            // Admin oturumu açılmamışsa anasayfaya yönlendirin veya hata mesajı gösterin
            return redirect('/home');
        }            
    return view('Back.pages.edittrip');    

}

public function deleteTrip(){
        if (!session()->has('admin')) {
            // Admin oturumu açılmamışsa anasayfaya yönlendirin veya hata mesajı gösterin
            return redirect('/home');
        }
    return view('Back.pages.deletetrip');    

}


public function createUserCheck(Request $request)
{
    if (!session()->has('admin')) {
        return redirect('/home');
    }

    $firstName = $request->input('firstName');
    $lastName = $request->input('lastName');
    $email = $request->input('email');
    $password = password_hash($request->input('password'), PASSWORD_DEFAULT);

    $newUser = new Users();
    $newUser->users_first_name = $firstName;
    $newUser->users_last_name = $lastName;
    $newUser->users_email = $email;
    $newUser->users_password = $password;

    try {
        $newUser->save();
        return "oldu";
        exit;
    } catch (Exception $e) {
        echo "Error while trying to save data to the database.";
        die($e->getMessage());
    }
}

public function editUserCheck(Request $request)
{
    if (!session()->has('admin')) {
        return redirect('/home');
    }

    $userID = $request->input('userID');
    $firstName = $request->input('firstName');
    $lastName = $request->input('lastName');
    $email = $request->input('email');
    $password = password_hash($request->input('password'), PASSWORD_DEFAULT);

    $user = Users::find($userID);

    if ($user) {
        $user->users_first_name = $firstName;
        $user->users_last_name = $lastName;
        $user->users_email = $email;
        $user->users_password = $password;

        try {
            $user->save();
            return "oldu";
            exit;
        } catch (Exception $e) {
            echo "Error while trying to save data to the database.";
            die($e->getMessage());
        }
    } else {
        return "Geçersiz kullanıcı ID";
    }
}

public function deleteUserCheck(Request $request)
{
    if (!session()->has('admin')) {
        return redirect('/home');
    }

    $userID = $request->input('userID');

    $user = Users::find($userID);

    if ($user) {
        try {
            $user->delete();
            return "oldu";
            exit;
        } catch (Exception $e) {
            echo "Error while trying to delete user from the database.";
            die($e->getMessage());
        }
    } else {
        return "Kullanıcı bulunamadı";
    }
}

public function createTripCheck(Request $request)
{
    if (!session()->has('admin')) {
        return redirect('/home');
    }

    $busID = $request->input('busID');
    $routeID = $request->input('routeID');
    $tripDate = $request->input('tripDate');
    $tripTime = date('H:i', strtotime($request->input('tripTime')));

    $bus = Buses::find($busID);
    $route = Routes::find($routeID);

    if ($bus && $route) {
        $trip = new Trips();
        $trip->bus_id = $busID;
        $trip->route_id = $routeID;
        $trip->trip_date = $tripDate;
        $trip->trip_time = $tripTime;

        try {
            $trip->save();
            return "Başarıyla sefer oluşturuldu.";
        } catch (Exception $e) {
            return "Sefer kaydedilemedi.";
        }
    } else {
        return "Geçersiz otobüs ID veya rota ID";
    }
}

    public function editTripCheck(Request $request)
    {
        if (!session()->has('admin')) {
            return redirect('/home');
        }

        $tripID = $request->input('tripID');
        $busID = $request->input('busID');
        $routeID = $request->input('routeID');
        $tripDate = $request->input('tripDate');
        $tripTime = date('H:i', strtotime($request->input('tripTime')));

        $trip = Trips::find($tripID);
        $bus = Buses::find($busID);
        $route = Routes::find($routeID);

        if ($trip) {
            if($bus){

                if($route){
                    $trip->bus_id = $busID;
                    $trip->route_id = $routeID;
                    $trip->trip_date = $tripDate;
                    $trip->trip_time = $tripTime;

                    try {
                        $trip->save();
                        return "oldu";
                        exit;
                    } catch (Exception $e) {
                        return "Kaydedilemedi";
                    }
                }else{
                        return "Route ID Bulunamadı";
                }
            }else{
                        return "Bus ID Bulunamadı";

            }
        } else {
            return "Geçersiz sefer ID";
        }
    }

public function deleteTripCheck(Request $request)
{
    if (!session()->has('admin')) {
        return redirect('/home');
    }

    $tripID = $request->input('tripID');

    $trip = Trips::find($tripID);

    if ($trip) {
        try {
            // İlgili biletlere ait kayıtları sil
            $trip->tickets()->delete();

            // Seferi sil
            $trip->delete();

            return "Sefer ve biletler başarıyla silindi.";
        } catch (Exception $e) {
            return "Veritabanından sefer ve biletleri silmeye çalışırken bir hata oluştu: " . $e->getMessage();
        }
    } else {
        return "Sefer bulunamadı";
    }
}
    public function createCompanyCheck(Request $request)
    {
        if (!session()->has('admin')) {
            return redirect('/home');
        }

        $companyName = $request->input('companyName');
        $companyAddress = $request->input('companyAddress');

        $newCompany = new Company();
        $newCompany->company_name = $companyName;
        $newCompany->company_address = $companyAddress;

        try {
            $newCompany->save();
            return "oldu";
            exit;
        } catch (Exception $e) {
            echo "Error while trying to save data to the database.";
            die($e->getMessage());
        }
    }

    public function editCompanyCheck(Request $request)
    {
        if (!session()->has('admin')) {
            return redirect('/home');
        }

        $companyID = $request->input('companyID');
        $companyName = $request->input('companyName');
        $companyAddress = $request->input('companyAddress');

        $company = Company::find($companyID);

        if ($company) {
            $company->company_name = $companyName;
            $company->company_address = $companyAddress;

            try {
                $company->save();
                return "oldu";
                exit;
            } catch (Exception $e) {
                echo "Error while trying to save data to the database.";
                die($e->getMessage());
            }
        } else {
            return "Geçersiz şirket ID";
        }
    }

    public function deleteCompanyCheck(Request $request)
    {
        if (!session()->has('admin')) {
            return redirect('/home');
        }

        $companyID = $request->input('companyID');

        $company = Company::find($companyID);

        if ($company) {
            try {
                $company->delete();
                return "oldu";
                exit;
            } catch (Exception $e) {
                echo "Error while trying to delete company from the database.";
                die($e->getMessage());
            }
        } else {
            return "Şirket bulunamadı";
        }
    }
public function createBusCheck(Request $request)
{
    if (!session()->has('admin')) {
        return redirect('/home');
    }

    $busNumber = $request->input('busNumber');
    $busCapacity = $request->input('busCapacity');

    $newBus = new Buses();
    $newBus->bus_number = $busNumber;
    $newBus->bus_capacity = $busCapacity;

    try {
        $newBus->save();
        return "oldu";
        exit;
    } catch (Exception $e) {
        echo "Error while trying to save data to the database.";
        die($e->getMessage());
    }
}

public function editBusCheck(Request $request)
{
    if (!session()->has('admin')) {
        return redirect('/home');
    }

    $busID = $request->input('busID');
    $busNumber = $request->input('busNumber');
    $busCapacity = $request->input('busCapacity');

    $bus = Buses::find($busID);

    if ($bus) {
        $bus->bus_number = $busNumber;
        $bus->bus_capacity = $busCapacity;

        try {
            $bus->save();
            return "oldu";
            exit;
        } catch (Exception $e) {
            echo "Error while trying to save data to the database.";
            die($e->getMessage());
        }
    } else {
        return "Geçersiz otobüs ID";
    }
}

public function deleteBusCheck(Request $request)
{
    if (!session()->has('admin')) {
        return redirect('/home');
    }

    $busID = $request->input('busID');

    try {
        DB::beginTransaction();

        // İlgili otobüs kaydını bul
        $bus = Buses::find($busID);

        if (!$bus) {
            return "Otobüs bulunamadı";
        }

        // İlgili otobüs ID'ye sahip trips kayıtlarını sil
        Trips::where('bus_id', $busID)->delete();

        // İlgili otobüs ID'ye sahip rotaları bul
        // İlgili rotalara ait trips kayıtlarını sil
        // Rotaları sil
        // Otobüsü sil
        $bus->delete();

        DB::commit();

        return "Silme işlemi başarılı";
    } catch (Exception $e) {
        DB::rollBack();
        echo "Veritabanından otobüs, rotalar ve ilişkili trips kayıtları silinirken hata oluştu.";
        die($e->getMessage());
    }
}

public function createRoutesCheck(Request $request)
{
    if (!session()->has('admin')) {
        return redirect('/home');
    }

    $routeName = $request->input('routeName');
    $routeDistance = $request->input('routeDistance');

    $newRoute = new Routes();
    $newRoute->route_name = $routeName;
    $newRoute->route_distance = $routeDistance;

    try {
        $newRoute->save();
        return "oldu";
        exit;
    } catch (Exception $e) {
        echo "Error while trying to save data to the database.";
        die($e->getMessage());
    }
}

public function editRoutesCheck(Request $request)
{
    if (!session()->has('admin')) {
        return redirect('/home');
    }

    $routeID = $request->input('routeID');
    $routeName = $request->input('routeName');
    $routeDistance = $request->input('routeDistance');

    $route = Routes::find($routeID);

    if ($route) {
        $route->route_name = $routeName;
        $route->route_distance = $routeDistance;

        try {
            $route->save();
            return "oldu";
            exit;
        } catch (Exception $e) {
            echo "Error while trying to save data to the database.";
            die($e->getMessage());
        }
    } else {
        return "Geçersiz rota ID";
    }
}

public function deleteRouteCheck(Request $request)
{
    if (!session()->has('admin')) {
        return redirect('/home');
    }

    $routeID = $request->input('routeID');
    $route = Routes::find($routeID);

    if ($route) {
        $trips = Trips::where('route_id', $routeID)->get();

        try {
            // Trips tablosundaki ilgili kayıtları da sil
            foreach ($trips as $trip) {
                $trip->delete();
            }

            // Rota kaydını sil
            $route->delete();

            return "Rota ve ilgili seferler başarıyla silindi.";
        } catch (Exception $e) {
            return "Rota ve ilgili seferler silinemedi.";
        }
    } else {
        return "Geçersiz rota ID";
    }
}

public function createStationCheck(Request $request)
{
    if (!session()->has('admin')) {
        return redirect('/home');
    }

    $stationName = $request->input('stationName');
    $stationLocation = $request->input('stationLocation');

    $newStation = new Station();
    $newStation->station_name = $stationName;
    $newStation->station_location = $stationLocation;

    try {
        $newStation->save();
        return "oldu";
        exit;
    } catch (Exception $e) {
        echo "Error while trying to save data to the database.";
        die($e->getMessage());
    }
}

public function editStationCheck(Request $request)
{
    if (!session()->has('admin')) {
        return redirect('/home');
    }

    $stationID = $request->input('stationID');
    $stationName = $request->input('stationName');
    $stationLocation = $request->input('stationLocation');

    $station = Station::find($stationID);

    if ($station) {
        $station->station_name = $stationName;
        $station->station_location = $stationLocation;

        try {
            $station->save();
            return "oldu";
            exit;
        } catch (Exception $e) {
            echo "Error while trying to save data to the database.";
            die($e->getMessage());
        }
    } else {
        return "Geçersiz istasyon ID";
    }
}

public function deleteStationCheck(Request $request)
{
    if (!session()->has('admin')) {
        return redirect('/home');
    }

    $stationID = $request->input('stationID');

    $station = Station::find($stationID);

    if ($station) {
        try {
            $station->delete();
            return "oldu";
            exit;
        } catch (Exception $e) {
            echo "Error while trying to delete station from the database.";
            die($e->getMessage());
        }
    } else {
        return "İstasyon bulunamadı";
    }
}
public function createTicketCheck(Request $request)
{
    if (!session()->has('admin')) {
    return redirect('/home');
    }
    $userID = $request->input('userID');
    $tripID = $request->input('tripID');
    $ticketPrice = $request->input('ticketPrice');

    $user = Users::find($userID);

    if ($user) {
        $ticket = new Tickets();
        $ticket->user_id = $userID;
        $ticket->trips_id = $tripID;
        $ticket->ticket_price = $ticketPrice;

        try {
            $ticket->save();
            return "Ticket created successfully.";
        } catch (Exception $e) {
            return "Failed to create ticket.";
        }
    } else {
        return "Invalid user ID or trip ID.";
    }
}
public function editTicketCheck(Request $request)
{
    if (!session()->has('admin')) {
        return redirect('/home');
    }

    $ticketID = $request->input('ticketID');
    $userID = $request->input('userID');
    $tripID = $request->input('tripID');
    $ticketPrice = $request->input('ticketPrice');

    $ticket = Tickets::find($ticketID);

    if ($ticket) {
        $user = Users::find($userID);
        $trip = Trips::find($tripID);

        if ($user && $trip) {
            $ticket->user_id = $userID;
            $ticket->trips_id = $tripID;
            $ticket->ticket_price = $ticketPrice;

            try {
                $ticket->save();
                return "Ticket updated successfully.";
            } catch (Exception $e) {
                return "Failed to update ticket.";
            }
        } else {
            return "Invalid user ID or trip ID.";
        }
    } else {
        return "Invalid ticket ID.";
    }
}

public function deleteTicketCheck(Request $request)
{
    if (!session()->has('admin')) {
        return redirect('/home');
    }

    $ticketID = $request->input('ticketID');

    $ticket = Tickets::find($ticketID);

    if ($ticket) {
        try {
            $ticket->delete();
            return "oldu";
            exit;
        } catch (Exception $e) {
            echo "Error while trying to delete ticket from the database.";
            die($e->getMessage());
        }
    } else {
        return "Bilet bulunamadı";
    }
}




    


}








