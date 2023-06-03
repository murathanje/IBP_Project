<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Users;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    public function index(){
        // $user = session('user');
        $userCount = DB::table('users')->count();
        return view('Back.pages.dashboard', compact('userCount'));    
    }
}
