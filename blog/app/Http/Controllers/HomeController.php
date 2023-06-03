<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
namespace App\Http\Controllers;
use App\Models\Station;



use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $stations = DB::table('stations')->pluck('name');

        return view('home', compact('stations'));
    }
}
