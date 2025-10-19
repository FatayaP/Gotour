<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaketWisataController extends Controller
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
                'rating' => 5
            ],
            [
                'nama' => 'Ciwidey Valley',
                'durasi' => '2 Hari 1 Malam',
                'harga' => 'Rp1.500.000',
                'diskon' => '15%',
                'gambar' => 'Ciwidey Valley Hot Spring Waterpark Resort.jpg',
                'rating' => 4
            ],
            [
                'nama' => 'Tafso Barn',
                'durasi' => '2 Hari 1 Malam',
                'harga' => 'Rp1.000.000',
                'diskon' => '15%',
                'gambar' => 'tafsor barn.jpg',
                'rating' => 4
            ],
        
        ];

        return view('paket_wisata', compact('paketWisata'));
    }
}