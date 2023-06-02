<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function kayit(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ]);


        $user = new User();
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->password = Hash::make($validatedData['password']);
        $user->save();


        return redirect('/home');
    }

    public function loginCheck(Request $request)
    {
        // Formdan alınan verileri doğrulayın
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Kullanıcıyı oturum açma işlemi için doğrulayın
        if (Auth::attempt($credentials)) {
            // Oturum açma başarılı, veritabanına kaydetme işlemini yapabilirsiniz
            // Örnek olarak, kullanıcı verilerini veritabanına kaydedebilirsiniz

            // Kullanıcı verilerini alın
            $user = Auth::user();

            // Kullanıcı verilerini veritabanına kaydedin (örneğin, users tablosuna)
            $user->save();

            // Başarılı bir şekilde kaydedildiğinde bir yönlendirme yapabilirsiniz
            return redirect('/home');
        } else {
            // Oturum açma başarısız, hatalı giriş yapılması durumunda işlemler
            return redirect('/giris')->withErrors('Hatalı giriş bilgileri.');
        }
    }

}

