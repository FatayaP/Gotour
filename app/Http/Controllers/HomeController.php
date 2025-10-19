<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $paketWisata = [
            [
                'nama' => 'Barusan Hills',
                'durasi' => '3 Hari 2 Malam',
                'harga' => 'Rp2.000.000',
                'diskon' => '20%',
                'gambar' => 'Barusen Hills Ciwidey.jpg',
                'rating' => 5,
                'link' => '#'
            ],
            [
                'nama' => 'Braga',
                'durasi' => '3 Hari 2 Malam',
                'harga' => 'Rp2.000.000',
                'diskon' => '12%',
                'gambar' => 'barga.webp',
                'rating' => 4,
                'link' => '#'
            ],
            [
                'nama' => 'Tafso Barn',
                'durasi' => '2 Hari 1 Malam',
                'harga' => 'Rp1.000.000',
                'diskon' => '15%',
                'gambar' => 'tafsor barn.jpg',
                'rating' => 4,
                'link' => '#'
            ],
        ];

        return view('home', compact('paketWisata'));
    }
}