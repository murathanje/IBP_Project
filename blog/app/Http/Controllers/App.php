<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Station;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $stations = Station::pluck('name');

        return view('front.pages.home', ['stations' => $stations]);
    }
}
