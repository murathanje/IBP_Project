<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trips;

class SeferController extends Controller
{
    public function index()
    {
        $seferler = [
            [
                'kalkis' => 'İstanbul',
                'varis' => 'Ankara',
                'tarih' => '2023-06-10',
                'saat' => '12:00',
                'ucret' => 100
            ],
            [
                'kalkis' => 'Ankara',
                'varis' => 'İzmir',
                'tarih' => '2023-06-12',
                'saat' => '14:30',
                'ucret' => 150
            ],
            // Diğer seferleri buraya ekleyebilirsiniz
        ];

        return view('Front/pages/seferler', compact('seferler'));
    }
}
