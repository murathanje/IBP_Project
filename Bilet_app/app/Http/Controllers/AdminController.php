<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Users;
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
            
            $user = session('admin');
            return view('Back.pages.dashboard', compact('user'));    
        }

    public function table(){
            if (!session()->has('admin')) {
                // Admin oturumu açılmamışsa anasayfaya yönlendirin veya hata mesajı gösterin
                return redirect('/home');
            }
            

        $ticketData = DB::table('tickets')->get();
        return view('Back.pages.table', compact('ticketData'));    

    }

    public function createUser(){
            if (!session()->has('admin')) {
                // Admin oturumu açılmamışsa anasayfaya yönlendirin veya hata mesajı gösterin
                return redirect('/home');
            }
        return view('Back.pages.createuser');    

    }
    public function createUserCheck(Request $request){
         if (!session()->has('admin')) {
                // Admin oturumu açılmamışsa anasayfaya yönlendirin veya hata mesajı gösterin
                return redirect('/home');
            }
            
            $inputtedEmail = $request->get("email");

            $existingUserWithSameEmail = Users::where("users_email", "=", $inputtedEmail)->count() > 0;

            if ($existingUserWithSameEmail){
                return "olmadı";
        }
        else{
            // No such users found - proceed with creating a new one as usual.
            $newUser = new Users();
            $newUser->users_first_name = $_POST["firstName"];
            $newUser->users_last_name = $_POST["lastName"];
            $newUser->users_email = $_POST["email"];
            $newUser->users_password = password_hash($_POST["password"], PASSWORD_DEFAULT);
            try
            {
                $newUser->save();
                // After successful creation of the new user record,
                // we need to log him/her into the system immediately without requiring any additional steps from the user's part.
                // Auth::loginUsingId($newUser->id);
                // Once logged in successfully, we can then redirect them where they want within the application.
                return "oldu";
                exit;
            }
            catch (Exception $e)
            {
                echo "Error while trying to save data to the database.";
                die($e->getMessage());
            }
        }
    }

    public function createTrip(){
            if (!session()->has('admin')) {
                // Admin oturumu açılmamışsa anasayfaya yönlendirin veya hata mesajı gösterin
                return redirect('/home');
            }
            
        return view('Back.pages.createtrip');    

    }
    public function createTripCheck(){
            if (!session()->has('admin')) {
                // Admin oturumu açılmamışsa anasayfaya yönlendirin veya hata mesajı gösterin
                return redirect('/home');
            }
            
            $user = session('admin');
        $ticketData = DB::table('tickets')->get();
        return view('Back.pages.table', compact('ticketData'));    

    }
    public function editUser(){
            if (!session()->has('admin')) {
                // Admin oturumu açılmamışsa anasayfaya yönlendirin veya hata mesajı gösterin
                return redirect('/home');
            }     
        return view('Back.pages.edituser');    

    }
    public function editUserCheck(){
            if (!session()->has('admin')) {
                // Admin oturumu açılmamışsa anasayfaya yönlendirin veya hata mesajı gösterin
                return redirect('/home');
            }
            
            $user = session('admin');
        $ticketData = DB::table('tickets')->get();
        return view('Back.pages.table', compact('ticketData'));    

    }
    public function editTrip(){
            if (!session()->has('admin')) {
                // Admin oturumu açılmamışsa anasayfaya yönlendirin veya hata mesajı gösterin
                return redirect('/home');
            }            
        return view('Back.pages.edittrip');    

    }
    public function editTripCheck(){
            if (!session()->has('admin')) {
                // Admin oturumu açılmamışsa anasayfaya yönlendirin veya hata mesajı gösterin
                return redirect('/home');
            }
            
            $user = session('admin');
        $ticketData = DB::table('tickets')->get();
        return view('Back.pages.table', compact('ticketData'));    

    }
    public function deleteUser(){
            if (!session()->has('admin')) {
                // Admin oturumu açılmamışsa anasayfaya yönlendirin veya hata mesajı gösterin
                return redirect('/home');
            }
        return view('Back.pages.deleteuser');    

    }
    public function deleteUserCheck(){
            if (!session()->has('admin')) {
                // Admin oturumu açılmamışsa anasayfaya yönlendirin veya hata mesajı gösterin
                return redirect('/home');
            }
        return view('Back.pages.table', compact('ticketData'));    

    }
    public function deleteTrip(){
            if (!session()->has('admin')) {
                // Admin oturumu açılmamışsa anasayfaya yönlendirin veya hata mesajı gösterin
                return redirect('/home');
            }
        return view('Back.pages.deletetrip');    

    }
    public function deleteTripCheck(){
            if (!session()->has('admin')) {
                // Admin oturumu açılmamışsa anasayfaya yönlendirin veya hata mesajı gösterin
                return redirect('/home');
            }
            
            $user = session('admin');
        $ticketData = DB::table('tickets')->get();
        return view('Back.pages.table', compact('ticketData'));    

    }

}
