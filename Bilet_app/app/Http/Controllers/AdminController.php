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
        session_start();
        $user = isset($_SESSION['user']) ? $_SESSION['user'] : null;
        return view('Back.pages.dashboard', compact('user'));    
    }
}
