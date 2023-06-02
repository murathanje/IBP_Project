<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use DB;

class AuthController extends Controller
{

    public function kayitCheck(Request $request)
    {
        // // Formdan alınan verileri doğrulayın
        // $validatedData = $request->validate([
        //     'customer_first_name' => 'required',
        //     'customer_last_name' => 'required',
        //     'customer_email' => 'required|email|unique:users,email',
        //     'customer_password' => 'required|min:8',
        // ]);

        // // Kullanıcıyı veritabanına kaydedin
        // $user = new User();
        // $user->customer_first_name = $validatedData['customer_first_name'];
        // $user->customer_last_name = $validatedData['customer_last_name'];
        // $user->customer_email = $validatedData['customer_email'];
        // $user->customer_password = Hash::make($validatedData['customer_password']);
        // $user->save();

        // // Başarılı bir şekilde kaydedildiğinde bir yönlendirme yapabilirsiniz
        // return redirect('/home')->with('success', 'Kayıt işlemi başarılı.');
        return "çalıştı";
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

