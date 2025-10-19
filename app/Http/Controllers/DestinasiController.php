<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DestinasiController extends Controller
{
    public function populer()
    {
        // Data dummy destinasi wisata
        $destinasi = [
            [
                'nama' => 'Jalan Braga',
                'gambar' => 'braga.webp',
                'deskripsi' => 'Jalan Braga adalah ikon kota Bandung yang memadukan nuansa kolonial dan modern. Nikmati keindahan arsitektur, kafe unik, dan suasana malam yang memikat.'
            ],
            [
                'nama' => 'Ciwidey',
                'gambar' => 'ciwidey.jpg',
                'deskripsi' => 'Ciwidey menawarkan keindahan alam pegunungan yang menakjubkan. Kunjungi perkebunan teh, Situ Patenggang, dan nikmati udara segar pegunungan.'
            ],
            [
                'nama' => 'Lembang',
                'gambar' => 'lembang.jpeg',
                'deskripsi' => 'Lembang adalah destinasi favorit untuk wisata keluarga. Jelajahi Floating Market, Farmhouse, atau nikmati pemandangan indah di The Lodge Maribaya.'
            ],
            [
                'nama' => 'Kawah Putih',
                'gambar' => 'kawahputih.webp',
                'deskripsi' => 'Kawah Putih adalah danau vulkanik dengan air berwarna putih kehijauan yang eksotis. Lokasinya sejuk dan cocok untuk bersantai.'
            ],
        ];

        // Kirim data ke view
        return view('populer', compact('destinasi'));
    }
}