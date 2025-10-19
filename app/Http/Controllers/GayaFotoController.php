<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GayaFotoController extends Controller
{
    public function index()
    {
        $fotoList = [
            [
                'nama_foto' => 'Gaya Foto 1',
                'kategori' => 'Pose Duduk',
                'gambar' => 'foto1.jpg'
            ],
            [
                'nama_foto' => 'Gaya Foto 2',
                'kategori' => 'Pose Menikmati Alam',
                'gambar' => 'foto2.jpg'
            ],
            [
                'nama_foto' => 'Gaya Foto 3',
                'kategori' => 'Pose Ekspresi Bebas',
                'gambar' => 'foto3.jpg'
            ],
            [
                'nama_foto' => 'Gaya Foto 4',
                'kategori' => 'Pose Ceria',
                'gambar' => 'foto4.jpg'
            ],
            [
                'nama_foto' => 'Gaya Foto 5',
                'kategori' => 'Pose Natural',
                'gambar' => 'foto5.jpg'
            ],
            [
                'nama_foto' => 'Gaya Foto 6',
                'kategori' => 'Pose Santai',
                'gambar' => 'foto6.jpg'
            ],
        ];

        return view('rekomendasifoto', compact('fotoList'));
    }
}