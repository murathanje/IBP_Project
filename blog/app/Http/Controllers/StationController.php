<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Station; // Station modelini kullanmak için import edin

class StationController extends Controller
{
    public function index()
    {
        $stations = Station::pluck('name');

        return view('front.pages.home', ['stations' => $stations]);
    }
}
?>
