<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UsersController extends Controller
{
    public function create(Request $request)
    {
        // Form input validation here...
        $inputtedEmail = $request->get("kayitEmail");

        $existingUserWithSameEmail = Users::where("users_email", "=", $inputtedEmail)->count() > 0;

        if ($existingUserWithSameEmail){
            // If there is an existing user with the same email address in our database,
            // we should not allow this registration attempt. We can either throw an error or simply
            // redirect back to the signup page and display some kind of message indicating that the entered e-mail already exists.

            // Here I am just going to redirect back to the sign up page for simplicity sake.
            return "olmadı";
        }
        else{
            // No such users found - proceed with creating a new one as usual.
            $newUser = new Users();
            $newUser->users_first_name = $_POST["kayitFirst"];
            $newUser->users_last_name = $_POST["kayitLast"];
            $newUser->users_email = $_POST["kayitEmail"];
            $newUser->users_password = password_hash($_POST["kayitPass"], PASSWORD_DEFAULT);
            try
            {
                $newUser->save();
                // After successful creation of the new user record,
                // we need to log him/her into the system immediately without requiring any additional steps from the user's part.
                // Auth::loginUsingId($newUser->id);
                // Once logged in successfully, we can then redirect them where they want within the application.
                return redirect('/home');
                exit;
            }
            catch (Exception $e)
            {
                echo "Error while trying to save data to the database.";
                die($e->getMessage());
            }
        }
    }
    public function login(Request $request)
    {
        $email = $request->input('girisEmail');
        $password = $request->input('girisPass');
        $user = DB::table('users')->where('users_email', $email)->first();
        if ($user && Hash::check($password, $user->users_password)) {
            if($user->users_email == "admin@admin.com" && Hash::check($password, $user->users_password)){
                $userCount = DB::table('users')->count();
                return redirect('/admin/panel')->with(['user' => $user, 'userCount' => $userCount]);
            }else{
                return redirect('/home');
            }
        } else {
            // kullanıcı girişi başarısız
            return "olmadı";
        }
    }
}
