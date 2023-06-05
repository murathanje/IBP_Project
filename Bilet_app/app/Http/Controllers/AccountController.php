<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Users;
use App\Models\Tickets;
use App\Models\Buses;
use App\Models\Trips;
use App\Models\Station;


class AccountController extends Controller
{
    public function index()
    {
        if (!session()->has('users')) {
            return redirect('/home');
        }

        $users = session('users');
        $stations = Station::pluck('station_name');

        return view('User.pages.biletal', compact('users', 'stations'));
    }
    public function mytickets()
    {
        if (!session()->has('users')) {
            return redirect('/home');
        }

        $users = session('users');
        $tickets = Tickets::with(['trip.bus', 'trip.route'])
            ->where('user_id', $users->id)
            ->get();

        return view('User.pages.mytickets', compact('users', 'tickets'));
    }
    public function myaccount(){
        if (!session()->has('users')) {
            return redirect('/home');
        }

        $users = session('users');
        return view('User.pages.account', compact('users'));
    }
    public function message(){
        if (!session()->has('users')) {
            return redirect('/home');
        }

        $users = session('users');

        return view('User.pages.messages', compact('users'));
    }

public function myaccountCheck(Request $request)
{
    if (!session()->has('users')) {
        return redirect('/home');
    }

    $sessionUser = session('users');

    $email = $request->input('email');
    $firstName = $request->input('firstName');
    $lastName = $request->input('lastName');
    $password = password_hash($request->input('password'), PASSWORD_DEFAULT);

    $userFromDB = Users::where('users_email', $sessionUser->users_email)->first();

    if ($userFromDB) {
        $userFromDB->users_first_name = $firstName;
        $userFromDB->users_last_name = $lastName;
        $userFromDB->users_email = $email;
        $userFromDB->users_password = $password;

        try {
            $userFromDB->save();
            // Session'daki kullanıcının bilgilerini güncelleme
            $sessionUser->users_first_name = $firstName;
            $sessionUser->users_last_name = $lastName;
            $sessionUser->users_email = $email;
            $sessionUser->users_password = $password;
            session(['users' => $sessionUser]);

            return "Veritabanında kullanıcı bilgileri güncellendi.";
        } catch (Exception $e) {
            return "Veritabanına veri kaydedilmeye çalışılırken bir hata oluştu. Hata: " . $e->getMessage();
        }
    } else {
        return "Geçersiz kullanıcı email";
    }
}

public function deleteAccount(Request $request)
{
    if (!session()->has('users')) {
        return redirect('/home');
    }

    $sessionUser = session('users');

    $email = $request->input('email');
    $password = $request->input('password');

    if ($sessionUser->users_email == $email && password_verify($password, $sessionUser->users_password)) {
        try {
            // Kullanıcının ticket kayıtlarını silme
            Tickets::where('user_id', $sessionUser->id)->delete();

            // Kullanıcıyı veritabanından silme
            $userFromDB = Users::where('users_email', $sessionUser->users_email)->first();
            $userFromDB->delete();

            // Session'ı sıfırlama
            session()->forget('users');

            return redirect('/home');
        } catch (Exception $e) {
            return "Veritabanından kullanıcı ve ilişkili ticket kayıtları silinirken bir hata oluştu. Hata: " . $e->getMessage();
        }
    } else {
        return "Geçersiz kullanıcı bilgileri";
    }
}

    public function findticket(Request $request)
    {
        $from = $request->input('from');
        $where = $request->input('where');
        $date = $request->input('date');
        $routeName = $from . '-' . $where;

        $trips = Trips::with(['route'])
            ->whereHas('route', function ($query) use ($routeName) {
                $query->where('route_name', $routeName);
            })
            ->where('trip_date', $date)
            ->get();
        $users = session('users');

        return view('User.pages.findticket', compact('trips', 'users'));
    }


public function buyticket(Request $request)
{
    // Kullanıcının oturum açtığı kullanıcı idsini alın
    $userId = session('users')->id;
    $tripId = $request->input('trip_id');
    
    // Yeni bir bilet oluşturun ve değerleri atayın
    $ticket = new Tickets();
    $ticket->user_id = $userId;
    $ticket->trips_id = $tripId;
    $ticket->ticket_price = 100;
    
    // Bileti kaydedin
    $ticket->save();
    
    // İşlem tamamlandıktan sonra gerekli yönlendirmeyi yapabilirsiniz
    // Örneğin, kullanıcıyı bir teşekkür sayfasına yönlendirebilirsiniz
    return redirect('/account/panel');
}
public function cancelticket(Request $request)
{
    if (!session()->has('users')) {
        return redirect('/home');
    }

    $ticketID = $request->input('ticket_id');

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
