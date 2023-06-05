<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Users;
use App\Models\Tickets;


class AccountController extends Controller
{
    public function index(){
        if (!session()->has('users')) {
            return redirect('/home');
        }

        $users = session('users');
        return view('User.pages.biletal', compact('users'));
    }
    public function mytickets(){
        if (!session()->has('users')) {
            return redirect('/home');
        }

        $users = session('users');
        return view('User.pages.mytickets', compact('users'));
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

        return view('User.pages.message', compact('users'));
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
}
