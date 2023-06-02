<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users;

class UsersController extends Controller
{
    public function create(Request $request)
    {
        // Formdan alınan verileri doğrulayın
        $users_first_name = $request->input('kayitFirst');
        $users_last_name = $request->input('kayitLast');
        $users_email = $request->input('kayitEmail');
        $users_password = $request->input('kayitPass');        

        // Kullanıcıyı veritabanına kaydedin
        $user = new Users();
        $user->users_first_name = $users_first_name;
        $user->users_last_name = $users_last_name;
        $user->users_email = $users_email;
        $user->users_password = bcrypt($users_password);
        $user->save();

        // Başarılı kayıt mesajını döndürün veya istediğiniz işlemi yapın
        return "veri kaydedildi";
    }
}
