<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Users;
use Illuminate\Support\Facades\DB;

class AccountController extends Controller
{
    public function index(){
        $user = session('user');
        return view('Front.pages.account', compact('user'));    
    }
}
