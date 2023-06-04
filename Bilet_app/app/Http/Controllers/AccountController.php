<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

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


}
